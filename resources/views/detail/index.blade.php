@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="
    background-color: #ffffff;
    padding: 2rem 1rem 2rem 1rem;
    box-shadow: 0 0 5px 5px rgba(0,0,0,.05);
    opacity: 0.95;">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ $item->item_name }}</li>
                </ol>
              </nav>
        </div>
        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/i1.PNG') }}" width="500" alt="">
                        </div>
                        <div class="col-md-6 mt-4 mb-4">
                            <h2>{{ $item->item_name }}</h2>
                            <h6>Sold by : {{ $item->user_id }}</h6>
                            <br>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp {{ number_format($item->price) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Stock</td>
                                        <td>:</td>
                                        <td>{{ number_format($item->Stock) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>:</td>
                                        <td>{{ $item->description }}</td>
                                    </tr>
                                    <form action="" method="post">
                                        <tr>
                                            <td>Qty</td>
                                            <td>:</td>
                                            <td>
                                                <form action="{{ url('pesan') }}/{{ $item->id }}" method="POST">
                                                @csrf
                                                <input type="text" name="order_qty" class="form-control" required>
                                                <button type="submit" class="mt-3 btn btn-warning" style="border-radius: 10px;"> <i class="fa fa-shopping-cart"></i>  Add to Cart</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </form>
                                </tbody>
                            </table>
                            <form action="" method="POST">
                                <h5>Too expensive? try bargain. Insert your desired price here</h5>
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with checkbox">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection