@extends('layouts.app')

@section('content')
<div class="container">

    <h3 style="font-weight: bold;">Shopping Cart</h3>

    <div class="d-flex">
        <div class="card" style="width: 66%;">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="card" style="width: 34%;
        border-color= red;
        margin-right: 0;
        margin-left: 3%;">

            <h4 style="font-weight: bold; color: red; margin: 20px 20px 20px">Subtotal :</h4>
            <p></p>

            <input style="background-color: red; color: white; font-weight: bold; margin: auto;" 
            class="button btn mb-4" type="button" value="Checkout" href="#">
        </div>
    </div>
</div>

<footer class="py-2 mt-2 bg-dark text-center fixed-bottom">
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
