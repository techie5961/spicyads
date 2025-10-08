@extends('layout.users.app')
@section('title')
    Password Update
@endsection
@section('main')
    <section class="column w-full justify-center p-10 align-center">
        <div class="w-full max-w-500 p-10 g-10 bg-white box-shadow br-10">
            <div class="row p-10 space-between br-10 border-1 border-color-dim align-center">

                <span class="desc bold">Password Update</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4caf50" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm40-104a40,40,0,1,0-65.94,30.44L88.68,172.77A8,8,0,0,0,96,184h64a8,8,0,0,0,7.32-11.23l-13.38-30.33A40.14,40.14,0,0,0,168,112ZM136.68,143l11,25.05H108.27l11-25.05A8,8,0,0,0,116,132.79a24,24,0,1,1,24,0A8,8,0,0,0,136.68,143Z"></path></svg>

            </div>
            <form action="{{ url('users/post/update/password/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Updated)" class="w-full column g-5">
            <input type="hidden" name="_token" value="{{ @csrf_token() }}" class="input">  
                <label for="" class="m-top-10">Current Password</label>
                <div class="h-50 cont w-full border-1 border-color-silver br-10 bg-dim">
                    <input type="password" name="current" placeholder="Enter Current Password" class="inp no-border w-full input required h-full br-10 bg-transparent">
                </div>
                 <label for="" class="m-top-10">New Password</label>
                <div class="h-50 cont w-full border-1 border-color-silver br-10 bg-dim">
                    <input type="password" name="new" placeholder="Enter New Password" class="inp no-border w-full input required h-full br-10 bg-transparent">
                </div>
                 <label for="" class="m-top-10">Confirm New Password</label>
                <div class="h-50 cont w-full border-1 border-color-silver br-10 bg-dim">
                    <input type="password" name="confirm" placeholder="Confirm NewPassword" class="inp no-border w-full input required h-full br-10 bg-transparent">
                </div>
                <button class="post">Update Account Password</button>
            </form>
        </div>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Updated : function(response,event){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    spa(event,data.url);
                }
            }
        }
    </script>
@endsection