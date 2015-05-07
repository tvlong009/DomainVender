<?php

class AcceptanceSiteLoginPage
{
    // include url of current page
    public static $URL = 'index-test.php/site/login';
    

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

    /**
     * @var AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * @return AcceptanceLoginPage
     */
    public static function of(AcceptanceTester $I)
    {
        return new static($I);
    }
    
    public function iAmOnLoginPage() 
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(self::$URL);
        return $this;
    }
    
    public function login($username, $password)
    {
        $I = $this->acceptanceTester;
        $I->wantTo('Login');
        $I->fillField(SiteLoginPage::$username, $username);
        $I->fillField(SiteLoginPage::$password, $password);
        $I->click(SiteLoginPage::$loginButton);
        
        return $this;
    }

    public function loginTestUser() {
        $this->login(SiteLoginPage::$testUser, SiteLoginPage::testUserPassword);
        return $this;
    }

}