<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class UsersGetRequestController extends Controller
{
    
    // spin grant reward
    public function SpinReward(){
        $general=json_decode(DB::table('settings')->where('key','general_settings')->first()->json ?? '{}');
        $reward=json_decode(Auth::guard('users')->user()->package)->spin;
        // return response()->json([
        //     'message' => $reward,
        //     'status' => 'error'
        // ]);
        if(DB::table('transactions')->where('user_id',Auth::guard('users')->user()->id)->where('type','Spin Reward')->whereDate('date',Carbon::today())->exists()){
            return response()->json([
                'message' => 'You have spinned today,try again tomorrow',
                'status' => 'error'
            ]);
        }
        DB::table('users')->where('id',Auth::guard('users')->user()->id)->update([
            'activities_balance' => DB::raw('activities_balance + '.$reward.''),
            'updated' => Carbon::now()
        ]);
       DB::table('transactions')->insert([
            'user_id' => Auth::guard('users')->user()->id,
            'type' => 'Spin Reward',
            'class' => 'credit',
            'amount' => $reward,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z"></path></svg>',
            'json' => json_encode([
                'data' => $reward,
                'wallet' => 'activities_wallet'
            ]),
            'status' => 'success',
            'updated' => Carbon::now(),
            'date' => Carbon::now()
        ]);
         DB::table('notifications')->insert([
        'message' => '<strong class="font-1 c-green">'.Auth::guard('users')->user()->username.'</strong> Just spinned',
        'status' => 'unread',
        'date' => Carbon::now(),
        'updated' => Carbon::now()
       ]);
        return response()->json([
            'message' => '&#8358;'.$reward.' spin reward granted successfully',
            'status' => 'success',
            'reward' => $reward
        ]);
    }
    //  bank auto verify
    public function BankAutoVerify(){
        //  return response()->json([
        //     'message' => 'David James',
        //     'status' => 'success'
        //   ]);
        $verify=Http::withToken(env('PSTCK_SECRET_KEY'))->get('https://api.paystack.co/bank/resolve',[
            'account_number' => request()->input('account_number'),
            'bank_code' => request()->input('bank_code')
        ]);
        if($verify->successful()){
            $data=$verify->json();
          return response()->json([
            'message' => $data['data']['account_name'],
            'status' => 'success'
          ]);
          
        }else{
            return response()->json([
                'message' => 'Invalid account details',
                'status' => 'error'
            ]);
        }
    }
}
