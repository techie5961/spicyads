<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersDashboardController;
use App\Http\Controllers\AdminsDashboardController;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AdminsPostRequestController;
use App\Http\Middleware\AdminLoggedInMiddleware;
use App\Http\Controllers\AdminsGetRequestController;
use App\Http\Controllers\UserPostRequestController;
use App\Http\Controllers\UsersGetRequestController;
use App\Http\Middleware\UsersAuthCheckerMiddleware;
use App\Http\Middleware\UserIsLoggedInMiddleware;
use App\Http\Middleware\AdminIsLoggedInMiddleware;




Route::get('hash',function(){
    return Hash::make(request('password'));
});

Route::get('/',[
    UsersDashboardController::class,'Index'
]);
Route::get('/about',[
    UsersDashboardController::class,'AboutUs'
]);
Route::get('/terms',[
    UsersDashboardController::class,'TermsOfService'
]);
Route::get('/faqs',[
    UsersDashboardController::class,'FAQs'
]);
Route::get('/contact',[
    UsersDashboardController::class,'Contact'
]);
Route::middleware([UserIsLoggedInMiddleware::class])->group(function(){
    Route::get('login',[
    UsersDashboardController::class,'Login'
]);
Route::get('register',[
    UsersDashboardController::class,'Register'
]);
Route::get('register/{ref}',[
    UsersDashboardController::class,'RefRegister'
]);

});

//  prefix users
Route::prefix('users')->group(function(){
   Route::middleware([UsersAuthCheckerMiddleware::class])->group(function(){
     Route::get('dashboard',[
        UsersDashboardController::class,'Dashboard'
    ]);
    Route::get('tasks',[
        UsersDashboardController::class,'Tasks'
    ]);
    Route::get('spin',[
        UsersDashboardController::class,'Spin'
    ]);
    Route::get('transactions',[
        UsersDashboardController::class,'Transactions'
    ]);
    Route::get('more',[
        UsersDashboardController::class,'Profile'
    ]);
    Route::get('bank/add',[
        UsersDashboardController::class,'AddBank'
    ]);
    Route::get('withdraw',[
        UsersDashboardController::class,'Withdraw'
    ]);
    // Route::get('invite',[
    //     UsersDashboardController::class,'Invite'
    // ]);
    Route::get('team',[
        UsersDashboardController::class,'Team'
    ]);
    Route::get('logout',[
        UsersDashboardController::class,'Logout'
    ]);
    Route::get('password/update',[
        UsersDashboardController::class,'Password'
    ]);

   });



//    prefix get
   Route::prefix('get')->group(function(){
    
    Route::get('spin/grant/reward',[
        UsersGetRequestController::class,'SpinReward'
    ]);
    Route::get('bank/auto/verify',[
        UsersGetRequestController::class,'BankAutoVerify'
    ]);
   });

    // prefix post
    Route::prefix('post')->group(function(){
        Route::post('register/process',[
          UserPostRequestController::class,'Register'
        ]);
        Route::post('login/process',[
            UserPostRequestController::class,'Login'
        ]);
        Route::post('add/bank/process',[
            UserPostRequestController::class,'AddBank'
        ]);
        Route::post('withdraw/process',[
            UserPostRequestController::class,'Withdraw'
        ]);
        Route::post('update/password/process',[
            UserPostRequestController::class,'UpdatePassword'
        ]);
        Route::post('claim/task/reward',[
       UserPostRequestController::class,'ClaimTaskReward'
    ]);
    });
});







