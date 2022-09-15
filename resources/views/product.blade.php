@extends('layouts.app')
<style>
    .card {
        padding: 8%;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }
</style>
@section('content')
    <div class="container" style="padding: 50px 10px 50px 10px">


        <div class="row">
            <div class="col-lg-3 product-widget">

                <h5 class="widget_title">
                    product categories
                </h5>
                <ul class="product-categories">

                    @foreach ($product_master as $value)
                        <li class="cat-item">
                            <a href="{{ route('product') }}">
                                {{ $value->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>
            <div class="col-lg-9">
                {{-- <h1 class="text-center"> Cat Name</h1> --}}
                <div class="row mt-5 m-5">
                    @foreach ($product_categories as $product)
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="row">
                                    <h4 class="text-center">{{ $product->name }}</h4>
                                </div>
                                <div class="row ">
                                    <a href="{{ route('view-product', ['id' => $product->id]) }}">
                                        <img src="{{ asset($product->path) }}" class="img-fluid" alt=""
                                            width="400" height="400">
                                    </a>
                                </div>
                                <div class="calss">

                                    <small class="text-center">{{ $product->details }}</small>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row mt-5 m-5 text-center">
                    {!! $product_categories->links() !!}
                </div>
                <br>
                <br>
                <div class="row mt-5 m-5 text-center">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-9">
                                <h3 class="text-left">
                                    RELATED PRODUCT
                                </h3>
                            </div>
                            <div class="col-md-3">
                                <!-- Controls -->
                                <div class="controls pull-right hidden-xs">
                                    <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example-generic"
                                        data-slide="prev">
                                    </a>
                                    <a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example-generic"
                                        data-slide="next">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            @if ($show_silde)
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="row">

                                            @for ($i = 0; $i <= 2; $i++)
                                                <div class="col-sm-4">

                                                    <div class="card mb-2">
                                                        <img class="card-img-top"
                                                            src="{{ asset($related_slide[$i]->path) }}"
                                                            alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title">{{ $related_slide[$i]->name }}</h4>
                                                            <p class="card-text">
                                                                {{ $related_slide[$i]->description }}
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            @for ($i = 3; $i <= 5; $i++)
                                                <div class="col-sm-4">

                                                    <div class="card mb-2">
                                                        <img class="card-img-top"
                                                            src="{{ asset($related_slide[$i]->path) }}"
                                                            alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title">{{ $related_slide[$i]->name }}</h4>
                                                            <p class="card-text">
                                                                {{ $related_slide[$i]->description }}
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
