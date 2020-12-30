@extends('layouts.app')

@section('content')
<div class="container">
    <h3 style="font-weight: bold;">Admin's Dashboard</h3>

    <div class="row">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <table class="table" style="line-height: 10px;">
                    <tbody>
                        <tr>
                            <td>
                                <p>Buyer: Marsha Nabilah</p>
                                <p>Seller: Devi Hainun Pasya</p>
                                <br>
                                <p style="font-style: italic;">Items:</p>
                                <p style="font-style: italic;">2 Celana Training Biru</p>
                                <p style="font-style: italic;">1 Checkered Pants</p>
                                <br>
                                <h5 style="font-weight: bold;">Rp 410.000</h5>

                                <input style="background-color: green; color: white; font-weight: bold; margin: auto;" 
                                class="button btn mr-0" type="button" value="Confirmed" href="#">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p>Buyer: Anisa Aura</p>
                                <p>Seller: Marsha Nabilah</p>
                                <br>
                                <p style="font-style: italic;">Items:</p>
                                <p style="font-style: italic;">1 Grey Hoddie</p>
                                <br>
                                <h5 style="font-weight: bold;">Rp 190.000</h5>

                                <input style="background-color: grey; color: white; font-weight: bold; margin: auto;" 
                                class="button btn mr-0" type="button" value="Waiting" href="#">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

