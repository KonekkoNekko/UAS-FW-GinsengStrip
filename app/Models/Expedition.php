<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expedition extends Model
{
    use HasFactory;
    protected $table = 'expeditions';

    protected $fillable = ['company', 'delivery_fee'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
