<?php

namespace App\Http\Controllers\V1;

use Carbon\Carbon;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class VouchersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * * Get All vouchers
     */
    public function index()
    {
        $allVouchers = DB::table('vouchers')->get();
        
        return response()->json(['message' => $allVouchers], 201);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * * Return Ok when the voucher is active
     */
    public function checkExpirationDate($id)
    {
        $activeVouchers = DB::table('vouchers')
                          ->where('id',$id)
                          ->whereDate('expirationDate', '>=',  Carbon::now())
                          ->get();
        
        if (!$activeVouchers->toArray()) return response()->json(['message' => 'El voucher ya NO está vigente.'], 201);
		
        return response()->json(['message' => 'El voucher está vigente.'], 201);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * * Get all vouchers that belongs to a client
     */
    public function voucherByCustomer($id)
    {
        $voucherByCustomer = DB::table('vouchers')
                          ->where('client_id',$id)
                          ->whereDate('expirationDate', '>=',  Carbon::now())
                          ->get();

        if (!$voucherByCustomer->toArray()) return response()->json(['message' => 'El cliente no tiene vouchers activos.'], 201);
		
        return response()->json(['message' => $voucherByCustomer], 201);
    }
    
}
