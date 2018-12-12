<?php
session_start();
ob_start();
date_default_timezone_set('Europe/Istanbul');

//php hatalarını göstermek için
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Class dizinindeki class ları yüklüyoruz.
function loadClasses($className)
{
    require __DIR__ . '/classes/' . strtolower($className) . '.php';
}
//yukarıdaki fonksiyonu çağırıyoruz.
spl_autoload_register('loadClasses');


$config = require __DIR__ . '/config.php';

try {
$db = new BasicDB($config['db']['host'], $config['db']['name'], $config['db']['user'], $config['db']['pass']);
} catch (PDOException $e){
    die($e->getMessage());
}

// ayarları çağırıyoruz
require __DIR__.'/settings.php';

// GLOB FONKSİYONU İLE HELPER KLASÖRÜNÜN ALTINDAKİ KLASÖRÜ TARAYABİLİYORUZ.
// VE REQUİRE EDİYORUZ.
// HELPER KLASÖRÜNÜN ALTINDA FONKSİYONLARIMIZI TUTUYORUZ.
foreach (glob(__DIR__ . '/helper/*.php') as $helperFile){
    require $helperFile;
}