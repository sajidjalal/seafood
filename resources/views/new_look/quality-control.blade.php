@extends('new_look.app')


@section('content')
    <!-- banner -->
    <div class="banner" style="background-image: url(new_look/images/banner.webp);">

        <div class="banner-caption">
            <h2>QUALITY CONTROL</h2>
        </div>
    </div>
    <!-- /banner -->

    <!--section-content -->
    <section class="introduction  black-bg pad100">
        <div class="black-wave-bg"></div>
        <div class="container">
            <div class="row">
                <p></p>
                <p></p>
                <p class="font-17">
                    {{ COMPANY_FULL_NAME }} has a stringent audit and selection process for qualifying vendors. Every
                    product sourced by passes through continuous quality control monitoring process. We clearly understand
                    the importance of Quality Control and our talented Quality Assurance officers make sure that products
                    are sourced from enterprises having HACCP, BRC, USFDA, ISO, and SQF quality standards. At
                    {{ COMPANY_FULL_NAME }}, we cover online quality monitoring methods. We coordinate with vendors to
                    follow statutory specifications and ensure adherence to quality expectations and standards of buyers.
                </p>
            </div>
        </div>
        </div>
    </section>

    <!-- /intro -->
@endsection
