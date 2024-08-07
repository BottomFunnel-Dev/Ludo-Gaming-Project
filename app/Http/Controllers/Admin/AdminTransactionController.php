<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PaymentOrder;
use App\Transaction;
use App\User;
use Auth;

class AdminTransactionController extends Controller
{
    public function index(Request $request){
        $search='';
        if($request->search){
            $search         =  $request->search;
            $transactions  = PaymentOrder::select('payment_orders.*','users.name')->with('playername')
                            ->leftJoin('users','payment_orders.user_id','=','users.id')
                            ->where('payment_orders.id','LIKE','%'.$search.'%')
                            ->orWhere('payment_orders.order_id','LIKE','%'.$search.'%')
                            ->orWhere('payment_orders.amount','LIKE','%'.$search.'%')
                            ->orWhere('payment_orders.gateway','LIKE','%'.$search.'%')
                            ->orWhere('users.username','LIKE','%'.$search.'%')
                            ->latest()->paginate(500);
            $transactions->appends(['search' => $search]);
        }else{
            $transactions       =   PaymentOrder::with('playername')->latest()->paginate(200);
        }        
        //echo "<pre>";print_r($transactions);die;
        return view('admin/transaction/transactions',compact('transactions','search'));
    }

    public function approveTxn($tid, Request $request){
        $transaction    =   PaymentOrder::find($tid);
        //echo "<pre>";print_r($transaction);die;

        if($transaction->status){
            return redirect()->back()->with('error', 'Transaction is already approved!');
        }

        $txn	=	Transaction::create([
            'user_id'	=>	$transaction->user_id,
            'source_id'	=>	$transaction->order_id,
            'amount'	=>	$transaction->amount,
            'a_amount'	=>	0,				
            'status'	=>	'Wallet',
            'remark'	=>	'Cashfree wallet recharge manually by admin',
            'ip'		=>	$request->ip()
        ]);

        if($txn){
            $transaction->status 	=	1;
            $transaction->save() ;

            User::where('id',$transaction->user_id)->increment('wallet',$transaction->amount);

            return redirect()->back()->with('success', 'Transaction approved successfully!');
        }
    }
    
}
