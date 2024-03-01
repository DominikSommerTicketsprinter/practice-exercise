<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Date extends Model
{
    use HasFactory;

    protected $primaryKey = 'date_id';
    protected $guarded = [];
    public $timestamps = false;

    /**
     * a date belongs to a specific event.
     *
     * @return belongsTo
     */
    public function offer(): BelongsTo
    {
        return $this->belongsTo(
            Offer::class,
            'offer_id',
            'offer_id'
        );
    }

    /**
     * a date belongs to a specific eventlocation.
     *
     * @return belongsTo
     */
    public function eventlocation(): BelongsTo
    {
        return $this->belongsTo(
            Eventlocation::class,
            'eventlocation_id',
            'eventlocation_id'
        );
    }

    /**
     * a date belongs to a specific eventmanager.
     *
     * @return belongsTo
     */
    public function eventmanager(): BelongsTo
    {
        return $this->belongsTo(
            Eventmanager::class,
            'eventmanager_id',
            'eventmanager_id'
        );
    }
}
