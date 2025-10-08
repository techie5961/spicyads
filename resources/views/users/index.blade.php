@extends('layout.users.index')
@section('title')
    HomePage
@endsection
@section('css')
    <style class="css">
        .welcome{
            background: linear-gradient(to right,red,orange);
            font-size:2rem;
            background-clip:text;
            -webkit-background-clip:text;
            -webkit-text-fill-color: text;
        }
        .observe{
           opacity:0;
           transform:translateY(30px);
           transition:all 0.5s ease;
        }
        .observe.active{
          
           animation: slide-up 1s ease forwards;
        }
        @keyframes slide-up{
            0%{
                transform:translateY(30px);
                opacity:0;
            }
             100%{
                transform:translateY(0);
                opacity:1;
            }
        }
        
    </style>
@endsection
@section('main')
    <section class="w-full pc-align-center pc-x-padding c-black column g-10 p-10">
        <strong class="text-center welcome font-tilt-prism m-x-auto">Welcome to {{ config('app.name') }}</strong>
  <span class="text-center">Earn online easily by completing tasks, spinning for rewards, or placing adverts. {{ config('app.name') }} makes online earning simple, fast, and secure for everyone.</span>
   <div class="row justify-center g-10 p-10">
    <button onclick="window.location.href='{{ url('register') }}'" class="btn-primary-3d clip-5 min-w-100 br-5">Get Started</button>

     <button onclick="window.location.href='{{ url('login') }}'" class="btn-primary-3d clip-5 min-w-100 br-5">Login</button>
   </div>
   <strong class="desc m-x-auto text-center">What is {{ config('app.name') }}?</strong>
   <span>{{ config('app.name') }} is your go-to platform for earning online. Complete simple tasks, try your luck with spin-and-win, or promote your business by placing adverts. With fast payouts, a secure system, and an easy-to-use interface, {{ config('app.name') }} ensures your online earning experience is smooth and rewarding. Join thousands of users and start earning today!</span>
