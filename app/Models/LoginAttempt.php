<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class LoginAttempt extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'ip_address',
        'email',
        'attempts',
        'last_attempt_at',
        'locked_until'
    ];

    protected $casts = [
        'last_attempt_at' => 'datetime',
        'locked_until' => 'datetime',
    ];

    /**
     * Check if IP/Email is currently locked
     */
    public function isLocked(): bool
    {
        if (!$this->locked_until) {
            return false;
        }

        if (Carbon::now()->lessThan($this->locked_until)) {
            return true;
        }

        // Lock expired, reset
        $this->reset();
        return false;
    }

    /**
     * Get remaining lock time in minutes
     */
    public function getRemainingLockTime(): int
    {
        if (!$this->locked_until) {
            return 0;
        }

        return max(0, Carbon::now()->diffInMinutes($this->locked_until, false));
    }

    /**
     * Increment attempt counter
     */
    public function incrementAttempt(): void
    {
        $this->increment('attempts');
        $this->update(['last_attempt_at' => now()]);

        // Lock after 5 failed attempts
        if ($this->attempts >= 5) {
            $this->lock();
        }
    }

    /**
     * Lock the account/IP
     */
    public function lock(): void
    {
        $lockDuration = $this->calculateLockDuration();
        
        $this->update([
            'locked_until' => now()->addMinutes($lockDuration)
        ]);
    }

    /**
     * Calculate lock duration based on attempts
     */
    private function calculateLockDuration(): int
    {
        // Progressive lock time
        if ($this->attempts >= 10) {
            return 15; // 15 minutes
        } elseif ($this->attempts >= 7) {
            return 10; // 10 minutes
        } else {
            return 5; // 5 minutes
        }
    }

    /**
     * Reset attempt counter
     */
    public function reset(): void
    {
        $this->delete();
    }
}