<?php
// app/Models/PayStatus.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PayStatus extends Model
{
    protected $fillable = ['status'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
