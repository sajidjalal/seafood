<?php
if (!defined('SCRIPT_VERSION')) {

    // MAIN
    define("SCRIPT_VERSION", (env('APP_ENV') == 'prod') ? '04:07:2022|2.1.1' : rand());

    // CONTACTS
    define("CONTACT_ADDRESS", 'A-Z Industrial Premises, 1st  Floor, Unit no. 165, G.K. Marg. Lower Parel, Mumbai - 400 013');
    define("CONTACT_NO", '022 - 22846544');
    define("CONTACT_EMAIL", 'ibai@ibai.org');
    define("SUPPORT_EMAIL", 'support@ibai.org');
    define("CONTACT_MAP", 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15089.836223803937!2d72.82349700000002!3d18.999483!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2787d174c9b79235!2sA%20to%20Z%20Industrial%20Estate!5e0!3m2!1sen!2sin!4v1652073056915!5m2!1sen!2sin');

    //  links
    define("SOCIAL_LINK_FACEBOOK", 'https://www.facebook.com/IBAI-179033109235903/');
    define("SOCIAL_LINK_TWITTER", 'https://twitter.com/IndiaIbai');
    define("SOCIAL_LINK_LINKEDIN", '');
    define("SOCIAL_LINK_INSTAGRAM", '');
    define("ADMIN_WHATSAPP_LINK_WITH_MSG", 'https://api.whatsapp.com/send?phone=919960157383&text=hi');
    define("ADMIN_WHATSAPP_LINK", 'https://api.whatsapp.com/send?phone=919960157383');

   
    
}
