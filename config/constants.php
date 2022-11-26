<?php
if (!defined('SCRIPT_VERSION')) {

    // MAIN
    define("COMPANY_NAME", 'Aiza Seafood');
    define("COMPANY_FULL_NAME", 'Aiza Seafood');
    define("SCRIPT_VERSION", (env('APP_ENV') == 'prod') ? '04:07:2022|2.1.1' : rand());

    // CONTACTS
    define("CONTACT_ADDRESS", 'Address: Plot No E-23, Near Prime Mall. Sector 12, Kharghar, Kharghar, Raigarh, Panvel, Maharashtra, 410210');
    define("CONTACT_NO", '+91-9960157383');
    define("CONTACT_NO_2", ''); // 9175183407
    define("CONTACT_EMAIL", 'info@aizaseafood.com');
    define("SUPPORT_EMAIL", 'info@aizaseafood.com');
   
    define("CONTACT_MAP", 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1331.5250531169377!2d73.06364095999578!3d19.039415396480937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c23dfe4495ab%3A0x8d2f6891e2d855f!2sPrime%20Mall!5e0!3m2!1sen!2sin!4v1663117024984!5m2!1sen!2sin');

    //  links
    define("SOCIAL_LINK_FACEBOOK", 'https://www.facebook.com/');
    define("SOCIAL_LINK_TWITTER", 'https://twitter.com/');
    define("SOCIAL_LINK_LINKEDIN", '#');
    define("SOCIAL_LINK_INSTAGRAM", '#');
    define("SOCIAL_LINK_YOUTUBE", '#');
    define("ADMIN_WHATSAPP_LINK_WITH_MSG", 'https://api.whatsapp.com/send?phone=919960157383&text=hi');
    define("ADMIN_WHATSAPP_LINK", 'https://api.whatsapp.com/send?phone=919960157383');

    define("SHOWDATEFORMAT","d-m-Y");
    define("GOBACK","Go Back");
    
    define("CODE_200","200");
    define("CODE_422","422");

    
}
