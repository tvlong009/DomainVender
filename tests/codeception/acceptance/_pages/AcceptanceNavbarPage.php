<?php

class AcceptanceNavbarPage
{
    // include url of current page
    public static $URL = '';

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
     * @return NavbarPage
     */
    public static function of(AcceptanceTester $I)
    {
        return new static($I);
    }
    
    public function openPage($locator)
    {
        $I = $this->acceptanceTester;
        $I->waitForElementVisible($locator);
        $I->click($locator);
        return $this;
    }
    
    public function openHomePage() 
    {
        $this->openPage(NavbarPage::$headerHomeButton);
        return $this;
    }
    
    public function openLogoutPage() 
    {
        $this->openPage(NavbarPage::$headerLogoutButton);
        $I = $this->acceptanceTester;
        $I->waitForElement(NavbarPage::$headerLoginButton);
        return $this;
    }
    
    public function openLoginPage() 
    {
        $this->openPage(NavbarPage::$headerLoginButton);
        $I = $this->acceptanceTester;
        $I->waitForElement(SiteLoginPage::$password);
        $I->waitForElement(SiteLoginPage::$username);
        return $this;
    }
}