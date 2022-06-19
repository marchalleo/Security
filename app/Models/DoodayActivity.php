<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DoodayActivity extends Model
{
    use HasFactory;

    protected $table = 'dooday_activity';

    protected $fillable = [
        'dooday_id',
        'activity_id',
    ];

    public function dooday(): BelongsTo {
        return $this->belongsTo(Dooday::class);
    }
}
