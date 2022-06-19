<?php

namespace App\Models;

use App\Models\User;
use App\Models\Activity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
    use HasFactory;

    protected $table = 'like';

    protected $fillable = [
        'user_id',
        'activity_id',
    ];

    public function activity(): BelongsTo {
        return $this->belongsTo(Activity::class);
    }
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
