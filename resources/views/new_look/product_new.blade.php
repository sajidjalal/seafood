@extends('new_look.app')
@section('content')
    <!-- banner -->
    <div class="banner" style="background-image: url(new_look/images/product/products.jpg);">
        <div class="banner-caption">
            <h2>Products</h2>
        </div>
    </div>
    <!-- /banner -->

    <!-- intro -->
    <section class="pad">
        <div class="container">
            <!-- tab-container -->
            <div class="tab-container">
                <div id="verticalTab">
                    <ul class="resp-tabs-list">
                        @foreach ($product_master as $key => $value)
                            <li> {{ $value->name }} </li>
                        @endforeach
                    </ul>
                    <!-- resp-tabs-container -->



                    <div class="resp-tabs-container">

                        @foreach ($product_master as $key => $value)
                            <!-- tab $key start-->
                            @php
                                $dynamic_product_categories = $dynamic_name . $key;
                            @endphp

                            <div>

                                <div class="row">
                                    <div class="row">
                                        @foreach ($dynamic_category[$dynamic_product_categories] as $key_inner => $value)
                                            <div class="pro-inn-wrp">
                                                <div class="pro-img">
                                                    <img
                                                        src="{{ asset(API_LINK . 'storage/uploads/categoryProductImages/' . $value->path) }}"alt="">
                                                </div>
                                                <div class="pro-cent-wrp">
                                                    <div class="pro-cnt">
                                                        <h3>{{ $value->name }}</h3>
                                                        <h3></h3>
                                                        <h5>Forms: {{ $value->forms }}</h5>
                                                        <div class="hide-cont">
                                                            <h4><b>Scientific name:</b> {{ $value->scientific_name }}</h4>
                                                            <h4>
                                                                <b>Size:</b> {{ $value->order_size }}
                                                            </h4>
                                                            <h4>
                                                                <b>Packing:</b> {{ $value->packing }}
                                                            </h4>
                                                            <h4>
                                                                <b>Origin:</b> {{ $value->origin }}
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <i class="fa-solid fa-arrow-down-long"></i>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- tab $key End-->
                        @endforeach


                    </div>
                </div>
                <!-- tab-container -->
            </div>
    </section>
    <!-- /intro -->
    <script type='text/javascript' src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
@endsection
