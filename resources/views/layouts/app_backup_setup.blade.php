
<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<head>
    <title>{{$page_title ?? 'Seafood Company'}}</title>
        <meta name='robots' content='noindex, nofollow' />
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="format-detection" content="telephone=no">
	
		<link rel='dns-prefetch' href='//fonts.googleapis.com' />

        <link href="{{ asset('css/fontello/font/font-icons/css/trx_demo_icons.css') }}"  id='trx_demo_icons-css'  rel="stylesheet" type="text/css" media='all' />
       
        <link href="{{ asset('css/font-icons/css/animation.css') }}"  id='trx_demo_icons_animation-css'  rel="stylesheet" type="text/css" media='all' />

        <link href="{{ asset('css/dist/block-library/style.min.css') }}"  id='wp-block-library-css'  rel="stylesheet" type='text/css' media='all' />


        {{-- <link rel='stylesheet' id='contact-form-7-css'  href='https://seafood-company.themerex.net/wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' /> --}}
        
        {{-- 
        <link rel='stylesheet' id='cooked-essentials-css'  href='https://seafood-company.themerex.net/wp-content/plugins/cooked/assets/admin/css/essentials.min.css' type='text/css' media='all' />


        <link rel='stylesheet' id='cooked-icons-css'  href='https://seafood-company.themerex.net/wp-content/plugins/cooked/assets/css/icons.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='cooked-styling-css'  href='https://seafood-company.themerex.net/wp-content/plugins/cooked/assets/css/style.min.css' type='text/css' media='all' /> 
        --}}


        {{-- <link rel='stylesheet' id='essential-grid-plugin-settings-css'  href='https://seafood-company.themerex.net/wp-content/plugins/essential-grid/public/assets/css/settings.css' type='text/css' media='all' /> --}}

        {{-- <link rel='stylesheet' id='tp-fontello-css'  href='https://seafood-company.themerex.net/wp-content/plugins/essential-grid/public/assets/font/fontello/css/fontello.css' type='text/css' media='all' />
        <link rel='stylesheet' id='trx_demo_panels-css'  href='https://seafood-company.themerex.net/wp-content/plugins/trx_demo-master/css/trx_demo_panels.css' type='text/css' media='all' />
        <link rel='stylesheet' id='woocommerce-layout-css'  href='https://seafood-company.themerex.net/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css' type='text/css' media='all' />
        <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='https://seafood-company.themerex.net/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
        <link rel='stylesheet' id='woocommerce-general-css'  href='https://seafood-company.themerex.net/wp-content/plugins/woocommerce/assets/css/woocommerce.css' type='text/css' media='all' />
        <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required { visibility: visible; }
        </style> --}}


        <link href="{{ asset('css/fontello/css/fontello.css') }}" rel='stylesheet' id='fontello-style-css' type='text/css' media='all'/>
        <link href="{{ asset('style.css') }}" rel='stylesheet' id='seafood-company-main-style-css' type='text/css' media='all' />
        <link href="{{ asset('fw/css/core.animation.css') }}" rel='stylesheet'id='seafood-company-animation-style-css' type='text/css' media='all' />
        <link href="{{ asset('css/theme.css') }}" rel='stylesheet' id='seafood-company-theme-style-css' type='text/css' media='all' />
        <link href="{{ asset('css/theme.shortcodes.css') }}" rel='stylesheet' id='seafood-company-theme-style-css' type='text/css' media='all' />
      
        <link href="{{ asset('css/plugin.woocommerce.css') }}" rel='stylesheet' id='seafood-company-theme-style-css' type='text/css' media='all' />


        {{-- <style id='seafood-company-theme-style-inline-css' type='text/css'>
        .sidebar_outer_logo .logo_main,.top_panel_wrap .logo_main,.top_panel_wrap .logo_fixed{height:127px} .contacts_wrap .logo img{height:30px}
        </style> --}}

        <link href="{{ asset('css/responsive.css') }}" rel='stylesheet' id='seafood-company-responsive-style-css' type='text/css' media='all' />


        {{-- <link rel='stylesheet' id='mediaelement-css'  href='https://seafood-company.themerex.net/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='wp-mediaelement-css'  href='https://seafood-company.themerex.net/wp-includes/js/mediaelement/wp-mediaelement.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='js_composer_front-css'  href='https://seafood-company.themerex.net/wp-content/plugins/js_composer/assets/css/js_composer.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='wpgdprc-front-css-css'  href='https://seafood-company.themerex.net/wp-content/plugins/wp-gdpr-compliance/Assets/css/front.css' type='text/css' media='all' /> --}}

        {{-- <style id='wpgdprc-front-css-inline-css' type='text/css'>
        :root{--wp-gdpr--bar--background-color: #000000;--wp-gdpr--bar--color: #ffffff;--wp-gdpr--button--background-color: #000000;--wp-gdpr--button--background-color--darken: #000000;--wp-gdpr--button--color: #ffffff;}
        </style> --}}

        <script type='text/javascript' src='{{ asset('js/jquery/jquery.min.js') }}' id='jquery-core-js'></script>
        <script type='text/javascript' src='{{ asset('js/jquery/jquery-migrate.min.js') }}' id='jquery-migrate-js'></script>
        <script type='text/javascript' src='{{ asset('js/jquery/rbtools.min.js') }}' async id='tp-tools-js'></script>
        <script type='text/javascript' src='{{ asset('js/jquery/rs6.min.js') }}'  id='jquery-blockui-js'></script>
        <script type='text/javascript' src='{{ asset('js/jquery/add-to-cart.min.js') }}'  id='wc-add-to-cart-js'></script>
        <script type='text/javascript' src='{{ asset('js/jquery/woocommerce-add-to-cart.js') }}'  id='vc_woocommerce-add-to-cart-js-js'></script>
        <script type='text/javascript' src='{{ asset('js/jquery/modernizr.min.js') }}' id='modernizr-js'></script>
        <script type='text/javascript' src='{{ asset('js/jquery/front.min.js') }}' id='wpgdprc-front-js-js'></script>



        {{-- <link rel="https://api.w.org/" href="https://seafood-company.themerex.net/wp-json/" /> --}}
        {{-- <link rel="alternate" type="application/json" href="https://seafood-company.themerex.net/wp-json/wp/v2/pages/293" /> --}}
        {{-- <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://seafood-company.themerex.net/xmlrpc.php?rsd" /> --}}
        {{-- <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://seafood-company.themerex.net/wp-includes/wlwmanifest.xml" />  --}}



        {{-- <link rel="canonical" href="https://seafood-company.themerex.net/home-2/" /> --}}
        {{-- <link rel='shortlink' href='https://seafood-company.themerex.net/?p=293' /> --}}


        {{-- <link rel="alternate" type="application/json+oembed" href="https://seafood-company.themerex.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fseafood-company.themerex.net%2Fhome-2%2F" /> --}}

        {{-- <link rel="alternate" type="text/xml+oembed" href="https://seafood-company.themerex.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fseafood-company.themerex.net%2Fhome-2%2F&#038;format=xml" /> --}}


    	{{-- <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript> --}}
	

        <link rel="icon" href="https://seafood-company.themerex.net/wp-content/uploads/2021/10/favicon.ico" sizes="32x32" />
        <link rel="icon" href="https://seafood-company.themerex.net/wp-content/uploads/2021/10/favicon.ico" sizes="192x192" />
        <link rel="apple-touch-icon" href="https://seafood-company.themerex.net/wp-content/uploads/2021/10/favicon.ico" />
        <meta name="msapplication-TileImage" content="https://seafood-company.themerex.net/wp-content/uploads/2021/10/favicon.ico" />


<script type="text/javascript">function setREVStartSize(e){
			//window.requestAnimationFrame(function() {				 
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;	
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;	
				try {								
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);		
					if(e.layout==="fullscreen" || e.l==="fullscreen") 						
						newh = Math.max(e.mh,window.RSIH);					
					else{					
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];					
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
											
						var nl = new Array(e.rl.length),
							ix = 0,						
							sl;					
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;					
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];									
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}															
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);					
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}
					var el = document.getElementById(e.c);
					if (el!==null && el) el.style.height = newh+"px";					
					el = document.getElementById(e.c+"_wrapper");
					if (el!==null && el) {
						el.style.height = newh+"px";
						el.style.display = "block";
					}
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}					   
			//});
		  };</script>

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



</head>

<body class="page-template-default page page-id-293 theme-seafood-company woocommerce-no-js seafood_company_body body_style_wide body_filled article_style_stretch layout_single-standard template_single-standard scheme_original top_panel_show top_panel_above sidebar_hide sidebar_outer_hide wpb-js-composer js-comp-ver-6.9.0 vc_responsive">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>	<a id="toc_home" class="sc_anchor" title="Home" data-description="&lt;i&gt;Return to Home&lt;/i&gt; - &lt;br&gt;navigate to home page of the site" data-icon="icon-home" data-url="https://seafood-company.themerex.net/" data-separator="yes"></a><a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
	
	
	
	<div class="body_wrap">

		
		<div class="page_wrap">

					
		<div class="top_panel_fixed_wrap"></div>

		<header class="top_panel_wrap top_panel_style_3 scheme_original">
			<div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
			
							<div class="top_panel_top">
					<div class="content_wrap clearfix">
							<div class="top_panel_top_contact_area">
		<span class="contact_icon icon-icon_1"></span>
		<span class="contact_label">
								775 Avenue, 								Brooklyn, NY							</span>
		<span class="contact_icon icon-icon_2"></span>
		<span class="contact_label">Call us at <a href="tel:8001234567">(800) 123-4567</a></span>


	</div>
	

<div class="top_panel_top_user_area">
			<div class="top_panel_top_socials">
			<div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny"><div class="sc_socials_item"><a href="https://business.facebook.com/ThemeRexStudio/" target="_blank" class="social_icons social_facebook"><span class="icon-facebook"></span></a></div><div class="sc_socials_item"><a href="https://twitter.com/ThemerexThemes" target="_blank" class="social_icons social_twitter"><span class="icon-twitter"></span></a></div><div class="sc_socials_item"><a href="https://www.instagram.com/themerex_net/" target="_blank" class="social_icons social_camera"><span class="icon-camera"></span></a></div><div class="sc_socials_item"><a href="https://www.youtube.com/channel/UCnFisBimrK2aIE-hnY70kCA" target="_blank" class="social_icons social_youtube"><span class="icon-youtube"></span></a></div></div>		</div>
				<ul id="menu_user" class="menu_user_nav">
		<li class="menu_user_register"><a href="#popup_registration" class="popup_link popup_register_link icon-pencil" title="">Register</a><div id="popup_registration" class="popup_wrap popup_registration bg_tint_light">
    <a href="#" class="popup_close"></a>
    <div class="form_wrap">
        <form name="registration_form" method="post" class="popup_form registration_form">
            <input type="hidden" name="redirect_to" value="https://seafood-company.themerex.net/"/>
            <div class="form_left">
                <div class="popup_form_field login_field iconed_field icon-user"><input type="text" id="registration_username" name="registration_username"  value="" placeholder="User name (login)"></div>
                <div class="popup_form_field email_field iconed_field icon-mail"><input type="text" id="registration_email" name="registration_email" value="" placeholder="E-mail"></div>
                <div class="popup_form_field agree_field">
                    <input type="checkbox" value="1" id="i_agree_privacy_policy_registration" name="i_agree_privacy_policy"><label for="i_agree_privacy_policy_registration"> I agree that my submitted data is being collected and stored.</label>
                    </div>


                <div class="popup_form_field submit_field"><input type="submit" class="submit_button" value="Sign Up"></div>
            </div>
            <div class="form_right">
                <div class="popup_form_field password_field iconed_field icon-lock"><input type="password" id="registration_pwd"  name="registration_pwd"  value="" placeholder="Password"></div>
                <div class="popup_form_field password_field iconed_field icon-lock"><input type="password" id="registration_pwd2" name="registration_pwd2" value="" placeholder="Confirm Password"></div>
                <div class="popup_form_field description_field">Minimum 4 characters</div>
            </div>
        </form>
        <div class="result message_block"></div>
    </div>	<!-- /.registration_wrap -->
</div>		<!-- /.user-popUp --></li><li class="menu_user_login"><a href="#popup_login" class="popup_link popup_login_link icon-user" title="">Login</a><div id="popup_login" class="popup_wrap popup_login bg_tint_light popup_half">
	<a href="#" class="popup_close"></a>
	<div class="form_wrap">
		<div>
			<form action="https://seafood-company.themerex.net/wp-login.php" method="post" name="login_form" class="popup_form login_form">
				<input type="hidden" name="redirect_to" value="https://seafood-company.themerex.net/">
				<div class="popup_form_field login_field iconed_field icon-user"><input type="text" id="log" name="log" value="" placeholder="Login or Email"></div>
				<div class="popup_form_field password_field iconed_field icon-lock"><input type="password" id="password" name="pwd" value="" placeholder="Password"></div>
				<div class="popup_form_field remember_field">
					<a href="https://seafood-company.themerex.net/my-account/lost-password/" class="forgot_password">Forgot password?</a>
					<input type="checkbox" value="forever" id="rememberme" name="rememberme">
					<label for="rememberme">Remember me</label>
				</div>
				<div class="popup_form_field submit_field"><input type="submit" class="submit_button" value="Login"></div>
			</form>
		</div>
			</div>	<!-- /.login_wrap -->
</div>		<!-- /.popup_login -->
</li>		<li class="menu_user_cart">
			<a href="#" class="top_panel_cart_button" data-items="2" data-summa="&#036;58.00">
	<span class="contact_icon icon-icon_4"></span>
	<span class="contact_label contact_cart_label">Your cart:</span>
	<span class="contact_cart_totals">
		<span class="cart_items">2 Items</span><span class="cart_summa">&#36;58.00</span>
	</span>
</a>
<ul class="widget_area sidebar_cart sidebar"><li>
	<div class="widget woocommerce widget_shopping_cart"><div class="hide_cart_widget_if_empty"><div class="widget_shopping_cart_content"></div></div></div></li></ul>		</li>
		
	</ul>

</div>					</div>
				</div>
			
			<div class="top_panel_middle" >
				<div class="content_wrap">
					<div class="contact_logo">
								<div class="logo">
			<a href="https://seafood-company.themerex.net/"><img src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/logo.png" class="logo_main" alt="" width="293" height="128"><img src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/logo.png" class="logo_fixed" alt="" width="293" height="128"></a>
		</div>
							</div>
					<div class="menu_main_wrap">
						<nav class="menu_main_nav_area menu_hover_fade">
							<ul id="menu_main" class="menu_main_nav"><li id="menu-item-159" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-159"><a href="#"><span>Home</span></a>
<ul class="sub-menu">
	<li id="menu-item-160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-160"><a href="https://seafood-company.themerex.net/"><span>Home 1</span></a></li>
	<li id="menu-item-305" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-293 current_page_item menu-item-305"><a href="https://seafood-company.themerex.net/home-2/" aria-current="page"><span>Home 2</span></a></li>
	<li id="menu-item-306" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-306"><a href="https://seafood-company.themerex.net/home-3/"><span>Home 3</span></a></li>
	<li id="menu-item-307" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-307"><a href="https://seafood-company.themerex.net/home-4/"><span>Home 4</span></a></li>
</ul>
</li>
<li id="menu-item-161" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-161"><a href="#"><span>Features</span></a>
<ul class="sub-menu">
	<li id="menu-item-178" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-178"><a href="#"><span>Gallery</span></a>
	<ul class="sub-menu">
		<li id="menu-item-181" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-181"><a href="https://seafood-company.themerex.net/gallery-grid/"><span>Grid</span></a></li>
		<li id="menu-item-179" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-179"><a href="https://seafood-company.themerex.net/gallery-cobbles/"><span>Cobbles</span></a></li>
		<li id="menu-item-180" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-180"><a href="https://seafood-company.themerex.net/gallery-masonry/"><span>Masonry</span></a></li>
	</ul>
</li>
	<li id="menu-item-164" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-164"><a href="#"><span>Pages</span></a>
	<ul class="sub-menu">
		<li id="menu-item-162" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-162"><a href="https://seafood-company.themerex.net/shortcodes/"><span>Shortcodes</span></a></li>
		<li id="menu-item-163" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-163"><a href="https://seafood-company.themerex.net/typography/"><span>Typography</span></a></li>
		<li id="menu-item-177" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-177"><a href="#"><span>Tools</span></a>
		<ul class="sub-menu">
			<li id="menu-item-630" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-630"><a href="https://seafood-company.themerex.net/service-plus/"><span>Service plus</span></a></li>
			<li id="menu-item-631" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-631"><a href="https://seafood-company.themerex.net/privacy-policy/"><span>Privacy Policy</span></a></li>
		</ul>
</li>
	</ul>
</li>
</ul>
</li>
<li id="menu-item-194" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-194"><a href="https://seafood-company.themerex.net/recipes/"><span>Recipes</span></a></li>
<li id="menu-item-176" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-176"><a href="https://seafood-company.themerex.net/shop/"><span>Products</span></a></li>
<li id="menu-item-168" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-168"><a href="#"><span>Blog</span></a>
<ul class="sub-menu">
	<li id="menu-item-173" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-173"><a href="https://seafood-company.themerex.net/blog-classic/"><span>Classic</span></a></li>
	<li id="menu-item-174" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-174"><a href="#"><span>Masonry Style</span></a>
	<ul class="sub-menu">
		<li id="menu-item-172" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-172"><a href="https://seafood-company.themerex.net/blog-masonry-2-columns/"><span>2 Columns</span></a></li>
		<li id="menu-item-171" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-171"><a href="https://seafood-company.themerex.net/blog-masonry-3-columns/"><span>3 Columns</span></a></li>
	</ul>
</li>
	<li id="menu-item-175" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-175"><a href="#"><span>Portfolio Style</span></a>
	<ul class="sub-menu">
		<li id="menu-item-170" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170"><a href="https://seafood-company.themerex.net/blog-portfolio-2-columns/"><span>2 Columns</span></a></li>
		<li id="menu-item-169" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-169"><a href="https://seafood-company.themerex.net/blog-portfolio-3-columns/"><span>3 Columns</span></a></li>
	</ul>
</li>
</ul>
</li>
<li id="menu-item-269" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-269"><a href="#"><span>About</span></a>
<ul class="sub-menu">
	<li id="menu-item-267" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-267"><a href="https://seafood-company.themerex.net/about-style-1/"><span>About Style 1</span></a></li>
	<li id="menu-item-268" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-268"><a href="https://seafood-company.themerex.net/about-style-2/"><span>About Style 2</span></a></li>
</ul>
</li>
<li id="menu-item-188" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-188"><a href="https://seafood-company.themerex.net/contacts/"><span>Contacts</span></a></li>
</ul>						</nav>
					</div>
				</div>
			</div>

			</div>
		</header>

			<div class="header_mobile">
		<div class="content_wrap">
			<div class="menu_button icon-menu"></div>
					<div class="logo">
			<a href="https://seafood-company.themerex.net/"><img src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/logo.png" class="logo_main" alt="" width="293" height="128"></a>
		</div>
				</div>
		<div class="side_wrap">
			<div class="close">Close</div>
			<div class="panel_top">
				<nav class="menu_main_nav_area">
					<ul id="menu_mobile" class="menu_main_nav"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-159"><a href="#"><span>Home</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-160"><a href="https://seafood-company.themerex.net/"><span>Home 1</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-293 current_page_item menu-item-305"><a href="https://seafood-company.themerex.net/home-2/" aria-current="page"><span>Home 2</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-306"><a href="https://seafood-company.themerex.net/home-3/"><span>Home 3</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-307"><a href="https://seafood-company.themerex.net/home-4/"><span>Home 4</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-161"><a href="#"><span>Features</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-178"><a href="#"><span>Gallery</span></a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-181"><a href="https://seafood-company.themerex.net/gallery-grid/"><span>Grid</span></a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-179"><a href="https://seafood-company.themerex.net/gallery-cobbles/"><span>Cobbles</span></a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-180"><a href="https://seafood-company.themerex.net/gallery-masonry/"><span>Masonry</span></a></li>
	</ul>
</li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-164"><a href="#"><span>Pages</span></a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-162"><a href="https://seafood-company.themerex.net/shortcodes/"><span>Shortcodes</span></a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-163"><a href="https://seafood-company.themerex.net/typography/"><span>Typography</span></a></li>
		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-177"><a href="#"><span>Tools</span></a>
		<ul class="sub-menu">
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-630"><a href="https://seafood-company.themerex.net/service-plus/"><span>Service plus</span></a></li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-631"><a href="https://seafood-company.themerex.net/privacy-policy/"><span>Privacy Policy</span></a></li>
		</ul>
</li>
	</ul>
</li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-194"><a href="https://seafood-company.themerex.net/recipes/"><span>Recipes</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-176"><a href="https://seafood-company.themerex.net/shop/"><span>Products</span></a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-168"><a href="#"><span>Blog</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-173"><a href="https://seafood-company.themerex.net/blog-classic/"><span>Classic</span></a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-174"><a href="#"><span>Masonry Style</span></a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-172"><a href="https://seafood-company.themerex.net/blog-masonry-2-columns/"><span>2 Columns</span></a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-171"><a href="https://seafood-company.themerex.net/blog-masonry-3-columns/"><span>3 Columns</span></a></li>
	</ul>
</li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-175"><a href="#"><span>Portfolio Style</span></a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170"><a href="https://seafood-company.themerex.net/blog-portfolio-2-columns/"><span>2 Columns</span></a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-169"><a href="https://seafood-company.themerex.net/blog-portfolio-3-columns/"><span>3 Columns</span></a></li>
	</ul>
</li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-269"><a href="#"><span>About</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-267"><a href="https://seafood-company.themerex.net/about-style-1/"><span>About Style 1</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-268"><a href="https://seafood-company.themerex.net/about-style-2/"><span>About Style 2</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-188"><a href="https://seafood-company.themerex.net/contacts/"><span>Contacts</span></a></li>
</ul>				</nav>
							</div>
			
			
			<div class="panel_bottom">
							</div>
		</div>
		<div class="mask"></div>
	</div>		<section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_home-1">
			
			<!-- START Home 1 REVOLUTION SLIDER 6.5.11 --><p class="rs-p-wp-fix"></p>
			<rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;max-width:;">
				<rs-module id="rev_slider_1_1" style="" data-version="6.5.11">
					<rs-slides>
						<rs-slide style="position: absolute;" data-key="rs-1" data-title="Slide" data-thumb="//seafood-company.themerex.net/wp-content/uploads/2016/08/slides_1-100x50.jpg" data-in="o:0;" data-out="a:false;">
							<img src="//seafood-company.themerex.net/wp-content/plugins/revslider/public/assets/assets/dummy.png" title="Home 2" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//seafood-company.themerex.net/wp-content/uploads/2016/08/slides_1.jpg" data-no-retina>
<!--
							--><rs-layer
								id="slider-1-slide-1-layer-1" 
								class="Slider-Title"
								data-type="text"
								data-color="rgba(255,255,255,1)"
								data-rsp_ch="on"
								data-xy="x:c;y:338px;"
								data-text="s:52;l:52;a:center;"
								data-frame_0="o:1;"
								data-frame_0_chars="d:10;x:-105%;o:1;rX:0deg;rY:0deg;rZ:-90deg;"
								data-frame_0_mask="u:t;"
								data-frame_1="e:power4.inOut;st:500;sp:1000;"
								data-frame_1_chars="d:10;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;e:nothing;st:w;"
								style="z-index:5;font-family:'Montserrat';text-transform:uppercase;"
							>The wonders of the ocean 
							</rs-layer><!--

							--><rs-layer
								id="slider-1-slide-1-layer-2" 
								class="Slider-Subtitle"
								data-type="text"
								data-color="rgba(255,255,255,1)"
								data-rsp_ch="on"
								data-xy="x:c;y:400px;"
								data-text="s:21;l:22;a:center;"
								data-vbility="t,t,t,f"
								data-frame_0="o:1;"
								data-frame_0_chars="d:10;x:-105%;o:1;rX:0deg;rY:0deg;rZ:-90deg;"
								data-frame_0_mask="u:t;"
								data-frame_1="e:power4.inOut;st:2500;sp:1000;"
								data-frame_1_chars="d:10;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;e:nothing;st:w;"
								style="z-index:6;font-family:'Montserrat';text-transform:uppercase;"
							>on your plate 
							</rs-layer><!--
-->						</rs-slide>
						<rs-slide style="position: absolute;" data-key="rs-3" data-title="Slide" data-thumb="//seafood-company.themerex.net/wp-content/uploads/2016/08/slides_2-100x50.jpg" data-in="o:0;" data-out="a:false;">
							<img src="//seafood-company.themerex.net/wp-content/plugins/revslider/public/assets/assets/dummy.png" title="Home 2" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//seafood-company.themerex.net/wp-content/uploads/2016/08/slides_2.jpg" data-no-retina>
<!--
							--><rs-layer
								id="slider-1-slide-3-layer-1" 
								class="Slider-Title"
								data-type="text"
								data-color="rgba(255,255,255,1)"
								data-rsp_ch="on"
								data-xy="x:c;y:338px;"
								data-text="s:52;l:52;a:center;"
								data-frame_0="o:1;"
								data-frame_0_chars="d:10;x:-105%;o:1;rX:0deg;rY:0deg;rZ:-90deg;"
								data-frame_0_mask="u:t;"
								data-frame_1="e:power4.inOut;st:500;sp:1000;"
								data-frame_1_chars="d:10;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;e:nothing;st:w;"
								style="z-index:5;font-family:'Montserrat';text-transform:uppercase;"
							>Ocean variety, pond price 
							</rs-layer><!--

							--><rs-layer
								id="slider-1-slide-3-layer-2" 
								class="Slider-Subtitle"
								data-type="text"
								data-color="rgba(255,255,255,1)"
								data-rsp_ch="on"
								data-xy="x:c;y:400px;"
								data-text="s:21;l:22;a:center;"
								data-vbility="t,t,t,f"
								data-frame_0="o:1;"
								data-frame_0_chars="d:10;x:-105%;o:1;rX:0deg;rY:0deg;rZ:-90deg;"
								data-frame_0_mask="u:t;"
								data-frame_1="e:power4.inOut;st:2500;sp:1000;"
								data-frame_1_chars="d:10;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;e:nothing;st:w;"
								style="z-index:6;font-family:'Montserrat';text-transform:uppercase;"
							>in our store 
							</rs-layer><!--
-->						</rs-slide>
						<rs-slide style="position: absolute;" data-key="rs-2" data-title="Slide" data-thumb="//seafood-company.themerex.net/wp-content/uploads/2016/08/slides_3-100x50.jpg" data-in="o:0;" data-out="a:false;">
							<img src="//seafood-company.themerex.net/wp-content/plugins/revslider/public/assets/assets/dummy.png" title="Home 2" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//seafood-company.themerex.net/wp-content/uploads/2016/08/slides_3.jpg" data-no-retina>
<!--
							--><rs-layer
								id="slider-1-slide-2-layer-1" 
								class="Slider-Title"
								data-type="text"
								data-color="rgba(255,255,255,1)"
								data-rsp_ch="on"
								data-xy="x:c;y:338px;"
								data-text="s:52;l:52;a:center;"
								data-frame_0="o:1;"
								data-frame_0_chars="d:10;x:-105%;o:1;rX:0deg;rY:0deg;rZ:-90deg;"
								data-frame_0_mask="u:t;"
								data-frame_1="e:power4.inOut;st:500;sp:1000;"
								data-frame_1_chars="d:10;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;e:nothing;st:w;"
								style="z-index:5;font-family:'Montserrat';text-transform:uppercase;"
							>The place to be for seafood 
							</rs-layer><!--

							--><rs-layer
								id="slider-1-slide-2-layer-2" 
								class="Slider-Subtitle"
								data-type="text"
								data-color="rgba(255,255,255,1)"
								data-rsp_ch="on"
								data-xy="x:c;y:400px;"
								data-text="s:21;l:22;a:center;"
								data-vbility="t,t,t,f"
								data-frame_0="o:1;"
								data-frame_0_chars="d:10;x:-105%;o:1;rX:0deg;rY:0deg;rZ:-90deg;"
								data-frame_0_mask="u:t;"
								data-frame_1="e:power4.inOut;st:2500;sp:1000;"
								data-frame_1_chars="d:10;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;e:nothing;st:w;"
								style="z-index:6;font-family:'Montserrat';text-transform:uppercase;"
							>at the restaurant 
							</rs-layer><!--
-->						</rs-slide>
					</rs-slides>
				</rs-module>
				<script type="text/javascript">
					setREVStartSize({c: 'rev_slider_1_1',rl:[1240,1024,778,480],el:[785],gw:[1240],gh:[785],type:'standard',justify:'',layout:'fullwidth',mh:"0"});if (window.RS_MODULES!==undefined && window.RS_MODULES.modules!==undefined && window.RS_MODULES.modules["revslider11"]!==undefined) {window.RS_MODULES.modules["revslider11"].once = false;window.revapi1 = undefined;if (window.RS_MODULES.checkMinimal!==undefined) window.RS_MODULES.checkMinimal()}
				</script>
			</rs-module-wrap>
			<!-- END REVOLUTION SLIDER -->
		</section>
		
			<div class="page_content_wrap page_paddings_no">

				
<div class="content_wrap">
<div class="content">
<article class="itemscope post_item post_item_single post_featured_default post_format_standard post-293 page type-page status-publish hentry" itemscope itemtype="//schema.org/Article">
<section class="post_content" itemprop="articleBody"><div class="vc_row wpb_row vc_row-fluid inverse_colors"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 1em"><span class="vc_empty_space_inner"></span></div><div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4 banners_section margin_top_large margin_bottom_large" data-equal-height=".sc_column_item"><div class="column-1_4 sc_column_item sc_column_item_1 odd first"><div class="sc_section aligncenter" style="background-image:url(https://seafood-company.themerex.net/wp-content/uploads/2016/08/bg_feature1.jpg);background-repeat:no-repeat;background-size:cover;height:318px;"><a class="sc_section_link" href="/about/"><div class="sc_section_inner"><div class="sc_section_overlay" style=""><div class="sc_section_content padding_on" style="height:318px;"><div class="sc_section_content_wrap"><div class="vc_empty_space"   style="height: 0.8em"><span class="vc_empty_space_inner"></span></div><h2 class="sc_title sc_title_regular margin_top_huge margin_bottom_tiny" style="color:#ffffff;">Leader</h2><div class="vc_empty_space"   style="height: 0.35em"><span class="vc_empty_space_inner"></span></div><span class="sc_highlight">Seafood</span></div></div></div></div></a></div></div><div class="column-1_4 sc_column_item sc_column_item_2 even"><div class="sc_section aligncenter" style="background-image:url(https://seafood-company.themerex.net/wp-content/uploads/2016/08/bg_feature2.jpg);background-repeat:no-repeat;background-size:cover;height:318px;"><a class="sc_section_link" href="/about/"><div class="sc_section_inner"><div class="sc_section_overlay" style=""><div class="sc_section_content padding_on" style="height:318px;"><div class="sc_section_content_wrap"><div class="vc_empty_space"   style="height: 0.8em"><span class="vc_empty_space_inner"></span></div><h2 class="sc_title sc_title_regular margin_top_huge margin_bottom_tiny" style="color:#ffffff;">Partner</h2><div class="vc_empty_space"   style="height: 0.35em"><span class="vc_empty_space_inner"></span></div><span class="sc_highlight">Sustainable</span></div></div></div></div></a></div></div><div class="column-1_4 sc_column_item sc_column_item_3 odd"><div class="sc_section aligncenter" style="background-image:url(https://seafood-company.themerex.net/wp-content/uploads/2016/08/bg_feature3.jpg);background-repeat:no-repeat;background-size:cover;height:318px;"><a class="sc_section_link" href="/about/"><div class="sc_section_inner"><div class="sc_section_overlay" style=""><div class="sc_section_content padding_on" style="height:318px;"><div class="sc_section_content_wrap"><div class="vc_empty_space"   style="height: 0.8em"><span class="vc_empty_space_inner"></span></div><h2 class="sc_title sc_title_regular margin_top_huge margin_bottom_tiny" style="color:#ffffff;">Product</h2><div class="vc_empty_space"   style="height: 0.35em"><span class="vc_empty_space_inner"></span></div><span class="sc_highlight">World Class</span></div></div></div></div></a></div></div><div class="column-1_4 sc_column_item sc_column_item_4 even"><div class="sc_section aligncenter" style="background-image:url(https://seafood-company.themerex.net/wp-content/uploads/2016/08/bg_feature4.jpg);background-repeat:no-repeat;background-size:cover;height:318px;"><a class="sc_section_link" href="/about/"><div class="sc_section_inner"><div class="sc_section_overlay" style=""><div class="sc_section_content padding_on" style="height:318px;"><div class="sc_section_content_wrap"><div class="vc_empty_space"   style="height: 0.8em"><span class="vc_empty_space_inner"></span></div><h2 class="sc_title sc_title_regular margin_top_huge margin_bottom_tiny" style="color:#ffffff;">Quality</h2><div class="vc_empty_space"   style="height: 0.35em"><span class="vc_empty_space_inner"></span></div><span class="sc_highlight">Control</span></div></div></div></div></a></div></div></div><div class="vc_empty_space"   style="height: 0.85em"><span class="vc_empty_space_inner"></span></div></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1471943051920 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 0.7em"><span class="vc_empty_space_inner"></span></div><div class="sc_section margin_top_large margin_bottom_large"><div class="sc_section_inner"><h6 class="sc_section_subtitle sc_item_subtitle">welcome</h6><h2 class="sc_section_title sc_item_title sc_item_title_without_descr">Seafood Company</h2><div class="sc_section_content_wrap"><div class="sc_promo sc_promo_size_large"><div class="sc_promo_inner"><div class="sc_promo_image" style="background-image:url(https://seafood-company.themerex.net/wp-content/uploads/2016/08/bg_welcome.jpg);width:60%;right: 0;"></div><div class="sc_promo_block sc_align_left" style="width: 40%; float: left;background-image:url(https://seafood-company.themerex.net/wp-content/uploads/2016/08/map_bg.jpg); background-repeat:no-repeat;background-size:cover;"><div class="sc_promo_block_inner"><h2 class="sc_promo_title sc_item_title sc_item_title_with_descr">Our Seafood</h2><div class="sc_promo_descr sc_item_descr">Fish markets range in size from small fish stalls, such as the one in the photo at the right, to the great Tsukiji fish market in Tokyo, turning over about 660,000 tonnes a year. The term can refer to the process.</div><div class="sc_promo_button sc_item_button"><a href="/recipes/" class="sc_button sc_button_square sc_button_style_border sc_button_size_small">learn more</a></div></div></div></div></div></div></div></div><div class="vc_empty_space"   style="height: 1.9em"><span class="vc_empty_space_inner"></span></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1472383334820 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div  class="sc_intro"><div class="sc_intro_inner  sc_intro_style_3"><div class="sc_intro_content"><h2 class="sc_intro_title">We Offer first Class Shrimps</h2><div class="sc_intro_descr">We guarantee you the best seafood, delivered daily to our dock, prepared to your liking. Our focus is on serving the absolute freshest fish and seafood.</div><div class="sc_intro_buttons sc_item_buttons"><div class="sc_intro_button sc_item_button"><a href="/shop/" class="sc_button sc_button_square sc_button_style_filled sc_button_size_medium">SHOP NOW</a></div></div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 0.55em"><span class="vc_empty_space_inner"></span></div><div id="sc_services_1077200349_wrap" class="sc_services_wrap"><div id="sc_services_1077200349" class="sc_services sc_services_style_services-1 sc_services_type_images  margin_top_large margin_bottom_medium" style="width:100%;"><h6 class="sc_services_subtitle sc_item_subtitle">about</h6><h2 class="sc_services_title sc_item_title sc_item_title_without_descr">Our Advantages</h2><div class="sc_columns columns_wrap"><div class="column-1_4 column_padding_bottom">			<div id="sc_services_1077200349_1"				class="sc_services_item sc_services_item_1 odd first"
				>
									<div class="sc_services_item_featured post_featured">
							<div class="post_thumb" data-image="https://seafood-company.themerex.net/wp-content/uploads/2016/08/service-4.jpg" data-title="Responsibly Sourced">
	<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/services/responsibly-sourced/"><img class="wp-post-image" width="540" height="432" alt="Responsibly Sourced" src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/service-4-540x432.jpg"></a>	</div>
						</div>
									<div class="sc_services_item_content">
					<h5 class="sc_services_item_title"><a href="https://seafood-company.themerex.net/services/responsibly-sourced/">Responsibly Sourced</a></h5>
					<div class="sc_services_item_description">
						<p>Responsibly-sourced seafood  is the key to  the modern, safe and profitable seafood industry.</p>					</div>
				</div>
			</div>
		</div><div class="column-1_4 column_padding_bottom">			<div id="sc_services_1077200349_2"				class="sc_services_item sc_services_item_2 even"
				>
									<div class="sc_services_item_featured post_featured">
							<div class="post_thumb" data-image="https://seafood-company.themerex.net/wp-content/uploads/2016/08/service-3.jpg" data-title="Environment">
	<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/services/environment/"><img class="wp-post-image" width="540" height="432" alt="Environment" src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/service-3-540x432.jpg"></a>	</div>
						</div>
									<div class="sc_services_item_content">
					<h5 class="sc_services_item_title"><a href="https://seafood-company.themerex.net/services/environment/">Environment</a></h5>
					<div class="sc_services_item_description">
						<p>The seafood industry has a concern over climate impact, and takes responsibility in any case.</p>					</div>
				</div>
			</div>
		</div><div class="column-1_4 column_padding_bottom">			<div id="sc_services_1077200349_3"				class="sc_services_item sc_services_item_3 odd"
				>
									<div class="sc_services_item_featured post_featured">
							<div class="post_thumb" data-image="https://seafood-company.themerex.net/wp-content/uploads/2016/08/service-2.jpg" data-title="Staff">
	<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/services/staff/"><img class="wp-post-image" width="540" height="432" alt="Staff" src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/service-2-540x432.jpg"></a>	</div>
						</div>
									<div class="sc_services_item_content">
					<h5 class="sc_services_item_title"><a href="https://seafood-company.themerex.net/services/staff/">Staff</a></h5>
					<div class="sc_services_item_description">
						<p>Our experts work hard to maintain the quality seafood for our dear customers exclusively.</p>					</div>
				</div>
			</div>
		</div><div class="column-1_4 column_padding_bottom">			<div id="sc_services_1077200349_4"				class="sc_services_item sc_services_item_4 even"
				>
									<div class="sc_services_item_featured post_featured">
							<div class="post_thumb" data-image="https://seafood-company.themerex.net/wp-content/uploads/2016/08/service-1.jpg" data-title="Marketplace">
	<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/services/marketplace/"><img class="wp-post-image" width="540" height="432" alt="Marketplace" src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/service-1-540x432.jpg"></a>	</div>
						</div>
									<div class="sc_services_item_content">
					<h5 class="sc_services_item_title"><a href="https://seafood-company.themerex.net/services/marketplace/">Marketplace</a></h5>
					<div class="sc_services_item_description">
						<p>Your business becomes benefitial by providing the customers with the best.</p>					</div>
				</div>
			</div>
		</div></div></div><!-- /.sc_services --></div><!-- /.sc_services_wrap --><div class="vc_empty_space"   style="height: 0.5em"><span class="vc_empty_space_inner"></span></div></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding inverse_colors"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="sc_googlemap_440941345_wrap" class="sc_googlemap_wrap"><div id="sc_googlemap_440941345" class="sc_googlemap" style="width:100%;height:398px;" data-zoom="11" data-style="inverse"><iframe src="https://maps.google.com/maps?t=m&output=embed&iwloc=near&z=11&q=Brooklyn%2C+NY" scrolling="no" marginheight="0" marginwidth="0" frameborder="0"
                    aria-label=""></iframe></div><div class="sc_googlemap_content"><div class="sc_section" style="color:#ffffff;background-image:url(https://seafood-company.themerex.net/wp-content/uploads/2016/08/map_bg.jpg);background-repeat:no-repeat;background-size:cover;"><div class="sc_section_inner"><div class="sc_section_overlay" style=""><div class="sc_section_content padding_on" style=""><div class="sc_section_content_wrap"><h5 class="sc_title sc_title_regular margin_top_small" style="color:#ffffff;font-size:2.143em;">Consider the Source</h5>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

		</div>
	</div>
<a href="https://www.google.com/maps/" target="_blank" class="sc_button sc_button_square sc_button_style_border sc_button_size_small margin_top_small">view Sourcing map</a></div></div></div></div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1473056086908 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 1em"><span class="vc_empty_space_inner"></span></div><div id="sc_services_514771103_wrap" class="sc_services_wrap"><div id="sc_services_514771103" class="sc_services sc_services_style_services-2 sc_services_type_icons  margin_top_large margin_bottom_small" style="width:100%;"><h6 class="sc_services_subtitle sc_item_subtitle">our</h6><h2 class="sc_services_title sc_item_title sc_item_title_without_descr">Full Service</h2><div class="sc_columns columns_wrap"><div class="column-1_3 column_padding_bottom">			<div id="sc_services_514771103_1"				class="sc_services_item sc_services_item_1 odd first"
				>
				<a href="https://seafood-company.themerex.net/services/global-network/"><span class="sc_icon icon-icon_5"></span></a>				<div class="sc_services_item_content">
					<h6 class="sc_services_item_title"><a href="https://seafood-company.themerex.net/services/global-network/">Global Network</a></h6>
					<div class="sc_services_item_description">
						<p>Learn about our world wide net. Become a partner or a client.</p>					</div>
				</div>
			</div>
		</div><div class="column-1_3 column_padding_bottom">			<div id="sc_services_514771103_2"				class="sc_services_item sc_services_item_2 even"
				>
				<a href="https://seafood-company.themerex.net/services/logistics/"><span class="sc_icon icon-icon_6"></span></a>				<div class="sc_services_item_content">
					<h6 class="sc_services_item_title"><a href="https://seafood-company.themerex.net/services/logistics/">Logistics</a></h6>
					<div class="sc_services_item_description">
						<p>One if the most important factors. Always fresh, always in time.</p>					</div>
				</div>
			</div>
		</div><div class="column-1_3 column_padding_bottom">			<div id="sc_services_514771103_3"				class="sc_services_item sc_services_item_3 odd"
				>
				<a href="https://seafood-company.themerex.net/services/warehouses/"><span class="sc_icon icon-icon_7"></span></a>				<div class="sc_services_item_content">
					<h6 class="sc_services_item_title"><a href="https://seafood-company.themerex.net/services/warehouses/">Warehouses</a></h6>
					<div class="sc_services_item_description">
						<p>Professional equipment is key. We work to maintain standards.</p>					</div>
				</div>
			</div>
		</div><div class="column-1_3 column_padding_bottom">			<div id="sc_services_514771103_4"				class="sc_services_item sc_services_item_4 even"
				>
				<a href="https://seafood-company.themerex.net/services/certification/"><span class="sc_icon icon-icon_8"></span></a>				<div class="sc_services_item_content">
					<h6 class="sc_services_item_title"><a href="https://seafood-company.themerex.net/services/certification/">Certification</a></h6>
					<div class="sc_services_item_description">
						<p>We work with certified employees. We provide top quality food.</p>					</div>
				</div>
			</div>
		</div><div class="column-1_3 column_padding_bottom">			<div id="sc_services_514771103_5"				class="sc_services_item sc_services_item_5 odd"
				>
				<a href="https://seafood-company.themerex.net/services/temperature-monitoring/"><span class="sc_icon icon-icon_9"></span></a>				<div class="sc_services_item_content">
					<h6 class="sc_services_item_title"><a href="https://seafood-company.themerex.net/services/temperature-monitoring/">Temperature Monitoring</a></h6>
					<div class="sc_services_item_description">
						<p>The importance of the right degree for different sea products.</p>					</div>
				</div>
			</div>
		</div><div class="column-1_3 column_padding_bottom">			<div id="sc_services_514771103_6"				class="sc_services_item sc_services_item_6 even"
				>
				<a href="https://seafood-company.themerex.net/services/test-kitchens/"><span class="sc_icon icon-icon_10"></span></a>				<div class="sc_services_item_content">
					<h6 class="sc_services_item_title"><a href="https://seafood-company.themerex.net/services/test-kitchens/">Test Kitchens</a></h6>
					<div class="sc_services_item_description">
						<p>Cook our seafood products and see how they prove to be perfect.</p>					</div>
				</div>
			</div>
		</div></div></div><!-- /.sc_services --></div><!-- /.sc_services_wrap --><div class="vc_empty_space"   style="height: 2.1em"><span class="vc_empty_space_inner"></span></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1472372807079 vc_row-has-fill inverse_colors"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="sc_skills_diagram_1463529426" class="sc_skills sc_skills_counter margin_top_huge margin_bottom_huge" data-type="counter" data-caption="Skills"><div class="columns_wrap sc_skills_columns sc_skills_columns_3"><div class="sc_skills_column column-1_3"><div class="sc_skills_item sc_skills_style_1 odd first"><div class="sc_skills_count"><div class="sc_skills_total" data-start="0" data-stop="324" data-step="3" data-max="324" data-speed="26" data-duration="2808" data-ed="">0</div></div><div class="sc_skills_info"><div class="sc_skills_label">varieties of shrimp, mussels, lobster & finfish</div></div></div></div><div class="sc_skills_column column-1_3"><div class="sc_skills_item sc_skills_style_1 even"><div class="sc_skills_count"><div class="sc_skills_total" data-start="0" data-stop="32" data-step="3" data-max="324" data-speed="10" data-duration="107" data-ed="">0</div></div><div class="sc_skills_info"><div class="sc_skills_label">countries exported to and imported from</div></div></div></div><div class="sc_skills_column column-1_3"><div class="sc_skills_item sc_skills_style_1 odd"><div class="sc_skills_count"><div class="sc_skills_total" data-start="0" data-stop="287" data-step="3" data-max="324" data-speed="14" data-duration="1339" data-ed="">0</div></div><div class="sc_skills_info"><div class="sc_skills_label">thousand sq. feet of frozen storage space</div></div></div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 0.9em"><span class="vc_empty_space_inner"></span></div><div class="sc_section margin_top_large margin_bottom_large aligncenter"><div class="sc_section_inner"><h6 class="sc_section_subtitle sc_item_subtitle">seafood</h6><h2 class="sc_section_title sc_item_title sc_item_title_without_descr">Discover our products</h2><div class="sc_section_content_wrap"><div class="woocommerce columns-5"><ul class="products columns-5">
<li class="product-category product first">
			<div class="post_item_wrap">
			<div class="post_featured">
				<div class="post_thumb">
					<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/product-category/tuna/">
		<img src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/Products_2-540x496.jpg" alt="Tuna" width="540" height="496" />				</a>
			</div>
		</div>
		<div class="post_content">
		        <h2 class="woocommerce-loop-category__title">
		    <a href="https://seafood-company.themerex.net/product-category/tuna/">Tuna</a> <mark class="count">(1)</mark>        </h2>
	    			</div>
		</div>
		</li>
<li class="product-category product">
			<div class="post_item_wrap">
			<div class="post_featured">
				<div class="post_thumb">
					<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/product-category/snapper/">
		<img src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/Products_3-540x496.jpg" alt="Snapper" width="540" height="496" />				</a>
			</div>
		</div>
		<div class="post_content">
		        <h2 class="woocommerce-loop-category__title">
		    <a href="https://seafood-company.themerex.net/product-category/snapper/">Snapper</a> <mark class="count">(1)</mark>        </h2>
	    			</div>
		</div>
		</li>
<li class="product-category product">
			<div class="post_item_wrap">
			<div class="post_featured">
				<div class="post_thumb">
					<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/product-category/shrimp/">
		<img src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/Products_7-540x496.jpg" alt="Shrimp" width="540" height="496" />				</a>
			</div>
		</div>
		<div class="post_content">
		        <h2 class="woocommerce-loop-category__title">
		    <a href="https://seafood-company.themerex.net/product-category/shrimp/">Shrimp</a> <mark class="count">(1)</mark>        </h2>
	    			</div>
		</div>
		</li>
<li class="product-category product">
			<div class="post_item_wrap">
			<div class="post_featured">
				<div class="post_thumb">
					<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/product-category/scallops/">
		<img src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/Products_4-540x496.jpg" alt="Scallops" width="540" height="496" />				</a>
			</div>
		</div>
		<div class="post_content">
		        <h2 class="woocommerce-loop-category__title">
		    <a href="https://seafood-company.themerex.net/product-category/scallops/">Scallops</a> <mark class="count">(1)</mark>        </h2>
	    			</div>
		</div>
		</li>
<li class="product-category product last">
			<div class="post_item_wrap">
			<div class="post_featured">
				<div class="post_thumb">
					<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/product-category/salmon/">
		<img src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/Products_1-540x496.jpg" alt="Salmon" width="540" height="496" />				</a>
			</div>
		</div>
		<div class="post_content">
		        <h2 class="woocommerce-loop-category__title">
		    <a href="https://seafood-company.themerex.net/product-category/salmon/">Salmon</a> <mark class="count">(1)</mark>        </h2>
	    			</div>
		</div>
		</li>
<li class="product-category product first">
			<div class="post_item_wrap">
			<div class="post_featured">
				<div class="post_thumb">
					<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/product-category/mussels/">
		<img src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/Products_8-540x496.jpg" alt="Mussels" width="540" height="496" />				</a>
			</div>
		</div>
		<div class="post_content">
		        <h2 class="woocommerce-loop-category__title">
		    <a href="https://seafood-company.themerex.net/product-category/mussels/">Mussels</a> <mark class="count">(1)</mark>        </h2>
	    			</div>
		</div>
		</li>
<li class="product-category product">
			<div class="post_item_wrap">
			<div class="post_featured">
				<div class="post_thumb">
					<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/product-category/masago/">
		<img src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/Products_10-540x496.jpg" alt="Masago" width="540" height="496" />				</a>
			</div>
		</div>
		<div class="post_content">
		        <h2 class="woocommerce-loop-category__title">
		    <a href="https://seafood-company.themerex.net/product-category/masago/">Masago</a> <mark class="count">(1)</mark>        </h2>
	    			</div>
		</div>
		</li>
<li class="product-category product">
			<div class="post_item_wrap">
			<div class="post_featured">
				<div class="post_thumb">
					<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/product-category/lobster/">
		<img src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/Products_5-540x496.jpg" alt="Lobster" width="540" height="496" />				</a>
			</div>
		</div>
		<div class="post_content">
		        <h2 class="woocommerce-loop-category__title">
		    <a href="https://seafood-company.themerex.net/product-category/lobster/">Lobster</a> <mark class="count">(1)</mark>        </h2>
	    			</div>
		</div>
		</li>
<li class="product-category product">
			<div class="post_item_wrap">
			<div class="post_featured">
				<div class="post_thumb">
					<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/product-category/crab/">
		<img src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/Products_9-540x496.jpg" alt="Crab" width="540" height="496" />				</a>
			</div>
		</div>
		<div class="post_content">
		        <h2 class="woocommerce-loop-category__title">
		    <a href="https://seafood-company.themerex.net/product-category/crab/">Crab</a> <mark class="count">(1)</mark>        </h2>
	    			</div>
		</div>
		</li>
<li class="product-category product last">
			<div class="post_item_wrap">
			<div class="post_featured">
				<div class="post_thumb">
					<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/product-category/clams/">
		<img src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/Products_6-540x496.jpg" alt="Clams" width="540" height="496" />				</a>
			</div>
		</div>
		<div class="post_content">
		        <h2 class="woocommerce-loop-category__title">
		    <a href="https://seafood-company.themerex.net/product-category/clams/">Clams</a> <mark class="count">(1)</mark>        </h2>
	    			</div>
		</div>
		</li>
</ul>
</div></div><div class="sc_section_button sc_item_button"><a href="/shop/" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">view more products</a></div></div></div><div class="vc_empty_space"   style="height: 1.15em"><span class="vc_empty_space_inner"></span></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 0.4em"><span class="vc_empty_space_inner"></span></div><div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3 margin_top_null margin_bottom_large" data-equal-height=".sc_column_item"><div class="column-1_3 sc_column_item sc_column_item_1 odd first"><div  class="sc_intro" style="background: url(https://seafood-company.themerex.net/wp-content/uploads/2016/08/banner_1.png);"><div class="sc_intro_inner  sc_intro_style_2"><div class="sc_intro_content"><h2 class="sc_intro_title">Discount Program</h2><div class="sc_intro_descr">We want to make your experience truly amazing. Always.</div><div class="sc_intro_buttons sc_item_buttons"><div class="sc_intro_button sc_item_button"><a href="/shop/" class="sc_button sc_button_square sc_button_style_border sc_button_size_medium">shop now</a></div></div></div></div></div></div><div class="column-2_3 sc_column_item sc_column_item_2 even span_2"><div  class="sc_intro sc_intro_position_top_right" style="background: url(https://seafood-company.themerex.net/wp-content/uploads/2016/08/banner_2.jpg);"><div class="sc_intro_inner  sc_intro_style_1" style="width:50%;"><div class="sc_intro_content"><h2 class="sc_intro_title">Weekly Special Offer</h2><div class="sc_intro_descr">Try our clam chowder, shrimp dip, blackened grouper salad, fried shrimps and octopus.</div><div class="sc_intro_buttons sc_item_buttons"><div class="sc_intro_button sc_item_button"><a href="/about/" class="sc_button sc_button_square sc_button_style_filled sc_button_size_medium">learn more</a></div></div></div></div></div></div></div><div class="vc_empty_space"   style="height: 1.9em"><span class="vc_empty_space_inner"></span></div></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1472383565565 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 0.8em"><span class="vc_empty_space_inner"></span></div><div class="sc_section margin_top_large margin_bottom_large aligncenter"><div class="sc_section_inner"><h6 class="sc_section_subtitle sc_item_subtitle">products</h6><h2 class="sc_section_title sc_item_title sc_item_title_without_descr">Featured Items</h2><div class="sc_section_content_wrap"><div class="woocommerce columns-4 "><ul class="products columns-4">
<li class="product type-product post-137 status-publish first instock product_cat-salmon product_tag-delicious product_tag-fish has-post-thumbnail shipping-taxable purchasable product-type-simple">
			<div class="post_item_wrap">
			<div class="post_featured">
				<div class="post_thumb">
					<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/product/salmon/">
		<img width="540" height="496" src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/07-540x496.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />				</a>
			</div>
		</div>
		<div class="post_content">
		<h3><a href="https://seafood-company.themerex.net/product/salmon/">Salmon</a></h3>
	<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>25.00</bdi></span></span>
<a href="?add-to-cart=137" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="137" data-product_sku="" aria-label="Add &ldquo;Salmon&rdquo; to your cart" rel="nofollow">Add to cart</a>			</div>
		</div>
		</li>
<li class="product type-product post-147 status-publish instock product_cat-masago product_tag-healthy product_tag-tender has-post-thumbnail shipping-taxable purchasable product-type-simple">
			<div class="post_item_wrap">
			<div class="post_featured">
				<div class="post_thumb">
					<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/product/tilapia/">
		<img width="540" height="496" src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/08-540x496.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />				</a>
			</div>
		</div>
		<div class="post_content">
		<h3><a href="https://seafood-company.themerex.net/product/tilapia/">Tilapia</a></h3>
	<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>19.00</bdi></span></span>
<a href="?add-to-cart=147" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="147" data-product_sku="" aria-label="Add &ldquo;Tilapia&rdquo; to your cart" rel="nofollow">Add to cart</a>			</div>
		</div>
		</li>
<li class="product type-product post-148 status-publish instock product_cat-shrimp product_tag-exquisite product_tag-fresh has-post-thumbnail shipping-taxable purchasable product-type-simple">
			<div class="post_item_wrap">
			<div class="post_featured">
				<div class="post_thumb">
					<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/product/shrimp/">
		<img width="540" height="496" src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/09-540x496.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />				</a>
			</div>
		</div>
		<div class="post_content">
		<h3><a href="https://seafood-company.themerex.net/product/shrimp/">Shrimp</a></h3>
	<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>21.00</bdi></span></span>
<a href="?add-to-cart=148" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="148" data-product_sku="" aria-label="Add &ldquo;Shrimp&rdquo; to your cart" rel="nofollow">Add to cart</a>			</div>
		</div>
		</li>
<li class="product type-product post-149 status-publish last instock product_cat-snapper product_tag-delicious product_tag-fish has-post-thumbnail shipping-taxable purchasable product-type-simple">
			<div class="post_item_wrap">
			<div class="post_featured">
				<div class="post_thumb">
					<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/product/snapper/">
		<img width="540" height="496" src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/10-540x496.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />				</a>
			</div>
		</div>
		<div class="post_content">
		<h3><a href="https://seafood-company.themerex.net/product/snapper/">Snapper</a></h3>
	<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>18.00</bdi></span></span>
<a href="?add-to-cart=149" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="149" data-product_sku="" aria-label="Add &ldquo;Snapper&rdquo; to your cart" rel="nofollow">Add to cart</a>			</div>
		</div>
		</li>
</ul>
</div></div><div class="sc_section_button sc_item_button"><a href="/shop/" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">shop now</a></div></div></div><div class="vc_empty_space"   style="height: 1.5em"><span class="vc_empty_space_inner"></span></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1472283367687 vc_row-has-fill inverse_colors"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 0.8em"><span class="vc_empty_space_inner"></span></div><div class="sc_section margin_top_large margin_bottom_large aligncenter column-6_11"><div class="sc_section_inner"><h6 class="sc_section_subtitle sc_item_subtitle">video</h6><h2 class="sc_section_title sc_item_title sc_item_title_without_descr">Featured recipe</h2><div class="sc_section_content_wrap"><div class="sc_video_player"><div class="sc_video_frame sc_video_play_button hover_icon hover_icon_play" data-width="100%" data-height="659" data-video="&lt;iframe class=&quot;video_frame&quot; src=&quot;https://player.vimeo.com/video/85992998?autoplay=1&quot; width=&quot;100%&quot; height=&quot;659&quot; frameborder=&quot;0&quot; webkitAllowFullScreen=&quot;webkitAllowFullScreen&quot; mozallowfullscreen=&quot;mozallowfullscreen&quot; allowFullScreen=&quot;allowFullScreen&quot;&gt;&lt;/iframe&gt;" style="width:100%;"><img alt="img" src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/bg_video.jpg"></div></div><div class="vc_empty_space"   style="height: 3.5em"><span class="vc_empty_space_inner"></span></div>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p>Including fish as a regular part of a balanced diet has been shown<br />
to greatly help the symptoms of rheumatoid arthritis.</p>

		</div>
	</div>
</div><div class="sc_section_button sc_item_button"><a href="/gallery-grid/" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">view our portfolio</a></div></div></div><div class="vc_empty_space"   style="height: 1.5em"><span class="vc_empty_space_inner"></span></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 0.8em"><span class="vc_empty_space_inner"></span></div><div id="sc_blogger_366577508" class="sc_blogger layout_classic_3 template_masonry margin_top_large margin_bottom_tiny  sc_blogger_horizontal"><h6 class="sc_blogger_subtitle sc_item_subtitle">blog</h6><h2 class="sc_blogger_title sc_item_title sc_item_title_without_descr">Recent News</h2><div class="isotope_wrap" data-columns="3">		<div class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3					">
			<div class="post_item post_item_classic post_item_classic_3				  post_format_standard odd">
				
									<div class="post_featured">
							<div class="post_thumb" data-image="https://seafood-company.themerex.net/wp-content/uploads/2016/08/post-10.jpg" data-title="Delights of Korean Seafood">
	<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/delights-of-korean-seafood/"><img class="wp-post-image" width="370" height="216" alt="Delights of Korean Seafood" src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/post-10-370x216.jpg"></a>	</div>
						</div>
				
				<div class="post_content isotope_item_content">
					
					<div class="post_info">
				<span class="post_info_item post_info_posted"> <a href="https://seafood-company.themerex.net/delights-of-korean-seafood/" class="post_info_date">May 12, 2016</a></span>
			</div>							<h5 class="post_title"><a href="https://seafood-company.themerex.net/delights-of-korean-seafood/">Delights of Korean Seafood</a></h5>
							
					<div class="post_descr">
						<p>Seafood is a great part of Korean cuisine so you can find a whole aquarium of fishes waiting to be cooked almost in every restaurant of the country.</p>					</div>

				</div>				<!-- /.post_content -->
			</div>	<!-- /.post_item -->
		</div>						<!-- /.isotope_item -->
				<div class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3					">
			<div class="post_item post_item_classic post_item_classic_3				  post_format_standard even">
				
									<div class="post_featured">
							<div class="post_thumb" data-image="https://seafood-company.themerex.net/wp-content/uploads/2016/08/post-11.jpg" data-title="Partnership Announcement">
	<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/partnership-announcement/"><img class="wp-post-image" width="370" height="216" alt="Partnership Announcement" src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/post-11-370x216.jpg"></a>	</div>
						</div>
				
				<div class="post_content isotope_item_content">
					
					<div class="post_info">
				<span class="post_info_item post_info_posted"> <a href="https://seafood-company.themerex.net/partnership-announcement/" class="post_info_date">May 7, 2016</a></span>
			</div>							<h5 class="post_title"><a href="https://seafood-company.themerex.net/partnership-announcement/">Partnership Announcement</a></h5>
							
					<div class="post_descr">
						<p>We are offering a warm, friendly atmosphere to share a  delicious seafood meal with family and friends at any time of the day or evening.</p>					</div>

				</div>				<!-- /.post_content -->
			</div>	<!-- /.post_item -->
		</div>						<!-- /.isotope_item -->
				<div class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3					">
			<div class="post_item post_item_classic post_item_classic_3				  post_format_standard odd last">
				
									<div class="post_featured">
							<div class="post_thumb" data-image="https://seafood-company.themerex.net/wp-content/uploads/2016/08/post-12.jpg" data-title="Seafood Industry">
	<a class="hover_icon hover_icon_link" href="https://seafood-company.themerex.net/seafood-industry/"><img class="wp-post-image" width="370" height="216" alt="Seafood Industry" src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/post-12-370x216.jpg"></a>	</div>
						</div>
				
				<div class="post_content isotope_item_content">
					
					<div class="post_info">
				<span class="post_info_item post_info_posted"> <a href="https://seafood-company.themerex.net/seafood-industry/" class="post_info_date">May 1, 2016</a></span>
			</div>							<h5 class="post_title"><a href="https://seafood-company.themerex.net/seafood-industry/">Seafood Industry</a></h5>
							
					<div class="post_descr">
						<p>The demand for seafood is growing. It becomes important for the entire fishing industry to move toward greater transparency and sustainability.</p>					</div>

				</div>				<!-- /.post_content -->
			</div>	<!-- /.post_item -->
		</div>						<!-- /.isotope_item -->
		</div></div><div class="vc_empty_space"   style="height: 1.05em"><span class="vc_empty_space_inner"></span></div></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1471941903248 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 0.8em"><span class="vc_empty_space_inner"></span></div><div id="sc_clients_114209017_wrap" class="sc_clients_wrap"><div id="sc_clients_114209017" class="sc_clients sc_clients_style_clients-1  margin_top_medium margin_bottom_small" style="width:100%;"><div class="sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_nocontrols" data-interval="9581" data-slides-per-view="5" data-slides-min-width="100"><div class="slides swiper-wrapper"><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_clients_114209017_1" class="sc_clients_item sc_clients_item_1 odd first">
								<div class="sc_client_image"><img class="wp-post-image" alt="Client 5" src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/client1.png"></div>
							</div>
		</div><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_clients_114209017_2" class="sc_clients_item sc_clients_item_2 even">
								<div class="sc_client_image"><img class="wp-post-image" alt="Client 4" src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/client2.png"></div>
							</div>
		</div><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_clients_114209017_3" class="sc_clients_item sc_clients_item_3 odd">
								<div class="sc_client_image"><img class="wp-post-image" alt="Client 3" src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/client3.png"></div>
							</div>
		</div><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_clients_114209017_4" class="sc_clients_item sc_clients_item_4 even">
								<div class="sc_client_image"><img class="wp-post-image" alt="Client 2" src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/client4.png"></div>
							</div>
		</div><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_clients_114209017_5" class="sc_clients_item sc_clients_item_5 odd">
								<div class="sc_client_image"><img class="wp-post-image" alt="Client 1" src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/client5.png"></div>
							</div>
		</div></div><div class="sc_slider_controls_wrap"><a class="sc_slider_prev" href="#"></a><a class="sc_slider_next" href="#"></a></div><div class="sc_slider_pagination_wrap"></div></div></div><!-- /.sc_clients --></div><!-- /.sc_clients_wrap --><div class="vc_empty_space"   style="height: 1.95em"><span class="vc_empty_space_inner"></span></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div>

				</section> <!-- </section> class="post_content" itemprop="articleBody"> -->
			</article> <!-- </article> class="itemscope post_item post_item_single post_featured_default post_format_standard post-293 page type-page status-publish hentry" itemscope itemtype="//schema.org/Article"> -->	<section class="related_wrap related_wrap_empty"></section>
	
		</div> <!-- </div> class="content"> -->
	</div> <!-- </div> class="content_wrap"> -->			
			</div>		<!-- </.page_content_wrap> -->
			
							<footer class="footer_wrap widget_area scheme_original">
					<div class="footer_wrap_inner widget_area_inner">
						<div class="content_wrap">
							<div class="columns_wrap"><aside id="seafood_company_widget_socials-2" class="widget_number_1 column-1_4 widget widget_socials">		<div class="widget_inner">
            		<div class="logo">
			<a href="https://seafood-company.themerex.net/"><img src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/logo_footer.png" class="logo_main" alt="" width="169" height="66"></a>
		</div>
				</div>

		</aside><aside id="text-2" class="widget_number_2 column-1_4 widget widget_text"><h5 class="widget_title">About Us</h5>			<div class="textwidget"><p>For the best food, drinks and service you can choose our restaurant. We guarantee you the freshest seafood prepared to your liking.</p>
</div>
		</aside><aside id="nav_menu-2" class="widget_number_3 column-1_4 widget widget_nav_menu"><h5 class="widget_title">Links</h5><div class="menu-footer-menu-container"><ul id="menu-footer-menu" class="menu"><li id="menu-item-297" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-297"><a href="https://seafood-company.themerex.net/">Home</a></li>
<li id="menu-item-298" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-298"><a target="_blank" rel="noopener" href="https://seafood-company.themerex.net/shortcodes/">Features</a></li>
<li id="menu-item-299" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-299"><a target="_blank" rel="noopener" href="https://seafood-company.themerex.net/recipes/">Recipes</a></li>
<li id="menu-item-300" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-300"><a target="_blank" rel="noopener" href="https://seafood-company.themerex.net/shop/">Products</a></li>
<li id="menu-item-302" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-302"><a target="_blank" rel="noopener" href="https://seafood-company.themerex.net/contacts/">Careers</a></li>
<li id="menu-item-301" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-301"><a target="_blank" rel="noopener" href="https://seafood-company.themerex.net/about-style-1/">Careers</a></li>
</ul></div></aside><aside id="text-3" class="widget_number_4 column-1_4 widget widget_text"><h5 class="widget_title">Contact Us</h5>			<div class="textwidget"><p>Call us at <a href="tel:8001234567">(800)-123-4567</a><br />
123 New Lenox, Chicago, IL<br />
<a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
</div>
		</aside></div>	<!-- /.columns_wrap -->
						</div>	<!-- /.content_wrap -->
					</div>	<!-- /.footer_wrap_inner -->
				</footer>	<!-- /.footer_wrap -->
				 
				<div class="copyright_wrap copyright_style_text  scheme_original">
					<div class="copyright_wrap_inner">
						<div class="content_wrap">
														<div class="copyright_text"><p><a href="https://themerex.net/" target="_blank" rel="noopener">ThemeREX</a> © 2022. All rights reserved.</p></div>
						</div>
					</div>
				</div>
							
		</div>	<!-- /.page_wrap -->

	</div>		<!-- /.body_wrap -->
	
	
	<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a><div class="custom_html_section"></div>
		<script type="text/javascript">
			window.RS_MODULES = window.RS_MODULES || {};
			window.RS_MODULES.modules = window.RS_MODULES.modules || {};
			window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
			window.RS_MODULES.defered = false;
			window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
			window.RS_MODULES.type = 'compiled';
		</script>
				<script type="text/javascript">
			var ajaxRevslider;
			function rsCustomAjaxContentLoadingFunction() {
				// CUSTOM AJAX CONTENT LOADING FUNCTION
				ajaxRevslider = function(obj) {
				
					// obj.type : Post Type
					// obj.id : ID of Content to Load
					// obj.aspectratio : The Aspect Ratio of the Container / Media
					// obj.selector : The Container Selector where the Content of Ajax will be injected. It is done via the Essential Grid on Return of Content
					
					var content	= '';
					var data	= {
						action:			'revslider_ajax_call_front',
						client_action:	'get_slider_html',
						token:			'96755d941c',
						type:			obj.type,
						id:				obj.id,
						aspectratio:	obj.aspectratio
					};
					
					// SYNC AJAX REQUEST
					jQuery.ajax({
						type:		'post',
						url:		'https://seafood-company.themerex.net/wp-admin/admin-ajax.php',
						dataType:	'json',
						data:		data,
						async:		false,
						success:	function(ret, textStatus, XMLHttpRequest) {
							if(ret.success == true)
								content = ret.data;								
						},
						error:		function(e) {
							console.log(e);
						}
					});
					
					 // FIRST RETURN THE CONTENT WHEN IT IS LOADED !!
					 return content;						 
				};
				
				// CUSTOM AJAX FUNCTION TO REMOVE THE SLIDER
				var ajaxRemoveRevslider = function(obj) {
					return jQuery(obj.selector + ' .rev_slider').revkill();
				};


				// EXTEND THE AJAX CONTENT LOADING TYPES WITH TYPE AND FUNCTION				
				if (jQuery.fn.tpessential !== undefined) 					
					if(typeof(jQuery.fn.tpessential.defaults) !== 'undefined') 
						jQuery.fn.tpessential.defaults.ajaxTypes.push({type: 'revslider', func: ajaxRevslider, killfunc: ajaxRemoveRevslider, openAnimationSpeed: 0.3});   
						// type:  Name of the Post to load via Ajax into the Essential Grid Ajax Container
						// func: the Function Name which is Called once the Item with the Post Type has been clicked
						// killfunc: function to kill in case the Ajax Window going to be removed (before Remove function !
						// openAnimationSpeed: how quick the Ajax Content window should be animated (default is 0.3)					
			}
			
			var rsCustomAjaxContent_Once = false
			if (document.readyState === "loading") 
				document.addEventListener('readystatechange',function(){
					if ((document.readyState === "interactive" || document.readyState === "complete") && !rsCustomAjaxContent_Once) {
						rsCustomAjaxContent_Once = true;
						rsCustomAjaxContentLoadingFunction();
					}
				});
			else {
				rsCustomAjaxContent_Once = true;
				rsCustomAjaxContentLoadingFunction();
			}					
		</script>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400%7CRoboto:400&display=swap" rel="stylesheet" property="stylesheet" media="all" type="text/css" >

	<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<script type="text/javascript">
		if(typeof revslider_showDoubleJqueryError === "undefined") {function revslider_showDoubleJqueryError(sliderID) {console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");console.log("To fix this, you can:");console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");console.log("2. Find the double jQuery.js inclusion and remove it");return "Double Included jQuery Library";}}
</script>
<link rel='stylesheet' id='seafood-company-messages-style-css'  href='https://seafood-company.themerex.net/wp-content/themes/seafood-company/fw/js/core.messages/core.messages.css' type='text/css' media='all' />
<link rel='stylesheet' id='prettyphoto-style-css'  href='https://seafood-company.themerex.net/wp-content/themes/seafood-company/fw/js/prettyphoto/css/prettyPhoto.css' type='text/css' media='all' />
<link rel='stylesheet' id='swiperslider-style-css'  href='https://seafood-company.themerex.net/wp-content/themes/seafood-company/fw/js/swiper/swiper.css' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='https://seafood-company.themerex.net/wp-content/plugins/revslider/public/assets/css/rs6.css' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
		.custom.tp-bullets{}.custom.tp-bullets:before{content:' ';position:absolute;width:100%;height:100%;background:transparent;padding:10px;margin-left:-10px;margin-top:-10px;box-sizing:content-box}.custom .tp-bullet{width:12px;height:12px;position:absolute;background:#aaa;  background:rgba(125,125,125,0.5);cursor:pointer;box-sizing:content-box}.custom .tp-bullet.rs-touchhover,.custom .tp-bullet.selected{background:rgb(125,125,125)}.custom .tp-bullet-image{}.custom .tp-bullet-title{}
</style>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-includes/js/dist/vendor/regenerator-runtime.min.js' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-includes/js/dist/vendor/wp-polyfill.min.js' id='wp-polyfill-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/seafood-company.themerex.net\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/plugins/contact-form-7/includes/js/index.js' id='contact-form-7-js'></script>
<script type='text/javascript' id='trx_demo_panels-js-extra'>
/* <![CDATA[ */
var TRX_DEMO_STORAGE = {"ajax_url":"https:\/\/seafood-company.themerex.net\/wp-admin\/admin-ajax.php","ajax_nonce":"b004de0b70","site_url":"https:\/\/seafood-company.themerex.net","user_logged_in":"0","msg_ajax_error":"Invalid server response! Try again later."};
/* ]]> */
</script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/plugins/trx_demo-master/js/trx_demo_panels.js' id='trx_demo_panels-js'></script>
<script type='text/javascript' id='trx_utils-js-extra'>
/* <![CDATA[ */
var TRX_UTILS_STORAGE = {"ajax_url":"https:\/\/seafood-company.themerex.net\/wp-admin\/admin-ajax.php","ajax_nonce":"b004de0b70","site_url":"https:\/\/seafood-company.themerex.net","user_logged_in":"0","email_mask":"^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$","msg_ajax_error":"Invalid server answer!","msg_error_global":"Invalid field's value!","msg_name_empty":"The name can't be empty","msg_email_empty":"Too short (or empty) email address","msg_email_not_valid":"E-mail address is invalid","msg_text_empty":"The message text can't be empty","msg_send_complete":"Send message complete!","msg_send_error":"Transmit failed!","login_via_ajax":"1","msg_login_empty":"The Login field can't be empty","msg_login_long":"The Login field is too long","msg_password_empty":"The password can't be empty and shorter then 4 characters","msg_password_long":"The password is too long","msg_login_success":"Login success! The page will be reloaded in 3 sec.","msg_login_error":"Login failed!","msg_not_agree":"Please, read and check 'Terms and Conditions'","msg_email_long":"E-mail address is too long","msg_password_not_equal":"The passwords in both fields are not equal","msg_registration_success":"Registration success! Please log in!","msg_registration_error":"Registration failed!"};
/* ]]> */
</script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/plugins/trx_utils/js/trx_utils.js' id='trx_utils-js'></script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/plugins/trx_utils/js/core.googlemap.js' id='seafood-company-googlemap-script-js'></script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_b52b1579b0a53fca69d2a2313f308323","fragment_name":"wc_fragments_b52b1579b0a53fca69d2a2313f308323","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js' id='wc-cart-fragments-js'></script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/themes/seafood-company/fw/js/superfish.js' id='superfish-js'></script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/themes/seafood-company/fw/js/core.utils.js' id='seafood-company-core-utils-script-js'></script>
<script type='text/javascript' id='seafood-company-core-init-script-js-extra'>
/* <![CDATA[ */
var SEAFOOD_COMPANY_STORAGE = {"system_message":{"message":"","status":"","header":""},"theme_font":"Montserrat","theme_color":"#2c3941","theme_bg_color":"#f5f5f5","strings":{"ajax_error":"Invalid server answer","bookmark_add":"Add the bookmark","bookmark_added":"Current page has been successfully added to the bookmarks. You can see it in the right panel on the tab &#039;Bookmarks&#039;","bookmark_del":"Delete this bookmark","bookmark_title":"Enter bookmark title","bookmark_exists":"Current page already exists in the bookmarks list","search_error":"Error occurs in AJAX search! Please, type your query and press search icon for the traditional search way.","email_confirm":"On the e-mail address &quot;%s&quot; we sent a confirmation email. Please, open it and click on the link.","reviews_vote":"Thanks for your vote! New average rating is:","reviews_error":"Error saving your vote! Please, try again later.","error_like":"Error saving your like! Please, try again later.","error_global":"Global error text","name_empty":"The name can&#039;t be empty","name_long":"Too long name","email_empty":"Too short (or empty) email address","email_long":"Too long email address","email_not_valid":"Invalid email address","subject_empty":"The subject can&#039;t be empty","subject_long":"Too long subject","text_empty":"The message text can&#039;t be empty","text_long":"Too long message text","send_complete":"Send message complete!","send_error":"Transmit failed!","geocode_error":"Geocode was not successful for the following reason:","googlemap_not_avail":"Google map API not available!","editor_save_success":"Post content saved!","editor_save_error":"Error saving post data!","editor_delete_post":"You really want to delete the current post?","editor_delete_post_header":"Delete post","editor_delete_success":"Post deleted!","editor_delete_error":"Error deleting post!","editor_caption_cancel":"Cancel","editor_caption_close":"Close"},"ajax_url":"https:\/\/seafood-company.themerex.net\/wp-admin\/admin-ajax.php","ajax_nonce":"b004de0b70","site_url":"https:\/\/seafood-company.themerex.net","site_protocol":"https","vc_edit_mode":"","accent1_color":"#8bb4cd","accent1_hover":"#bf5025","slider_height":"100","user_logged_in":"","toc_menu":"float","toc_menu_home":"1","toc_menu_top":"1","menu_fixed":"1","menu_mobile":"1024","menu_hover":"fade","button_hover":"fade","input_hover":"default","demo_time":"0","media_elements_enabled":"1","ajax_search_enabled":"1","ajax_search_min_length":"3","ajax_search_delay":"200","css_animation":"1","menu_animation_in":"fadeIn","menu_animation_out":"fadeOut","popup_engine":"pretty","email_mask":"^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$","contacts_maxlength":"1000","comments_maxlength":"1000","remember_visitors_settings":"","admin_mode":"","isotope_resize_delta":"0.3","error_message_box":null,"viewmore_busy":"","video_resize_inited":"","top_panel_height":"0"};
/* ]]> */
</script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/themes/seafood-company/fw/js/core.init.js' id='seafood-company-core-init-script-js'></script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/themes/seafood-company/js/theme.init.js' id='seafood-company-theme-init-script-js'></script>
<script type='text/javascript' id='mediaelement-core-js-before'>
var mejsL10n = {"language":"en","strings":{"mejs.download-file":"Download File","mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen":"Fullscreen","mejs.play":"Play","mejs.pause":"Pause","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.live-broadcast":"Live Broadcast","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};
</script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-includes/js/mediaelement/mediaelement-and-player.min.js' id='mediaelement-core-js'></script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-includes/js/mediaelement/mediaelement-migrate.min.js' id='mediaelement-migrate-js'></script>
<script type='text/javascript' id='mediaelement-js-extra'>
/* <![CDATA[ */
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
/* ]]> */
</script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-includes/js/mediaelement/wp-mediaelement.min.js' id='wp-mediaelement-js'></script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/themes/seafood-company/fw/js/social/social-share.js' id='seafood-company-social-share-script-js'></script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/plugins/trx_utils/shortcodes/theme.shortcodes.js' id='seafood_company-shortcodes-script-js'></script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/themes/seafood-company/fw/js/core.messages/core.messages.js' id='seafood-company-messages-script-js'></script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/themes/seafood-company/fw/js/prettyphoto/jquery.prettyPhoto.min.js' id='prettyphoto-script-js'></script>
<script type='text/javascript' id='wpb_composer_front_js-js-extra'>
/* <![CDATA[ */
var vcData = {"currentTheme":{"slug":"seafood-company"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js' id='wpb_composer_front_js-js'></script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/plugins/trx_utils/js/core.googlemap.js' id='dairy-farm-googlemap-script-js'></script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js' id='isotope-js'></script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/themes/seafood-company/fw/js/swiper/swiper.js' id='swiperslider-script-js'></script>
<script type='text/javascript' id='cooked-functions-js-js-extra'>
/* <![CDATA[ */
var cooked_js_vars = {"ajax_url":"https:\/\/seafood-company.themerex.net\/wp-admin\/admin-ajax.php","timer_sound":"https:\/\/seafood-company.themerex.net\/wp-content\/plugins\/cooked\/assets\/audio\/ding.mp3","i18n_timer":"Timer"};
/* ]]> */
</script>
<script type='text/javascript' src='https://seafood-company.themerex.net/wp-content/plugins/cooked/assets/js/cooked-functions.min.js' id='cooked-functions-js-js'></script>
<script type="text/javascript" id="rs-initialisation-scripts">
		var	tpj = jQuery;

		var	revapi1;

		if(window.RS_MODULES === undefined) window.RS_MODULES = {};
		if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
		RS_MODULES.modules["revslider11"] = {once: RS_MODULES.modules["revslider11"]!==undefined ? RS_MODULES.modules["revslider11"].once : undefined, init:function() {
			window.revapi1 = window.revapi1===undefined || window.revapi1===null || window.revapi1.length===0  ? document.getElementById("rev_slider_1_1") : window.revapi1;
			if(window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length==0) { window.revapi1initTry = window.revapi1initTry ===undefined ? 0 : window.revapi1initTry+1; if (window.revapi1initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider11"].init()}); return;}
			window.revapi1 = jQuery(window.revapi1);
			if(window.revapi1.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_1_1"); return;}
			revapi1.revolutionInit({
					revapi:"revapi1",
					DPR:"dpr",
					visibilityLevels:"1240,1024,778,480",
					gridwidth:1240,
					gridheight:785,
					lazyType:"all",
					spinner:"spinner0",
					perspective:600,
					perspectiveType:"local",
					editorheight:"785,768,960,720",
					responsiveLevels:"1240,1024,778,480",
					progressBar:{disableProgressBar:true},
					navigation: {
						mouseScrollNavigation:false,
						wheelCallDelay:1000,
						onHoverStop:false,
						touch: {
							touchenabled:true,
							touchOnDesktop:true
						},
						bullets: {
							enable:true,
							tmp:"",
							style:"custom",
							v_offset:30,
							space:7
						}
					},
					viewPort: {
						global:true,
						globalDist:"-200px",
						enable:false,
						visible_area:"20%"
					},
					fallbacks: {
						allowHTML5AutoPlayOnAndroid:true
					},
			});
			
		}} // End of RevInitScript

		if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
	</script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"7433aa1b1c683227","token":"dab7be3e6ab04952b40d6c8e93f6cc2a","version":"2022.8.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>