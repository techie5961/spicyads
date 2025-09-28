<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminsDashboardController extends Controller
{
    // login
    public function Login(){
        return view('admins.login');
    }

    // dashboard
    public function Dashboard(){
        return view('admins.dashboard',[
            'all_users' => DB::table('users')->count(),
            'pending_withdrawals' => DB::table('transactions')->where('type','like','%withdrawal%')->where('status','pending')->sum('amount'),
            'successfull_withdrawals' => DB::table('transactions')->where('type','like','%withdrawal%')->where('status','success')->sum('amount'),
            'rejected_withdrawals' => DB::table('transactions')->where('type','like','%withdrawal%')->where('status','rejected')->sum('amount'),
            'coupon' => DB::table('coupons')->count()
            
            
        ]);
    }
    // add package
    public function AddPackage(){
        return view('admins.packages.add',[
            'package' => DB::table('packages')->first()
        ]);
    }
    // add vendor
    public function AddVendor(){
        return view('admins.vendors.add');
    }
    // add coupon
    public function AddCoupon(){
        return view('admins.coupons.add',[
            'vendors' => DB::table('users')->where('type','vendor')->where('status','active')->get(),
            'packages' => DB::table('packages')->where('cost','>','0')->orderBy('cost','asc')->where('status','active')->get()
        ]);
    }
    // manage coupons
    public function ManageCoupons(){
        $coupons=DB::table('coupons')->orderBy('date','desc')->paginate(10);
        $coupons->getCollection()->transform(function($each){
            $each->frame=Carbon::parse($each->date)->diffForHumans();
            $each->vendor=DB::table('users')->where('id',$each->vendor_id)->first();
            $each->package=json_decode($each->package);
            return $each;
        });
        if(request()->has('paginate')){
            return view('paginate.admins',[
                'coupons' => $coupons
            ]);
        }
        return view('admins.coupons.manage',[
            'coupons' => $coupons,
            'total' => DB::table('coupons')->count(),
            'active' => DB::table('coupons')->where('status','active')->count(),
            'redeemed' => DB::table('coupons')->where('status','redeemed')->count()
        ]);
    }
     // active coupons
    public function ActiveCoupons(){
        $coupons=DB::table('coupons')->where('status','active')->orderBy('date','desc')->paginate(10);
        $coupons->getCollection()->transform(function($each){
            $each->frame=Carbon::parse($each->date)->diffForHumans();
            $each->vendor=DB::table('users')->where('id',$each->vendor_id)->first();
            $each->package=json_decode($each->package);
            return $each;
        });
        if(request()->has('paginate')){
            return view('paginate.admins',[
                'coupons' => $coupons
            ]);
        }
        return view('admins.coupons.manage',[
            'coupons' => $coupons,
            'total' => DB::table('coupons')->count(),
            'active' => DB::table('coupons')->where('status','active')->count(),
            'redeemed' => DB::table('coupons')->where('status','redeemed')->count()
        ]);
    }
     // redeemed coupons
    public function RedeemedCoupons(){
        $coupons=DB::table('coupons')->where('status','redeemed')->orderBy('date','desc')->paginate(10);
        $coupons->getCollection()->transform(function($each){
            $each->frame=Carbon::parse($each->date)->diffForHumans();
            $each->vendor=DB::table('users')->where('id',$each->vendor_id)->first();
            $each->package=json_decode($each->package);
            return $each;
        });
        if(request()->has('paginate')){
            return view('paginate.admins',[
                'coupons' => $coupons
            ]);
        }
        return view('admins.coupons.manage',[
            'coupons' => $coupons,
            'total' => DB::table('coupons')->count(),
            'active' => DB::table('coupons')->where('status','active')->count(),
            'redeemed' => DB::table('coupons')->where('status','redeemed')->count()
        ]);
    }
    // add tasks
    public function AddTasks(){
        return view('admins.tasks.add');
    }
    // manage tasks
    public function ManageTasks(){

        $tasks=DB::table('tasks')->orderBy('date','desc')->paginate(10);
        $tasks->getCollection()->transform(function($each){
            $each->frame=Carbon::parse($each->updated)->diffForHumans();
            return $each;
        });
        if(request()->has('paginate')){
            return view('paginate.admins',[
                'tasks' => $tasks
            ]);
        }
        return view('admins.tasks.manage',[
            'total' => DB::table('tasks')->count(),
            'active' => DB::table('tasks')->where('status','active')->count(),
            'completed' => DB::table('tasks')->where('status','completed')->count(),
            'tasks' => $tasks
        ]);
    }
    // edit task
    public function EditTask(){
        return view('admins.tasks.edit',[
            'data' => DB::table('tasks')->where('id',request()->input('id'))->first()
        ]);
    }
    // site settings
    public function SiteSettings(){
        return view('admins.settings',[
            'general' => json_decode(DB::table('settings')->where('key','general_settings')->first()->json ?? '{}'),
            'finance' => json_decode(DB::table('settings')->where('key','finance_settings')->first()->json ?? '{}')
        ]);
    }
    // transactions
    public function Transactions(){
        $transactions=DB::table('transactions')->orderBy('date','desc')->paginate(10);
        $transactions->getCollection()->transform(function($each){
            $each->user=DB::table('users')->where('id',$each->user_id)->first();
            $each->frame=Carbon::parse($each->date)->diffForHumans();
            $each->json=json_decode($each->json ?? '{}');
            return $each;
        });
        if(request()->has('paginate')){
            return view('paginate.admins',[
                'transactions' => $transactions
            ]);
        }

        return view('admins.transactions',[
            'total' => DB::table('transactions')->count(),
            'today' => DB::table('transactions')->whereDate('date',Carbon::today())->count(),
            'sum' => DB::table('transactions')->sum('amount'),
            'transactions' => $transactions
        ]);
    }
    // withdrawals
    public function Withdrawals($status){
       if($status == 'all'){
         $transactions=DB::table('transactions')->where('type','like','%withdrawal%')->orderBy('date','desc')->paginate(10);
       
       } else{
         $transactions=DB::table('transactions')->where('type','like','%withdrawal%')->where('status',$status)->orderBy('date','desc')->paginate(10);
       
       }
       $transactions->getCollection()->transform(function($each){
            $each->user=DB::table('users')->where('id',$each->user_id)->first();
            $each->frame=Carbon::parse($each->date)->diffForHumans();
            $each->json=json_decode($each->json ?? '{}');
            return $each;
        });
        if(request()->has('paginate')){
            return view('paginate.admins',[
                'transactions' => $transactions
            ]);
        }

        return view('admins.withdrawals',[
            'total' => $status == 'all' ? DB::table('transactions')->where('type','like','%withdrawal%')->count() : DB::table('transactions')->where('type','like','%withdrawal%')->where('status',$status)->count(),
            'today' => $status == 'all' ? DB::table('transactions')->where('type','like','%withdrawal%')->whereDate('date',Carbon::today())->count() : DB::table('transactions')->where('type','like','%withdrawal%')->where('status',$status)->whereDate('date',Carbon::today())->count(),
            'sum' => $status == 'all' ? DB::table('transactions')->where('type','like','%withdrawal%')->sum('amount') : DB::table('transactions')->where('type','like','%withdrawal%')->where('status',$status)->sum('amount'),
            'transactions' => $transactions,
            'total_text' => $status == 'all' ? '' : ($status == 'success' ? 'Successfull' : $status),
            'today_text' => $status == 'all' ? '' : ($status == 'success' ? 'Successfull' : $status),
            'title' => $status == 'success' ? 'Successfull' : ucfirst($status)
        ]);
    }
     // deposits
    public function Deposits($status){
       if($status == 'all'){
         $transactions=DB::table('transactions')->where('type','like','%deposit%')->orderBy('date','desc')->paginate(10);
       
       } else{
         $transactions=DB::table('transactions')->where('type','like','%deposit%')->where('status',$status)->orderBy('date','desc')->paginate(10);
       
       }
       $transactions->getCollection()->transform(function($each){
            $each->user=DB::table('users')->where('id',$each->user_id)->first();
            $each->frame=Carbon::parse($each->date)->diffForHumans();
            $each->json=json_decode($each->json ?? '{}');
            return $each;
        });
        if(request()->has('paginate')){
            return view('paginate.admins',[
                'transactions' => $transactions
            ]);
        }

        return view('admins.deposits',[
            'total' => $status == 'all' ? DB::table('transactions')->where('type','like','%deposit%')->count() : DB::table('transactions')->where('type','like','%deposit%')->where('status',$status)->count(),
            'today' => $status == 'all' ? DB::table('transactions')->where('type','like','%deposit%')->whereDate('date',Carbon::today())->count() : DB::table('transactions')->where('type','like','%deposit%')->where('status',$status)->whereDate('date',Carbon::today())->count(),
            'sum' => $status == 'all' ? DB::table('transactions')->where('type','like','%deposit%')->sum('amount') : DB::table('transactions')->where('type','like','%deposit%')->where('status',$status)->sum('amount'),
            'transactions' => $transactions,
            'total_text' => $status == 'all' ? '' : ($status == 'success' ? 'Successfull' : $status),
            'today_text' => $status == 'all' ? '' : ($status == 'success' ? 'Successfull' : $status),
            'title' => $status == 'success' ? 'Successfull' : ucfirst($status)
        ]);
    }
    // users
    public function Users(){
        $users=DB::table('users')->orderBy('date','desc')->paginate(10);
        $users->getCollection()->transform(function($each){
            $each->frame=Carbon::parse($each->date)->diffForHumans();
            $each->last_deposit=DB::table('transactions')->where('user_id',$each->id)->where('status','success')->where('type','like','%deposit%')->sum('amount');
           $each->package=json_decode($each->package);
           $username=$each->username;
           $each->total_downlines=DB::table('users')->where('ref',$each->username)->orWhereIn('id',function($q) use($username){
            $q->select('id')->from('users')->where('ref',$username);
           })->count();
           if(($each->ref ?? '') !== ''){
            $each->ref_id=DB::table('users')->where('username',$each->ref)->first()->id;
           }
           $each->total_withdrawn=DB::table('transactions')->where('user_id',$each->id)->where('type','like','%withdrawal%')->where('status','success')->sum('amount');
            return $each;
        });
        if(request()->has('paginate')){
             return view('paginate.admins',[
            'users' => $users
        ]);
        }
        return view('admins.users',[
            'total' => DB::table('users')->count(),
            'today' => DB::table('users')->whereDate('date',Carbon::today())->count(),
            'active' => DB::table('users')->where('status','active')->count(),
            'users' => $users
        ]);
    }
      // active users
    public function ActiveUsers(){
        $users=DB::table('users')->where('status','active')->orderBy('date','desc')->paginate(10);
        $users->getCollection()->transform(function($each){
            $each->frame=Carbon::parse($each->date)->diffForHumans();
            $each->last_deposit=DB::table('transactions')->where('user_id',$each->id)->where('status','success')->where('type','like','%deposit%')->sum('amount');
           $each->package=json_decode($each->package);
           $username=$each->username;
           $each->total_downlines=DB::table('users')->where('ref',$each->username)->orWhereIn('id',function($q) use($username){
            $q->select('id')->from('users')->where('ref',$username);
           })->count();
           if(($each->ref ?? '') !== ''){
            $each->ref_id=DB::table('users')->where('username',$each->ref)->first()->id;
           }
           $each->total_withdrawn=DB::table('transactions')->where('user_id',$each->id)->where('type','like','%withdrawal%')->where('status','success')->sum('amount');
            return $each;
        });
        if(request()->has('paginate')){
             return view('paginate.admins',[
            'users' => $users
        ]);
        }
        return view('admins.users',[
            'total' => DB::table('users')->count(),
            'today' => DB::table('users')->whereDate('date',Carbon::today())->count(),
            'active' => DB::table('users')->where('status','active')->count(),
            'users' => $users
        ]);
    }
      // banned users
    public function BannedUsers(){
        $users=DB::table('users')->where('status','banned')->orderBy('date','desc')->paginate(10);
        $users->getCollection()->transform(function($each){
            $each->frame=Carbon::parse($each->date)->diffForHumans();
            $each->last_deposit=DB::table('transactions')->where('user_id',$each->id)->where('status','success')->where('type','like','%deposit%')->sum('amount');
           $each->package=json_decode($each->package);
           $username=$each->username;
           $each->total_downlines=DB::table('users')->where('ref',$each->username)->orWhereIn('id',function($q) use($username){
            $q->select('id')->from('users')->where('ref',$username);
           })->count();
           if(($each->ref ?? '') !== ''){
            $each->ref_id=DB::table('users')->where('username',$each->ref)->first()->id;
           }
           $each->total_withdrawn=DB::table('transactions')->where('user_id',$each->id)->where('type','like','%withdrawal%')->where('status','success')->sum('amount');
            return $each;
        });
        if(request()->has('paginate')){
             return view('paginate.admins',[
            'users' => $users
        ]);
        }
        return view('admins.users',[
            'total' => DB::table('users')->count(),
            'today' => DB::table('users')->whereDate('date',Carbon::today())->count(),
            'active' => DB::table('users')->where('status','active')->count(),
            'users' => $users
        ]);
    }
      // user
    public function User(){
        $user=DB::table('users')->where('id',request()->input('id'))->orderBy('date','desc')->first();
      
           $user->frame=Carbon::parse($user->date)->diffForHumans();
           $user->last_deposit=DB::table('transactions')->where('user_id',$user->id)->where('status','success')->where('type','like','%deposit%')->sum('amount');
          $user->package=json_decode($user->package);
           $username=$user->username;
          $user->total_downlines=DB::table('users')->where('ref',$user->username)->orWhereIn('id',function($q) use($username){
            $q->select('id')->from('users')->where('ref',$username);
           })->count();
           if(($user->ref ?? '') !== ''){
           $user->ref_id=DB::table('users')->where('username',$user->ref)->first()->id;
           }
          $user->total_withdrawn=DB::table('transactions')->where('user_id',$user->id)->where('type','like','%withdrawal%')->where('status','success')->sum('amount');
           $user->bank=($user->bank ?? '') == '' ? '' : json_decode($user->bank);
           $user->total_deposit=DB::table('transactions')->where('user_id',$user->id)->where('type','like','%deposit%')->where('status','success')->sum('amount');
           $user->total_tasks=DB::table('task_proofs')->where('user_id',$user->id)->count();
       
      
        return view('admins.user',[
           
            'data' => $user
        ]);
    }
    // login as user
    public function LoginAsUser(){
        Auth::guard('users')->loginUsingId(request()->input('id'));
        return redirect('users/dashboard');
    }
    // mark as vendor
    public function MarkAsVendor(){
        if(request()->input('type') == 'user'){
            DB::table('users')->where('id',request()->input('id'))->update([
                'type' => 'vendor'
            ]);
            return redirect()->to('admins/user?id='.request()->input('id').'');
        }else{
             DB::table('users')->where('id',request()->input('id'))->update([
                'type' => 'user'
            ]);
            return redirect()->to('admins/user?id='.request()->input('id').'');
        }
    }
    // submitted
    public function Submitted(){

        $proofs=DB::table('task_proofs')->orderBy('date','desc')->paginate(10);
        $proofs->getCollection()->transform(function($each){
            $each->frame=Carbon::parse($each->date)->diffForHumans();
            $each->user=DB::table('users')->where('id',$each->user_id)->first();
            $each->json=json_decode($each->json);
            
            return $each;
        });
        if(request()->has('paginate')){
              return view('paginate.admins',[
            'proofs' => $proofs,
            'task_proofs' => true
        ]);
        }
        return view('admins.tasks.submitted',[
            'total' => DB::table('task_proofs')->count(),
            'today' => DB::table('task_proofs')->whereDate('date',Carbon::today())->count(),
            'sum' => DB::table('task_proofs')->sum('json->reward'),
            'penalized' => DB::table('task_proofs')->where('status','penalized')->count(),
            'proofs' => $proofs,
            'penalty' =>  json_decode(DB::table('settings')->where('key','general_settings')->first()->json ?? '{}')->task_penalty
        ]);
    }
    // logs
    public function Logs(){
        $logs=DB::table('logs')->orderBy('date','desc')->paginate(10);
        $logs->getCollection()->transform(function($each){
            $each->frame=Carbon::parse($each->date)->diffForHumans();
            $each->user=DB::table('users')->where('id',$each->user_id)->first();
            return $each;
        });
        if(request()->has('paginate')){
            return view('paginate.admins',[
            'logs' => $logs
        ]);
        }
        return view('admins.logs',[
            'logs' => $logs
        ]);
    }
    // notifications
    public function Notifications(){
        $notifications=DB::table('notifications')->orderBy('date','desc')->paginate(1);
        $notifications->getCollection()->transform(function($each){
            $each->frame=Carbon::parse($each->date)->diffForHumans();
            return $each;
        });
        if(request()->has('paginate')){
             return view('paginate.admins',[
            'notifications' => $notifications,
            
        ]);
        }
        return view('admins.notifications',[
            'notifications' => $notifications,
            'total' => DB::table('notifications')->where('status','unread')->count()
        ]);
    }
    // mark as read
    public function MarkAsRead(){
        DB::table('notifications')->where('id',request()->input('id'))->update([
            'status' => 'read'
        ]);
        return redirect()->to('admins/notifications');
    }
     // mark all as read
    public function MarkAllAsRead(){
        DB::table('notifications')->update([
            'status' => 'read'
        ]);
        return redirect()->to('admins/notifications');
    }
    // logout
    public function Logout(){
        Auth::guard('admins')->logout();
        return redirect()->to('admins/login');
    }
}
