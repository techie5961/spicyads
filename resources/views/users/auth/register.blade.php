@extends('layout.users.auth')
@section('title')
    Register
@endsection
@section('main')
     <section class="column p-10 w-full flex-auto justify-center">
        <form action="{{ url('users/post/register/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.call_back)" class="w-full border-1 border-color-silver max-w-500 align-center br-10 bg-white  column g-5">
        
            <div class="column w-full p-10 align-center g-5">
             <img  onclick="window.location.href='{{ url('/') }}'" src="{{ asset('favicon/logo.png?v=1.1') }}" class="w-quarter pc-pointer" alt="">
            <strong class="c-secondary desc">Join {{  config('app.name')}}</strong>
          
          <div class="w-full column g-2">
             <input type="hidden" class="input" name="_token" value="{{ csrf_token() }}">
            <label for="" class="m-right-auto">Full Name</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver">
                <input readonly autocomplete="off" onfocus="this.removeAttribute('readonly')" type="text" placeholder="Enter your Full Name" name="name" class="inp input required w-full h-full no-border bg-transparent br-10">
            </div>
            <label for="" class="m-right-auto m-top-10">Username</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver">
                <input readonly autocomplete="off" onfocus="this.removeAttribute('readonly')" type="text" placeholder="Enter desired username" name="username" class="inp input required w-full h-full no-border bg-transparent br-10">
            </div>
             <label for="" class="m-right-auto m-top-10">Email Address</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver">
                <input type="email" readonly autocomplete="off" onfocus="this.removeAttribute('readonly')" placeholder="Enter email address" name="email" class="inp input required w-full h-full no-border bg-transparent br-10">
            </div>
             <label for="" class="m-right-auto m-top-10">Phone Number</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver">
                <input type="number" readonly autocomplete="off" onfocus="this.removeAttribute('readonly')" placeholder="Enter phone number" name="phone" class="inp input required w-full h-full no-border bg-transparent br-10">
            </div>
            
            @isset($ref)
                @if ($ref !== '')
                     <label for="" class="m-right-auto m-top-10">Referral Username</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver">
                <input type="text" value="{{ $ref }}" readonly placeholder="Referral Username" name="ref" class="inp input required w-full h-full no-border bg-transparent br-10">
            </div>
                @endif
            @endisset
           
              <label for="" class="m-right-auto m-top-10">Password</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver">
                <input readonly autocomplete="new-password" onfocus="this.removeAttribute('readonly')" type="password" placeholder="Enter Account Password" name="password" class="inp input required w-full h-full no-border bg-transparent br-10">
            </div>

          </div>
            <label class="m-x-auto no-select row align-center">
                <input style="transform: scale(0.8)" type="checkbox">
                I have agreed to the <a href="{{ url('terms') }}" class="c-green">Terms & Conditions</a>
            </label>
            <button class="post bg-secondary secondary-text w-full bold"><span>Sign Up</span></button>
            <div class="m-x-auto no-select row align-center">
               
                Already have an account? <a href="{{ url('login') }}" class="c-green"> Login</a>
            </div>
           </div>
        </form>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            call_back : function(response){
               let data=JSON.parse(response);
               if(data.status == 'success'){
                window.location.href=data.url;
               } 
            }
        }
    </script>

@endsection