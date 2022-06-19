<?php

namespace App\Models;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ActivityCategory extends Model
{
    use HasFactory;

    protected $table = 'activity_category';

    protected $fillable = [
        'activity_id',
        'category_id',
    ];

    public function activity(): BelongsTo {
        return $this->belongsTo(Activity::class);
    }
}
