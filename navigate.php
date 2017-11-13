<?php
// An example of using php-webdriver.
namespace Facebook\WebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
require_once('vendor/autoload.php');
// start Firefox with 5 second timeout
$host = 'http://localhost:4444/wd/hub'; // this is the default
$capabilities = DesiredCapabilities::chrome();
$driver = RemoteWebDriver::create($host, $capabilities, 5000);
// navigate to 'http://www.seleniumhq.org/'
$driver->get('http://localhost:8080/xampp/www/vero/'); 
// adding cookie
$driver->manage()->deleteAllCookies();
$cookie = new Cookie('cookie_name', 'cookie_value');
$driver->manage()->addCookie($cookie);
$cookies = $driver->manage()->getCookies();
print_r($cookies);
// click the link 'About'

# get the select element	

$select = $driver->findElement(
    WebDriverBy::id('selection')
);

$driver->findElement(WebDriverBy::id('CheckBox'))->click();


$test = $driver->findElement( WebDriverBy::id('selection') )
               ->findElement( WebDriverBy::cssSelector("option[value='saab']") )
               ->click();

// close the Firefox
//$driver->quit();
