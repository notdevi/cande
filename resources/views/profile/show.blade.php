@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row float:left">
        <div class="d-flex justify-content-center align-items-center" style="width: calc(33.333% - 1rem); margin-right: 3rem;">
            <img class="rounded-circle" src="https://images.unsplash.com/photo-1513721032312-6a18a42c8763?w=152&h=152&fit=crop&crop=faces" alt="">
            </div>
        <div>
            <h1 class="d-inline-block" style="font-size: 3.2rem; font-weight: 300;">{{ Auth::user()->name }}</h1>
        </div>
    </div>
    <div style="margin-top: 2.3rem">
        <ul>
            <span class="fa fa-star" style="color: orange"></span>
            <span class="fa fa-star" style="color: orange"></span>
            <span class="fa fa-star" style="color: orange"></span>
            <span class="fa fa-star" style="color: orange"></span>
            <span class="fa fa-star"></span>(49)
        </ul>
		<ul>
            <li class="d-inline-block" style="font-size: 1.6rem; margin-right: 2rem;"><span class="font-weight-bold">164</span> posts</li>
			<li class="d-inline-block" style="font-size: 1.6rem; margin-right: 2rem;"><span class="font-weight-bold">188</span> followers</li>
			<li class="d-inline-block" style="font-size: 1.6rem; margin-right: 2rem;"><span class="font-weight-bold">206</span> following</li>
		</ul>
    </div>
    <div class="row justify-content-right mt-4 mb-3">
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
        <button type="button" style="color:  #ffffff " class="bg-secondary btn btn-social-icon btn-facebook btn-ro mr-2 "><i class="fa fa-facebook"></i></button> 
        <button type="button" style="color: #ffffff " class="bg-secondary btn btn-social-icon btn-youtube btn-ro mr-2"><i class="fa fa-youtube"></i></button> 
        <button type="button" style="color: #ffffff " class="bg-secondary btn btn-social-icon btn-twitter btn-ro mr-2"><i class="fa fa-twitter"></i></button> 
        <button type="button" style="color: #ffffff " class="bg-secondary btn btn-social-icon btn-instagram btn-ro mr-2"><i class="fa fa-instagram"></i></button> 
    </div>
    <br>
    <p class=" text-center text-white">Copyright &copy; cande 2020</p>
</footer>
@endsection
