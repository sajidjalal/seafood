<header class="top_panel_wrap top_panel_style_3 scheme_original">
    <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
        <div class="top_panel_top">
            <div class="content_wrap clearfix">
                <div class="top_panel_top_contact_area">
                    <span class="contact_icon icon-icon_1"></span>
                    <span class="contact_label">
                        {{ CONTACT_ADDRESS }}
                    </span>
                    <span class="contact_icon icon-icon_2"></span>
                    <span class="contact_label">
                        Call us at
                        <a href="tel:{{ CONTACT_NO }}">{{ CONTACT_NO }}</a>
                    </span>
                </div>
                <div class="top_panel_top_user_area">
                    <div class="top_panel_top_socials">
                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny">
                            <div class="sc_socials_item">
                                <a href="{{ SOCIAL_LINK_FACEBOOK }}" target="_blank"
                                    class="social_icons social_facebook">
                                    <span class="icon-facebook"></span>
                                </a>
                            </div>
                            <div class="sc_socials_item">
                                <a href="{{ SOCIAL_LINK_TWITTER }}" target="_blank" class="social_icons social_twitter">
                                    <span class="icon-twitter"></span>
                                </a>
                            </div>

                            <div class="sc_socials_item">
                                <a href="{{ SOCIAL_LINK_LINKEDIN }}" target="_blank" class="social_icons social_camera">
                                    <span class="icon-camera"></span>
                                </a>
                            </div>

                            <div class="sc_socials_item">
                                <a href="{{ SOCIAL_LINK_YOUTUBE }}" target="_blank" class="social_icons social_youtube">
                                    <span class="icon-youtube"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <ul id="menu_user" class="menu_user_nav hidden">
                        <li class="menu_user_register">
                            <a href="#popup_registration" class="popup_link popup_register_link icon-pencil"
                                title="">Register</a>
                            <div id="popup_registration" class="popup_wrap popup_registration bg_tint_light">
                                <a href="#" class="popup_close"></a>
                                <div class="form_wrap">
                                    <form name="registration_form" method="post" class="popup_form registration_form">
                                        <input type="hidden" name="redirect_to"
                                            value="https://seafood-company.themerex.net/" />
                                        <div class="form_left">
                                            <div class="popup_form_field login_field iconed_field icon-user">
                                                <input type="text" id="registration_username"
                                                    name="registration_username" value=""
                                                    placeholder="User name (login)">
                                            </div>
                                            <div class="popup_form_field email_field iconed_field icon-mail">
                                                <input type="text" id="registration_email" name="registration_email"
                                                    value="" placeholder="E-mail">
                                            </div>
                                            <div class="popup_form_field agree_field">
                                                <input type="checkbox" value="1"
                                                    id="i_agree_privacy_policy_registration"
                                                    name="i_agree_privacy_policy"><label
                                                    for="i_agree_privacy_policy_registration"> I agree that
                                                    my submitted data is being collected and stored.</label>
                                            </div>
                                            <div class="popup_form_field submit_field"><input type="submit"
                                                    class="submit_button" value="Sign Up">
                                            </div>
                                        </div>
                                        <div class="form_right">
                                            <div class="popup_form_field password_field iconed_field icon-lock">
                                                <input type="password" id="registration_pwd" name="registration_pwd"
                                                    value="" placeholder="Password">
                                            </div>
                                            <div class="popup_form_field password_field iconed_field icon-lock">
                                                <input type="password" id="registration_pwd2" name="registration_pwd2"
                                                    value="" placeholder="Confirm Password">
                                            </div>
                                            <div class="popup_form_field description_field">Minimum 4
                                                characters
                                            </div>
                                        </div>
                                    </form>
                                    <div class="result message_block"></div>
                                </div>
                                <!-- /.registration_wrap -->
                            </div>
                            <!-- /.user-popUp -->
                        </li>
                        <li class="menu_user_login">
                            <a href="#popup_login" class="popup_link popup_login_link icon-user"
                                title="">Login</a>
                            <div id="popup_login" class="popup_wrap popup_login bg_tint_light popup_half">
                                <a href="#" class="popup_close"></a>
                                <div class="form_wrap">
                                    <div>
                                        <form action="/" method="post" name="login_form"
                                            class="popup_form login_form">
                                            <input type="hidden" name="redirect_to"
                                                value="https://seafood-company.themerex.net/">
                                            <div class="popup_form_field login_field iconed_field icon-user">
                                                <input type="text" id="log" name="log" value=""
                                                    placeholder="Login or Email">
                                            </div>
                                            <div class="popup_form_field password_field iconed_field icon-lock">
                                                <input type="password" id="password" name="pwd" value=""
                                                    placeholder="Password">
                                            </div>
                                            <div class="popup_form_field remember_field">
                                                <a href="/" class="forgot_password">Forgot password?</a>
                                                <input type="checkbox" value="forever" id="rememberme"
                                                    name="rememberme">
                                                <label for="rememberme">Remember me</label>
                                            </div>
                                            <div class="popup_form_field submit_field"><input type="submit"
                                                    class="submit_button" value="Login">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.login_wrap -->
                            </div>
                            <!-- /.popup_login -->
                        </li>
                        <li class="menu_user_cart">
                            <a href="#" class="top_panel_cart_button" data-items="2" data-summa="&#036;58.00">
                                <span class="contact_icon icon-icon_4"></span>
                                <span class="contact_label contact_cart_label">Your cart:</span>
                                <span class="contact_cart_totals">
                                    <span class="cart_items">2 Items</span><span class="cart_summa">&#36;58.00</span>
                                </span>
                            </a>
                            <ul class="widget_area sidebar_cart sidebar">
                                <li>
                                    <div class="widget woocommerce widget_shopping_cart">
                                        <div class="hide_cart_widget_if_empty">
                                            <div class="widget_shopping_cart_content"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="top_panel_middle">
            <div class="content_wrap">
                <div class="contact_logo">
                    <div class="logo">
                        <a href="/"><img
                                src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/logo.png"
                                class="logo_main" alt="" width="293" height="128"><img
                                src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/logo.png"
                                class="logo_fixed" alt="" width="293" height="128"></a>
                    </div>
                </div>
                <div class="menu_main_wrap">
                    <nav class="menu_main_nav_area menu_hover_fade">
                        <ul id="menu_main" class="menu_main_nav">
                            <li class="menu-item">
                                <a href="/"> Home </a>
                            </li>
                            <li class="menu-item-has-children ">
                                <a href="{{ route('product') }}">
                                    Products
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{ route('product') }}">
                                            FROZEN FINFISH
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('product') }}">
                                            FROZEN SHRIMPS
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('product') }}">
                                            FROZEN SHELLFISH & CEPHALOPOD
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('about') }}">About</a>
                            </li>

                            <li class="menu-item">
                                <a href="{{ route('contact-us') }}">Contacts</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="header_mobile">
    <div class="content_wrap">
        <div class="menu_button icon-menu"></div>
        <div class="logo">
            <a href="/"><img src="https://seafood-company.themerex.net/wp-content/uploads/2016/08/logo.png"
                    class="logo_main" alt="" width="293" height="128"></a>
        </div>
    </div>
    <div class="side_wrap">
        <div class="close">Close</div>
        <div class="panel_top">
            <nav class="menu_main_nav_area">
                <ul id="menu_mobile" class="menu_main_nav">

                    <li class="menu-item">
                        <a href="/"> Home </a>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="{{ route('product') }}">
                            Products
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('product') }}">
                                    FROZEN FINFISH
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('product') }}">
                                    FROZEN SHRIMPS
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('product') }}">
                                    FROZEN SHELLFISH & CEPHALOPOD
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('about') }}">About</a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('contact-us') }}">Contacts</a>
                    </li>




                </ul>
            </nav>
        </div>
        <div class="panel_bottom">
        </div>
    </div>
    <div class="mask"></div>
</div>
