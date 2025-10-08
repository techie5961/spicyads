@extends('layout.users.index')
@section('title')
    About Us
@endsection
@section('main')
    <section class="w-full c-black column g-10 p-10">
        <section class="about">
  <div class="card" style=" max-width:900px; margin:auto;">
   <strong class="desc">About {{ config('app.name') }}</strong>
    <p>
      {{ config('app.name') }} is a modern online earning platform built to help individuals and businesses grow through 
      <strong>tasks, spin-and-win, and online advertising</strong>. We believe that everyone deserves a simple and secure way 
      to earn money from the comfort of their home while also providing businesses with a platform to reach more people.
    </p>

    <p>
      Whether you’re here to complete tasks and boost your daily income, spin the wheel for exciting rewards, or promote your brand 
      by placing adverts, {{ config('app.name') }} offers you the right tools to succeed. Our system is fast, reliable, and designed to be 
      user-friendly for beginners and professionals alike.
    </p>

    <h3>Our Mission</h3>
    <p>
      Our mission is to create opportunities for people to earn online with ease and transparency. At the same time, 
      we provide advertisers with a trusted platform to showcase their products and services to a wide and active audience.
    </p>

    <h3>Why Choose {{ config('app.name') }}?</h3>
    <ul>
      <li>✔ Easy-to-complete online tasks for steady earnings.</li>
      <li>✔ Fun spin-and-win feature to reward users instantly.</li>
      <li>✔ A secure and trustworthy advertising space for businesses.</li>
      <li>✔ Fast payments with no hidden charges.</li>
      <li>✔ A growing community of motivated earners and advertisers.</li>
    </ul>

    <p>
      At {{ config('app.name') }}, we combine simplicity, reliability, and innovation to give you a platform that works. 
      Whether you want to earn or advertise, you’re in the right place.
    </p>

    <p style="margin-top:15px;"><strong>Join {{ config('app.name') }} today – where earning meets opportunity!</strong></p>
  </div>
</section>
    </section>
@endsection