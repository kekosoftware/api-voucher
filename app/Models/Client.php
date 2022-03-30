<?php

namespace App\Models;

use App\Models\Voucher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'address',
    ];

    /**
     * GET the vouchers
     */
    public function vouchers() 
    {
      return $this->hasMany(Voucher::class);
    }
}