// prefix admins
Route::prefix('admins')->group(function(){
   
   Route::middleware([AdminIsLoggedInMiddleware::class])->group(function(){
 // auth
     Route::get('login',[
        AdminsDashboardController::class,'Login'
    ]);

   });
// dashboard
   Route::middleware([AdminLoggedInMiddleware::class])->group(function(){
    

    Route::get('dashboard',[
        AdminsDashboardController::class,'Dashboard'
    ]);
    Route::get('packages/add',[
        AdminsDashboardController::class,'AddPackage'
    ]);
    Route::get('vendors/add',[
        AdminsDashboardController::class,'AddVendor'
    ]);
    Route::get('coupons/add',[
        AdminsDashboardController::class,'AddCoupon'
    ]);
    Route::get('coupons/all',[
        AdminsDashboardController::class,'ManageCoupons'
    ]);
     Route::get('coupons/active',[
        AdminsDashboardController::class,'ActiveCoupons'
    ]);
     Route::get('coupons/redeemed',[
        AdminsDashboardController::class,'RedeemedCoupons'
    ]);
    Route::get('tasks/add',[
        AdminsDashboardController::class,'AddTasks'
    ]);
    Route::get('tasks/manage',[
        AdminsDashboardController::class,'ManageTasks'
    ]);
    Route::get('task/edit',[
        AdminsDashboardController::class,'EditTask'
    ]);
    Route::get('site/settings',[
        AdminsDashboardController::class,'SiteSettings'
    ]);
    Route::get('transactions',[
       AdminsDashboardController::class,'Transactions'
    ]);
    Route::get('deposits/{status}',[
        AdminsDashboardController::class,'Deposits'
    ]);
    Route::get('withdrawals/{status}',[
        AdminsDashboardController::class,'Withdrawals'
    ]);
    Route::get('users/all',[
        AdminsDashboardController::class,'Users'
    ]);
    Route::get('users/active',[
        AdminsDashboardController::class,'ActiveUsers'
    ]);
    Route::get('users/banned',[
        AdminsDashboardController::class,'BannedUsers'
    ]);
     Route::get('user',[
        AdminsDashboardController::class,'User'
    ]);
    Route::get('login/as/user',[
        AdminsDashboardController::class,'LoginAsUser'
    ]);
      Route::get('mark/as/vendor',[
        AdminsDashboardController::class,'MarkAsVendor'
    ]);
    Route::get('ban/user',[
        AdminsGetRequestController::class,'BanUser'
    ]);
    Route::get('tasks/submitted',[
        AdminsDashboardController::class,'Submitted'
    ]);
     // search
    Route::get('search/users',[
        AdminsGetRequestController::class,'SearchUsers'
    ]);
    // logs
    Route::get('logs',[
        AdminsDashboardController::class,'Logs'
    ]);
    Route::get('notifications',[
        AdminsDashboardController::class,'Notifications'
    ]);
    Route::get('notification/mark/as/read',[
        AdminsDashboardController::class,'MarkAsRead'
    ]);
     Route::get('notification/mark/all/as/read',[
        AdminsDashboardController::class,'MarkAllAsRead'
    ]);
    Route::get('logout',[
        AdminsDashboardController::class,'Logout'
    ]);


   });
// get request
Route::prefix('get')->group(function(){
    Route::get('coupon/delete',[
        AdminsGetRequestController::class,'DeleteCoupon'
    ]);
    Route::get('task/delete',[
        AdminsGetRequestController::class,'DeleteTask'
    ]);
    Route::get('transaction/approve',[
        AdminsGetRequestController::class,'ApproveTransaction'
    ]);
     Route::get('transaction/reject',[
        AdminsGetRequestController::class,'RejectTransaction'
    ]);
    Route::get('revoke/proof',[
        AdminsGetRequestController::class,'Revoke'
    ]);
});


//    post request
    Route::prefix('post')->group(function(){
        Route::post('login/process',[
            AdminsPostRequestController::class,'Login'
        ]);
        Route::post('packages/add/process',[
            AdminsPostRequestController::class,'AddPackage'
        ]);
        Route::post('create/coupon/process',[
            AdminsPostRequestController::class,'CreateCoupon'
        ]);
        Route::post('task/add/process',[
            AdminsPostRequestController::class,'AddTask'
        ]);
         Route::post('task/edit/process',[
            AdminsPostRequestController::class,'EditTask'
        ]);
        Route::post('general/settings/process',[
            AdminsPostRequestController::class,'GeneralSettings'
        ]);
         Route::post('finance/settings/process',[
            AdminsPostRequestController::class,'FinanceSettings'
        ]);
        Route::post('credit/user/process',[
            AdminsPostRequestController::class,'CreditUser'
        ]);
         Route::post('debit/user/process',[
            AdminsPostRequestController::class,'DebitUser'
        ]);
    });
});

