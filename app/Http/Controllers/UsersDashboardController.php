<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UsersDashboardController extends Controller
{
    // index
     public function Index(){
        return view('users.index');
     }
    // login
    public function Login(){
        return view('users.auth.login');
    }
    // register
    public function Register(){
        return view('users.auth.register',[
            'pkg' => DB::table('packages')->where('status','active')->orderBy('date','desc')->get()
        ]);
    }
     // referral register
    public function RefRegister($ref){
        $username='';
       if( DB::table('users')->where('username',$ref)->exists()){
         $username=DB::table('users')->where('username',$ref)->first()->username;
       }
        return view('users.auth.register',[
            'pkg' => DB::table('packages')->where('status','active')->orderBy('date','desc')->get(),
            'ref' => $username
        ]);
    }
    // dashboard
    public function Dashboard(){
    
    return view('users.dashboard',[
        'general' => json_decode(DB::table('settings')->where('key','general_settings')->first()->json ?? '{}')
    ]);
    }
    // tasks
    public function Tasks(){
        $tasks=DB::table('tasks')->where('status','active')->whereNotIn('id',function($q){
          $q->select('task_id')->from('task_proofs')->where('user_id',Auth::guard('users')->user()->id);
        })->orderBy('date','desc')->paginate(10);
        if(request()->has('paginate')){
            return view('paginate.users',[
                'tasks' => $tasks
            ]);
        }
        return view('users.tasks',[
            'tasks' => $tasks
        ]);
    }
    // spin
    public function Spin(){
        return view('users.spin');
    }
    // transactions
    public function Transactions(){
        
        $transactions=DB::table('transactions')->where('user_id',Auth::guard('users')->user()->id)->orderBy('date','desc')->paginate(10);
       if(request()->has('status')){
           $transactions=DB::table('transactions')->where('user_id',Auth::guard('users')->user()->id)->where('status',request()->input('status'))->orderBy('date','desc')->paginate(10);
        
        }
        if(request()->has('class')){
           $transactions=DB::table('transactions')->where('user_id',Auth::guard('users')->user()->id)->where('class',request()->input('class'))->orderBy('date','desc')->paginate(10);
        
        }
        $transactions->getCollection()->transform(function($each){
            $each->date=Carbon::parse($each->date)->format('M d Y,H:i:s');
            return $each;
        });
        if(request()->has('paginate')){
             return view('paginate.users',[
            'transactions' => $transactions
        ]);
        }
        return view('users.transactions',[
            'transactions' => $transactions
        ]);
    }
    // profile
    public function Profile(){
        return view('users.profile',[
            'general' => json_decode(DB::table('settings')->where('key','general_settings')->first()->json ?? '{}')
        ]);
    }
    // add bank
    public function AddBank(){
        return view('users.bank',[
            'bank_linked' => Auth::guard('users')->user()->bank ?? 'false',
            'bank' => json_decode(Auth::guard('users')->user()->bank ?? '{}')
        ]);
    }
    // withdraw
    public function Withdraw(){
        if((Auth::guard('users')->user()->bank ?? '') == ''){
            return redirect('users/bank/add');
        }
        $finance=json_decode(DB::table('settings')->where('key','finance_settings')->first()->json ?? '{}');
        return view('users.withdraw',[
            'bank_linked' => Auth::guard('users')->user()->bank ?? 'false',
            'bank' => json_decode(Auth::guard('users')->user()->bank ?? '{}'),
            'activities_minimum' => $finance->wallets->activities->minimum,
            'affiliate_minimum' => $finance->wallets->affiliate->minimum
        ]);
    }
    // invite 
    public function Invite(){
        return view('users.refer',[
            'package' => json_decode(Auth::guard('users')->user()->package)
        ]);
    }
    // team
    public function Team(){
        $team=DB::table('users')->where('ref',Auth::guard('users')->user()->username)->orWhereIn('ref',function($q){
            $q->select('username')->from('users')->where('ref',Auth::guard('users')->user()->username);
        })->paginate(10);
        $team->getCollection()->transform(function($each){
            $each->frame=Carbon::parse($each->date)->diffForHumans();
            $each->commission=DB::table('transactions')->where('user_id',Auth::guard('users')->user()->id)->where('json->data->type','referral_commission')->where('json->data->user_id',$each->id)->sum('amount');
            $each->downlines=DB::table('users')->where('ref',$each->username)->count();
            return $each;
        });
        return view('users.referrals',[
            'team' => $team
        ]);
    }
    // about
    public function AboutUs(){
        return view('users.about');
    }
     // terms
    public function TermsOfService(){
        return view('users.terms');
    }
    // faqs
    public function FAQs(){
        return view('users.faqs');
    }
    // logout
    public function Logout(){
        Auth::guard('users')->logout();
        return redirect('login');
    }
    // password update
    public function Password(){
        return view('users.password');
    }
    // contact us
     public function Contact(){
        return view('users.contact',[
        'general' => json_decode(DB::table('settings')->where('key','general_settings')->first()->json ?? '{}')
    ]);
     }

}