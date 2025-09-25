@extends('layout.users.index')
@section('title')
    Contact Us
@endsection
@section('main')
    <section class="w-full grid pc-grid-2 p-10 g-10">
        <div class="w-full column text-center align-center border-1 border-color-green br-10 c-black bg-white box-shadow p-10 g-10">
              <div style="background:var(--bg)" class="h-70 w-70 column justify-center circle border-2 border-color-green justify-center bg-white-transparent">
                   <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="green" viewBox="0 0 256 256"><path d="M80,88v80H32a8,8,0,0,1-8-8V96a8,8,0,0,1,8-8Z" opacity="0.2"></path><path d="M155.51,24.81a8,8,0,0,0-8.42.88L77.25,80H32A16,16,0,0,0,16,96v64a16,16,0,0,0,16,16H77.25l69.84,54.31A8,8,0,0,0,160,224V32A8,8,0,0,0,155.51,24.81ZM32,96H72v64H32ZM144,207.64,88,164.09V91.91l56-43.55Zm54-106.08a40,40,0,0,1,0,52.88,8,8,0,0,1-12-10.58,24,24,0,0,0,0-31.72,8,8,0,0,1,12-10.58ZM248,128a79.9,79.9,0,0,1-20.37,53.34,8,8,0,0,1-11.92-10.67,64,64,0,0,0,0-85.33,8,8,0,1,1,11.92-10.67A79.83,79.83,0,0,1,248,128Z"></path></svg>
                 </div>
            <strong class="desc">Click the button below to place Adverts👇👇👇</strong>
            <button onclick="window.open('{{ 'https://wa.me/'.$general->ad_number.'?text='.urlencode('Hello admin,i want to place advert on '.config('app.name').'') }}')" class="btn-green-3d c-white w-full clip-5 br-5">Place Adverts</button>
        </div>
         <div class="w-full column text-center align-center border-1 border-color-green br-10 c-black bg-white box-shadow p-10 g-10">
              <div style="background:var(--bg)" class="h-70 w-70 column justify-center circle border-2 border-color-green justify-center bg-white-transparent">
                 <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#4caf50" viewBox="0 0 256 256"><path d="M128,32A96,96,0,0,0,44.89,176.07L32.42,213.46a8,8,0,0,0,10.12,10.12l37.39-12.47A96,96,0,1,0,128,32Zm24,152a80,80,0,0,1-80-80,32,32,0,0,1,32-32l16,32-12.32,18.47a48.19,48.19,0,0,0,25.85,25.85L152,136l32,16A32,32,0,0,1,152,184Z" opacity="0.2"></path><path d="M187.58,144.84l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88,40,40,0,0,0,40-40A8,8,0,0,0,187.58,144.84ZM152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155l14.62-9.74,23,11.48A24,24,0,0,1,152,176ZM128,24A104,104,0,0,0,36.18,176.88L24.83,210.93a16,16,0,0,0,20.24,20.24l34.05-11.35A104,104,0,1,0,128,24Zm0,192a87.87,87.87,0,0,1-44.06-11.81,8,8,0,0,0-6.54-.67L40,216,52.47,178.6a8,8,0,0,0-.66-6.54A88,88,0,1,1,128,216Z"></path></svg>
                 </div>
            <strong class="desc">Click the button below to join our whatsapp group👇👇👇</strong>
            <button onclick="window.open('{{ $general->whatsapp_group }}')" class="btn-green-3d c-white w-full clip-5 br-5">Join Whatsapp Group</button>
        </div>
          <div class="w-full column text-center align-center border-1 border-color-green br-10 c-black bg-white box-shadow p-10 g-10">
              <div style="background:var(--bg)" class="h-70 w-70 column justify-center circle border-2 border-color-green justify-center bg-white-transparent">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#4caf50" viewBox="0 0 256 256"><path d="M223.41,32.09,80,134.87,21,123.3A6.23,6.23,0,0,1,20,111.38L222.63,32.07A1,1,0,0,1,223.41,32.09ZM80,200a8,8,0,0,0,13.76,5.56l30.61-31.76L80,134.87Z" opacity="0.2"></path><path d="M228.88,26.19a9,9,0,0,0-9.16-1.57L17.06,103.93a14.22,14.22,0,0,0,2.43,27.21L72,141.45V200a15.92,15.92,0,0,0,10,14.83,15.91,15.91,0,0,0,17.51-3.73l25.32-26.26L165,220a15.88,15.88,0,0,0,10.51,4,16.3,16.3,0,0,0,5-.79,15.85,15.85,0,0,0,10.67-11.63L231.77,35A9,9,0,0,0,228.88,26.19ZM78.15,126.35l-49.61-9.73,139.2-54.48ZM88,200V152.52l24.79,21.74Zm87.53,8L92.85,135.5l119-85.29Z"></path></svg>
             </div>
            <strong class="desc">Click the button below to join our Telegram group👇👇👇</strong>
            <button onclick="window.open('{{ $general->telegram_group }}')" class="btn-green-3d c-white w-full clip-5 br-5">Join Telegram Group</button>
        </div>
         <div class="w-full column text-center align-center border-1 border-color-green br-10 c-black bg-white box-shadow p-10 g-10">
              <div style="background:var(--bg)" class="h-70 w-70 column justify-center circle border-2 border-color-green justify-center bg-white-transparent">
               <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#4caf50" viewBox="0 0 256 256"><path d="M152.58,145.23l23,11.48A24,24,0,0,1,152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155ZM232,128A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-40,24a8,8,0,0,0-4.42-7.16l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88A40,40,0,0,0,192,152Z"></path></svg>
              </div>
            <strong class="desc">Click the button below to join our Whatsapp Channel👇👇👇</strong>
            <button onclick="window.open('{{ $general->whatsapp_channel }}')" class="btn-green-3d c-white w-full clip-5 br-5">Join Whatsapp Channel</button>
        </div>
    </section>
@endsection