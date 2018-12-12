<?php
/**
 * Created by PhpStorm.
 * User: SuatDILEK
 * Date: 18.11.2018
 * Time: 22:47
 */
class Uploadfile {
    //Tek Dosya Yükleme metodunu oluşturduk
    public static function Tekdosya($dosya, $yol, $boyutLimit = 1, $dosya_uzantilari = null)
    {
        $sonuc = [];
        if ($dosya['error'] == 4){
            $sonuc['hata'] = 'Lütfen dosyanızı seçin.';
        } else {

            if (is_uploaded_file($dosya['tmp_name'])){

                $uzanti = explode('.', $dosya['name']);
                $uzanti = end($uzanti);

                $gecerli_dosya_uzantilari = $dosya_uzantilari ? $dosya_uzantilari : [
                    'image/jpeg',
                    'image/png',
                    'image/gif'
                ];

                $gecerli_dosya_boyutu = (1024 * 1014) * $boyutLimit;

                $dosya_uzantisi = $dosya['type'];

                if (in_array($dosya_uzantisi, $gecerli_dosya_uzantilari)){

                    if ($gecerli_dosya_boyutu >= $dosya['size']){

                        $ad = uniqid();

                        $yukle = move_uploaded_file($dosya['tmp_name'], $yol . $ad . '.' . $uzanti);

                        if ($yukle){
                            $sonuc['dosya'] = $yol . $ad . '.' . $uzanti;
                        } else {
                            $sonuc['hata'] = 'Bir sorun oluştu ve dosyanız yüklenemedi.';
                        }

                    } else {
                        $sonuc['hata'] = 'Yükleyeceğiniz dosya en fazla '.$boyutLimit.'MB olabilir.';
                    }

                } else {
                    $sonuc['hata'] = 'Yüklediğiniz dosya geçerli bir formatta değil.'.$dosya_uzantisi;
                }

            } else {
                $sonuc['hata'] = 'Dosya yüklenirken bir sorun oluştu.';
            }
        }
        return $sonuc;
    }



    //Tek Dosya Yükleme metodunu oluşturduk
    public static function Tekresim_Enboy_Thumplu($dosya, $klasor, $klasor_thump, $r_genislik, $r_yukseklik, $r_genislik_thump, $r_yukseklik_thump, $boyutLimit = 1, $dosya_uzantilari = null)
    {
        $sonuc = [];
        if ($dosya['error'] == 4){
            $sonuc['hata'] = 'Lütfen dosyanızı seçin.';
        } else {

            if (is_uploaded_file($dosya['tmp_name'])){

                $uzanti = explode('.', $dosya['name']);
                $uzanti = end($uzanti);

                $gecerli_dosya_uzantilari = $dosya_uzantilari ? $dosya_uzantilari : [
                    'image/jpeg',
                    'image/png',
                    'image/gif'
                ];

                $gecerli_dosya_boyutu = (1024 * 1014) * $boyutLimit;

                $dosya_uzantisi = $dosya['type'];

                if (in_array($dosya_uzantisi, $gecerli_dosya_uzantilari)){

                    if ($gecerli_dosya_boyutu >= $dosya['size']){

                        $ad = uniqid();
                        $resimtr = $ad. '.' . $uzanti;
                        $resim_tamyol = $klasor . $ad . '.' . $uzanti;

                        $yukle = move_uploaded_file($dosya['tmp_name'], $resim_tamyol);

                        if ($yukle){
                            $sonuc['dosya'] = $klasor . $ad . '.' . $uzanti;

                            //resmin bilgilerinin alınması
                            list($gen, $yuk, $type) = getimagesize($resim_tamyol);

                            //en ve boy oranının hesaplanması
                            $enOran = $r_genislik / $gen;
                            $boyOran = $r_yukseklik / $yuk;
                            $enOran_thump = $r_genislik_thump / $gen;
                            $boyOran_thump = $r_yukseklik_thump / $yuk;

//Oranın ayarlanması
                            if($enOran > $boyOran){
                                $yEn = floor($gen * $enOran);
                                $yBoy = floor($yuk * $enOran);
                            }else{
                                $yEn = floor($gen * $boyOran);
                                $yBoy = floor($yuk * $boyOran);
                            }
                            if($enOran_thump > $boyOran_thump){
                                $yEn_thump = floor($gen * $enOran_thump);
                                $yBoy_thump = floor($yuk * $enOran_thump);
                            }else{
                                $yEn_thump = floor($gen * $boyOran_thump);
                                $yBoy_thump = floor($yuk * $boyOran_thump);
                            }

//kesilmeye başlangıç noktalarının hesaplanaması
                            $fEn = floor(0 - (($yEn - $r_genislik) / 2));
                            $fBoy = floor(0 - (($yBoy - $r_yukseklik) / 2));
                            $fEn_thump = floor(0 - (($yEn_thump - $r_genislik_thump) / 2));
                            $fBoy_thump = floor(0 - (($yBoy_thump - $r_yukseklik_thump) / 2));

//resmin hafızaya alınması
                            switch (strtolower(substr(strrchr($resim_tamyol, '.'), 1))) {
                                case 'jpg':
                                case 'jpeg':
                                    $o_img = @imagecreatefromjpeg($resim_tamyol);
                                    $o_img_thump = @imagecreatefromjpeg($resim_tamyol);
                                    break;
                                case 'gif':
                                    $o_img = @imagecreatefromgif($resim_tamyol);
                                    $o_img_thump = @imagecreatefromgif($resim_tamyol);
                                    break;
                                case 'png':
                                    $o_img = @imagecreatefrompng($resim_tamyol);
                                    $o_img_thump = @imagecreatefrompng($resim_tamyol);
                                    break;
                                default:
                                    $o_img = null;
                                    $o_img_thump = null;
                            }

//renklerin belirlenmesi
                            $g_img = imagecreatetruecolor($r_genislik, $r_yukseklik);
                            $g_img_thump = imagecreatetruecolor($r_genislik_thump, $r_yukseklik_thump);

//resmi keserek oluşturma
                            imagecopyresampled($g_img,$o_img,$fEn,$fBoy,0,0,$yEn,$yBoy,$gen,$yuk);
                            imagecopyresampled($g_img_thump,$o_img_thump,$fEn_thump,$fBoy_thump,0,0,$yEn_thump,$yBoy_thump,$gen,$yuk);
                            imagejpeg($g_img, $klasor.$resimtr);
                            imagejpeg($g_img_thump, $klasor_thump.$resimtr);
//resmin kaynağını silme
                            imagedestroy($o_img);
                            imagedestroy($g_img);
                            imagedestroy($o_img_thump);
                            imagedestroy($g_img_thump);

                        } else {
                            $sonuc['hata'] = 'Bir sorun oluştu ve dosyanız yüklenemedi.';
                        }

                    } else {
                        $sonuc['hata'] = 'Yükleyeceğiniz dosya en fazla '.$boyutLimit.'MB olabilir.';
                    }

                } else {
                    $sonuc['hata'] = 'Yüklediğiniz dosya geçerli bir formatta değil.'.$dosya_uzantisi;
                }

            } else {
                $sonuc['hata'] = 'Dosya yüklenirken bir sorun oluştu.';
            }
        }
        return $sonuc;
    }

