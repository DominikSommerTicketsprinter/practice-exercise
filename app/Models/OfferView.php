<?php

namespace App\Models;

use App\Models\Offer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OfferView extends Model
{
    use HasFactory;

    protected $primaryKey = 'offer_view_id';
    protected $guarded = [];
    public $timestamps = false;

    /**
     * a view belongs to an event.
     *
     * @return BelongsTo
     */
    public function event(): BelongsTo {
        return $this->belongsTo(
            Offer::class,
            'offer_id',
            'event_id'
        );
    }
}
