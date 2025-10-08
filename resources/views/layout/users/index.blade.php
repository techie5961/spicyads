<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png') }}" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg') }}" />
<link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}" />
<link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />
<link rel="stylesheet" href="{{ asset('vitecss/fonts/fonts.css?v='.config('versions.vite_version').'') }}">
<link rel="stylesheet" href="{{ asset('vitecss/css/app.css?v='.config('versions.vite_version').'') }}">
    <title>{{ config('app.name') }} | Users | @yield('title')</title>
    <style>
      .nav-profile{
        background-color: var(--bg);
background-color: #cccccc;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 1200'%3E%3Cdefs%3E%3ClinearGradient id='a' x1='0' x2='0' y1='0' y2='100%25' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23f5f5f5'/%3E%3Cstop offset='0.02' stop-color='%23cccccc'/%3E%3Cstop offset='0.02' stop-color='%23c3c3c3'/%3E%3Cstop offset='0.032' stop-color='%23cccccc'/%3E%3Cstop offset='0.032' stop-color='%23bbbbbb'/%3E%3Cstop offset='0.056' stop-color='%23cccccc'/%3E%3Cstop offset='0.056' stop-color='%23c7c7c7'/%3E%3Cstop offset='0.07' stop-color='%23cccccc'/%3E%3Cstop offset='0.07' stop-color='%23a0a0a0'/%3E%3Cstop offset='0.1' stop-color='%23cccccc'/%3E%3Cstop offset='0.1' stop-color='%23e7e7e7'/%3E%3Cstop offset='0.126' stop-color='%23cccccc'/%3E%3Cstop offset='0.126' stop-color='%23bababa'/%3E%3Cstop offset='0.142' stop-color='%23cccccc'/%3E%3Cstop offset='0.142' stop-color='%23c8c8c8'/%3E%3Cstop offset='0.159' stop-color='%23cccccc'/%3E%3Cstop offset='0.159' stop-color='%23b0b0b0'/%3E%3Cstop offset='0.17' stop-color='%23cccccc'/%3E%3Cstop offset='0.17' stop-color='%23cdcdcd'/%3E%3Cstop offset='0.197' stop-color='%23cccccc'/%3E%3Cstop offset='0.197' stop-color='%23b5b5b5'/%3E%3Cstop offset='0.218' stop-color='%23cccccc'/%3E%3Cstop offset='0.218' stop-color='%23c7c7c7'/%3E%3Cstop offset='0.239' stop-color='%23cccccc'/%3E%3Cstop offset='0.239' stop-color='%23cecece'/%3E%3Cstop offset='0.254' stop-color='%23cccccc'/%3E%3Cstop offset='0.254' stop-color='%23cecece'/%3E%3Cstop offset='0.283' stop-color='%23cccccc'/%3E%3Cstop offset='0.283' stop-color='%23cccccc'/%3E%3Cstop offset='0.294' stop-color='%23cccccc'/%3E%3Cstop offset='0.294' stop-color='%23c9c9c9'/%3E%3Cstop offset='0.305' stop-color='%23cccccc'/%3E%3Cstop offset='0.305' stop-color='%234e4e4e'/%3E%3Cstop offset='0.332' stop-color='%23cccccc'/%3E%3Cstop offset='0.332' stop-color='%23909090'/%3E%3Cstop offset='0.346' stop-color='%23cccccc'/%3E%3Cstop offset='0.346' stop-color='%23c5c5c5'/%3E%3Cstop offset='0.362' stop-color='%23cccccc'/%3E%3Cstop offset='0.362' stop-color='%23979797'/%3E%3Cstop offset='0.381' stop-color='%23cccccc'/%3E%3Cstop offset='0.381' stop-color='%23c2c2c2'/%3E%3Cstop offset='0.415' stop-color='%23cccccc'/%3E%3Cstop offset='0.415' stop-color='%23a8a8a8'/%3E%3Cstop offset='0.428' stop-color='%23cccccc'/%3E%3Cstop offset='0.428' stop-color='%23525252'/%3E%3Cstop offset='0.442' stop-color='%23cccccc'/%3E%3Cstop offset='0.442' stop-color='%23c8c8c8'/%3E%3Cstop offset='0.456' stop-color='%23cccccc'/%3E%3Cstop offset='0.456' stop-color='%23a9a9a9'/%3E%3Cstop offset='0.498' stop-color='%23cccccc'/%3E%3Cstop offset='0.498' stop-color='%23dfdfdf'/%3E%3Cstop offset='0.511' stop-color='%23cccccc'/%3E%3Cstop offset='0.511' stop-color='%23cecece'/%3E%3Cstop offset='0.532' stop-color='%23cccccc'/%3E%3Cstop offset='0.532' stop-color='%23cecece'/%3E%3Cstop offset='0.541' stop-color='%23cccccc'/%3E%3Cstop offset='0.541' stop-color='%23bababa'/%3E%3Cstop offset='0.56' stop-color='%23cccccc'/%3E%3Cstop offset='0.56' stop-color='%23f0f0f0'/%3E%3Cstop offset='0.581' stop-color='%23cccccc'/%3E%3Cstop offset='0.581' stop-color='%23aaaaaa'/%3E%3Cstop offset='0.6' stop-color='%23cccccc'/%3E%3Cstop offset='0.6' stop-color='%23d7d7d7'/%3E%3Cstop offset='0.618' stop-color='%23cccccc'/%3E%3Cstop offset='0.618' stop-color='%23cacaca'/%3E%3Cstop offset='0.656' stop-color='%23cccccc'/%3E%3Cstop offset='0.656' stop-color='%23cccccc'/%3E%3Cstop offset='0.679' stop-color='%23cccccc'/%3E%3Cstop offset='0.679' stop-color='%23ababab'/%3E%3Cstop offset='0.689' stop-color='%23cccccc'/%3E%3Cstop offset='0.689' stop-color='%23d1d1d1'/%3E%3Cstop offset='0.720' stop-color='%23cccccc'/%3E%3Cstop offset='0.720' stop-color='%23bbbbbb'/%3E%3Cstop offset='0.734' stop-color='%23cccccc'/%3E%3Cstop offset='0.734' stop-color='%23cbcbcb'/%3E%3Cstop offset='0.748' stop-color='%23cccccc'/%3E%3Cstop offset='0.748' stop-color='%236b6b6b'/%3E%3Cstop offset='0.764' stop-color='%23cccccc'/%3E%3Cstop offset='0.764' stop-color='%23989898'/%3E%3Cstop offset='0.788' stop-color='%23cccccc'/%3E%3Cstop offset='0.788' stop-color='%23dcdcdc'/%3E%3Cstop offset='0.808' stop-color='%23cccccc'/%3E%3Cstop offset='0.808' stop-color='%238f8f8f'/%3E%3Cstop offset='0.831' stop-color='%23cccccc'/%3E%3Cstop offset='0.831' stop-color='%23cbcbcb'/%3E%3Cstop offset='0.856' stop-color='%23cccccc'/%3E%3Cstop offset='0.856' stop-color='%23dbdbdb'/%3E%3Cstop offset='0.872' stop-color='%23cccccc'/%3E%3Cstop offset='0.872' stop-color='%23c7c7c7'/%3E%3Cstop offset='0.894' stop-color='%23cccccc'/%3E%3Cstop offset='0.894' stop-color='%23c8c8c8'/%3E%3Cstop offset='0.914' stop-color='%23cccccc'/%3E%3Cstop offset='0.914' stop-color='%23c0c0c0'/%3E%3Cstop offset='0.942' stop-color='%23cccccc'/%3E%3Cstop offset='0.942' stop-color='%23cdcdcd'/%3E%3Cstop offset='0.957' stop-color='%23cccccc'/%3E%3Cstop offset='0.957' stop-color='%237f7f7f'/%3E%3Cstop offset='0.973' stop-color='%23cccccc'/%3E%3Cstop offset='0.973' stop-color='%23cdcdcd'/%3E%3Cstop offset='1' stop-color='%23cccccc'/%3E%3Cstop offset='1' stop-color='%23e6e6e6'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' x='0' y='0' width='100%25' height='100%25'/%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
color:black;
}
body{
  
   background-color: var(--bg);
  
 
}
div.menu.active svg.menu.open{
    display:none;
}
  
