@extends('layouts.app')
@section('content')
    <div class="main-wrapper w-full flex flex-col bg-white rounded-md py-5 px-5">
        <h2 class="self-center text-xl w-max mb-3">New products</h2>
        @include('components.new-product')
    </div>
    <div class="main-wrapper w-full flex flex-col bg-white rounded-md py-5 px-5 mt-5">
        <h2 class="self-center text-xl w-max mb-3">For home</h2>
        @include('components.home')
    </div>
    <div class="main-wrapper w-full flex flex-col bg-white rounded-md py-5 px-5 mt-5">
        <h2 class="self-center text-xl w-max mb-3">Cars</h2>
        @include('components.cars')
    </div>
    <div class="main-wrapper w-full flex flex-col bg-white rounded-md py-5 px-5 mt-5">
        <h2 class="self-center text-xl w-max mb-3">Dresses</h2>
        @include('components.dresses')
    </div>
    <div class="main-wrapper w-full flex flex-col bg-white rounded-md py-5 px-5 mt-5">
        <h2 class="self-center text-xl w-max mb-3">Electronics</h2>
        @include('components.electronics')
    </div>
    <div class="main-wrapper w-full flex flex-col bg-white rounded-md py-5 px-5 mt-5">
        <h2 class="self-center text-xl w-max mb-3">Pets</h2>
        @include('components.pets')
    </div>
    <div class="main-wrapper w-full flex flex-col bg-white rounded-md py-5 px-5 mt-5">
        <h2 class="self-center text-xl w-max mb-3">Sport</h2>
        @include('components.sport')
    </div>
@endsection
