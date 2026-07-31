<?php

namespace App\Models;

use App\Models\TicketType;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'ticket_type_id',
        'name',
        'reserve_email',
        'quantity',
        'stripe_payment_intent_id',
        'status'
    ];

    public function ticketType()
    {
        return $this->belongsTo(TicketType::class);
    }
}