div.menu svg.menu.close{
    display:none;
}
div.menu.active svg.menu.close{
    display:flex;
}
  
  
    
    </style>
    @yield('css')
</head>

<body>
    <header class="pos-sticky backdrop-blur-5 average c-white bg p-10 top-0 left-0 right-0 bottom-0 row align-center g-10">
       
        <img  onclick="window.location.href='{{ url('/') }}'" src="{{ asset('favicon/logo.png?v=1.1') }}" alt="Logo" class="h-30 pc-pointer">
         <div onclick="
       if(document.querySelector('section.nav').classList.contains('display-none')){
        document.querySelector('section.nav').classList.remove('display-none');
        document.querySelector('section.nav').classList.add('animation-trans-in-from-left');
        this.classList.add('active');
         
       }else{
        document.querySelector('section.nav').classList.add('display-none');
        document.querySelector('section.nav').classList.remove('animation-trans-in-from-left');
        this.classList.remove('active');
         
       }

            " class="h-40 m-left-auto menu w-40 column pc-display-none justify-center bg-green c-white c-bg br-5 p-10 bg-white">
          
          <svg class="menu open" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" viewBox="0 0 256 256"><path d="M228,128a12,12,0,0,1-12,12H40a12,12,0,0,1,0-24H216A12,12,0,0,1,228,128ZM40,76H216a12,12,0,0,0,0-24H40a12,12,0,0,0,0,24ZM216,180H40a12,12,0,0,0,0,24H216a12,12,0,0,0,0-24Z"></path></svg>
            <svg class="menu close" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" viewBox="0 0 256 256"><path d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z"></path></svg>

        </div>
       
    <div class="row m-left-auto mobile-display-none align-center g-10">
        <a class="w-full clip-10 br-10 bold p-10 font-1 w-full g-5 row align-center no-u c-bg-secondary dark" href="{{ url('/') }}">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M224,120v96a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V120a15.87,15.87,0,0,1,4.69-11.32l80-80a16,16,0,0,1,22.62,0l80,80A15.87,15.87,0,0,1,224,120Z"></path></svg>

              <span class="m-top-auto ws-nowrap">  Home</span>
            </a>
            <a href="{{ url('/about') }}" class="w-full clip-10 br-10 g-5 bold p-10 font-1 w-full row align-center no-u c-bg-secondary dark">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm-4,48a12,12,0,1,1-12,12A12,12,0,0,1,124,72Zm12,112a16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40a8,8,0,0,1,0,16Z"></path></svg>

              <span class="m-top-auto  ws-nowrap"> About Us</span>
            </a>
             <a href="{{ url('/faqs') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-bg-secondary dark">
             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,168a12,12,0,1,1,12-12A12,12,0,0,1,128,192Zm8-48.72V144a8,8,0,0,1-16,0v-8a8,8,0,0,1,8-8c13.23,0,24-9,24-20s-10.77-20-24-20-24,9-24,20v4a8,8,0,0,1-16,0v-4c0-19.85,17.94-36,40-36s40,16.15,40,36C168,125.38,154.24,139.93,136,143.28Z"></path></svg>

              <span class="m-top-auto  ws-nowrap"> FAQs</span>
            </a>
              <a href="{{ url('/terms') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-bg-secondary dark">
             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M254.3,107.91,228.78,56.85a16,16,0,0,0-21.47-7.15L182.44,62.13,130.05,48.27a8.14,8.14,0,0,0-4.1,0L73.56,62.13,48.69,49.7a16,16,0,0,0-21.47,7.15L1.7,107.9a16,16,0,0,0,7.15,21.47l27,13.51,55.49,39.63a8.06,8.06,0,0,0,2.71,1.25l64,16a8,8,0,0,0,7.6-2.1l40-40,15.08-15.08,26.42-13.21a16,16,0,0,0,7.15-21.46Zm-54.89,33.37L165,113.72a8,8,0,0,0-10.68.61C136.51,132.27,116.66,130,104,122L147.24,80h31.81l27.21,54.41Zm-41.87,41.86L99.42,168.61l-49.2-35.14,28-56L128,64.28l9.8,2.59-45,43.68-.08.09a16,16,0,0,0,2.72,24.81c20.56,13.13,45.37,11,64.91-5L188,152.66Zm-25.72,34.8a8,8,0,0,1-7.75,6.06,8.13,8.13,0,0,1-1.95-.24L80.41,213.33a7.89,7.89,0,0,1-2.71-1.25L51.35,193.26a8,8,0,0,1,9.3-13l25.11,17.94L126,208.24A8,8,0,0,1,131.82,217.94Z"></path></svg>

                
              <span class="m-top-auto ws-nowrap"> Terms of Service</span>
            </a>
          @if (!Auth::guard('users')->check())
                <a href="{{ url('/login') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-bg-secondary dark">
            
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-40,40A8,8,0,0,1,88,168V136H24a8,8,0,0,1,0-16H88V88a8,8,0,0,1,13.66-5.66l40,40A8,8,0,0,1,141.66,133.66ZM200,32H136a8,8,0,0,0,0,16h56V208H136a8,8,0,0,0,0,16h64a8,8,0,0,0,8-8V40A8,8,0,0,0,200,32Z"></path></svg>

              <span class="m-top-auto"> Login</span>
            </a>
          @else
                <a href="{{ url('/users/dashboard') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-bg-secondary dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M120,56v48a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V56A16,16,0,0,1,56,40h48A16,16,0,0,1,120,56Zm80-16H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,200,40Zm-96,96H56a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,104,136Zm96,0H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,200,136Z"></path></svg>

              <span class="m-top-auto"> Dashboard</span>
            </a>
          @endif
         <div class="p-10 w-full">
             <button onclick="window.location.href='{{ url('register') }}'" class="btn-primary-3d ws-nowrap w-full clip-5 br-5">Get Started</button>
         </div>
    </div>
    </header>
     <section class="nav mobile-nav backdrop-blur-5 display-none high pc-display-none pos-fixed bg w-full top-0 left-0 right-0">
        <nav>
            <a  class="w-full clip-10 br-10 bold p-10 font-1 w-full g-5 row align-center no-u c-bg-secondary dark" href="{{ url('/') }}">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M224,120v96a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V120a15.87,15.87,0,0,1,4.69-11.32l80-80a16,16,0,0,1,22.62,0l80,80A15.87,15.87,0,0,1,224,120Z"></path></svg>

              <span class="m-top-auto">  Home</span>
            </a>
            <a href="{{ url('/about') }}" class="w-full clip-10 br-10 g-5 bold p-10 font-1 w-full row align-center no-u c-bg-secondary dark">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm-4,48a12,12,0,1,1-12,12A12,12,0,0,1,124,72Zm12,112a16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40a8,8,0,0,1,0,16Z"></path></svg>

              <span class="m-top-auto"> About Us</span>
            </a>
             <a href="{{ url('/faqs') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-bg-secondary dark">
             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,168a12,12,0,1,1,12-12A12,12,0,0,1,128,192Zm8-48.72V144a8,8,0,0,1-16,0v-8a8,8,0,0,1,8-8c13.23,0,24-9,24-20s-10.77-20-24-20-24,9-24,20v4a8,8,0,0,1-16,0v-4c0-19.85,17.94-36,40-36s40,16.15,40,36C168,125.38,154.24,139.93,136,143.28Z"></path></svg>

              <span class="m-top-auto"> Frequently Asked Questions</span>
            </a>
              <a href="{{ url('/terms') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-bg-secondary dark">
             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M254.3,107.91,228.78,56.85a16,16,0,0,0-21.47-7.15L182.44,62.13,130.05,48.27a8.14,8.14,0,0,0-4.1,0L73.56,62.13,48.69,49.7a16,16,0,0,0-21.47,7.15L1.7,107.9a16,16,0,0,0,7.15,21.47l27,13.51,55.49,39.63a8.06,8.06,0,0,0,2.71,1.25l64,16a8,8,0,0,0,7.6-2.1l40-40,15.08-15.08,26.42-13.21a16,16,0,0,0,7.15-21.46Zm-54.89,33.37L165,113.72a8,8,0,0,0-10.68.61C136.51,132.27,116.66,130,104,122L147.24,80h31.81l27.21,54.41Zm-41.87,41.86L99.42,168.61l-49.2-35.14,28-56L128,64.28l9.8,2.59-45,43.68-.08.09a16,16,0,0,0,2.72,24.81c20.56,13.13,45.37,11,64.91-5L188,152.66Zm-25.72,34.8a8,8,0,0,1-7.75,6.06,8.13,8.13,0,0,1-1.95-.24L80.41,213.33a7.89,7.89,0,0,1-2.71-1.25L51.35,193.26a8,8,0,0,1,9.3-13l25.11,17.94L126,208.24A8,8,0,0,1,131.82,217.94Z"></path></svg>

                
              <span class="m-top-auto"> Terms of Service</span>
            </a>
          @if (!Auth::guard('users')->check())
                <a href="{{ url('/login') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-bg-secondary dark">
            
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-40,40A8,8,0,0,1,88,168V136H24a8,8,0,0,1,0-16H88V88a8,8,0,0,1,13.66-5.66l40,40A8,8,0,0,1,141.66,133.66ZM200,32H136a8,8,0,0,0,0,16h56V208H136a8,8,0,0,0,0,16h64a8,8,0,0,0,8-8V40A8,8,0,0,0,200,32Z"></path></svg>

              <span class="m-top-auto"> Login</span>
            </a>
          @else
                <a href="{{ url('/users/dashboard') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-bg-secondary dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M120,56v48a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V56A16,16,0,0,1,56,40h48A16,16,0,0,1,120,56Zm80-16H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,200,40Zm-96,96H56a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,104,136Zm96,0H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,200,136Z"></path></svg>

              <span class="m-top-auto"> Dashboard</span>
            </a>
          @endif
         <div class="p-10 w-full">
             <button onclick="window.location.href='{{ url('register') }}'" class="btn-primary-3d w-full clip-5 br-5">Get Started</button>
         </div>
        </nav>
    </section>
    
    
    <main class="c-white">
       
        @yield('main')
