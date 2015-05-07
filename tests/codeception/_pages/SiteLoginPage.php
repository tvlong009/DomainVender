<?php

class SiteLoginPage
{
    // include url of current page
    public static $URL = 'site/login';
    
    // hooks
    public static $username = '#loginform-username';
    public static $password = '#loginform-password';
    public static $loginButton = '#login-button';
    
    // Shareholder Tester
    public static $testUser = 'testuser';
    public static $testUserPassword = 'LetMeInImATestUser!';
    
    public static function route($param)
    {
        return static::$URL.$param;
    }


}