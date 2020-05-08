<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This intro snippet is reused in multiple templates. While it does not contain much code,
 * it helps to keep your code DRY and thus facilitate maintenance when you have to make changes.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 text-center mb-3">
      <img style="position: absolute;top: 0;left: 0; z-index: -4; object-fit: cover;object-position: 100% 50%;width: 100%;height: 100%;" src="<?= $site->headerimageurl()->html(); ?>">
      <div style="width: 100%; height: 100%;background-color: rgba(255,255,255,0.48); z-index: -3; position: absolute;top:0;left: 0"></div>
      <h1 class="text-center" style="margin-top: 50px; margin-bottom: 50px"><?= $page->title() ?></h1>
    </div>
  </div>
</div>
