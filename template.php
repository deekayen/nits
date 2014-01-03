<?php
/*
  Preprocess
*/

function nits_preprocess_page(&$vars, $hook) {
  $node = $vars['node'];

  if ($node->type == 'blog') {
    $prev_node = db_query("SELECT nid, title FROM {node} WHERE type = :type AND nid > :nid AND status = 1 ORDER BY nid ASC LIMIT 1", array(':type' => $node->type, ':nid' => $node->nid))->fetchObject();
    if ($prev_node->nid) {
      $vars['blog_prev_url'] = url('node/' . $prev_node->nid);
      $vars['blog_prev_title'] = check_plain($prev_node->title);
    }

    $next_node = db_query("SELECT nid, title FROM {node} WHERE type = :type AND nid < :nid AND status = 1 ORDER BY nid DESC LIMIT 1", array(':type' => $node->type, ':nid' => $node->nid))->fetchObject();
    if ($next_node->nid) {
      $vars['blog_next_url'] = url('node/' . $next_node->nid);
      $vars['blog_next_title'] = check_plain($next_node->title);
    }
  }
}

function nits_link($variables) {
  $icon = '';
  switch ($variables['path']) {
    case 'admin':
      $icon = '<i class="main-menu-icon fa fa-wrench"></i> ';
      break;
    case 'node/add':
      $icon = '<i class="main-menu-icon fa fa-pencil-square-o"></i> ';
      break;
    case 'user/logout':
      $icon = '<i class="main-menu-icon fa fa-sign-out"></i> ';
      break;
  }
  return '<a href="' . check_plain(url($variables['path'], $variables['options'])) . '"' . drupal_attributes($variables['options']['attributes']) . ">$icon" . ($variables['options']['html'] ? $variables['text'] : check_plain($variables['text'])) . '</a>';
}

/*
function NEWTHEME_preprocess_html(&$vars) {
  //  kpr($vars['content']);
}

function NEWTHEME_preprocess_page(&$vars,$hook) {
  //  kpr($vars['content']);
}

function NEWTHEME_preprocess_region(&$vars,$hook) {
  //  kpr($vars['content']);
}

function NEWTHEME_preprocess_block(&$vars, $hook) {
  //  kpr($vars['content']);
}

function NEWTHEME_preprocess_node(&$vars,$hook) {
  //  kpr($vars['content']);
}

function NEWTHEME_preprocess_comment(&$vars,$hook) {
  //  kpr($vars['content']);
}

function NEWTHEME_preprocess_field(&$vars,$hook) {
  //  kpr($vars['content']);
}

function NEWTHEME_preprocess_maintenance_page(){
  //  kpr($vars['content']);
}
*/
