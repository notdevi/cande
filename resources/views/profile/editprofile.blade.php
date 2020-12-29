@extends('layouts.app')

@section('content')
<div class="bg-white">
    <div class="container rounded bg-s mt-5 text-dark">
        <div class="row text-dark">
            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Edit Profile</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Name</label><b class="form-control">{{ Auth::user()->name }}</b></div>
                        <div class="col-md-12"><label class="labels">Username</label><b class="form-control">{{ Auth::user()->username }}</b></div>
                        <div class="col-md-12"><label class="labels">Email</label><b class="form-control">{{ Auth::user()->email }}</b></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center py-0" ><img style="width: 300px; height:300px"src="https://cdn4.iconfinder.com/data/icons/instagram-ui-twotone/48/Paul-18-512.png">
                <span class="font-weight-bold">{{ Auth::user()->name }}</span></div>
            <div class="row mt-3 justify-content-center">
                <div class="mt-5 text-center mr-2"><button class="btn btn-warning" type="button">Confirm</button></div>
                <div class="mt-5 text-center"><button class="btn btn-danger" type="button">Cancel</button></div>
            </div>
            </div>
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


