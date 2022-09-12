@extends('layouts.app')

@section('content')
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1471943051920 {
            background-color: #f5f5f5 !important;
        }


        .vc_custom_1472383334820 {
            background-image: url('images/front_end/bg_promo2.jpg') !important;
        }

        .vc_custom_1473056086908 {
            background-color: #ffffff !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1472372807079 {
            padding-top: 3.75em !important;
            padding-bottom: 0.5em !important;
            background-image: url('images/front_end/bg_counters.jpg') !important;
        }

        .vc_custom_1472383565565 {
            background-color: #f5f5f5 !important;
        }

        .vc_custom_1472283367687 {
            background-image: url('images/front_end/bg_parallax3.jpg') !important;
        }

        .vc_custom_1471941903248 {
            background-image: url('images/front_end/bg_clients.webp') !important;
        }
    </style>
    <section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_home-1">

        <!-- START Home 1 REVOLUTION SLIDER 6.5.11 -->
        <p class="rs-p-wp-fix"></p>
        <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery"
            style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;max-width:;">
            <rs-module id="rev_slider_1_1" style="" data-version="6.5.11">
                <rs-slides>

                    <rs-slide style="position: absolute;" data-key="rs-1" data-title="Slide"
                        data-thumb=" {{ asset('images/front_end/slider/slides_1-100x50.jpg') }} " data-in="o:0;"
                        data-out="a:false;">

                        <img src="{{ asset('images/front_end/slider/dummy.webp') }}" title="Home 2"
                            class="rev-slidebg tp-rs-img rs-lazyload"
                            data-lazyload="{{ asset('images/front_end/slider/slides_1.jpg') }}" data-no-retina>

                        <rs-layer id="slider-1-slide-1-layer-1" class="Slider-Title" data-type="text"
                            data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:c;y:338px;"
                            data-text="s:52;l:52;a:center;" data-frame_0="o:1;"
                            data-frame_0_chars="d:10;x:-105%;o:1;rX:0deg;rY:0deg;rZ:-90deg;" data-frame_0_mask="u:t;"
                            data-frame_1="e:power4.inOut;st:500;sp:1000;" data-frame_1_chars="d:10;"
                            data-frame_1_mask="u:t;" data-frame_999="o:0;e:nothing;st:w;"
                            style="z-index:5;font-family:'Montserrat';text-transform:uppercase;">The wonders of
                            the ocean
                        </rs-layer>

                        <rs-layer id="slider-1-slide-1-layer-2" class="Slider-Subtitle" data-type="text"
                            data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:c;y:400px;"
                            data-text="s:21;l:22;a:center;" data-vbility="t,t,t,f" data-frame_0="o:1;"
                            data-frame_0_chars="d:10;x:-105%;o:1;rX:0deg;rY:0deg;rZ:-90deg;" data-frame_0_mask="u:t;"
                            data-frame_1="e:power4.inOut;st:2500;sp:1000;" data-frame_1_chars="d:10;"
                            data-frame_1_mask="u:t;" data-frame_999="o:0;e:nothing;st:w;"
                            style="z-index:6;font-family:'Montserrat';text-transform:uppercase;">on your plate
                        </rs-layer>

                    </rs-slide>

                    <rs-slide style="position: absolute;" data-key="rs-3" data-title="Slide"
                        data-thumb="{{ asset('images/front_end/slider/slides_2-100x50.jpg') }}" data-in="o:0;"
                        data-out="a:false;">
                        <img src="{{ asset('images/front_end/slider/dummy.webp') }}" title="Home 2"
                            class="rev-slidebg tp-rs-img rs-lazyload"
                            data-lazyload="{{ asset('images/front_end/slider/slides_2.jpg') }}" data-no-retina>

                        <rs-layer id="slider-1-slide-3-layer-1" class="Slider-Title" data-type="text"
                            data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:c;y:338px;"
                            data-text="s:52;l:52;a:center;" data-frame_0="o:1;"
                            data-frame_0_chars="d:10;x:-105%;o:1;rX:0deg;rY:0deg;rZ:-90deg;" data-frame_0_mask="u:t;"
                            data-frame_1="e:power4.inOut;st:500;sp:1000;" data-frame_1_chars="d:10;"
                            data-frame_1_mask="u:t;" data-frame_999="o:0;e:nothing;st:w;"
                            style="z-index:5;font-family:'Montserrat';text-transform:uppercase;">
                            Ocean variety, pond price
                        </rs-layer>

                        <rs-layer id="slider-1-slide-3-layer-2" class="Slider-Subtitle" data-type="text"
                            data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:c;y:400px;"
                            data-text="s:21;l:22;a:center;" data-vbility="t,t,t,f" data-frame_0="o:1;"
                            data-frame_0_chars="d:10;x:-105%;o:1;rX:0deg;rY:0deg;rZ:-90deg;" data-frame_0_mask="u:t;"
                            data-frame_1="e:power4.inOut;st:2500;sp:1000;" data-frame_1_chars="d:10;"
                            data-frame_1_mask="u:t;" data-frame_999="o:0;e:nothing;st:w;"
                            style="z-index:6;font-family:'Montserrat';text-transform:uppercase;">in our store
                        </rs-layer>

                    </rs-slide>
                    <rs-slide style="position: absolute;" data-key="rs-2" data-title="Slide"
                        data-thumb=" {{ asset('images/front_end/slider/slides_3-100x50.jpg') }} " data-in="o:0;"
                        data-out="a:false;">
                        <img src="{{ asset('images/front_end/slider/dummy.webp') }}" title="Home 2"
                            class="rev-slidebg tp-rs-img rs-lazyload"
                            data-lazyload="{{ asset('images/front_end/slider/slides_3.jpg') }}" data-no-retina>

                        <rs-layer id="slider-1-slide-2-layer-1" class="Slider-Title" data-type="text"
                            data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:c;y:338px;"
                            data-text="s:52;l:52;a:center;" data-frame_0="o:1;"
                            data-frame_0_chars="d:10;x:-105%;o:1;rX:0deg;rY:0deg;rZ:-90deg;" data-frame_0_mask="u:t;"
                            data-frame_1="e:power4.inOut;st:500;sp:1000;" data-frame_1_chars="d:10;"
                            data-frame_1_mask="u:t;" data-frame_999="o:0;e:nothing;st:w;"
                            style="z-index:5;font-family:'Montserrat';text-transform:uppercase;">
                            The place to be for seafood
                        </rs-layer>

                        <rs-layer id="slider-1-slide-2-layer-2" class="Slider-Subtitle" data-type="text"
                            data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:c;y:400px;"
                            data-text="s:21;l:22;a:center;" data-vbility="t,t,t,f" data-frame_0="o:1;"
                            data-frame_0_chars="d:10;x:-105%;o:1;rX:0deg;rY:0deg;rZ:-90deg;" data-frame_0_mask="u:t;"
                            data-frame_1="e:power4.inOut;st:2500;sp:1000;" data-frame_1_chars="d:10;"
                            data-frame_1_mask="u:t;" data-frame_999="o:0;e:nothing;st:w;"
                            style="z-index:6;font-family:'Montserrat';text-transform:uppercase;">
                            at the restaurant
                        </rs-layer>

                    </rs-slide>
                </rs-slides>
            </rs-module>
            <script type="text/javascript">
                setREVStartSize({
                    c: 'rev_slider_1_1',
                    rl: [1240, 1024, 778, 480],
                    el: [785],
                    gw: [1240],
                    gh: [785],
                    type: 'standard',
                    justify: '',
                    layout: 'fullwidth',
                    mh: "0"
                });
                if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules[
                        "revslider11"] !== undefined) {
                    window.RS_MODULES.modules["revslider11"].once = false;
                    window.revapi1 = undefined;
                    if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal()
                }
            </script>
        </rs-module-wrap>
        <!-- END REVOLUTION SLIDER -->
    </section>

    <div class="page_content_wrap page_paddings_no">
        <div class="content_wrap">
            <div class="content">
                <article
                    class="itemscope post_item post_item_single post_featured_default post_format_standard post-293 page type-page status-publish hentry"
                    itemscope itemtype="//schema.org/Article">
                    <section class="post_content" itemprop="articleBody">
                        <div class="vc_row wpb_row vc_row-fluid inverse_colors">
                            <div class="wpb_column vc_column_container vc_col-sm-12 ">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper add_space">
                                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4 banners_section margin_top_large margin_bottom_large"
                                            data-equal-height=".sc_column_item">

                                            <div class="container add_space ">
                                                <div class="row">
                                                    <div class="col-md-3 ">
                                                        <div class="sc_section aligncenter"
                                                            style="background-image:url('images/front_end/home_page/bg_feature1.jpg');background-repeat:no-repeat;background-size:cover;height:318px;">
                                                            <a class="sc_section_link" href="javascript:void(0)">
                                                                <div class="sc_section_inner">
                                                                    <div class="sc_section_overlay" style="">
                                                                        <div class="sc_section_content padding_on"
                                                                            style="height:318px;">
                                                                            <div class="sc_section_content_wrap add_space">

                                                                                <h2 class="sc_title sc_title_regular margin_top_huge margin_bottom_tiny"
                                                                                    style="color:#ffffff;">
                                                                                    Leader
                                                                                </h2>

                                                                                <span class="sc_highlight">
                                                                                    Seafood
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">

                                                        <div class="sc_section aligncenter"
                                                            style="background-image:url('images/front_end/home_page/bg_feature2.jpg');background-repeat:no-repeat;background-size:cover;height:318px;">
                                                            <a class="sc_section_link" href="javascript:void(0)">
                                                                <div class="sc_section_inner">
                                                                    <div class="sc_section_overlay" style="">
                                                                        <div class="sc_section_content padding_on"
                                                                            style="height:318px;">
                                                                            <div class="sc_section_content_wrap add_space">
                                                                                <h2 class="sc_title sc_title_regular margin_top_huge margin_bottom_tiny"
                                                                                    style="color:#ffffff;">
                                                                                    Partner
                                                                                </h2>
                                                                                <span class="sc_highlight">
                                                                                    Sustainable
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-3">

                                                        <div class="sc_section aligncenter"
                                                            style="background-image:url('images/front_end/home_page/bg_feature3.jpg');background-repeat:no-repeat;background-size:cover;height:318px;">
                                                            <a class="sc_section_link" href="javascript:void(0)">
                                                                <div class="sc_section_inner">
                                                                    <div class="sc_section_overlay" style="">
                                                                        <div class="sc_section_content padding_on"
                                                                            style="height:318px;">
                                                                            <div class="sc_section_content_wrap add_space">
                                                                                <h2 class="sc_title sc_title_regular margin_top_huge margin_bottom_tiny"
                                                                                    style="color:#ffffff;">
                                                                                    Product
                                                                                </h2>
                                                                                <span class="sc_highlight">
                                                                                    World class
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">


                                                        <div class="sc_section aligncenter"
                                                            style="background-image:url('images/front_end/home_page/bg_feature4.jpg');background-repeat:no-repeat;background-size:cover;height:318px;">
                                                            <a class="sc_section_link" href="javascript:void(0)">
                                                                <div class="sc_section_inner">
                                                                    <div class="sc_section_overlay" style="">
                                                                        <div class="sc_section_content padding_on"
                                                                            style="height:318px;">
                                                                            <div class="sc_section_content_wrap add_space">
                                                                                <h2 class="sc_title sc_title_regular margin_top_huge margin_bottom_tiny"
                                                                                    style="color:#ffffff;">
                                                                                    Quality
                                                                                </h2>
                                                                                <span class="sc_highlight">
                                                                                    Contorl
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1471943051920 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper add_space">

                                        <div class="sc_section margin_top_large margin_bottom_large ">
                                            <div class="sc_section_inner ">
                                                <h6 class="sc_section_subtitle sc_item_subtitle">Welcome</h6>
                                                <h2 class="sc_section_title sc_item_title sc_item_title_without_descr">
                                                    {{ COMPANY_NAME }}
                                                </h2>
                                                <div class="sc_section_content_wrap">
                                                    <div class="sc_promo sc_promo_size_large">
                                                        <div class="sc_promo_inner">
                                                            <div class="sc_promo_image"
                                                                style="background-image:url('images/front_end/home_page/bg_welcome.jpg');width:60%;right: 0;">
                                                            </div>
                                                            <div class="sc_promo_block sc_align_left"
                                                                style="width: 40%; float: left;background-image:url('images/front_end/home_pagemap_bg.webp'); background-repeat:no-repeat;background-size:cover;">
                                                                <div class="sc_promo_block_inner">
                                                                    <h2
                                                                        class="sc_promo_title sc_item_title sc_item_title_with_descr">
                                                                        Our Seafood</h2>
                                                                    <div class="sc_promo_descr sc_item_descr">
                                                                        With expertise and strong relationships with the
                                                                        vendors we built over the years, Aljunaid Seafood,
                                                                        Mr. Parvez Jagirdar(Proprietor) has established a
                                                                        strong foothold in the Indian marke
                                                                    </div>
                                                                    <div class="sc_promo_button sc_item_button hidden">
                                                                        <a href="/recipes/"
                                                                            class="sc_button sc_button_square sc_button_style_border sc_button_size_small">learn
                                                                            more</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1472383334820 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="sc_intro">
                                            <div class="sc_intro_inner  sc_intro_style_3">
                                                <div class="sc_intro_content">
                                                    <h2 class="sc_intro_title">We Offer first Class Shrimps
                                                    </h2>
                                                    <div class="sc_intro_descr">We guarantee you the best
                                                        seafood, delivered daily to our dock, prepared to your
                                                        liking. Our focus is on serving the absolute freshest
                                                        fish and seafood.</div>
                                                    <div class="sc_intro_buttons sc_item_buttons hidden">
                                                        <div class="sc_intro_button sc_item_button"><a href="/shop/"
                                                                class="sc_button sc_button_square sc_button_style_filled sc_button_size_medium">SHOP
                                                                NOW</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper add_space">

                                        <div id="sc_services_1077200349_wrap" class="sc_services_wrap">
                                            <div id="sc_services_1077200349"
                                                class="sc_services sc_services_style_services-1 sc_services_type_images  margin_top_large margin_bottom_medium"
                                                style="width:100%;">
                                                <h6 class="sc_services_subtitle sc_item_subtitle">About</h6>
                                                <h2 class="sc_services_title sc_item_title sc_item_title_without_descr">
                                                    Our Advantages</h2>
                                                <div class="sc_columns columns_wrap">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div id="sc_services_1077200349_1"
                                                                class="sc_services_item sc_services_item_1 odd first">
                                                                <div class="sc_services_item_featured post_featured">
                                                                    <div class="post_thumb"
                                                                        data-image="{{ asset('images/front_end/home_page/service-4.jpg') }}"
                                                                        data-title="Responsibly Sourced">
                                                                        <a class="hover_icon hover_icon_link"
                                                                            href="/services/responsibly-sourced/"><img
                                                                                class="wp-post-image" width="540"
                                                                                height="432" alt="Responsibly Sourced"
                                                                                src="{{ asset('images/front_end/home_page/service-4-540x432.jpg') }}"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_services_item_content">
                                                                    <h5 class="sc_services_item_title"><a
                                                                            href="/services/responsibly-sourced/">Responsibly
                                                                            Sourced</a></h5>
                                                                    <div class="sc_services_item_description">
                                                                        <p>Responsibly-sourced seafood is the key to
                                                                            the modern, safe and profitable seafood
                                                                            industry.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div id="sc_services_1077200349_2"
                                                                class="sc_services_item sc_services_item_2 even">
                                                                <div class="sc_services_item_featured post_featured">
                                                                    <div class="post_thumb"
                                                                        data-image="{{ asset('images/front_end/home_page/service-3.jpg') }}"
                                                                        data-title="Environment">
                                                                        <a class="hover_icon hover_icon_link"
                                                                            href="/services/environment/"><img
                                                                                class="wp-post-image" width="540"
                                                                                height="432" alt="Environment"
                                                                                src="{{ asset('images/front_end/home_page/service-3-540x432.jpg') }}"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_services_item_content">
                                                                    <h5 class="sc_services_item_title"><a
                                                                            href="/services/environment/">Environment</a>
                                                                    </h5>
                                                                    <div class="sc_services_item_description">
                                                                        <p>The seafood industry has a concern over
                                                                            climate impact, and takes responsibility
                                                                            in any case.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div id="sc_services_1077200349_3"
                                                                class="sc_services_item sc_services_item_3 odd">
                                                                <div class="sc_services_item_featured post_featured">
                                                                    <div class="post_thumb"
                                                                        data-image="{{ asset('images/front_end/home_page/service-2.jpg') }}"
                                                                        data-title="Staff">
                                                                        <a class="hover_icon hover_icon_link"
                                                                            href="/services/staff/">
                                                                            <img class="wp-post-image" width="540"
                                                                                height="432" alt="Staff"
                                                                                src="{{ asset('images/front_end/home_page/service-2-540x432.jpg') }}"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_services_item_content">
                                                                    <h5 class="sc_services_item_title"><a
                                                                            href="/services/staff/">Staff</a>
                                                                    </h5>
                                                                    <div class="sc_services_item_description">
                                                                        <p>Our experts work hard to maintain the
                                                                            quality seafood for our dear customers
                                                                            exclusively.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div id="sc_services_1077200349_4"
                                                                class="sc_services_item sc_services_item_4 even">
                                                                <div class="sc_services_item_featured post_featured">
                                                                    <div class="post_thumb"
                                                                        data-image="{{ asset('images/front_end/home_page/service-1.jpg') }}"
                                                                        data-title="Marketplace">
                                                                        <a class="hover_icon hover_icon_link"
                                                                            href="/services/marketplace/">
                                                                            <img class="wp-post-image" width="540"
                                                                                height="432" alt="Marketplace"
                                                                                src="{{ asset('images/front_end/home_page/service-1-540x432.jpg') }}"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_services_item_content">
                                                                    <h5 class="sc_services_item_title"><a
                                                                            href="/services/marketplace/">Marketplace</a>
                                                                    </h5>
                                                                    <div class="sc_services_item_description">
                                                                        <p>Your business becomes benefitial by
                                                                            providing the customers with the best.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div><!-- /.sc_services -->
                                        </div><!-- /.sc_services_wrap -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                            class="vc_row wpb_row vc_row-fluid vc_row-no-padding inverse_colors">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div id="sc_googlemap_440941345_wrap" class="sc_googlemap_wrap">
                                            <div id="sc_googlemap_440941345" class="sc_googlemap"
                                                style="width:100%;height:398px;" data-zoom="11" data-style="inverse">
                                                <iframe src="{{ CONTACT_MAP }}" scrolling="no" marginheight="0"
                                                    marginwidth="0" frameborder="0" aria-label=""></iframe>
                                            </div>
                                            <div class="sc_googlemap_content hidden">
                                                <div class="sc_section"
                                                    style="color:#ffffff;background-image:url('images/front_end/home_page/map_bg.webp');background-repeat:no-repeat;background-size:cover;">
                                                    <div class="sc_section_inner">
                                                        <div class="sc_section_overlay" style="">
                                                            <div class="sc_section_content padding_on" style="">
                                                                <div class="sc_section_content_wrap">
                                                                    <h5 class="sc_title sc_title_regular margin_top_small"
                                                                        style="color:#ffffff;font-size:2.143em;">
                                                                        Consider the Source</h5>
                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                        <div class="wpb_wrapper">
                                                                            <p>Lorem ipsum dolor sit amet,
                                                                                consectetuer adipiscing elit.
                                                                                Aenean commodo ligula eget
                                                                                dolor. Aenean massa. Cum sociis
                                                                                natoque penatibus et magnis dis
                                                                                parturient montes, nascetur
                                                                                ridiculus mus.</p>

                                                                        </div>
                                                                    </div>
                                                                    <a href="https://www.google.com/maps/" target="_blank"
                                                                        class="sc_button sc_button_square sc_button_style_border sc_button_size_small margin_top_small">view
                                                                        Sourcing map</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1473056086908 vc_row-has-fill hidden">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper add_space">

                                        <div id="sc_services_514771103_wrap" class="sc_services_wrap">

                                            <div id="sc_services_514771103"
                                                class="sc_services sc_services_style_services-2 sc_services_type_icons  margin_top_large margin_bottom_small"
                                                style="width:100%;">
                                                <h6 class="sc_services_subtitle sc_item_subtitle">our</h6>
                                                <h2 class="sc_services_title sc_item_title sc_item_title_without_descr">
                                                    Full Service</h2>
                                                <div class="sc_columns columns_wrap">

                                                    <div class="row">
                                                        <div class="col-md-4">

                                                            <div id="sc_services_514771103_1"
                                                                class="sc_services_item sc_services_item_1 odd first">
                                                                <a href="/services/global-network/"><span
                                                                        class="sc_icon icon-icon_5"></span></a>
                                                                <div class="sc_services_item_content">
                                                                    <h6 class="sc_services_item_title"><a
                                                                            href="/services/global-network/">Global
                                                                            Network</a></h6>
                                                                    <div class="sc_services_item_description">
                                                                        <p>Learn about our world wide net. Become a
                                                                            partner or a client.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-4">
                                                            <div id="sc_services_514771103_2"
                                                                class="sc_services_item sc_services_item_2 even">
                                                                <a href="/services/logistics/"><span
                                                                        class="sc_icon icon-icon_6"></span></a>
                                                                <div class="sc_services_item_content">
                                                                    <h6 class="sc_services_item_title"><a
                                                                            href="/services/logistics/">Logistics</a>
                                                                    </h6>
                                                                    <div class="sc_services_item_description">
                                                                        <p>One if the most important factors. Always
                                                                            fresh, always in time.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div id="sc_services_514771103_3"
                                                                class="sc_services_item sc_services_item_3 odd">
                                                                <a href="/services/warehouses/"><span
                                                                        class="sc_icon icon-icon_7"></span></a>
                                                                <div class="sc_services_item_content">
                                                                    <h6 class="sc_services_item_title"><a
                                                                            href="/services/warehouses/">Warehouses</a>
                                                                    </h6>
                                                                    <div class="sc_services_item_description">
                                                                        <p>Professional equipment is key. We work to
                                                                            maintain standards.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div id="sc_services_514771103_4"
                                                                class="sc_services_item sc_services_item_4 even">
                                                                <a href="/services/certification/"><span
                                                                        class="sc_icon icon-icon_8"></span></a>
                                                                <div class="sc_services_item_content">
                                                                    <h6 class="sc_services_item_title"><a
                                                                            href="/services/certification/">Certification</a>
                                                                    </h6>
                                                                    <div class="sc_services_item_description">
                                                                        <p>We work with certified employees. We
                                                                            provide top quality food.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div id="sc_services_514771103_5"
                                                                class="sc_services_item sc_services_item_5 odd">
                                                                <a href="/services/temperature-monitoring/"><span
                                                                        class="sc_icon icon-icon_9"></span></a>
                                                                <div class="sc_services_item_content">
                                                                    <h6 class="sc_services_item_title"><a
                                                                            href="/services/temperature-monitoring/">Temperature
                                                                            Monitoring</a></h6>
                                                                    <div class="sc_services_item_description">
                                                                        <p>The importance of the right degree for
                                                                            different sea products.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div id="sc_services_514771103_6"
                                                                class="sc_services_item sc_services_item_6 even">
                                                                <a href="/services/test-kitchens/"><span
                                                                        class="sc_icon icon-icon_10"></span></a>
                                                                <div class="sc_services_item_content">
                                                                    <h6 class="sc_services_item_title"><a
                                                                            href="/services/test-kitchens/">Test
                                                                            Kitchens</a></h6>
                                                                    <div class="sc_services_item_description">
                                                                        <p>Cook our seafood products and see how
                                                                            they prove to be perfect.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div><!-- /.sc_services -->
                                        </div><!-- /.sc_services_wrap -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1472372807079 vc_row-has-fill inverse_colors">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div id="sc_skills_diagram_1463529426"
                                            class="sc_skills sc_skills_counter margin_top_huge margin_bottom_huge"
                                            data-type="counter" data-caption="Skills">
                                            <div class="columns_wrap sc_skills_columns sc_skills_columns_3">

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="sc_skills_item sc_skills_style_1 odd first">
                                                            <div class="sc_skills_count">
                                                                <div class="sc_skills_total" data-start="0"
                                                                    data-stop="324" data-step="3" data-max="324"
                                                                    data-speed="26" data-duration="2808" data-ed="">0
                                                                </div>
                                                            </div>
                                                            <div class="sc_skills_info">
                                                                <div class="sc_skills_label">varieties of shrimp,
                                                                    mussels, lobster & finfish</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="sc_skills_item sc_skills_style_1 even">
                                                            <div class="sc_skills_count">
                                                                <div class="sc_skills_total" data-start="0"
                                                                    data-stop="32" data-step="3" data-max="324"
                                                                    data-speed="10" data-duration="107" data-ed="">0
                                                                </div>
                                                            </div>
                                                            <div class="sc_skills_info">
                                                                <div class="sc_skills_label">countries exported to
                                                                    and imported from</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="sc_skills_item sc_skills_style_1 odd">
                                                            <div class="sc_skills_count">
                                                                <div class="sc_skills_total" data-start="0"
                                                                    data-stop="287" data-step="3" data-max="324"
                                                                    data-speed="14" data-duration="1339" data-ed="">0
                                                                </div>
                                                            </div>
                                                            <div class="sc_skills_info">
                                                                <div class="sc_skills_label">thousand sq. feet of
                                                                    frozen storage space</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper add_space">


                                        <div class="sc_section margin_top_large margin_bottom_large aligncenter">
                                            <div class="sc_section_inner">
                                                <h6 class="sc_section_subtitle sc_item_subtitle">seafood</h6>
                                                <h2 class="sc_section_title sc_item_title sc_item_title_without_descr">
                                                    Discover our products</h2>
                                                <div class="sc_section_content_wrap">
                                                    <div class="woocommerce columns-5">
                                                        <ul class="products columns-5">
                                                            <li class="product-category product first">
                                                                <div class="post_item_wrap">
                                                                    <div class="post_featured">
                                                                        <div class="post_thumb">
                                                                            <a class="hover_icon hover_icon_link"
                                                                                href="/product-category/tuna/">
                                                                                <img src="{{ asset('images/front_end/home_page/Products_2-540x496.jpg') }}"
                                                                                    alt="Tuna" width="540"
                                                                                    height="496" /> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post_content">
                                                                        <h2 class="woocommerce-loop-category__title">
                                                                            <a href="/product-category/tuna/">Tuna</a>
                                                                            <mark class="count">(1)</mark>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="product-category product">
                                                                <div class="post_item_wrap">
                                                                    <div class="post_featured">
                                                                        <div class="post_thumb">
                                                                            <a class="hover_icon hover_icon_link"
                                                                                href="/product-category/snapper/">
                                                                                <img src="{{ asset('images/front_end/home_page/Products_3-540x496.jpg') }}"
                                                                                    alt="Snapper" width="540"
                                                                                    height="496" /> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post_content">
                                                                        <h2 class="woocommerce-loop-category__title">
                                                                            <a
                                                                                href="/product-category/snapper/">Snapper</a>
                                                                            <mark class="count">(1)</mark>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="product-category product">
                                                                <div class="post_item_wrap">
                                                                    <div class="post_featured">
                                                                        <div class="post_thumb">
                                                                            <a class="hover_icon hover_icon_link"
                                                                                href="/product-category/shrimp/">
                                                                                <img src="{{ asset('images/front_end/home_page/Products_7-540x496.jpg') }}"
                                                                                    alt="Shrimp" width="540"
                                                                                    height="496" /> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post_content">
                                                                        <h2 class="woocommerce-loop-category__title">
                                                                            <a href="/product-category/shrimp/">Shrimp</a>
                                                                            <mark class="count">(1)</mark>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="product-category product">
                                                                <div class="post_item_wrap">
                                                                    <div class="post_featured">
                                                                        <div class="post_thumb">
                                                                            <a class="hover_icon hover_icon_link"
                                                                                href="/product-category/scallops/">
                                                                                <img src="{{ asset('images/front_end/home_page/Products_4-540x496.jpg') }}"
                                                                                    alt="Scallops" width="540"
                                                                                    height="496" /> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post_content">
                                                                        <h2 class="woocommerce-loop-category__title">
                                                                            <a
                                                                                href="/product-category/scallops/">Scallops</a>
                                                                            <mark class="count">(1)</mark>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="product-category product last">
                                                                <div class="post_item_wrap">
                                                                    <div class="post_featured">
                                                                        <div class="post_thumb">
                                                                            <a class="hover_icon hover_icon_link"
                                                                                href="/product-category/salmon/">
                                                                                <img src="{{ asset('images/front_end/home_page/Products_1-540x496.jpg') }}"
                                                                                    alt="Salmon" width="540"
                                                                                    height="496" /> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post_content">
                                                                        <h2 class="woocommerce-loop-category__title">
                                                                            <a href="/product-category/salmon/">Salmon</a>
                                                                            <mark class="count">(1)</mark>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="product-category product first">
                                                                <div class="post_item_wrap">
                                                                    <div class="post_featured">
                                                                        <div class="post_thumb">
                                                                            <a class="hover_icon hover_icon_link"
                                                                                href="/product-category/mussels/">
                                                                                <img src="{{ asset('images/front_end/home_page/Products_8-540x496.jpg') }}"
                                                                                    alt="Mussels" width="540"
                                                                                    height="496" /> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post_content">
                                                                        <h2 class="woocommerce-loop-category__title">
                                                                            <a
                                                                                href="/product-category/mussels/">Mussels</a>
                                                                            <mark class="count">(1)</mark>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="product-category product">
                                                                <div class="post_item_wrap">
                                                                    <div class="post_featured">
                                                                        <div class="post_thumb">
                                                                            <a class="hover_icon hover_icon_link"
                                                                                href="/product-category/masago/">
                                                                                <img src="{{ asset('images/front_end/home_page/Products_10-540x496.jpg') }}"
                                                                                    alt="Masago" width="540"
                                                                                    height="496" /> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post_content">
                                                                        <h2 class="woocommerce-loop-category__title">
                                                                            <a href="/product-category/masago/">Masago</a>
                                                                            <mark class="count">(1)</mark>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="product-category product">
                                                                <div class="post_item_wrap">
                                                                    <div class="post_featured">
                                                                        <div class="post_thumb">
                                                                            <a class="hover_icon hover_icon_link"
                                                                                href="/product-category/lobster/">
                                                                                <img src="{{ asset('images/front_end/home_page/Products_5-540x496.jpg') }}"
                                                                                    alt="Lobster" width="540"
                                                                                    height="496" /> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post_content">
                                                                        <h2 class="woocommerce-loop-category__title">
                                                                            <a
                                                                                href="/product-category/lobster/">Lobster</a>
                                                                            <mark class="count">(1)</mark>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="product-category product">
                                                                <div class="post_item_wrap">
                                                                    <div class="post_featured">
                                                                        <div class="post_thumb">
                                                                            <a class="hover_icon hover_icon_link"
                                                                                href="/product-category/crab/">
                                                                                <img src="{{ asset('images/front_end/home_page/Products_9-540x496.jpg') }}"
                                                                                    alt="Crab" width="540"
                                                                                    height="496" /> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post_content">
                                                                        <h2 class="woocommerce-loop-category__title">
                                                                            <a href="/product-category/crab/">Crab</a>
                                                                            <mark class="count">(1)</mark>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="product-category product last">
                                                                <div class="post_item_wrap">
                                                                    <div class="post_featured">
                                                                        <div class="post_thumb">
                                                                            <a class="hover_icon hover_icon_link"
                                                                                href="/product-category/clams/">
                                                                                <img src="{{ asset('images/front_end/home_page/Products_6-540x496.jpg') }}"
                                                                                    alt="Clams" width="540"
                                                                                    height="496" /> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post_content">
                                                                        <h2 class="woocommerce-loop-category__title">
                                                                            <a href="/product-category/clams/">Clams</a>
                                                                            <mark class="count">(1)</mark>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="sc_section_button sc_item_button hidden">
                                                    <a href="/shop/"
                                                        class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">
                                                        view more products
                                                    </a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container add_space">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="sc_intro"
                                        style="background: url('images/front_end/home_page/banner_1.webp');">
                                        <div class="sc_intro_inner  sc_intro_style_2">
                                            <div class="sc_intro_content">
                                                <h2 class="sc_intro_title">Discount Program</h2>
                                                <div class="sc_intro_descr">We want to make your
                                                    experience truly amazing. Always.</div>
                                                <div class="sc_intro_buttons sc_item_buttons">
                                                    <div class="sc_intro_button sc_item_button"><a href="/shop/"
                                                            class="sc_button sc_button_square sc_button_style_border sc_button_size_medium">shop
                                                            now</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sc_intro sc_intro_position_top_right"
                                        style="background: url('images/front_end/home_page/banner_2.webp');">
                                        <div class="sc_intro_inner  sc_intro_style_1" style="width:50%;">
                                            <div class="sc_intro_content">
                                                <h2 class="sc_intro_title">Weekly Special Offer
                                                </h2>
                                                <div class="sc_intro_descr">Try our clam chowder,
                                                    shrimp dip, blackened grouper salad, fried
                                                    shrimps and octopus.</div>
                                                <div class="sc_intro_buttons sc_item_buttons">
                                                    <div class="sc_intro_button sc_item_button">
                                                        <a href="javascript:void(0)"
                                                            class="sc_button sc_button_square sc_button_style_filled sc_button_size_medium">learn
                                                            more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1472383565565 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper add_space">

                                        <div class="sc_section margin_top_large margin_bottom_large aligncenter">
                                            <div class="sc_section_inner">
                                                <h6 class="sc_section_subtitle sc_item_subtitle" style="padding-top: 20px">products</h6>
                                                <h2 class="sc_section_title sc_item_title sc_item_title_without_descr">
                                                    Featured Items</h2>
                                                <div class="sc_section_content_wrap">
                                                    <div class="woocommerce columns-4 ">
                                                        <ul class="products columns-4">
                                                            <li
                                                                class="product type-product post-137 status-publish first instock product_cat-salmon product_tag-delicious product_tag-fish has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                                <div class="post_item_wrap">
                                                                    <div class="post_featured">
                                                                        <div class="post_thumb">
                                                                            <a class="hover_icon hover_icon_link"
                                                                                href="/product/salmon/">
                                                                                <img width="540" height="496"
                                                                                    src="{{ asset('images/front_end/home_page/07-540x496.jpg') }}"
                                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                    alt="" loading="lazy" /> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post_content">
                                                                        <h3>
                                                                            <a href="/product/salmon/">Salmon</a>
                                                                        </h3>
                                                                        <span class="price"><span
                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">&#8377;</span>
                                                                                    XXXX
                                                                                </bdi></span></span>
                                                                        <a href="?add-to-cart=137" data-quantity="1"
                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                            data-product_id="137" data-product_sku=""
                                                                            aria-label="Add &ldquo;Salmon&rdquo; to your cart"
                                                                            rel="nofollow">On Whatsapp</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li
                                                                class="product type-product post-147 status-publish instock product_cat-masago product_tag-healthy product_tag-tender has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                                <div class="post_item_wrap">
                                                                    <div class="post_featured">
                                                                        <div class="post_thumb">
                                                                            <a class="hover_icon hover_icon_link"
                                                                                href="/product/tilapia/">
                                                                                <img width="540" height="496"
                                                                                    src="{{ asset('images/front_end/home_page/08-540x496.jpg') }}"
                                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                    alt="" loading="lazy" /> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post_content">
                                                                        <h3><a href="/product/tilapia/">Tilapia</a>
                                                                        </h3>
                                                                        <span class="price"><span
                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">&#8377;</span>
                                                                                    XXXX
                                                                                </bdi></span></span>
                                                                        <a href="?add-to-cart=147" data-quantity="1"
                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                            data-product_id="147" data-product_sku=""
                                                                            aria-label="Add &ldquo;Tilapia&rdquo; to your cart"
                                                                            rel="nofollow">On Whatsapp</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li
                                                                class="product type-product post-148 status-publish instock product_cat-shrimp product_tag-exquisite product_tag-fresh has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                                <div class="post_item_wrap">
                                                                    <div class="post_featured">
                                                                        <div class="post_thumb">
                                                                            <a class="hover_icon hover_icon_link"
                                                                                href="/product/shrimp/">
                                                                                <img width="540" height="496"
                                                                                    src="{{ asset('images/front_end/home_page/09-540x496.jpg') }}"
                                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                    alt="" loading="lazy" /> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post_content">
                                                                        <h3><a href="/product/shrimp/">Shrimp</a>
                                                                        </h3>
                                                                        <span class="price"><span
                                                                                class="woocommerce-Price-amount amount">
                                                                                <bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">&#8377;</span>
                                                                                    XXXX
                                                                                </bdi>
                                                                            </span></span>
                                                                        <a href="?add-to-cart=148" data-quantity="1"
                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                            data-product_id="148" data-product_sku=""
                                                                            aria-label="Add &ldquo;Shrimp&rdquo; to your cart"
                                                                            rel="nofollow">On Whatsapp</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li
                                                                class="product type-product post-149 status-publish last instock product_cat-snapper product_tag-delicious product_tag-fish has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                                <div class="post_item_wrap">
                                                                    <div class="post_featured">
                                                                        <div class="post_thumb">
                                                                            <a class="hover_icon hover_icon_link"
                                                                                href="/product/snapper/">
                                                                                <img width="540" height="496"
                                                                                    src="{{ asset('images/front_end/home_page/10-540x496.jpg') }}"
                                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                    alt="" loading="lazy" /> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post_content">
                                                                        <h3><a href="/product/snapper/">Snapper</a>
                                                                        </h3>
                                                                        <span class="price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <bdi>
                                                                                    <span
                                                                                        class="woocommerce-Price-currencySymbol">
                                                                                        &#8377;
                                                                                    </span>
                                                                                    XXXX
                                                                                </bdi>
                                                                            </span>
                                                                        </span>


                                                                        <a href="{{ ADMIN_WHATSAPP_LINK }}&text=hiforSnapper"
                                                                            data-quantity="1"
                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                            data-product_id="149" data-product_sku=""
                                                                            aria-label="Add &ldquo;Snapper&rdquo; to your cart"
                                                                            rel="nofollow">On Whatsapp</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="sc_section_button sc_item_button"
                                                    style="padding-bottom: 20px">

                                                    <div class="sc_socials_item">
                                                        <a href="{{ ADMIN_WHATSAPP_LINK_WITH_MSG }}"
                                                            class="sc_button sc_button_square sc_button_style_filled sc_button_size_small social_icons social_pin ">
                                                            Order now on Whatsapp
                                                            {{-- <span class="icon-pin"></span> --}}
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1472283367687 vc_row-has-fill inverse_colors hidden">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper add_space">

                                        <div
                                            class="sc_section margin_top_large margin_bottom_large aligncenter column-6_11">
                                            <div class="sc_section_inner">
                                                <h6 class="sc_section_subtitle sc_item_subtitle">video</h6>
                                                <h2 class="sc_section_title sc_item_title sc_item_title_without_descr">
                                                    Featured recipe</h2>
                                                <div class="sc_section_content_wrap add_space">
                                                    <div class="sc_video_player">
                                                        <div class="sc_video_frame sc_video_play_button hover_icon hover_icon_play"
                                                            data-width="100%" data-height="659"
                                                            data-video="&lt;iframe class=&quot;video_frame&quot; src=&quot;https://pcccccclayer.vimeo.com/video/85992998?autoplay=1&quot; width=&quot;100%&quot; height=&quot;659&quot; frameborder=&quot;0&quot; webkitAllowFullScreen=&quot;webkitAllowFullScreen&quot; mozallowfullscreen=&quot;mozallowfullscreen&quot; allowFullScreen=&quot;allowFullScreen&quot;&gt;&lt;/iframe&gt;"
                                                            style="width:100%;"><img alt="img"
                                                                src="{{ asset('images/front_end/home_page/bg_video.jpg') }}">
                                                        </div>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p>Including fish as a regular part of a balanced
                                                                diet has been shown<br />
                                                                to greatly help the symptoms of rheumatoid
                                                                arthritis.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sc_section_button sc_item_button"><a href="/gallery-grid/"
                                                        class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">view
                                                        our portfolio</a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row wpb_row vc_row-fluid hidden">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper add_space">

                                        <div id="sc_blogger_366577508"
                                            class="sc_blogger layout_classic_3 template_masonry margin_top_large margin_bottom_tiny  sc_blogger_horizontal">
                                            <h6 class="sc_blogger_subtitle sc_item_subtitle">blog</h6>
                                            <h2 class="sc_blogger_title sc_item_title sc_item_title_without_descr">
                                                Recent News</h2>
                                            <div class="isotope_wrap" data-columns="3">
                                                <div
                                                    class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3					">
                                                    <div
                                                        class="post_item post_item_classic post_item_classic_3				  post_format_standard odd">

                                                        <div class="post_featured">
                                                            <div class="post_thumb"
                                                                data-image="{{ asset('images/front_end/home_page/post-10.jpg') }}"
                                                                data-title="Delights of Korean Seafood">
                                                                <a class="hover_icon hover_icon_link"
                                                                    href="/delights-of-korean-seafood/"><img
                                                                        class="wp-post-image" width="370"
                                                                        height="216" alt="Delights of Korean Seafood"
                                                                        src="{{ asset('images/front_end/home_page/post-10-370x216.jpg') }}"></a>
                                                            </div>
                                                        </div>

                                                        <div class="post_content isotope_item_content">

                                                            <div class="post_info">
                                                                <span class="post_info_item post_info_posted">
                                                                    <a href="/delights-of-korean-seafood/"
                                                                        class="post_info_date">May 12,
                                                                        2016</a></span>
                                                            </div>
                                                            <h5 class="post_title"><a
                                                                    href="/delights-of-korean-seafood/">Delights
                                                                    of Korean Seafood</a></h5>

                                                            <div class="post_descr">
                                                                <p>Seafood is a great part of Korean cuisine so
                                                                    you can find a whole aquarium of fishes
                                                                    waiting to be cooked almost in every
                                                                    restaurant of the country.</p>
                                                            </div>

                                                        </div> <!-- /.post_content -->
                                                    </div> <!-- /.post_item -->
                                                </div> <!-- /.isotope_item -->
                                                <div
                                                    class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3					">
                                                    <div
                                                        class="post_item post_item_classic post_item_classic_3				  post_format_standard even">

                                                        <div class="post_featured">
                                                            <div class="post_thumb"
                                                                data-image="{{ asset('images/front_end/home_page/post-11.jpg') }}"
                                                                data-title="Partnership Announcement">
                                                                <a class="hover_icon hover_icon_link"
                                                                    href="/partnership-announcement/"><img
                                                                        class="wp-post-image" width="370"
                                                                        height="216" alt="Partnership Announcement"
                                                                        src="{{ asset('images/front_end/home_page/post-11-370x216.jpg') }}"></a>
                                                            </div>
                                                        </div>

                                                        <div class="post_content isotope_item_content">

                                                            <div class="post_info">
                                                                <span class="post_info_item post_info_posted">
                                                                    <a href="/partnership-announcement/"
                                                                        class="post_info_date">May 7,
                                                                        2016</a></span>
                                                            </div>
                                                            <h5 class="post_title"><a
                                                                    href="/partnership-announcement/">Partnership
                                                                    Announcement</a></h5>

                                                            <div class="post_descr">
                                                                <p>We are offering a warm, friendly atmosphere
                                                                    to share a delicious seafood meal with
                                                                    family and friends at any time of the day or
                                                                    evening.</p>
                                                            </div>

                                                        </div> <!-- /.post_content -->
                                                    </div> <!-- /.post_item -->
                                                </div> <!-- /.isotope_item -->
                                                <div
                                                    class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3					">
                                                    <div
                                                        class="post_item post_item_classic post_item_classic_3				  post_format_standard odd last">

                                                        <div class="post_featured">
                                                            <div class="post_thumb"
                                                                data-image="{{ asset('images/front_end/home_page/post-12.jpg') }}"
                                                                data-title="Seafood Industry">
                                                                <a class="hover_icon hover_icon_link"
                                                                    href="/seafood-industry/"><img class="wp-post-image"
                                                                        width="370" height="216"
                                                                        alt="Seafood Industry"
                                                                        src="{{ asset('images/front_end/home_page/post-12-370x216.jpg') }}"></a>
                                                            </div>
                                                        </div>

                                                        <div class="post_content isotope_item_content">

                                                            <div class="post_info">
                                                                <span class="post_info_item post_info_posted">
                                                                    <a href="/seafood-industry/"
                                                                        class="post_info_date">May 1,
                                                                        2016</a></span>
                                                            </div>
                                                            <h5 class="post_title"><a href="/seafood-industry/">Seafood
                                                                    Industry</a></h5>

                                                            <div class="post_descr">
                                                                <p>The demand for seafood is growing. It becomes
                                                                    important for the entire fishing industry to
                                                                    move toward greater transparency and
                                                                    sustainability.</p>
                                                            </div>

                                                        </div> <!-- /.post_content -->
                                                    </div> <!-- /.post_item -->
                                                </div> <!-- /.isotope_item -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1471941903248 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-12 ">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper add_space">

                                        <div id="sc_clients_114209017_wrap" class="sc_clients_wrap">
                                            <div id="sc_clients_114209017"
                                                class="sc_clients sc_clients_style_clients-1  margin_top_medium margin_bottom_small "
                                                style="width:100%;">
                                                <div class="sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_nocontrols "
                                                    data-interval="9581" data-slides-per-view="5"
                                                    data-slides-min-width="100">
                                                    <div class="slides swiper-wrapper client_slider">

                                                        <div class="swiper-slide">
                                                            <div class="sc_client_image silder_space">
                                                                <img alt="Client 5" title="sajid tow"
                                                                    src="{{ asset('images/front_end/home_page/client1.webp') }}">
                                                            </div>
                                                        </div>

                                                        <div class="swiper-slide">
                                                            <div class="sc_client_image silder_space">
                                                                <img alt="Client 5" title="sajid tow"
                                                                    src="{{ asset('images/front_end/home_page/client2.webp') }}">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="sc_client_image silder_space">
                                                                <img alt="Client 5" title="sajid tow"
                                                                    src="{{ asset('images/front_end/home_page/client3.webp') }}">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="sc_client_image silder_space">
                                                                <img alt="Client 5" title="sajid tow"
                                                                    src="{{ asset('images/front_end/home_page/client4.webp') }}">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="sc_client_image silder_space">
                                                                <img alt="Client 5" title="sajid tow"
                                                                    src="{{ asset('images/front_end/home_page/client5.webp') }}">
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="sc_slider_controls_wrap"><a class="sc_slider_prev"
                                                            href="#"></a><a class="sc_slider_next"
                                                            href="#"></a>
                                                    </div>
                                                    <div class="sc_slider_pagination_wrap"></div>
                                                </div>
                                            </div><!-- /.sc_clients -->
                                        </div><!-- /.sc_clients_wrap -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>

                    </section> <!-- </section> class="post_content" itemprop="articleBody"> -->
                </article>
                <!-- </article> class="itemscope post_item post_item_single post_featured_default post_format_standard post-293 page type-page status-publish hentry" itemscope itemtype="//schema.org/Article"> -->
                <section class="related_wrap related_wrap_empty"></section>

            </div> <!-- </div> class="content"> -->
        </div> <!-- </div> class="content_wrap"> -->
    </div> <!-- </.page_content_wrap> -->
@endsection
