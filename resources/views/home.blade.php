@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4 mb-3">
        @foreach ($items as $item)
        <div class="thumbnail ml-3 mr-3 mb-2">
            <img src="{{ url('assets') }}/{{ $item->picture }}" alt="..." class="">
            <a href="{{ url('detail') }}/{{ $item->id }}" class="">
                <div class="caption">
                    <h4 style="font-weight: bold; color: #000000">Rp {{ number_format($item->price) }}</h4>
                </div>
            </a>
        </div>
        @endforeach
            <div class="thumbnail ml-3 mr-3 mb-2">
                <img src="{{ asset('assets/i2.PNG') }}" alt="..." class="">
                <a href="#" class="">
                    <div class="caption">
                        <h4 style="font-weight: bold; color: #000000">Rp 60.000</h4>
                    </div>
                </a>
            </div>
            <div class="thumbnail ml-3 mr-3 mb-2">
                <img src="{{ asset('assets/i3.PNG') }}" alt="..." class="">
                <a href="#" class="">
                    <div class="caption">
                        <h4 style="font-weight: bold; color: #000000">Rp 90.000</h4>
                    </div>
                </a>
            </div>
            <div class="thumbnail ml-3 mr-3 mb-2">
                <img src="{{ asset('assets/i4.PNG') }}" alt="..." class="">
                <a href="#" class="">
                    <div class="caption">
                        <h4 style="font-weight: bold; color: #000000">Rp 119.000</h4>
                    </div>
                </a>
            </div>
            <div class="thumbnail ml-3 mr-3 mb-2">
                <img src="{{ asset('assets/i5.PNG') }}" alt="..." class="">
                <a href="#" class="">
                    <div class="caption">
                        <h4 style="font-weight: bold; color: #000000">Rp 65.000</h4>
                    </div>
                </a>
            </div>
            <div class="thumbnail ml-3 mr-3 mb-2">
                <img src="{{ asset('assets/i6.PNG') }}" alt="..." class="">
                <a href="#" class="">
                    <div class="caption">
                        <h4 style="font-weight: bold; color: #000000">Rp 80.000</h4>
                    </div>
                </a>
            </div>
            <div class="thumbnail ml-3 mr-3 mb-2">
                <img src="{{ asset('assets/i7.PNG') }}" alt="..." class="">
                <a href="#" class="">
                    <div class="caption">
                        <h4 style="font-weight: bold; color: #000000">Rp 190.000</h4>
                    </div>
                </a>
            </div>
            <div class="thumbnail ml-3 mr-3 mb-2">
                <img src="{{ asset('assets/i9.PNG') }}" alt="..." class="">
                <a href="#" class="">
                    <div class="caption">
                        <h4 style="font-weight: bold; color: #000000">Rp 500.000</h4>
                    </div>
                </a>
            </div>
    </div>
</div>
<footer class="py-2 mt-2 bg-dark text-center">
    <p class=" text-center text-white"> Follow Us :</p>
    <div class="template-demo" style="align-center"> 
        <button type="button" style="color: #ffffff " class="bg-secondary btn btn-social-icon btn-facebook btn-ro mr-2 "><i class="fa fa-facebook"></i></button> 
        <button type="button" style="color: #ffffff " class="bg-secondary btn btn-social-icon btn-youtube btn-ro mr-2"><i class="fa fa-youtube"></i></button> 
        <button type="button" style="color: #ffffff " class="bg-secondary btn btn-social-icon btn-twitter btn-ro mr-2"><i class="fa fa-twitter"></i></button> 
        <button type="button" style="color: #ffffff " class="bg-secondary btn btn-social-icon btn-instagram btn-ro mr-2"><i class="fa fa-instagram"></i></button> 
    </div>
    <br>
    <p class=" text-center text-white">Copyright &copy; cande 2020</p>
</footer>
@endsection
