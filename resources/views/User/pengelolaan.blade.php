@extends('layouts.app')
@section('content')

{{-----------------------------------------------------------}}
{{--------------------- Card Products -----------------------}}
{{-----------------------------------------------------------}}
<div class="mb-4">
    <label for="category" class="font-semibold ml-[2rem] text-[1.2rem] mr-[1rem] ">Filter by Category</label>
    <select id="category" name="category" class="p-2 border rounded-md mt-[2rem]" onchange="filterCategory()">
        <option value="all">-- All Categories --</option>
        <option value="Drink" >Drinks</option>
        <option value="Food" >Foods</option>
        <option value="Snack">Snacks</option>
    </select>
</div>

<div id="drink" class="hidden">
    <h1 class="font-bold text-[1.5rem] my-[1rem] ml-[2rem] text-[#D1293F]">Drinks</h1>
    <div class="flex flex-wrap justify-start gap-4 p-2">
        @foreach($drinks as $drink)
        <x-card-product :datum="$drink" />
        @endforeach
    </div>
</div>

<div class="hidden" id="food">
    <h1 class="font-bold text-[1.5rem] my-[1rem] ml-[2rem] text-[#D1293F]">Foods</h1>
    <div class="flex flex-wrap justify-start gap-4 p-2">
        @foreach($foods as $food)
        <x-card-product :datum="$food" />
        @endforeach
    </div>
</div>

<div class="hidden" id="snack">
    <h1 class="font-bold text-[1.5rem] my-[1rem] ml-[2rem] text-[#D1293F]">Snacks</h1>
    <div class="flex flex-wrap justify-start gap-4 p-2">
        @foreach($snacks as $snack)

        <x-card-product :datum="$snack" />
        
        @endforeach
    </div>
</div>

<x-form-order/>
@endsection