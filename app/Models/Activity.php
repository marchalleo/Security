<?php

namespace App\Models;

use App\Models\Like;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'content',
        'position',
        'moment',
        'price',
        'nbpeople',
        'time',
        'image',
        'admin_id',
    ];

    public function categories(): BelongsToMany {
        return $this->belongsToMany(Category::class, 'activity_category');
    }
    public function users(): HasMany {
        return $this->hasMany(User::class);
    }
}
