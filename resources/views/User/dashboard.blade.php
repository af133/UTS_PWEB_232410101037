@extends('layouts.app')
@section('content')@php
$name = session('name');
@endphp

<div class="mt-3 relative w-full max-w-6xl mx-auto overflow-hidden rounded-lg shadow-lg my-5">
<div class="relative">
<!-- Banner Background -->
<@php
$name = session('name');
@endphp

<div class="mt-3 relative w-full max-w-6xl mx-auto overflow-hidden rounded-lg shadow-lg my-5">
<div class="relative h-[18rem] md:h-[30rem]">
<!-- Banner Background -->
<div 
  class="absolute inset-0 bg-center bg-cover z-0"
  style="background-image: url('https://images.squarespace-cdn.com/content/v1/5dccc025a7ec043789f57f1d/1666678697793-39EWIFDJJ92E0YY99R6W/Main+Banner+Web+BBQ.jpg?format=2500w');">
</div>

<!-- Overlay with Welcome Text -->
<div class="absolute inset-0 bg-[#00000061]  flex items-center justify-center z-10">
  <div class="text-center text-white px-4">
    <h1 class="text-3xl md:text-5xl font-bold mb-2">Welcome{{ $name ? ', ' . $name : '' }}!</h1>
    <p class="text-lg md:text-xl">Enjoy a delicious journey into Korean flavors and vibes 🍽️🇰🇷</p>
    <p class="text-lg md:text-xl">CanteenXpress</p>
  </div>
</div>
</div>
</div>


  
  
    <div class="text-center">
      <h1 class="text-3xl font-bold mb-2">Our Specialty</h1>
      <img src="https://images.squarespace-cdn.com/content/v1/5dccc025a7ec043789f57f1d/1573783921893-22W7SIF42UKCKW1LP8KG/line1.png?format=2500w" alt="Line" class="mx-auto mb-10 w-40">
    </div>
  
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 px-6 lg:px-24">
      <!-- Item 1 -->
      <div class="text-center">
        <img src="https://images.squarespace-cdn.com/content/v1/5dccc025a7ec043789f57f1d/1580011239336-R1L14DCYAIO9UU4L8NLG/kpop.jpg?format=500w" alt="K-Entertainment" class="mx-auto mb-4 rounded-2xl shadow w-70">
        <h3 class="text-xl font-semibold mb-2">K-Entertainment</h3>
        <p class="text-gray-600">Want to experience a Korean vibe? We provide the latest KPOP music and K-Dramas to keep you entertained while you dine.</p>
    </div>
      
      <!-- Item 2 -->
      <div class="text-center">
        <img src="https://images.squarespace-cdn.com/content/v1/5dccc025a7ec043789f57f1d/1580010467740-JSJP5LMJ2NOJ9MX6BKO2/64618369_378204206233552_7325604897093062165_n.jpg?format=500w" class="mx-auto mb-4 rounded-2xl shadow w-70">
        <h3 class="text-xl font-semibold mb-2">Fresh Ingredients</h3>
        <p class="text-gray-600">All recipes are original from Mujigae Resto, cooked with high-quality ingredients and processed using special techniques.</p>
    </div>
      
      <!-- Item 3 -->
      <div class="text-center">
        <img src="https://images.squarespace-cdn.com/content/v1/5dccc025a7ec043789f57f1d/1580010767003-PLNB4D0R0PPSG93JUW37/36628807_1671626639612804_9182202030838513664_n.jpg?format=500w" alt="High Technology" class="mx-auto mb-4 rounded-2xl shadow w-70">
        <h3 class="text-xl font-semibold mb-2">High Technology</h3>
        <p class="text-gray-600">Each table is equipped with self-service technology using an iPad, allowing you to order food, request music, or call a waiter.</p>
    </div>
  
      <!-- Item 4 -->
      <div class="text-center">
        <img src="https://images.squarespace-cdn.com/content/v1/5dccc025a7ec043789f57f1d/1580010459751-OTLWMXCSJ9OZHG31GV6P/42437697_2040356022653875_5778572678428983808_n.jpg?format=500w" alt="Halal Certificate" class="mx-auto mb-4 rounded-2xl shadow w-70">
        <h3 class="text-xl font-semibold mb-2">Halal Certificate</h3>
        <p class="text-gray-600">CanteenXpress is the first Korean canteen in Indonesia to receive an official halal certification from the Indonesian Ulema Council (MUI) on February 13, 2017.</p>
    </div>
  
      <!-- Item 5 -->
      <div class="text-center">
        <img src="https://images.squarespace-cdn.com/content/v1/5dccc025a7ec043789f57f1d/c5d674e0-3335-4b26-a88d-2991cd65557e/Mujigae+3+November+2.png?format=500w" alt="Korean Delivery" class="mx-auto mb-4 rounded-2xl shadow w-70">
        <h3 class="text-xl font-semibold mb-2">CanteenXpress Delivery</h3>
        <p class="text-gray-600">CanteenXpress 61 Online Delivery Outlets in various cities. Ordering your favorite Korean food is now easier and faster than ever.</p>
    </div>
    
    </div>
  
    <div class="text-center mt-10">
      <button class=" text-black px-6 py-2 border  transition my-10 ">MORE ABOUT US</button>
    </div>
  
  
  <!-- Banner Section -->
  <div class="w-full h-96 bg-fixed bg-cover bg-center" style="background-image: url('https://images.squarespace-cdn.com/content/v1/5dccc025a7ec043789f57f1d/1574738191137-YQY9NXR6ANK2C8GBLLGU/banner-2.jpg?format=2500w');">
    <p class="text-white text-center font-bold text-4xl pt-32">
        CanteenXpress
    </p>
  </div>
  
<!-- ===================================== Footer ============================================ -->

@endsection
