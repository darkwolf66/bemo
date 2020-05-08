<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * This header snippet is reused in all templates. 
 * It fetches information from the `site.txt` content file and contains the site navigation.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <!-- The title tag we show the title of our site and the title of the current page -->
  <?php
    if(strlen($page->metatitle()) > 0):?>
      <title><?= $site->title() ?> | <?= $page->metatitle() ?></title>
  <?php else: ?>
      <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <?php endif;?>

  <?php
  if(strlen($page->metadescription()) > 0):?>
    <meta name="description" content="<?= $page->metadescription() ?>">
  <?php else: ?>
    <meta name="description" content="<?= $site->description() ?>">
  <?php endif;?>

  <?php
  if(strlen($page->metadescription()) > 0):?>
    <meta name="keywords" content="<?= $page->metakeywords() ?>">
  <?php else: ?>
    <meta name="keywords" content="<?= $site->keywords() ?>">
  <?php endif;?>

  <?php
    if($page->crawled() == 'false'):?>
    <meta name="robots" content="noindex">
  <?php endif;?>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <?= css(['assets/css/index.css', '@auto']) ?>

</head>
<body>
<div></div>
<?= $site->facebookpixelcode(); ?>
<?= $site->googleanalyticstag(); ?>
  <div class="page">
    <header class="header">
      <!-- In this link we call `$site->url()` to create a link back to the homepage -->
      <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>

      <nav id="menu" class="menu">
        <?php 
        // In the menu, we only fetch listed pages, i.e. the pages that have a prepended number in their foldername
        // We do not want to display links to unlisted `error`, `home`, or `sandbox` pages
        // More about page status: https://getkirby.com/docs/reference/panel/blueprints/page#statuses
        foreach ($site->children()->listed() as $item): ?>
        <?= $item->title()->link() ?>
        <?php endforeach ?>
      </nav>
    </header>

