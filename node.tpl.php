<?php
//kpr(get_defined_vars());
//http://drupalcontrib.org/api/drupal/drupal--modules--node--node.tpl.php


//tpl variations:
//node--[CONTENT TYPE].tpl.php
//node--view--[CONTENT TYPE].tpl.php

if ($classes) {
  $classes = ' class="'. $classes . ' "';
}

if ($id_node) {
  $id_node = ' id="'. $id_node . '"';
}

hide($content['comments']);
hide($content['links']);
?>

<!--node-->
<section <?php print $id_node . $classes .  $attributes; ?>>
<article role="article">
  <?php print $mothership_poorthemers_helper; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content">
    <!-- google_ad_section_start -->
    <?php print render($content);?>
    <!-- google_ad_section_end -->
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>
</article>
</section>
