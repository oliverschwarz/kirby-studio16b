<!DOCTYPE html>
<html lang="de">
<head>

  <meta charset="utf-8">
  <title><?= $site->sitetitle()->html(); ?></title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="referrer" content="no-referrer">
  <link rel="canonical" href="<?= $site->url() ?>">
  <?= css('assets/layout.css'); ?>

  <link rel="shortcut icon" href="favicon.png">

  <meta name="twitter:card" value="summary">
  <meta property="og:title" content="<?= $site->ogtitle() ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $site->url(false) ?>">
  <meta property="og:image" content="<?= $site->find('home')->image()->url(); ?>">
  <meta property="og:description" content="<?= $site->ogdescription() ?>">

</head>
<body class="<?=$page->slug()?>">
