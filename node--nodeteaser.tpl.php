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


$external_url = url("node/{$node->nid}", array('absolute' => TRUE));
$external_link = l($external_url, "node/{$node->nid}", array('html' => TRUE));
$plain_text = strip_tags($content['body']['#object']->body['und'][0]['value']);
$word_count = count(preg_split("/\s+/", $plain_text));
$min_to_read = round($word_count/225);
if (empty($min_to_read)) {
  $min_to_read = 1;
}
?>

<!--node-->
<section <?php print $id_node . $classes .  $attributes; ?>>
  <article class="nodeteaser">
    <?php print $mothership_poorthemers_helper; ?>

    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
      <h3<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>" class="article-link" rel="bookmark"><?php print $title; ?></a></h3>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <aside class="nodesummary">
      <h4><?php print format_date($created, 'custom', 'M d, Y'); ?></h4>
      <h4><?php print "$min_to_read min read"; ?></h4>
      <?php print render($content['taxonomyextra']); ?>
    </aside>

    <div class="content nodeteaser">
      <a href="<?php print $node_url; ?>" class="article-link" rel="bookmark">
      <?php print preg_replace("|<a\s+href.*?>|i", "", preg_replace("|</\s*a\s*>|", "", render($content['body']))); ?>
      </a>
    </div>
  </article>
</section>
<!--/node-->
