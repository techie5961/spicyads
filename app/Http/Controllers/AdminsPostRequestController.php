<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AdminsPostRequestController extends Controller
{
    // login
    public function Login(){
        if(!DB::table('admins')->where('tag',request('tag'))->exists()){
            return response()->json([
                'message' => 'Admin not found',
                'status' => 'error'
            ]);
        }
        $admin=DB::table('admins')->where('tag',request('tag'))->first();
        if(!Hash::check(request('password'),$admin->password)){
            return response()->json([
                'message' => 'Invalid password',
                'status' => 'error'
            ]);
        }
        Auth::guard('admins')->loginUsingId($admin->id,true);
        return response()->json([
            'message' => 'Login successfull',
            'status' => 'success',
            'url' => url('admins/dashboard')
        ]);

    }
    // add package
    public function AddPackage(){
        if(DB::table('packages')->exists()){
            DB::table('packages')->update([
        'name' => request('name'),
        'cost' => request('fee'),
        'cashback' => request('cashback') ?? null,
        'subordinate' => request('subordinate') ?? null,
        'first_indirect' => request('first_indirect') ?? null,
        'free_data' => request('free_data') ?? null,
        'article_writing' => request('article_writing') ?? null,
        'earning_per_click' => request('earning_per_click') ?? null,
        'tiktok_monitizing' => request('tiktok_minitizing') ?? null,
        'casino_game' => request('casino_game') ?? null,
        'daily_advert' => request('daily_advert') ?? null,
        'spin' => request()->input('spin'),
        'daily_tasks' => request()->input('daily_tasks'),
        'updated' => Carbon::now(),
        'date' => Carbon::now()
       ]);
       return response()->json([
        'message' => 'Package updated successfully',
        'status' => 'success',
        'url' => url('admins/packages/manage')
        ]);
        }else{
             DB::table('packages')->insert([
        'name' => request('name'),
        'cost' => request('fee'),
        'cashback' => request('cashback') ?? null,
        'subordinate' => request('subordinate') ?? null,
        'first_indirect' => request('first_indirect') ?? null,
        'free_data' => request('free_data') ?? null,
        'article_writing' => request('article_writing') ?? null,
        'earning_per_click' => request('earning_per_click') ?? null,
        'tiktok_monitizing' => request('tiktok_minitizing') ?? null,
        'casino_game' => request('casino_game') ?? null,
        'daily_advert' => request('daily_advert') ?? null,
        'spin' => request()->input('spin'),
        'daily_tasks' => request()->input('daily_tasks'),
        'updated' => Carbon::now(),
        'date' => Carbon::now()
       ]);
       return response()->json([
        'message' => 'Package added successfully',
        'status' => 'success',
        'url' => url('admins/packages/manage')
        ]);
        }
      
    }
    // create coupon
    public function CreateCoupon(){
        DB::table('coupons')->insert([
            'code' => strtoupper(bin2hex(random_bytes(10))),
            'vendor_id' => request('vendor_id'),
            'package' => json_encode(DB::table('packages')->where('id',request('package'))->first()),
            'updated' => Carbon::now(),
            'date' => Carbon::now()
        ]);
        return response()->json([
            'message' => 'Coupon code created success',
            'status' => 'success',
            'url' => url('admins/coupons/all')
        ]);
    }
    // add task
    public function AddTask(){
       DB::table('tasks')->insert([
        'uniqid' => strtoupper(uniqid('TSK')),
        'category' => request()->input('category'),
        'title' => (request()->input('category') == 'others') ? request()->input('title') : request()->input('category'),
        'link' => request()->input('link'),
        'reward' => request()->input('reward'),
        'limit' => request()->input('limit'),
        'updated' => Carbon::now(),
        'date' => Carbon::now()
       ]);
       return response()->json([
        'message' => 'Task posted successfully',
        'status' => 'success',
        'url' => url('admins/tasks/manage')
       ]);
    }
      // edit task
    public function EditTask(){
       DB::table('tasks')->where('id',request()->input('id'))->update([
        'category' => request()->input('category'),
        'title' => (request()->input('category') == 'others') ? request()->input('title') : request()->input('category'),
        'link' => request()->input('link'),
        'reward' => request()->input('reward'),
        'limit' => request()->input('limit'),
        'updated' => Carbon::now(),
        
       ]);
       return response()->json([
        'message' => 'Task editted successfully',
        'status' => 'success',
        'url' => url('admins/tasks/manage')
       ]);
    }
    // general settings
    public function GeneralSettings(){
        $key='general_settings';
        $json=[
            'spin_minimum' => request()->input('spin_minimum'),
            'spin_maximum' => request()->input('spin_maximum'),
            'whatsapp_group' => request()->input('whatsapp_group'),
             'whatsapp_channel' => request()->input('whatsapp_channel'),
            'telegram_group' => request()->input('telegram_group'),
            'ad_number' => request()->input('ad_number'),
            'task_penalty' => request()->input('task_penalty')
        ];
        if(DB::table('settings')->where('key',$key)->exists()){
            DB::table('settings')->where('key',$key)->update([
                'json' => json_encode($json),
                'updated' => Carbon::now()
            ]);
            return response()->json([
                'message' => 'settings updated successfully',
                'status' => 'success'
            ]);
        }else{
             DB::table('settings')->insert([
                'key' => $key,
                'json' => json_encode($json),
                'updated' => Carbon::now(),
                'date' => Carbon::now()
            ]);
            return response()->json([
                'message' => 'settings saved successfully',
                'status' => 'success'
            ]);
        }
    }
     // finance settings
    public function FinanceSettings(){
        $key='finance_settings';
        $json=[
           'wallets' => [
            'activities' => [
                'minimum' => request()->input('activities_minimum_withdrawal'),
                'portal' => request()->input('activities_withdrawal_portal'),
               
            ],
             'affiliate' => [
                'minimum' => request()->input('affiliate_minimum_withdrawal'),
                'portal' => request()->input('affiliate_withdrawal_portal'),
               
            ],
           ]
        ];
        if(DB::table('settings')->where('key',$key)->exists()){
            DB::table('settings')->where('key',$key)->update([
                'json' => json_encode($json),
                'updated' => Carbon::now()
            ]);
            return response()->json([
                'message' => 'settings updated successfully',
                'status' => 'success'
            ]);
        }else{
             DB::table('settings')->insert([
                'key' => $key,
                'json' => json_encode($json),
                'updated' => Carbon::now(),
                'date' => Carbon::now()
            ]);
            return response()->json([
                'message' => 'settings saved successfully',
                'status' => 'success'
            ]);
        }
    }
    // credit user 
    public function CreditUser(){
        DB::table('users')->where('id',request()->input('id'))->update([
            request()->input('wallet') => DB::raw(''.request()->input('wallet').' + '.request()->input('amount').'')
        ]);
        return response()->json([
            'message' => 'User wallet creditted successfully',
            'status' => 'success'
        ]);
    }
     // debit user 
    public function DebitUser(){
        DB::table('users')->where('id',request()->input('id'))->update([
            request()->input('wallet') => DB::raw(''.request()->input('wallet').' - '.request()->input('amount').'')
        ]);
        return response()->json([
            'message' => 'User wallet debitted successfully',
            'status' => 'success'
        ]);
    }
}
