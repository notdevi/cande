@extends('layouts.app')

@section('content')
<div style="color: black;">
    <div class="content" style="position: absolute;
    margin-top: 100px;
    margin-left: 7%;">

        <h1 style="font-weight: bold;">BUY. SELL.</h1>
        <h1 style="font-weight: bold;">DISCOVER UNIQUE FASHION</h1>
        <h5 style="font-style: italic;">designer, preloved, streetwear, one and only</h5>
        <h5 style="font-style: italic;">whatever you wear, find it on cande</h5>
            
<<<<<<< HEAD
        <input style="background-color: black; color: white; font-weight: bold;" class="button btn" 
        type="button" value="Shop Now" onclick="location.href='{{ url('home') }}'">
=======
        <input style="background-color: black; color: white; font-weight: bold;" class="button btn" type="button" value="Shop Now" onclick="location.href='{{ url('home') }}'">
>>>>>>> b2decccfb26f8abb4f5ba68667d99ebbdac8aa74
    </div>

    <img style="width: 100%; height: 400px;" src="<?php echo asset('assets/home-bg.png')?>" alt="">
</div>

<div class="container" style="margin-bottom: 3%; color: black;">
    <div class="d-flex" style="margin-top: 3%;">
        <img style="width: 350px" src="<?php echo asset('assets/home-1.jpg')?>" alt="">
        
        <div style="width: 60%;
        margin: auto;
        margin-left: 60px; 
        object-position: center;">

            <h2 style="font-weight: bold;">What is cande</h2>
            <p style="font-size: 16.5px;">
                Cande is a clothing marketplace website where the next generation come to discover
                unique items sold by our community. With a national community buying, selling, 
                connecting to make clothing more inclusive, diverse and less wasteful
            </p>
        </div>
    </div>

    <div class="d-flex" style="margin-top: 3%;">
        <div style="width: 60%;
        text-align: right;
        margin: auto;
        margin-left: 10%;
        margin-right: 60px;">

            <h2 style="font-weight: bold;">Sell your clothing</h2>
            <p style="font-size: 16.5px;">
                Sell a few items or build your brand. Whatever your vibe we'll give
                you some tips to become a pro. Sign up now
            </p>

            <input style="background-color: black; color: white; font-weight: bold;" 
            class="button btn" type="button" value="Sign Up" onclick="location.href='{{ route('register') }}'">
        </div>

        <img style="width: 350px;" src="<?php echo asset('assets/home-2.jpg')?>" alt="">
    </div>

</div>

<footer class="py-2 mt-2 bg-dark text-center">
    <p class="text-center text-white"> Follow Us :</p>
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