<section onclick="HidePopUp()" class="popup">
  <div onclick="event.stopPropagation()" style="background:white;color:black;" class="child">

  </div>
</section>
<section onclick="HideSlideUp()" class="slideup">
  <div onclick="event.stopPropagation()" class="child bg-secondary-dark">@yield('slideup_child')</div>
</section>
    </main>
   <footer class="w-full pc-align-center pc-place-center pc-grid pc-grid-2 c-white bg-primary p-10 column g-10">
   <img src="{{ asset('favicon/logo-white.png') }}" alt="" class="w-50 grid-full pc-m-x-auto h-50">
   <span class="font-1 grid-full">{{ config('app.name') }}  - Your platform for simple,fast, and rewarding online earning.</span>
 <div class="column g-5">
    <strong class="font-1 u">Company</strong>
 <a href="{{ url('about') }}" class="no-u c-white">About Us</a>
 <a href="{{ url('contact') }}" class="no-u c-white">Contact Us</a>
 <a href="{{ url('terms') }}" class="no-u c-white">Terms of Service</a>
 <a href="{{ url('faqs') }}" class="no-u c-white">FAQs</a>
 </div>
<div class="column g-5">
     <strong class="font-1 u">My Account</strong>
 <a href="{{ url('login') }}" class="no-u c-white">Login</a>
 <a href="{{ url('register') }}" class="no-u c-white">SignUp</a>
</div>
 <hr class="bg-white grid-full">
 <div class="w-full align-center grid-full text-center column justify-center">
    <span>&copy;2025 {{ config('app.name') }}.</span>
     <span>Built & Designed by <a class="c-blue" href="https://wa.me/+2349013350351">Techie Innovations</a></span>
 </div>
</footer>

    <script src="{{ asset('vitecss/js/app.js?v='.config('versions.vite_version').'') }}"></script>
    <script class="js">
      window.addEventListener('load',()=>{
        document.querySelector('section.nav').style.top=document.querySelector('header').offsetHeight + 'px';
      });
    </script>
    @yield('js')
</body>
</html>