@extends('layouts.app')
@section('content')
    <div class="main-wrapper w-full flex flex-col bg-white rounded-md py-5 px-5">
        <h2 class="self-center text-xl w-max mb-3">New products</h2>
        @include('components.new-product')
    </div>
@endsection
