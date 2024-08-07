<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transaction;
use Auth;

class TransactionController extends Controller
{
    public function index(Request $request){
        $transactions       =   Transaction::with('user')->latest()->paginate(20);
        return view('admin/transaction/transactions',compact('transactions'));
    }
    
}
