@extends('layout.admins.app')
@section('title')
    Add Task
@endsection
@section('main')
    <section class="column p-10 w-full g-10">
        <form action="{{ url('admins/post/task/add/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Posted)" class="w-full bg-white br-10 box-shadow p-10 column g-10">
            <input type="hidden" name="_token" class="input" value="{{ @csrf_token() }}">
            <div class="row w-full g-10 align-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="var(--bg-secondary)" viewBox="0 0 256 256"><path d="M173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34ZM224,48V208a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32H208A16,16,0,0,1,224,48ZM208,208V48H48V208H208Z"></path></svg>
                <strong class="desc c-bg-secondary">Add New Task</strong>
            </div>
            <hr>
            <label for="">Task Category</label>
            <div class="w-full cont pc-pointer h-50 border-1 br-10 row align-center space-between bg-dim border-color-silver">
             <select onchange="
                if(this.value == 'others'){
                document.querySelector('.others').classList.remove('display-none');
                document.querySelector('.others input').classList.add('required');

                }else{
                 document.querySelector('.others').classList.add('display-none');
                document.querySelector('.others input').classList.remove('required');

                }
                " name="category" class="w-full required h-full bg-transparent br-10 no-border inp input">
                <option value="" selected disabled>Select Category</option>
                <option value="Whatsapp/Group Join">Whatsapp/Group Join</option>
                 <option value="Whatsapp/Channel Follow">Whatsapp/Channel Follow</option>
                  <option value="Whatsapp/Save Contact">Whatsapp/Save Contact</option>
                   <option value="Telegram/Group Join">Telegram/Group Join</option>
                   <option value="Telegram/Channel Subscribe">Telegram/Channel Subscribe</option>
                   <option value="Telegram/Bot Chat">Telegram/Bot Chat</option>
                   <option value="others">Others</option>
            </select>  
            </div>
        <div class="column display-none others w-full g-5">
            <label for="">Task Title</label>
             <div class="w-full cont pc-pointer h-50 border-1 br-10 row align-center space-between bg-dim border-color-silver">
            <input name="title" placeholder="Enter custom title" type="text" class="inp input w-full h-full br-10 bg-transparent no-border"> 
            </div>
        </div>

            <label for="">Task Link</label>
             <div class="w-full cont pc-pointer h-50 border-1 br-10 row align-center space-between bg-dim border-color-silver">
            <input placeholder="Enter task url/link" name="link" type="url" class="inp required input w-full h-full br-10 bg-transparent no-border"> 
            </div>
            <label for="">Task Reward</label>
             <div class="w-full cont pc-pointer h-50 border-1 br-10 row align-center space-between bg-dim border-color-silver">
            <input placeholder="Enter task reward" name="reward" step="any" type="number" class="inp required input w-full h-full br-10 bg-transparent no-border"> 
            </div>
             <label for="">Task Limit</label>
             <div class="w-full cont pc-pointer h-50 border-1 br-10 row align-center space-between bg-dim border-color-silver">
            <input placeholder="Enter task limit" name="limit" type="number" class="inp required input w-full h-full br-10 bg-transparent no-border"> 
            </div>
            <button class="post bg-secondary secondary-text"><span>Add Task</span></button>
        </form>

    </section>
   
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Posted : function(response){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    window.location.href=data.url;
                }
            }
        }
    </script>
@endsection