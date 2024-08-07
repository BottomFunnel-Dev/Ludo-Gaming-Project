<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Transaction;
use App\UserSetting;
//use App\User;
use Auth;
use DB;

class TransactionController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {        
        if($request->page)
        $page   =   $request->page;
        else
        $page   =   0;
        // $userData       =   User::find(694);
        // Auth::login($userData);
        $user_id        =   Auth::user()->id;
        // $transactions = Transaction::with('challengeresult','challenge')->where('user_id',$user_id)
        //               ->where('status','Wallet')->orWhere('status','Withdraw')->latest()->paginate(50);

        $transactions   =   Transaction::where('user_id',$user_id)->where(function($query){
            $query
            ->where('status','Wallet')
            ->orWhere('status','Withdraw')
            ->orWhere('status','Withdraw_cancel')
            ->orWhere('status','Withdrawing')
            ->orWhere('status','Admin_add');
        })->orderby('id','desc')->paginate(50);
        // return $transactions;
        //echo "<pre>";print_r($transactions);die;
			
        return view('user.history',compact('transactions','page'));
    }

    public function gameHistory(Request $request)
    {        
        if($request->page)
        $page   =   $request->page;
        else
        $page   =   0;
        
        $user_id        =   Auth::user()->id;
        // $transactions = Transaction::with('challengeresult','challenge')->where('user_id',$user_id)
        //               ->whereRaw('created_at >= "'.date('Y-m-d H:i:s').'" -  interval 05 day')->latest()->paginate(50);
        $transactions   =   Transaction::with('challengeresult','challenge')->where('user_id',$user_id)->where(function($query){
            $query
            ->where('status','Create')
            ->orWhere('status','Play')
            ->orWhere('status','Won')
            ->orWhere('status','Cancel');
        })->orderby('created_at','desc')->paginate(100); 
        // return $transactions;
        // $tReferral			=	Transaction::where('user_id',$user_id)->where('status','Referral')->sum('amount');
        // $uReferral			=	UserSetting::where('used_referral',Auth::user()->mobile)->count();
        //echo "<pre>";print_r($transactions);die;
			
        return view('user.game-history',compact('transactions','page'));
    }

    public function referral(Request $request)
    {        
        if($request->page)
        $page   =   $request->page;
        else
        $page   =   0;
        $user_id        =   Auth::user()->id;
        $transactions			=	Transaction::where('user_id',$user_id)->where('status','Referral')->orderby('created_at','desc')->paginate(50);
        $uReferral			=	UserSetting::where('used_referral',Auth::user()->mobile)->count();
        //echo "<pre>";print_r($transactions);die;
			
        return view('user.referral-history',compact('transactions','page'));
    }

    public function leaderBord(Request $request){
		$leaders	=	Transaction::with('playername')->Where('status','Won')
							->select([DB::raw("count(amount) as win_count"), DB::raw("SUM(amount - a_amount) as win_amount"),'user_id'])
							->groupBy('user_id')->orderby('win_amount','desc')->take(50)->get();
		
		return view('user.leaders',compact('leaders'));
	}
}