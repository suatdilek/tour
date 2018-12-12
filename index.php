<?php
require __DIR__."/app/init.php";

//adres çubuğundaki adresi alıyoruz.
//? işaretinden öncekibölümü alıyoruz
// Diziye dönüştürüyoruz.
// Explode ile parçaladık
//Array_filter ile boş gelen dizi elemanlarını temizledik
//Array_values ile dizinin indexlerini sıfırladık. 0,1,2....
$routeExplode = explode('?', $_SERVER['REQUEST_URI']);
$route = array_values(array_filter(explode('/', $routeExplode[0])));
//print_r($route);

//Dizinin ilk elemanı bizim localhosttaki klasör ismimiz mi kontrol ediyoruz.
//doğruysa dizinin ilk elemanını yok ediyoruz.
// Burası localhostta çalışması için gerekli.
if (isset($route[0]) and $route[0]==LOCAL_KLASOR){
    array_shift($route);
}

//Dizinin ilk elemanı yoksa ilk elemanı index olarak atıyoruz.
if (!isset($route[0])){
    $route[0] = 'index';
}

//Eğer conroller altında dizinin 0 ncı elemanı yoksa dizinin 0 ıncı elemanı 404 olsun.
if (!file_exists(__DIR__.'/app/controller/'.strtolower($route[0]).'.php')){
    $route[0] = '404';
}

if(setting('maintenance_mode')==1 and route(0) !== 'admin'){
    $route[0] = 'maintenance-mode';
}

// Dizinin 0 ıncı elemanı ismindeki sayfayı çağırıyoruz.
require __DIR__.'/app/controller/'.strtolower($route[0]).'.php';

/*

//Class dizininden class çağırma:
//$test = new Test();
//BİTTİ Class dizininden class çağırma:


*/
//echo"<br>".$route[0];
//print_r($_SERVER);

require __DIR__."/app/init.php";

//adres çubuğundaki adresi alıyoruz.
//? işaretinden öncekibölümü alıyoruz
// Diziye dönüştürüyoruz.
// Explode ile parçaladık
//Array_filter ile boş gelen dizi elemanlarını temizledik
//Array_values ile dizinin indexlerini sıfırladık. 0,1,2....
$routeExplode = explode('?', $_SERVER['REQUEST_URI']);
$route = array_values(array_filter(explode('/', $routeExplode[0])));
//print_r($route);

//Dizinin ilk elemanı bizim localhosttaki klasör ismimiz mi kontrol ediyoruz.
//doğruysa dizinin ilk elemanını yok ediyoruz.
// Burası localhostta çalışması için gerekli.
if (isset($route[0]) and $route[0]==LOCAL_KLASOR){
    array_shift($route);
}

//Dizinin ilk elemanı yoksa ilk elemanı index olarak atıyoruz.
if (!isset($route[0])){
    $route[0] = 'index';
}

//Eğer conroller altında dizinin 0 ncı elemanı yoksa dizinin 0 ıncı elemanı 404 olsun.
if (!file_exists(__DIR__.'/app/controller/'.strtolower($route[0]).'.php')){
    $route[0] = '404';
}

if(setting('maintenance_mode')==1 and route(0) !== 'admin'){
    $route[0] = 'maintenance-mode';
}

// Dizinin 0 ıncı elemanı ismindeki sayfayı çağırıyoruz.
require __DIR__.'/app/controller/'.strtolower($route[0]).'.php';

/*

//Class dizininden class çağırma:
//$test = new Test();
//BİTTİ Class dizininden class çağırma:


*/
//echo"<br>".$route[0];
//print_r($_SERVER);

