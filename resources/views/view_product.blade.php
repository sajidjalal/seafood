@extends('layouts.app')
@section('content')
    <div class="container" style="padding: 50px 10px 50px 10px">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="product-image-slider d-flex flex-column">
                    <!--Product Tab Content Start-->
                    <div class="tab-content product-large-image-list">
                        <div class="single-product-img ">
                            <img src="{{ asset($product_categories->path) }}" height="400" width="400" alt="">
                        </div>
                    </div>
                    <!--Product Content End-->
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="product-details-text">
                    <h3>{{ $product_categories->name }}</h3>
                    <p>{{ $product_categories->description }}</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container" style="padding: 50px 10px 50px 10px">
        <div class="row">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center" style="font-size: 24px;">Specification</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Price of product ( USD price or FOB price)</td>
                            <td>USD 6500 -16000 PER MT</td>
                        </tr>
                        <tr>
                            <td>Product origin</td>
                            <td>INDIA (MAHARASHTRA,GOA,GUJRAT,KERALA,ANDHRAPRADESH,TAMILNADU)</td>
                        </tr>
                        <tr>
                            <td>Key Specifications/Special Features</td>
                            <td>Port Of Loading: ANY PORT IN INDIA Payment Term : LC OR TT Delivery Time Shipment 07-10
                                DAY AFTER CONFIRMATION .</td>
                        </tr>
                        <tr>
                            <td>Minimum Order Size and Packgaing details</td>
                            <td>Packing 5,10,20,25,40,50 Kg Bag , Minimum Order Quantity20 feet container.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
