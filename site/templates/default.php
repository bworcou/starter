<?php snippet('header') ?>

    <h1><?php echo $page->title() ?></h1>
<ul>
  <? $works = page('works') ?>
  <?= $works->title() ?>
  <? foreach(page('work')->children() as $single): ?>
  <li><a href="<?= $single->url() ?>"><?= $single->title() ?>, <?
    <? foreach(page('contributors')->children() as $contributor): ?>
    <li><a href="<?= $contributor->url() ?>"><?= $contributor->title() ?></a></li>
    <? endforeach ?>
</ul>

<? $about = page('about') ?>
<?= $about->title() ?>
<?= $about->text()->kirbytext() ?>
<?php snippet('footer') ?>
