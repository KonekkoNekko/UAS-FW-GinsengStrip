<?php
// app/Models/Transaction.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['id' ,'cust_name', 'cart', 'total_transaction', 'payment_method', 'payments_id', 'address', 'coordinate','expeditions_id', 'pay_statuses_id'];

    protected $casts = [
        'cart' => 'json',
    ];

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payments_id', 'id');
    }

    public function expedition()
    {
        return $this->belongsTo(Expedition::class, 'expeditions_id', 'id');
    }

    public function payStatus()
    {
        return $this->belongsTo(PayStatus::class, 'pay_statuses_id', 'id');
    }
}