<img src="{{ asset('images/earning-structure-flyer.jpg') }}" alt="Earning structiure flyer" class="observe w-full max-w-500 br-10">
<strong class="desc m-x-auto text-center">Our Features</strong>
<div class="grid pc-grid-2 w-full g-10 place-center">
    <div class="w-full observe column border-color-bg-secondary-dark border-1 g-10 br-10 bg-primary align-center  p-10 c-white">
                  <div style="background:rgba(255,255,255,0.2)" class="h-70 w-70 column justify-center circle border-2 border-color-white justify-center bg-white-transparent">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" viewBox="0 0 256 256"><path d="M128,48v80H40.87A146.29,146.29,0,0,1,40,112V56a8,8,0,0,1,8-8Zm0,80V232s78.06-21.3,87.13-104Z" opacity="0.2"></path><path d="M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.27,47,25.53a8,8,0,0,0,4.2,0c1-.26,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40ZM120,220.55a130.85,130.85,0,0,1-30.93-18.74c-21.15-17.3-34.2-39.37-39-65.81H120ZM120,120H48.23c-.15-2.63-.23-5.29-.23-8l0-56h72Zm47.4,81.42A131.31,131.31,0,0,1,136,220.53V136h69.91C201.16,162.24,188.27,184.18,167.4,201.42ZM208,112c0,2.71-.08,5.37-.23,8H136V56h72Z"></path></svg>

                  </div>
        <div class="row align-center g-2">

            <strong class="bold font-1 font-cinzel-decorative">Secure & Reliable</strong>
        </div>
        <span class="text-center">
            Complete tasks and place adverts with confidence. Your earnings are safe and payouts are fast.
        </span>

    </div>
    <div class="w-full observe border-1 border-color-bg-secondary-dark column g-10 br-10 bg-primary align-center  p-10 c-white">
                      <div style="background:rgba(255,255,255,0.2)" class="h-70 w-70 column justify-center circle border-2 border-color-white justify-center bg-white-transparent">
                     <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" viewBox="0 0 256 256"><path d="M224,128a96,96,0,1,1-96-96A96,96,0,0,1,224,128Z" opacity="0.2"></path><path d="M173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
                  </div>
        <div class="row align-center g-2">

            <strong class="bold font-1 font-cinzel-decorative">Simple & User Friendly</strong>
        </div>
        <span class="text-center">
          Navigate easily through tasks, spin rewards, and adverts with our intuitive platform.
        </span>

    </div>
     <div class="w-full observe border-1 border-color-bg-secondary-dark column g-10 br-10 bg-primary align-center  p-10 c-white">
                      <div style="background:rgba(255,255,255,0.2)" class="h-70 w-70 column justify-center circle border-2 border-color-white justify-center bg-white-transparent">
                     <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" viewBox="0 0 256 256"><path d="M216,48V88H40V48a8,8,0,0,1,8-8H208A8,8,0,0,1,216,48Z" opacity="0.2"></path><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-38.34-85.66a8,8,0,0,1,0,11.32l-48,48a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L116,164.69l42.34-42.35A8,8,0,0,1,169.66,122.34Z"></path></svg>
                      </div>
        <div class="row align-center g-2">

            <strong class="bold font-1 font-cinzel-decorative">Tasks For Everyone</strong>
        </div>
        <span class="text-center">
        Earn money by completing simple tasks and offers, no matter your experience level.
        </span>

    </div>
     <div class="w-full observe border-1 border-color-bg-secondary-dark column g-10 br-10 bg-primary align-center  p-10 c-white">
                      <div style="background:rgba(255,255,255,0.2)" class="h-70 w-70 column justify-center circle border-2 border-color-white justify-center bg-white-transparent">
                   <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fcfcfc" viewBox="0 0 256 256"><path d="M128,128c-28.36-14.12-56.73-28.24-96,1.61,0-.53,0-1.07,0-1.61A96,96,0,0,1,78.6,45.67C124.09,64.75,126,96.38,128,128ZM81.4,212a96,96,0,0,0,94.6-.81c.47-.27.94-.53,1.4-.81C131.91,191.25,130,159.62,128,128,101.59,145.5,75.18,163,81.4,212ZM224,126.39a96,96,0,0,0-48-81.53l-1.4-.81C180.82,93,154.41,110.5,128,128,156.36,142.12,184.73,156.24,224,126.39Z" opacity="0.2"></path><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.07-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z"></path></svg>
                   </div>
        <div class="row align-center g-2">

            <strong class="bold font-1 font-cinzel-decorative">Spin & Win Rewards</strong>
        </div>
        <span class="text-center">
       Try your luck on the spin wheel for free and earn extra rewards quickly and easily.
        </span>

    </div>
    <div class="w-full observe border-1 border-color-bg-secondary-dark column g-10 br-10 bg-primary align-center  p-10 c-white">
                      <div style="background:rgba(255,255,255,0.2)" class="h-70 w-70 column justify-center circle border-2 border-color-white justify-center bg-white-transparent">
                   <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fcfcfc" viewBox="0 0 256 256"><path d="M80,88v80H32a8,8,0,0,1-8-8V96a8,8,0,0,1,8-8Z" opacity="0.2"></path><path d="M155.51,24.81a8,8,0,0,0-8.42.88L77.25,80H32A16,16,0,0,0,16,96v64a16,16,0,0,0,16,16H77.25l69.84,54.31A8,8,0,0,0,160,224V32A8,8,0,0,0,155.51,24.81ZM32,96H72v64H32ZM144,207.64,88,164.09V91.91l56-43.55Zm54-106.08a40,40,0,0,1,0,52.88,8,8,0,0,1-12-10.58,24,24,0,0,0,0-31.72,8,8,0,0,1,12-10.58ZM248,128a79.9,79.9,0,0,1-20.37,53.34,8,8,0,0,1-11.92-10.67,64,64,0,0,0,0-85.33,8,8,0,1,1,11.92-10.67A79.83,79.83,0,0,1,248,128Z"></path></svg>
                 </div>
        <div class="row align-center g-2">

            <strong class="bold font-1 font-cinzel-decorative">Place Adverts</strong>
        </div>
        <span class="text-center">
      Promote your business or services by placing adverts and reach a wide audience while earning bonuses.
        </span>

    </div>
</div>
</section>
@endsection
@section('js')
    <script class="js">
       window.MyFunc = {
        ObserveElements : function(){
            let observer=new IntersectionObserver((entries)=>{
                entries.forEach((entry)=>{
                    if(entry.isIntersecting){
                        entry.target.classList.add('active');
                      
                    }
                })
            },{
                threshold : 0.5
            })
            let elements=document.querySelectorAll('.observe');
            if(elements){
               
                elements.forEach((element)=>{
                    observer.observe(element);
                })
            }
        }
       }
       MyFunc.ObserveElements();
    </script>
@endsection