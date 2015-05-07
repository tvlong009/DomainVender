<?php

class NavbarPage
{
    // include url of current page
    public static $URL = '';

    public static $headerHomeButton = '#navbar-option-home > a';
    public static $headerLogoutButton = '#navbar-option-logout > a';
    public static $headerLoginButton = '#navbar-option-login > a';
    
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: EditPage::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}