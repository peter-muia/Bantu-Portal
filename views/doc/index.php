<?php
use yii\helpers\Url;
$this->title = 'Bantu Documentation';

?>

<!doctype html>
<!--

  Instructions:

  - Save this file.
  - Replace "USER" with your GitHub username.
  - Replace "REPO" with your GitHub repo name.
  - Replace "Your Project" with your project name.
  - Upload this file (or commit to GitHub Pages).

  Customize as you see fit!

-->
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">

  <title><?php echo $this->title; ?></title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Product+Sans:300,400,600,700" rel="stylesheet">

  <!-- Flatdoc -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src='https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/legacy.js'></script>
  <script src='https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/flatdoc.js'></script>

  <!-- Flatdoc theme -->
  <link  href='https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/theme-white/style.css' rel='stylesheet'>
  <script src='https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/theme-white/script.js'></script>

  <!-- Meta -->
  <meta content="Your Project" property="og:title">
  <meta content="Your Project description goes here." name="description">

  <!-- Initializer -->
  <script>
    Flatdoc.run({
    fetcher: Flatdoc.file( window.location.origin+'/doc/readme.md')
    });
  </script>
<link href="https://fonts.googleapis.com/css?family=Product+Sans:300,400,600,700" rel="stylesheet" />
<link href="/css/doc.css" rel="stylesheet">

</head>
<body role='flatdoc'>

  <div class='header'>
    <div class='left'>
      <h1 style="font-family: 'Product Sans'; font-size: 24px; margin-top: -2px">
	<img src="/img/doclogo.png" alt="">
      </h1>
      <ul>
        <li><a href='#'>View on GitHub</a></li>
        <li><a href='#'>Issues</a></li>
      </ul>
    </div>
    <div class='right'>
      <!-- GitHub buttons: see http://ghbtns.com -->
      <!-- <iframe src="https://ghbtns.com/github-btn.html?user=allpremium&amp;repo=tupay&amp;type=watch&amp;count=true" allowtransparency="true" 
	frameborder="0" scrolling="0" width="110" height="20"></iframe> -->
    </div>
  </div>

  <div class='content-root'>
    <div class='menubar'>
      <div class='menu section' role='flatdoc-menu'></div>
    </div>
    <div role='flatdoc-content' class='content'></div>
  </div>

</body>
</html>
