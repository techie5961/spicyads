@extends('layout.users.app')
@section('title')
    Dashboard
@endsection
@section('css')
    <style class="css">
    
        .balance-div.inactive{
            display:none !important;
        }
        .balance-div.active{
            display:flex;
            animation:trans-in-from-right 0.5s ease forwards;
        }
        @keyframes trans-in-from-right{
            0%{
                transform: translateX(100%);
            }
            100%{
                transform: translateX(0);
            }
        }
    </style>
@endsection
@section('main')

    <section class="column p-10 w-full g-10">
       <div class="w-full max-w-full no-scrollbar overflow-auto row">
         <div style="background: linear-gradient(to top right,navy,blue)" class="w-full balance-div active p-10 column g-10 bg-navy c-white br-10 no-select max-w-500">
           <div class="row w-full align-center g-10 space-between">
             <span class="desc bold">Welcome Back, {{ ucfirst(Auth::guard('users')->user()->username) }}</span>
             <img src="{{ asset('users/'.Auth::guard('users')->user()->photo.'') }}" alt="" class="h-50 w-50 circle clip-circle">
           </div>
            <span class="m-top-20">Activities Balance</span>
            <strong class="desc">&#8358;{{ number_format(Auth::guard('users')->user()->activities_balance,2) }}</strong>
        </div>
        {{-- NEW DIV --}}
         <div  style="background: linear-gradient(to top right,green,#4caf50)" class="w-full balance-div inactive p-10 column primary-text g-10 bg-primary br-10 no-select max-w-500">
           <div class="row w-full align-center g-10 space-between">
             <span class="desc bold">Welcome Back, {{ ucfirst(Auth::guard('users')->user()->username) }}</span>
             <img src="{{ asset('users/'.Auth::guard('users')->user()->photo.'') }}" alt="" class="h-50 w-50 circle clip-circle">
           </div>
            <span class="m-top-20">Affiliate Balance</span>
            <strong class="desc">&#8358;{{ number_format(Auth::guard('users')->user()->affiliate_balance,2) }}</strong>
        </div>
        {{-- NEW DIV --}}
         <div  style="background: linear-gradient(to top right,black,#222)" class="w-full balance-div c-white inactive p-10 column g-10 bg-black br-10 no-select max-w-500">
           <div class="row w-full align-center g-10 space-between">
             <span class="desc bold">Welcome Back, {{ ucfirst(Auth::guard('users')->user()->username) }}</span>
             <img src="{{ asset('users/'.Auth::guard('users')->user()->photo.'') }}" alt="" class="h-50 w-50 circle clip-circle">
           </div>
            <span class="m-top-20">Deposit Balance</span>
            <strong class="desc">&#8358;{{ number_format(Auth::guard('users')->user()->deposit_balance,2) }}</strong>
        </div>
       </div>
        
        <div class="w-full row indicator align-center justify-center g-10">
            <div class="h-5 w-50 br-1000 bg-primary"></div>
             <div class="h-5 w-50 br-1000 bg-silver"></div>
              <div class="h-5 w-50 br-1000 bg-silver"></div>
        </div>
         <div class="w-full bg-white border-2 border-color-green g-5 c-primary br-10 p-10 row space-between align-center">
        <div class="w-full bg-white border-1 border-color-silver g-5 c-primary br-10 p-10 row space-between align-center">
            <div class="w-full h-40 no-scrollbar align-center row ws-nowrap overflow-auto p-5 br-10 bg-secondary-transparent">{{ url('register/'.Auth::guard('users')->user()->username.'') }}</div>
            <div onclick="copy('{{ url('register/'.Auth::guard('users')->user()->username.'') }}')" class="h-40 perfect-square c-black column  bg-secondary  br-10 justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" viewBox="0 0 256 256"><path d="M216,32H88a8,8,0,0,0-8,8V80H40a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H168a8,8,0,0,0,8-8V176h40a8,8,0,0,0,8-8V40A8,8,0,0,0,216,32Zm-8,128H176V88a8,8,0,0,0-8-8H96V48H208Z"></path></svg>

            </div>
        </div>
         </div>
        <div class="w-full m-x-auto align-center p-20 g-20 column g-5 bg-white border-1 border-color-green primary-text br-10 p-10">
            <strong class="font-1 c-green u">Our Official Links</strong>
       <div class="grid grid-2 place-center m-left-auto w-full g-10 align-center">
        <div onclick="window.open('{{ $general->whatsapp_group }}')" class="bg-green g-2 pc-max-w-half c-white row justify-center h-50 p-10 bold w-full br-1000">Join Whatsapp
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M152.58,145.23l23,11.48A24,24,0,0,1,152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155ZM232,128A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-40,24a8,8,0,0,0-4.42-7.16l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88A40,40,0,0,0,192,152Z"></path></svg>

        </div>
         <div onclick="window.open('{{ $general->telegram_group }}')" class="bg-navy g-2 pc-max-w-half m-right-auto c-white row justify-center h-50 p-10 bold w-full br-1000">Join Telegram
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M228.88,26.19a9,9,0,0,0-9.16-1.57L17.06,103.93a14.22,14.22,0,0,0,2.43,27.21L72,141.45V200a15.92,15.92,0,0,0,10,14.83,15.91,15.91,0,0,0,17.51-3.73l25.32-26.26L165,220a15.88,15.88,0,0,0,10.51,4,16.3,16.3,0,0,0,5-.79,15.85,15.85,0,0,0,10.67-11.63L231.77,35A9,9,0,0,0,228.88,26.19ZM175.53,208,92.85,135.5l119-85.29Z"></path></svg>

        </div>
       </div>
       <div class="grid grid-2 place-center m-left-auto w-full g-10 align-center">
        <div onclick="window.open('{{ 'https://wa.me/'.$general->ad_number.'?text='.urlencode('Hello admin,i want to place advert on '.config('app.name').'') }}')" class="bg-purple pc-max-w-half c-white g-2 row justify-center h-50 p-10 bold w-full br-1000">Place Ads
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M160,32.25V223.69a8.29,8.29,0,0,1-3.91,7.18,8,8,0,0,1-9-.56l-65.57-51A4,4,0,0,1,80,176.16V79.84a4,4,0,0,1,1.55-3.15l65.57-51a8,8,0,0,1,10,.16A8.27,8.27,0,0,1,160,32.25ZM60,80H32A16,16,0,0,0,16,96v64a16,16,0,0,0,16,16H60a4,4,0,0,0,4-4V84A4,4,0,0,0,60,80Zm126.77,20.84a8,8,0,0,0-.72,11.3,24,24,0,0,1,0,31.72,8,8,0,1,0,12,10.58,40,40,0,0,0,0-52.88A8,8,0,0,0,186.74,100.84Zm40.89-26.17a8,8,0,1,0-11.92,10.66,64,64,0,0,1,0,85.34,8,8,0,1,0,11.92,10.66,80,80,0,0,0,0-106.66Z"></path></svg>

        </div>
         <div onclick="window.open('{{ $general->whatsapp_channel }}')" style="background:green" class=" pc-max-w-half g-2 c-white row justify-center h-50 p-10 bold w-full br-1000">Whatsapp Channel
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M187.58,144.84l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88,40,40,0,0,0,40-40A8,8,0,0,0,187.58,144.84ZM152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155l14.61-9.74,23,11.48A24,24,0,0,1,152,176ZM128,24A104,104,0,0,0,36.18,176.88L24.83,210.93a16,16,0,0,0,20.24,20.24l34.05-11.35A104,104,0,1,0,128,24Zm0,192a87.87,87.87,0,0,1-44.06-11.81,8,8,0,0,0-6.54-.67L40,216,52.47,178.6a8,8,0,0,0-.66-6.54A88,88,0,1,1,128,216Z"></path></svg>

        </div>
       
       </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
    window.MyFunc = {
        ChangeDiv : function(){
            let balance_divs = document.querySelectorAll('.balance-div');
            let indicators   = document.querySelectorAll('.indicator > div');
            let index = 0;
            let startX = 0;

            function showDiv(i){
                // hide all
                balance_divs.forEach(div=>{
                    div.classList.remove('active');
                    div.classList.add('inactive');
                });

                // reset dots
                indicators.forEach(dot=>{
                    dot.classList.remove('bg-primary');
                    dot.classList.add('bg-silver');
                });

                // show current
                balance_divs[i].classList.add('active');
                balance_divs[i].classList.remove('inactive');
                indicators[i].classList.remove('bg-silver');
                indicators[i].classList.add('bg-primary');

                index = i; // update current index
            }

            // autoplay
            setInterval(()=>{
                let next = (index + 1) % balance_divs.length;
                showDiv(next);
            }, 5000);

            // touch events
            balance_divs.forEach(div=>{
                div.addEventListener('touchstart', e=>{
                    startX = e.touches[0].clientX;
                });

                div.addEventListener('touchend', e=>{
                    let endX = e.changedTouches[0].clientX;
                    let diff = endX - startX;

                    if(Math.abs(diff) > 50){ // minimum swipe distance
                        if(diff < 0){
                            // swipe left → next
                            let next = (index + 1) % balance_divs.length;
                            showDiv(next);
                        } else {
                            // swipe right → prev
                            let prev = (index - 1 + balance_divs.length) % balance_divs.length;
                            showDiv(prev);
                        }
                    }
                });
            });

            // init
            showDiv(index);
        }
    }

    MyFunc.ChangeDiv();
</script>
@endsection