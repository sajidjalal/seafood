@extends('new_look.app')
@section('content')
    <!-- banner -->

    <div class="banner" style="background-image: url(new_look/images/product/products.jpg);">
        <div class="banner-caption">
            <h2>Products</h2>
            <!-- <h4><a href="https://bluewatersllcdubai.com/">Home</a> | <span>Products</span></h4>    -->
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
                        <li>Crustaceans</li>
                        <li>Cephalopds</li>
                        <li>Marine water fishes</li>
                        <li>Freshwater fishes</li>
                        {{-- <li>Tropical Fishes</li> --}}
                        {{-- <li>Cold Water Fishes</li> --}}
                        {{-- <li>Specialty Products</li>  --}}
                    </ul>
                    <!-- resp-tabs-container -->
                    <div class="resp-tabs-container">
                        <div>
                            <div class="row">
                                <div class="row">
                                    <!-- tab 01 start-->
                                    @foreach ($product_categories_crustaceans as $key => $value)
                                        <div class="pro-inn-wrp">
                                            <div class="pro-img">
                                                <img src="{{ asset($value->path) }}"alt="">
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
                                    <!-- tab 01 ends-->
                                </div>
                            </div>
                            <!-- /tab 01 -->
                        </div>
                        <div>
                            <div class="row">
                            </div>
                        </div>
                        <div>
                            <div class="row">
                            </div>
                        </div>
                        <div>
                            <div class="row">
                            </div>
                        </div>
                        <div>
                            <div class="row">
                            </div>
                        </div>
                        <!-- /resp-tabs-container -->
                    </div>
                </div>
                <!-- tab-container -->
            </div>
    </section>
    <!-- /intro -->
@endsection
