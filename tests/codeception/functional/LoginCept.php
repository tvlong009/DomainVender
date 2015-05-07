<?php

use tests\codeception\_pages\LoginPage;

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that login works');

$loginPage = LoginPage::openBy($I);

$I->see('Login', 'h1');
$I->see('Onthouden');

$I->amGoingTo('try to login with empty credentials');
$loginPage->login('', '');
$I->expectTo('see validations errors');

$I->see('Gebruikersnaam mag niet leeg zijn.');
$I->see('Wachtwoord mag niet leeg zijn.');

$I->amGoingTo('try to login with wrong credentials');
$loginPage->login('admin', 'wrong');
$I->expectTo('see validations errors');

$I->see('Ongeldige gebruikersnaam of wachtwoord.');

$I->amGoingTo('try to login with correct credentials');
$loginPage->login('tmsilvan', 'Letmein2');

$I->expectTo('see user info');
$I->see('Logout (tmsilvan)');
