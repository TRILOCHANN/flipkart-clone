@extends('layouts.app')


@section('content')
    <div class="container p-5 my-5 border bg-white">
        <div>
            <img src="{{ asset('image/Nocart.png') }}" alt="" class="rounded mx-auto w-20 ">
        </div>
        <h2 class="text-center p-2">Missing Cart Items?</h2>
        <div class="block text-center">
            <a href="{{ route('Loginpage') }}"
                style="padding:5px; background: rgb(246, 148, 44); width:20px; text-align: center; border-radius: 7px;">Login</a>
        </div>
        <div class="block text-center">
            <a href="{{ url('/') }}" style="text-align: center; font-size: 10px;color:rgb(43, 43, 238)">Continue
                Shopping</a>
        </div>
    </div>
@endsection
