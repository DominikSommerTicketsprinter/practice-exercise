<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eventlocation extends Model
{
    use HasFactory;

    protected $primaryKey = 'eventlocation_id';
    protected $guarded = [];
    public $timestamps = false;

    /**
     * an eventlocation hosts events on different dates.
     *
     * @return HasMany
     */
    public function dates(): HasMany
    {
        return $this->hasMany(
            Date::class,
            'eventlocation_id',
            'eventlocation_id'
        );
    }
}
