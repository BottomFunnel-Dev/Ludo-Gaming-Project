<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Challenge;
use App\Fakechallenge;
use App\User;
use App\PlayerUsername;
use App\ChallengeJoin;
use App\Transaction;
use App\Setting;
use App\RoomCode;
use Auth;
use DB;
use Http;
use URL;
use Hash;
use Carbon\Carbon;

use GuzzleHttp\Client;

class ChallengeController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function generateRandomMultiples($number, $minRange, $maxRange)
    {
        $randomMultiple = $number * rand(floor($minRange / $number), floor($maxRange / $number));
        return $randomMultiple;
    }

    public function create_fakechanllenges()
    {
        // echo Carbon::now();
        $fakedata = 50;
        $fakename = [
            "Aarav Sharma",
            "Aditi Verma",
            "Alok Kapoor",
            "Amrita Desai",
            "Aniket Patel",
            "Ananya Singh",
            "Arjun Yadav",
            "Asha Gupta",
            "Ayush Kapoor",
            "Bhavya Sharma",
            "Chetan Verma",
            "Deepika Singh",
            "Dhruv Yadav",
            "Divya Patel",
            "Gaurav Kumar",
            "Geeta Desai",
            "Hari Gupta",
            "Ishaan Kapoor",
            "Jyoti Verma",
            "Kabir Sharma",
            "Kavita Singh",
            "Krishna Yadav",
            "Lavanya Patel",
            "Manish Desai",
            "Meera Kumar",
            "Mohit Verma",
            "Neha Sharma",
            "Nikhil Singh",
            "Nisha Yadav",
            "Pankaj Gupta",
            "Pooja Kapoor",
            "Pranav Patel",
            "Prisha Desai",
            "Rahul Kumar",
            "Riya Verma",
            "Rohan Sharma",
            "Sakshi Singh",
            "Sameer Yadav",
            "Shikha Gupta",
            "Shiv Kapoor",
            "Shreya Patel",
            "Snehal Desai",
            "Sumit Kumar",
            "Tanvi Verma",
            "Utkarsh Sharma",
            "Vaishali Singh",
            "Varun Yadav",
            "Vidya Patel",
            "Vijay Gupta",
            "Yash Kapoor",
            "Zara Desai",
        ];
        $amountstart = 1000;
        $amountend = 10000;
        for ($i = 0; $i < rand(1, 3); $i++) {
            $amount = $this->generateRandomMultiples(10, $amountstart, $amountend);
            $name = $fakename[array_rand($fakename)];
            $name2 = $fakename[array_rand($fakename)];
            $exist = Fakechallenge::where('status', 1)->where('amount', '>', 1000)->count();
            if ($exist >= 5) {
                $amount = $this->generateRandomMultiples(10, 100, 500);
            }
            $d = new Fakechallenge;
            $d->amount = $amount;
            $d->c_id = 11;
            $d->cname = $name;
            $d->o_id = 11;
            $d->oname = $name2;
            $d->ip = 11111111111;
            // $d->save();
        }
        $lastdata = Fakechallenge::where('status', 1)->orWhere('status', 2)->get();
        foreach ($lastdata as $row) {
            $startDate = Carbon::parse($row->created_at);
            $endDate = Carbon::now(); // Use the current date and time as an example
            $minutesDifference = $startDate->diffInMinutes($endDate);
            if ($row->status > 1) {
                if ($minutesDifference >= 7) {
                    Fakechallenge::where('id', $row->id)->delete();
                }
            } else {
                if ($minutesDifference >= 1) {
                    Fakechallenge::where('id', $row->id)->update(["status" => 2]);
                }
            }
        }
    }
    public function index(Request $request)
    {
        $status = Setting::where('id', 3)->first();
        $status_notice = Setting::where('id', 6)->first();
        $notice = $status_notice->field_value;
        $kyc = 0;
        if ($status && $status->field_value == "yes") {
            return view('maintain');
        }
        $user_id = Auth::user()->id;
        if (Auth::user()->status <= 0) {
            return redirect('/logout');
        }
        //echo $user_id; die;
        $myChallenges = DB::select("select * from challenges where (status = 1 or status = 2 or status = 3) and (c_id = " . $user_id . " OR o_id = " . $user_id . ") and deleted_at is null ORDER BY id ASC");
        $challenges = DB::select("SELECT * FROM challenges WHERE NOT (c_id = " . $user_id . " and o_id = " . $user_id . ") AND STATUS=1 and deleted_at IS NULL ORDER BY id ASC");
        //$challenges       =   DB::select("select * from challenges where status = 1 and c_id != ".$user_id." and o_id != ".$user_id." and deleted_at is null ORDER BY id ASC");
        $myPlayChallenges = DB::select("select * from challenges where ((status = 3 or status = 4 or status = 5) and c_id = " . $user_id . " ) OR ((status = 4 or status = 5) and  o_id = " . $user_id . ") and deleted_at is null ORDER BY id ASC");
        $playChallenges = DB::select("SELECT * from challenges WHERE NOT (c_id = " . $user_id . " or o_id = " . $user_id . ") and (status = 2 or status = 3 or status = 4 or status =5 ) and deleted_at is null ORDER BY id ASC");
        return view('user.challenges2', compact('notice', 'challenges', 'playChallenges', 'myChallenges', 'myPlayChallenges'));
        // if(isset($request->test))
        // return view('user.challenges2',compact('notice','challenges','playChallenges','myChallenges','myPlayChallenges'));
        // else
    }
    public function ajax_chalange()
    {
        $url = URL::to("../public/") . "/";
        $wurl = URL::to("/") . "/";
        $user_id = Auth::user()->id;
        $myChallenges = DB::select(
            "select * from challenges where (status = 1 or status = 2 or status = 3) and (c_id = " .
            $user_id .
            " OR o_id = " .
            $user_id .
            ") and deleted_at is null ORDER BY id ASC"
        );

        $output = "";
        foreach ($myChallenges as $key => $mval) {
            // if ($mval->amount == 50) {
            //     $a_amount = 5;
            // } elseif ($mval->amount > 50 && $mval->amount <= 250) {
            //     $a_amount = (5 / 100) * $mval->amount;
            // } elseif ($mval->amount > 250 && $mval->amount <= 500) {
            //     $a_amount = 25;
            // } elseif ($mval->amount > 500) {
            // }
            $a_amount = (5 / 100) * $mval->amount;
            $prize = 2 * ($mval->amount - $a_amount);
            // $prize  =   (2 * $mval->amount) - $a_amount;

            if ($mval->status == 1 && $mval->c_id == Auth::user()->id) {
                $output .=
                    '<div id="p1">
                <div class="betCard mt-1" id="chdiv-' .
                    $mval->id .
                    '">
                    <div class="d-flex">
                      <span class="betCard-title pl-3 d-flex align-items-center text-uppercase">PLAYING FOR
                      <img class="mx-1" src="' .
                    $url .
                    'front/images/global-rupeeIcon.png" width="21px" alt="">' .
                    $mval->amount .
                    '</span>
                        <div class="betCard-title d-flex align-items-center text-uppercase">
                            <span class="ml-auto" id=' .
                    $mval->id .
                    '-buttons">
                                <button class="btn btn-danger px-3 btn-sm" onclick="cancelChallengeCre(' .
                    $mval->id .
                    ')">DELETE</button>
                            </span>
                        </div>
                    </div>
                    <div class="py-1 row">
                        <div class="pr-3 text-center col-5">
                        <div class="pl-2"><img class="border-50" src="front/images/author.png" width="21px" height="21px"
                            alt=""></div>
                        <div style="line-height: 1;"><span class="betCard-playerName">' .
                    $mval->cname .
                    '</span></div>
                        </div>
                        <div class="pr-3 text-center col-2 cxy">
                        <div>
                        v/s
                        </div>
                        </div>
                        <div class="text-center col-5">
                        <div class="pl-2">
                        <img class="border-50" id="' .
                    $mval->id .
                    '-loading" src="front/images/small-loading.gif" width="21px" height="21px"
                            alt=""></div>
                        <div style="line-height: 1;"><span class="betCard-playerName" id="' .
                    $mval->id .
                    '-finding">Finding Player</span></div>
                        </div>
                    </div>
                </div>
        </div>';
            } elseif ($mval->status == 1 && $mval->o_id == Auth::user()->id) {
                $output .=
                    ' <div id="p2">
                      <div id="chdiv-' .
                    $mval->id .
                    '" class="betCard mt-1">
                          <span class="betCard-title pl-3 d-flex align-items-center text-uppercase">CHALLENGE FROM ' .
                    $mval->cname .
                    ' </span>
                          <div class="d-flex pl-3">
                              <div class="pr-3 pb-1"><span class="betCard-subTitle">Entry Fee</span>
                              <div><img src="' .
                    $url .
                    'front/images/global-rupeeIcon.png" width="21px" alt=""><span class="betCard-amount">' .
                    $mval->amount .
                    '</span>
                              </div>
                              </div>
                              <div><span class="betCard-subTitle">Prize</span>
                              <div><img src="' .
                    $url .
                    'front/images/global-rupeeIcon.png" width="21px" alt=""><span class="betCard-amount">' .
                    $prize .
                    '</span>
                              </div>
                              </div><button id=' .
                    $mval->id .
                    '-play" class="bg-secondary playButton cxy" onclick="playChallenge(' .
                    $mval->id .
                    ');">Play</button>
                          </div>
                      </div>
            </div>';
            } elseif ($mval->status == 2 && $mval->c_id == Auth::user()->id) {
                $output .=
                    '<div id="p3">
                <div class="betCard mt-1" id="chdiv-' .
                    $mval->id .
                    '">
                    <div class="d-flex"><span class="betCard-title pl-3 d-flex align-items-center text-uppercase">PLAYING FOR<img
                            class="mx-1" src="' .
                    $url .
                    'front/images/global-rupeeIcon.png" width="21px" alt="">' .
                    $prize .
                    '</span>
                        <div class="betCard-title d-flex align-items-center text-uppercase">
                            <span class="ml-auto" id="' .
                    $mval->id .
                    '-buttons">

                            <a href="/challenge-detail/' .
                    $mval->id .
                    '">
                                <button id="' .
                    $mval->id .
                    '-accept" class="btn btn-success px-3 btn-sm" style="cursor: pointer;float: left;width: 65px;height: 31px;"
                                 onclick="acceptChallenge(' .
                    $mval->id .
                    ')">START</button>
                                 </a>
                                <button id="' .
                    $mval->id .
                    '-deny" class="btn btn-danger px-3 btn-sm" style="cursor: pointer;float: right;width: 72px;height: 31px;"
                                 onclick="denyChallenge(' .
                    $mval->id .
                    ')">REJECT</button>
                            </span>
                        </div>
                    </div>
                    <div class="py-1 row">
                        <div class="pr-3 text-center col-5">
                        <div class="pl-2"><img class="border-50" src="front/images/author.png" width="21px" height="21px"
                            alt=""></div>
                        <div style="line-height: 1;"><span class="betCard-playerName">' .
                    $mval->cname .
                    '</span></div>
                        </div>
                        <div class="pr-3 text-center col-2 cxy">
                        <div>v/s</div>
                        </div>
                        <div class="text-center col-5">
                        <div class="pl-2"><img class="border-50" src="front/images/author.png" width="21px" height="21px"
                            alt=""></div>
                        <div style="line-height: 1;"><span class="betCard-playerName">' .
                    $mval->oname .
                    '</span></div>
                        </div>
                    </div>
                </div>
      </div>';
            } elseif ($mval->status == 2 && $mval->o_id == Auth::user()->id) {
                $output .=
                    '<div id="p4">
                <div id="chdiv-' .
                    $mval->id .
                    '" class="betCard mt-1">
                    <span class="betCard-title pl-3 d-flex align-items-center text-uppercase">CHALLENGE FROM<span class="ml-1" style="color: #072c92;">You </span></span>
                    <div class="d-flex pl-3">
                        <div class="pr-3 pb-1"><span class="betCard-subTitle">Entry Fee</span>
                        <div><img src="' .
                    $url .
                    'front/images/global-rupeeIcon.png" width="21px" alt=""><span class="betCard-amount">' .
                    $mval->amount .
                    '</span>
                        </div>
                        </div>
                        <div><span class="betCard-subTitle">Prize</span>
                        <div><img src="' .
                    $url .
                    'front/images/global-rupeeIcon.png" width="21px" alt=""><span class="betCard-amount">' .
                    $prize .
                    '</span>
                        </div>
                        </div>
                        <button id="' .
                    $mval->id .
                    '-requested" class="bg-warning playButton cxy" onclick="cancelChallengeReq(' .
                    $mval->id .
                    ')">Requested</button>
                    </div>
                </div>
      </div>';
            } elseif ($mval->status == 3 && $mval->o_id == Auth::user()->id) {
                $output .=
                    '  <div id="p5">
                <div id="chdiv-' .
                    $mval->id .
                    '" class="betCard mt-1">
                    <span class="betCard-title pl-3 d-flex align-items-center text-uppercase">CHALLENGE FROM<span class="ml-1" style="color: #072c92;">' .
                    $mval->cname .
                    ' </span></span>
                    <div class="d-flex pl-3">
                        <div class="pr-3 pb-1"><span class="betCard-subTitle">Entry Fee</span>
                        <div><img src="' .
                    $url .
                    'front/images/global-rupeeIcon.png" width="21px" alt=""><span class="betCard-amount">' .
                    $mval->amount .
                    '</span>
                        </div>
                        </div>
                        <div><span class="betCard-subTitle">Prize</span>
                        <div><img src="' .
                    $url .
                    'front/images/global-rupeeIcon.png" width="21px" alt=""><span class="betCard-amount">' .
                    $prize .
                    '</span>
                        </div>
                        </div>
                        <a href="/challenge-detail/' .
                    $mval->id .
                    '">
                        <button id="' .
                    $mval->id .
                    '-start-btn" class="bg-success playButton cxy" onclick="startChallenge(' .
                    $mval->id .
                    ')">START</button>
                        </a>
                    </div>
                </div>
      </div>';
            }
        }
        $challenges = DB::select(
            "SELECT * FROM challenges WHERE NOT (c_id = " .
            $user_id .
            " and o_id = " .
            $user_id .
            ") AND STATUS=1 and deleted_at IS NULL ORDER BY id ASC"
        );

        $output2 = "";

        foreach ($challenges as $key => $val) {
            $a_amount = (5 / 100) * $val->amount;
            $prize = 2 * $val->amount - $a_amount;

            if ($val->c_id == Auth::user()->id) {
                $output2 .=
                    '<div id="p6">
                <div id="chdiv-' .
                    $val->id .
                    '" class="betCard mt-1">
                    <span class="betCard-title pl-3 d-flex align-items-center text-uppercase">CHALLENGE FROM<span class="ml-1" style="color: #072c92;">You </span></span>
                    <div class="d-flex pl-3">
                        <div class="pr-3 pb-1"><span class="betCard-subTitle">Entry Fee</span>
                        <div><img src="' .
                    $url .
                    'front/images/global-rupeeIcon.png" width="21px" alt=""><span class="betCard-amount">' .
                    $val->amount .
                    '</span>
                        </div>
                        </div>
                        <div><span class="betCard-subTitle">Prize</span>
                        <div><img src="' .
                    $url .
                    'front/images/global-rupeeIcon.png" width="21px" alt=""><span class="betCard-amount">' .
                    $prize .
                    '</span>
                        </div>
                        </div>
                        <span class="ml-auto" id="' .
                    $val->id .
                    '-buttons">
                            <button class="bg-danger playButton cxy" onclick="cancelChallengeCre(' .
                    $val->id .
                    ')">Cancel</button>
                        </span>
                    </div>
                </div>
            </div>';
            } elseif ($val->c_id != Auth::user()->id) {
                $output2 .=
                    '<div id="p7">
                <div id="chdiv-' .
                    $val->id .
                    '" class="betCard mt-1">
                    <span class="betCard-title pl-3 d-flex align-items-center text-uppercase">CHALLENGE FROM<span class="ml-1" style="color: #072c92;">' .
                    $val->cname .
                    ' </span></span>
                    <div class="d-flex pl-3">
                        <div class="pr-3 pb-1"><span class="betCard-subTitle">Entry Fee</span>
                        <div><img src="' .
                    $url .
                    'front/images/global-rupeeIcon.png" width="21px" alt=""><span class="betCard-amount">' .
                    $val->amount .
                    '</span>
                        </div>
                        </div>
                        <div><span class="betCard-subTitle">Prize</span>
                        <div><img src="' .
                    $url .
                    'front/images/global-rupeeIcon.png" width="21px" alt=""><span class="betCard-amount">' .
                    $prize .
                    '</span>
                        </div>
                        </div><button id="' .
                    $val->id .
                    '-play" class="bg-secondary playButton cxy" onclick="playChallenge(' .
                    $val->id .
                    ');">Play</button>
                    </div>
                </div>
            </div>
        </div>';
            }
        }
        $fakechallenges = DB::select(
            "SELECT * FROM fakechallenges WHERE STATUS=1 and deleted_at IS NULL ORDER BY id ASC"
        );
        foreach ($fakechallenges as $key => $val) {
            $a_amount = (5 / 100) * $val->amount;
            $prize = 2 * $val->amount - $a_amount;
            $output2 .=
                '<div id="p7">
                <div id="chdiv-' .
                $val->id .
                '" class="betCard mt-1">
                    <span class="betCard-title pl-3 d-flex align-items-center text-uppercase">CHALLENGE FROM<span class="ml-1" style="color: #072c92;">' .
                $val->cname .
                ' </span></span>
                    <div class="d-flex pl-3">
                        <div class="pr-3 pb-1"><span class="betCard-subTitle">Entry Fee</span>
                        <div><img src="' .
                $url .
                'front/images/global-rupeeIcon.png" width="21px" alt=""><span class="betCard-amount">' .
                $val->amount .
                '</span>
                        </div>
                        </div>
                        <div><span class="betCard-subTitle">Prize</span>
                        <div><img src="' .
                $url .
                'front/images/global-rupeeIcon.png" width="21px" alt=""><span class="betCard-amount">' .
                $prize .
                '</span>
                        </div>
                        </div><button id="' .
                $val->id .
                '-play" class="bg-secondary playButton cxy" onclick="">Play</button>
                    </div>
                </div>
            </div>
        </div>';
        }
        $myPlayChallenges = DB::select(
            "select * from challenges where ((status = 3 or status = 4 or status = 5) and c_id = " .
            $user_id .
            " ) OR ((status = 4 or status = 5) and  o_id = " .
            $user_id .
            ") and deleted_at is null ORDER BY id ASC"
        );
        $output3 = " ";
        foreach ($myPlayChallenges as $mpid => $mpval) {
            $a_amount = (5 / 100) * $mpval->amount;
            $prize = 2 * $mpval->amount - $a_amount;
            $output3 .=
                '
                <div class="betCard mt-1" id="myplaying-chdiv-' .
                $mpval->id .
                '" >
                    <div class="d-flex"><span class="betCard-title pl-3 d-flex align-items-center text-uppercase">PLAYING FOR<img
                            class="mx-1" src="' .
                $url .
                'front/images/global-rupeeIcon.png" width="21px" alt="">' .
                $prize .
                '</span>
                        <div class="betCard-title d-flex align-items-center text-uppercase"><span class="ml-auto">
                            <a href="' .
                $wurl .
                "challenge-detail/" .
                $mpval->id .
                '"  class="btn btn-info px-3 btn-sm" >View</a>
                        </span></div>
                    </div>
                    <div class="py-1 row">
                        <div class="pr-3 text-center col-5">
                        <div class="pl-2"><img class="border-50" src="front/images/author.png" width="21px" height="21px"
                            alt=""></div>
                        <div style="line-height: 1;"><span class="betCard-playerName">' .
                $mpval->cname .
                '</span></div>
                        </div>
                        <div class="pr-3 text-center col-2 cxy">
                        <div>v/s</div>
                        </div>
                        <div class="text-center col-5">
                        <div class="pl-2"><img class="border-50" src="front/images/author.png" width="21px" height="21px"
                            alt=""></div>
                        <div style="line-height: 1;"><span class="betCard-playerName">' .
                $mpval->oname .
                '</span></div>
                        </div>
                    </div>
                </div>
      ';
        }

        $playChallenges = DB::select(
            "SELECT * from challenges WHERE NOT (c_id = " .
            $user_id .
            " or o_id = " .
            $user_id .
            ") and (status = 2 or status = 3 or status = 4 or status =5 ) and deleted_at is null ORDER BY id ASC"
        );
        $output4 = "";
        foreach ($playChallenges as $pid => $pval) {
            $a_amount = (5 / 100) * $pval->amount;
            $prize = 2 * $pval->amount - $a_amount;
            $output4 .=
                '
        <div class="betCard mt-1" id="playing-chdiv-' .
                $pval->id .
                '">
        <div class="d-flex"><span class="betCard-title pl-3 d-flex align-items-center text-uppercase">PLAYING FOR<img
                class="mx-1" src="' .
                $url .
                'front/images/global-rupeeIcon.png" width="21px" alt="">' .
                $pval->amount .
                '</span>
            <div class="betCard-title d-flex align-items-center text-uppercase"><span class="ml-auto mr-3">PRIZE<img
                class="mx-1" src="' .
                $url .
                'front/images/global-rupeeIcon.png" width="21px" alt="">' .
                $prize .
                '</span></div>
        </div>
        <div class="py-1 row">
            <div class="pr-3 text-center col-5">
            <div class="pl-2"><img class="border-50" src="front/images/author.png" width="21px" height="21px"
                alt=""></div>
            <div style="line-height: 1;"><span class="betCard-playerName">' .
                $pval->cname .
                '</span></div>
            </div>
            <div class="pr-3 text-center col-2 cxy">
            <div>v/s</div>
            </div>
            <div class="text-center col-5">
            <div class="pl-2"><img class="border-50" src="front/images/author.png" width="21px" height="21px"
                alt=""></div>
            <div style="line-height: 1;"><span class="betCard-playerName">' .
                $pval->oname .
                '</span></div>
            </div>
        </div>
        </div>
       ';
        }
        $fakeplayChallenges = DB::select(
            "SELECT * from fakechallenges WHERE (status = 2 or status = 3 or status = 4 or status =5 ) and deleted_at is null ORDER BY id ASC"
        );
        foreach ($fakeplayChallenges as $pid => $pval) {
            $a_amount = (5 / 100) * $pval->amount;
            $prize = 2 * $pval->amount - $a_amount;
            $output4 .=
                '
        <div class="betCard mt-1" id="playing-chdiv-' .
                $pval->id .
                '">
        <div class="d-flex"><span class="betCard-title pl-3 d-flex align-items-center text-uppercase">PLAYING FOR<img
                class="mx-1" src="' .
                $url .
                'front/images/global-rupeeIcon.png" width="21px" alt="">' .
                $pval->amount .
                '</span>
            <div class="betCard-title d-flex align-items-center text-uppercase"><span class="ml-auto mr-3">PRIZE<img
                class="mx-1" src="' .
                $url .
                'front/images/global-rupeeIcon.png" width="21px" alt="">' .
                $prize .
                '</span></div>
        </div>
        <div class="py-1 row">
            <div class="pr-3 text-center col-5">
            <div class="pl-2"><img class="border-50" src="front/images/author.png" width="21px" height="21px"
                alt=""></div>
            <div style="line-height: 1;"><span class="betCard-playerName">' .
                $pval->cname .
                '</span></div>
            </div>
            <div class="pr-3 text-center col-2 cxy">
            <div>v/s</div>
            </div>
            <div class="text-center col-5">
            <div class="pl-2"><img class="border-50" src="front/images/author.png" width="21px" height="21px"
                alt=""></div>
            <div style="line-height: 1;"><span class="betCard-playerName">' .
                $pval->oname .
                '</span></div>
            </div>
        </div>
        </div>
       ';
        }

        return response()->json([
            "myChallenges" => $output,
            "challenges" => $output2,
            "myPlayChallenges" => $output3,
            "playChallenges" => $output4,
        ]);
    }
    public function ajax_open_battle()
    {

        $user_id = Auth::user()->id;
        //echo $user_id; die;
        $myChallenges = DB::select("select * from challenges where (status = 1 or status = 2 or status = 3) and (c_id = " . $user_id . " OR o_id = " . $user_id . ") and deleted_at is null ORDER BY id ASC");
        $challenges = DB::select("SELECT * FROM challenges WHERE NOT (c_id = " . $user_id . " and o_id = " . $user_id . ") AND STATUS=1 and deleted_at IS NULL ORDER BY id ASC");
        //$challenges       =   DB::select("select * from challenges where status = 1 and c_id != ".$user_id." and o_id != ".$user_id." and deleted_at is null ORDER BY id ASC");
        $myPlayChallenges = DB::select("select * from challenges where ((status = 3 or status = 4 or status = 5) and c_id = " . $user_id . " ) OR ((status = 4 or status = 5) and  o_id = " . $user_id . ") and deleted_at is null ORDER BY id ASC");
        $playChallenges = DB::select("SELECT * from challenges WHERE NOT (c_id = " . $user_id . " or o_id = " . $user_id . ") and (status = 2 or status = 3 or status = 4 or status =5 ) and deleted_at is null ORDER BY id ASC");


        return view('user.ajax_challenges', compact('challenges', 'playChallenges', 'myChallenges', 'myPlayChallenges'));
    }

    public function ajax_running_battle()
    {

        $user_id = Auth::user()->id;
        //echo $user_id; die;
        $myChallenges = DB::select("select * from challenges where (status = 1 or status = 2 or status = 3) and (c_id = " . $user_id . " OR o_id = " . $user_id . ") and deleted_at is null ORDER BY id ASC");
        $challenges = DB::select("SELECT * FROM challenges WHERE NOT (c_id = " . $user_id . " and o_id = " . $user_id . ") AND STATUS=1 and deleted_at IS NULL ORDER BY id ASC");
        //$challenges       =   DB::select("select * from challenges where status = 1 and c_id != ".$user_id." and o_id != ".$user_id." and deleted_at is null ORDER BY id ASC");
        $myPlayChallenges = DB::select("select * from challenges where ((status = 3 or status = 4 or status = 5) and c_id = " . $user_id . " ) OR ((status = 4 or status = 5) and  o_id = " . $user_id . ") and deleted_at is null ORDER BY id ASC");
        $playChallenges = DB::select("SELECT * from challenges WHERE NOT (c_id = " . $user_id . " or o_id = " . $user_id . ") and (status = 2 or status = 3 or status = 4 or status =5 ) and deleted_at is null ORDER BY id ASC");


        return view('user.ajax_running_battle', compact('challenges', 'playChallenges', 'myChallenges', 'myPlayChallenges'));
    }
    public function challengeListing(Request $request)
    {
        $user_id = Auth::user()->id;
        //echo $user_id; die;
        $data['myChallenges'] = DB::select("select * from challenges where (status = 1 or status = 2 or status = 3) and (c_id = " . $user_id . " OR o_id = " . $user_id . ") and deleted_at is null ORDER BY id ASC");
        $data['challenges'] = DB::select("SELECT * FROM challenges WHERE NOT (c_id = " . $user_id . " and o_id = " . $user_id . ") AND STATUS=1 and deleted_at IS NULL ORDER BY id ASC");

        //$data['myPlayChallenges']   =   DB::select("select * from challenges where (status = 3 or status = 4) and (c_id = ".$user_id." OR o_id = ".$user_id.") and deleted_at is null ORDER BY id ASC");
        $data['myPlayChallenges'] = DB::select("select * from challenges where ((status = 3 or status = 4 or status = 5) and c_id = " . $user_id . " ) OR ((status = 4 or status = 5) and  o_id = " . $user_id . ") and deleted_at is null ORDER BY id ASC");

        return response([
            'data' => $data
        ], 200);
    }
    public function isMultipleOf50__($number)
    {
        return $number % 50 == 0;
    }

    public function create(Request $request)
    {
        $user_id = Auth::user()->id;

        $request->validate([
            'amount' => 'required|numeric|gt:49'
        ]);


        $chk = $this->checkBalance($request->amount);
        if (!$chk) {
            return response([
                'message' => "Insufficient balance, Please recharge your wallet!"
            ], 400);
        }
        $Muplifhgjk = $this->isMultipleOf50__($request->amount);
        if (!$Muplifhgjk) {
            return response([
                'message' => "Amount is not multiple of 50rs!"
            ], 400);
        }
        //  or status = 2 or status = 3
        $myChallenges = DB::select("select * from challenges where (status != 0) and (c_id = " . $user_id . " OR o_id = " . $user_id . ") and deleted_at is null ORDER BY id ASC");
        if (count($myChallenges) > 0) {
            return response([
                'message' => "Already Running Game"
            ], 400);
        }

        try {
            //$cname                          =   $this->randomPlayer();
            $challenge = Challenge::create([
                'c_id' => Auth::user()->id,
                'cname' => Auth::user()->username,
                'amount' => $request->amount,
                'ip' => $request->ip(),
            ]);

            if ($challenge) {

                $walletData = User::find(Auth::user()->id);
                $walletData->decrement('wallet', $request->amount);

                return response()->json(['data' => $challenge]);
            }
            return response([
                'message' => "Unable to create challenge!"
            ], 400);
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return response([
                'message' => $bug
            ], 400);
        }
    }

    public function playChallenge(Request $request)
    {
        $request->validate([
            'ch_id' => 'required|numeric'
        ]);
        try {
            $user_id = Auth::user()->id;
            $chData = Challenge::find($request->ch_id);
            $chk = $this->checkBalance($chData->amount);
            // $chDataChecknotexist     =   Challenge::where('o_id',$user_id)->orWhere('c_id',$user_id)->where('status','!=',0)->count();
            // return $chDataChecknotexist;
            // $chDataChecknotexist     =   Challenge::where('o_id',$user_id)->where('status',2)->count();
            $myChallenges = DB::select("select * from challenges where (status != 0) and (c_id = " . $user_id . " OR o_id = " . $user_id . ") and deleted_at is null ORDER BY id ASC");
            if (count($myChallenges) > 0) {
                return response([
                    'message' => "You are already joined with another Match!" . count($myChallenges)
                ], 400);
            }

            if (!$chk) {
                return response([
                    'message' => "Insufficient balance, Please recharge your wallet!"
                ], 400);
            }


            if ($user_id == $chData->c_id) {
                return response([
                    'message' => "You cannot accept the game which is created by you!"
                ], 400);
            }

            if ($chData->status == 1) {
                ChallengeJoin::create([
                    'user_id' => $user_id,
                    'ch_id' => $request->ch_id,
                    'ip' => $request->ip(),
                ]);

                $chData->status = 2;
                $chData->o_id = $user_id;
                $chData->oname = Auth::user()->username;
                $chData->save();

                $walletData = User::find($user_id);
                // $walletData->decrement('wallet',$chData->amount);
                // return response()->json(['data'=>$chData]);
                return response()->json(['data' => $chData]);
            }
            return response([
                'message' => "Unable to play the game!"
            ], 400);
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return response([
                'message' => $bug
            ], 400);
        }

    }



    public function cancelChallenge(Request $request)
    {
        $request->validate([
            'ch_id' => 'required|numeric'
        ]);
        try {
            $user_id = Auth::user()->id;
            $chData = Challenge::find($request->ch_id);
            if ($chData->status == 1) {
                $walletData = User::find($user_id);
                $walletData->wallet = $walletData->wallet + $chData->amount;
                $walletData->save();
                $chData->delete();

                return response()->json(['data' => $request->ch_id]);
            }
            return response([
                'message' => "Unable to cancel the game!"
            ], 400);
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return response([
                'message' => $bug
            ], 400);
        }

    }

    public function cancelChallengeReq(Request $request)
    {
        $request->validate([
            'ch_id' => 'required|numeric'
        ]);
        try {
            $chData = Challenge::find($request->ch_id);
            $user_id = Auth::user()->id;
            if ($chData->status == 2) {
                $chData->status = 1;
                // $walletData =   User::find($chData->o_id);
                // $walletData->wallet = $walletData->wallet + $chData->amount;
                // $walletData->save();
                $chData->o_id = NULL;
                $chData->oname = NULL;
                $chData->save();
                return response()->json(['data' => $chData]);
            }
            return response([
                'message' => "Unable to cancel request!"
            ], 400);
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return response([
                'message' => $bug
            ], 400);
        }

    }
    public function add_rommcode(Request $r)
    {
        $r->validate([
            'id' => 'required',
            'code' => 'required'
        ]);
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://ludo-king-room-code-api.p.rapidapi.com/global/checkroom?code=" . $r->code,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: ludo-king-room-code-api.p.rapidapi.com",
                "X-RapidAPI-Key: 2f052eb9f1msh32e7919b12c922fp1343acjsn99fe7d89ea92"
                // 		"X-RapidAPI-Key: e7a93cc1msh5dde49113f03513p1cbf4fjsnb3170365d929"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return redirect('/challenge-detail/' . $r->id)->with('error', 'Room Code Error');
        } else {
            // return $response;
            $responses = json_decode($response);
            // 	return $responses->roomType;
            if (isset($responses->type) && $responses->type == "classic") {
                $dataa = Challenge::where('id', $r->id)->first();
                if ($dataa && $dataa->status >= 3) {
                    $chData = Challenge::where('id', $r->id)->update(['rcode' => $r->code]);
                    return redirect('/challenge-detail/' . $r->id);
                } else {
                    return redirect('/challenge-detail/' . $r->id)->with('error', 'Already Cancelled');
                }
                return redirect('/challenge-detail/' . $r->id)->with('error', 'Room not found!');
            }
            return redirect('/challenge-detail/' . $r->id)->with('error', 'Something wents wrong!');
        }
    }
    public function add_rommcode_automaticByController($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://ludo-king-room-code-api.p.rapidapi.com/roomCode/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: ludo-king-api-room-code.p.rapidapi.com",
                "X-RapidAPI-Key: d61aebb273msh6f5746aeb667b5dp1f6dd5jsn76dfbc76c31d"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return false;
        } else {
            $responses = json_decode($response);
            if (isset($responses->roomcode)) {
                $dataa = Challenge::where('id', $id)->first();
                if ($dataa && $dataa->status >= 3) {
                    $chData = Challenge::where('id', $id)->update(['rcode' => $responses->roomcode]);
                    return true;
                }
            }
            return false;
        }
    }
    public function add_rommcode_automatic($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://ludo-king-api-room-code.p.rapidapi.com/roomCode/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: ludo-king-api-room-code.p.rapidapi.com",
                "X-RapidAPI-Key: d61aebb273msh6f5746aeb667b5dp1f6dd5jsn76dfbc76c31d"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return redirect('/challenge-detail/' . $id)->with('error', 'Room Code Error');
        } else {
            // return $response;
            $responses = json_decode($response);
            // 	return $responses->roomType;
            if (isset($responses->roomcode)) {
                $dataa = Challenge::where('id', $id)->first();
                if ($dataa && $dataa->status >= 3) {
                    $chData = Challenge::where('id', $id)->update(['rcode' => $responses->roomcode]);
                    return redirect('/challenge-detail/' . $id);
                } else {
                    return redirect('/challenge-detail/' . $id)->with('error', 'Already Cancelled');
                }
                return redirect('/challenge-detail/' . $id)->with('error', 'Room not found!');
            }
            return redirect('/challenge-detail/' . $id)->with('error', 'Something wents wrong!');
        }
    }
    public function acceptChallenge(Request $request)
    {
        $request->validate([
            'ch_id' => 'required|numeric'
        ]);

        $chData = Challenge::find($request->ch_id);
        // $chk        =   $this->checkBalance($chData->amount);
        // if(!$chk){
        //     return response([
        //         'message'        => "Insufficient balance, Please recharge your wallet!"
        //     ],400);
        // }

        $roomcode = 0;

        try {
            //$resp = file_get_contents('http://170.187.254.9:9500/roomcode/generate?battle_type=classic');
            //$obj = json_decode($resp);
            // $token = $obj->room_code;
            $settingData = Setting::find(1);
            if ($settingData->field_value == 1) {
                // $this->add_rommcode_automaticByController($chData->id);
                $roomcode = 12345678;
            }

            $user_id = Auth::user()->id;
            if ($chData->status == 2) {
                $user_data = User::where('id', Auth::user()->id)->first();
                $wallet = $user_data->wallet;

                $txn = Transaction::create([
                    'user_id' => $user_id,
                    'source_id' => $request->ch_id,
                    'amount' => $chData->amount,
                    'status' => 'Create',
                    'remark' => 'Creator accept opp. request',
                    'ip' => $request->ip(),
                    'closing_balance' => $wallet,
                ]);

                if ($txn) {
                    $chData->status = 3;
                    $chData->rcode = 0;
                    $chData->save();

                    $walletData = User::find($user_id);
                    // $walletData->decrement('wallet',$chData->amount);
                    return response()->json(['data' => $chData]);
                }
                return response([
                    'message' => "Unable to accept the game!"
                ], 400);
            }
            return response([
                'message' => "Unable to accept the game!"
            ], 400);
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return response([
                'message' => $bug
            ], 400);
        }

    }

    public function startChallenge(Request $request)
    {
        $request->validate([
            'ch_id' => 'required|numeric'
        ]);

        $chData = Challenge::find($request->ch_id);
        $chk = $this->checkBalance($chData->amount);
        if (!$chk) {
            return response([
                'message' => "Insufficient balance, Please recharge your wallet!"
            ], 400);
        }

        try {
            $user_id = Auth::user()->id;
            if ($chData->status == 3) {
                $user_data = User::where('id', Auth::user()->id)->first();
                $wallet = $user_data->wallet;

                $txn = Transaction::create([
                    'user_id' => $user_id,
                    'source_id' => $request->ch_id,
                    'amount' => $chData->amount,
                    'status' => 'Play',
                    'remark' => 'Opponent start the game',
                    'ip' => $request->ip(),
                    'closing_balance' => $wallet - $chData->amount,

                ]);

                if ($txn) {
                    $chData->status = 4;
                    $chData->save();
                    $walletData = User::find($user_id);
                    $walletData->decrement('wallet', $chData->amount);
                    return response()->json(['data' => $chData]);
                }
                return response([
                    'message' => "Unable to start the game!"
                ], 400);
            }
            return response([
                'message' => "Unable to start the game!"
            ], 400);
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return response([
                'message' => $bug
            ], 400);
        }

    }

    private function randomPlayer()
    {
        $pStrId = rand(1, 740);
        $pData = PlayerUsername::find($pStrId);
        //echo "<pre>";print_r($pData->username);die;
        return $pData->username;
    }

    private function checkBalance($amount)
    {
        $user_id = Auth::user()->id;
        $usrData = User::find($user_id);
        $balance = $usrData->wallet;
        $creGames = Challenge::where('c_id', $user_id)->where(function ($query) {
            return $query
                ->where('status', 1)
                ->orWhere('status', 2);
        })->sum('amount');

        $oppGames = Challenge::where('o_id', $user_id)->where(function ($query) {
            return $query
                ->where('status', 1)
                ->orWhere('status', 2);
        })->sum('amount');

        $userData = User::find($user_id);

        if ($userData->wallet >= ($creGames + $oppGames + $amount)) {
            return true;
        }

        return false;
    }

}
