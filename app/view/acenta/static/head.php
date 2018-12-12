<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    if(isset($meta["description"])){
        echo'<meta name="description" content="'.$meta["description"].'">
        ';}
    if(isset($meta["keywords"])){
        echo'<meta name="keywords" content="'.$meta["keywords"].'">';}
    ?>

    <meta name="author" content="Ansonika">
    <title><?php echo $meta["title"]; ?></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo public_url('img/favicon.ico');?>" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo public_url('img/apple-touch-icon-57x57-precomposed.png');?>">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo public_url('img/apple-touch-icon-72x72-precomposed.png');?>">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo public_url('img/apple-touch-icon-114x114-precomposed.png');?>">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo public_url('img/apple-touch-icon-144x144-precomposed.png');?>">

    <!-- COMMON CSS -->
    <link href="<?php echo public_url('css/bootstrap.min.css" rel="stylesheet');?>">
    <link href="<?php echo public_url('css/style.css" rel="stylesheet');?>">
    <link href="<?php echo public_url('css/vendors.css" rel="stylesheet');?>">

    <!-- CUSTOM CSS -->
    <link href="<?php echo public_url('css/custom.css" rel="stylesheet');?>">