    //Tek Dosya Yükleme metodunu oluşturduk
    public static function Multiresim_Enboy($dosyalar, $klasor, $r_genislik, $r_yukseklik, $boyutLimit = 1, $dosya_uzantilari = null)
    {
        $sonuc = [];

        // hataları kontrol et
        foreach ($dosyalar['error'] as $index => $error){
            if ($error == 4){
                $sonuc['hata'] = 'Lütfen dosya seçin!!';
            } elseif ($error != 0){
                $sonuc['hata'][] = 'Dosya yüklenirken bir sorun oluştu #' . $dosyalar['name'][$index];
            }
        }

        // hata yoksa devam et
        if (!isset($sonuc['hata'])){

            $gecerli_dosya_uzantilari = $dosya_uzantilari ? $dosya_uzantilari : [
                'image/jpeg',
                'image/png',
                'image/gif'
            ];

            foreach ($dosyalar['type'] as $index => $type){
                if (!in_array($type, $gecerli_dosya_uzantilari)){
                    $sonuc['hata'][] = 'Dosya geçersiz bir formatta #' . $dosyalar['name'][$index];
                }
            }
            if (!isset($sonuc['hata'])){
                // boyutu kontrol et
                $maxBoyut = (1024 * 1024) * $boyutLimit;

                foreach ($dosyalar['size'] as $index => $size){
                    if ($size > $maxBoyut){
                        $sonuc['hata'][] = 'Dosya beklenenden fazla büyük boyutta #' . $dosyalar['name'][$index];
                    }
                }
                if (!isset($sonuc['hata'])){

                    // dosyaları yükle
                    foreach ($dosyalar['tmp_name'] as $index => $tmp){
                        $ad = uniqid();
                        $resimtr = $ad. '.' . $uzanti;
                        $resim_tamyol = $klasor . $ad . '.' . $uzanti;

                        $dosyaAdi = $dosyalar['name'][$index];
                        $yukle = move_uploaded_file($tmp, $resim_tamyol);
                        if ($yukle){
                            $sonuc['dosya'][] = $resim_tamyol;

                            //resmin bilgilerinin alınması
                            list($gen, $yuk, $type) = getimagesize($resim_tamyol);

                            //en ve boy oranının hesaplanması
                            $enOran = $r_genislik / $gen;
                            $boyOran = $r_yukseklik / $yuk;
//Oranın ayarlanması
                            if($enOran > $boyOran){
                                $yEn = floor($gen * $enOran);
                                $yBoy = floor($yuk * $enOran);
                            }else{
                                $yEn = floor($gen * $boyOran);
                                $yBoy = floor($yuk * $boyOran);
                            }
//kesilmeye başlangıç noktalarının hesaplanaması
                            $fEn = floor(0 - (($yEn - $r_genislik) / 2));
                            $fBoy = floor(0 - (($yBoy - $r_yukseklik) / 2));
//resmin hafızaya alınması
                            switch (strtolower(substr(strrchr($resim_tamyol, '.'), 1))) {
                                case 'jpg':
                                case 'jpeg':
                                    $o_img = @imagecreatefromjpeg($resim_tamyol);
                                    break;
                                case 'gif':
                                    $o_img = @imagecreatefromgif($resim_tamyol);
                                    break;
                                case 'png':
                                    $o_img = @imagecreatefrompng($resim_tamyol);
                                    break;
                                default:
                                    $o_img = null;
                            }
//renklerin belirlenmesi
                            $g_img = imagecreatetruecolor($r_genislik, $r_yukseklik);
//resmi keserek oluşturma
                            imagecopyresampled($g_img,$o_img,$fEn,$fBoy,0,0,$yEn,$yBoy,$gen,$yuk);
                            imagejpeg($g_img, $klasor.$resimtr);
//resmin kaynağını silme
                            imagedestroy($o_img);
                            imagedestroy($g_img);

                        } else {
                            $sonuc['hata'][] = 'Dosya yüklenemedi! #' . $dosyaAdi;
                        }
                    }

                }
            }

        }
        return $sonuc;

    }
}