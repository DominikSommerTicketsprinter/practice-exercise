<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eventmanager extends Model
{
    use HasFactory;
    protected $primaryKey = 'eventmanager_id';
    protected $guarded = [];
    public $timestamps = false;

    /**
     * an eventmanager has many dates.
     *
     * @return HasMany
     */
    public function dates(): HasMany {
        return $this->hasMany(
            Date::class,
            'eventmanager_id',
            'eventmanager_id'
        );
    }
}
