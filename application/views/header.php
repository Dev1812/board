<?php
  $page_title = (isset($param['page_title']) && !empty($param['page_title'])) ? $param['page_title'] : '...';
  $page_description = (isset($param['page_description']) && !empty($param['page_description'])) ? $param['page_description'] : '...';
  $page_keywords = (isset($param['page_keywords']) && !empty($param['page_keywords'])) ? $param['page_keywords'] : '...';
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html>

<head>
  <title><?php echo $page_title; ?></title>
  <link rel="shortcut icon" href="/images/icons/ScreenBrush.ico?<?php echo time();?>" type="image/x-icon">

  <meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
  <meta name="title" content="<?php echo $page_title; ?>">
  <meta name="description" content="<?php echo $page_description; ?>">
  <meta name="keywords" content="<?php echo $page_keywords; ?>">

  <meta name="mobile-web-app-capable" content="yes">
  <meta name="theme-color" content="#000000">
  <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Pragma" content="no-cache">

  <meta property="og:title" content="<?php echo $page_title; ?>">
  <meta property="og:image" content="/images/icons/favicon.ico?2">
  <meta property="og:description" content="<?php echo $page_description; ?>">

  <meta name="viewport" content="width=device-width, user-scalable=yes">

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/user_guide/_static/css/common.css">
  <style>
html, body{margin:0;padding:0;}
a{text-decoration:none;color:blue;}
.head__right{float:right;}

.head{border-bottom:1px solid #DDD;height:51px;line-height:51px;padding:0 14px;}

.head__link{float:left;padding:0 14px;}
  </style>
</head>
<body>

<div id="wrap1">

<div class="head">
  <!--<div class="head__right">
    <a href="/" class="head__link">Word</a>
  </div>-->
  <div class="head__left">
    <a href="/" class="head__link">Word</a>
  </div>
</div>
