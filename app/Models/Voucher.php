<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'expirationDate',
        'client_id',
    ];

    /**
     * GET the client
     */
    public function client() 
    {
      return $this->belongsTo(Client::class);
    }
}
