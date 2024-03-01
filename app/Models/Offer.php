<?php

namespace App\Models;

use App\Models\Date;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offer extends Model
{
    use HasFactory;
    protected $primaryKey = 'offer_id';
    protected $guarded = [];
    public $timestamps = false;

       /**
     * an event can have multiple dates.
     *
     * @return HasMany
     */
    public function dates(): HasMany
    {
        return $this->hasMany(
            Date::class,
            'event_id',
            'event_id'
        );
    }

    /**
     * an event has many views.
     *
     * @return HasMany
     */
    public function offer_views(): HasMany
    {
        return $this->hasMany(
            OfferView::class,
            'offer_id',
            'event_id'
        );
    }
}
