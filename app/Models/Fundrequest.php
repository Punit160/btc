<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundrequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference_id',
        'email',
        'amount',
        'transaction_id',
        'price',
        'date',
        'message',
    ];
}
