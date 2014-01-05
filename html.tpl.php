  <!DOCTYPE html <?php print $rdf_namespaces; ?>>
  <html lang="en">
    <?php print $mothership_poorthemers_helper; ?>
    <head>
      <meta charset="utf-8">
      <title><?php print $head_title; ?></title>
      <?php print str_replace("\0", '', $head); ?>
      <link rel="apple-touch-icon" href="<?php print drupal_get_path('theme', 'nits'); ?>/apple-touch-icon.png"/>
      <link rel="apple-touch-icon-precomposed" href="<?php print drupal_get_path('theme', 'nits'); ?>/apple-touch-icon-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php print drupal_get_path('theme', 'nits'); ?>/apple-touch-icon-72x72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php print drupal_get_path('theme', 'nits'); ?>/apple-touch-icon-114x114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php print drupal_get_path('theme', 'nits'); ?>/apple-touch-icon-144x144-precomposed.png">
      <meta name="HandheldFriendly" content="True">
      <meta name="MobileOptimized" content="320">
<?php if(theme_get_setting('mothership_viewport')){  ?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<?php } ?>
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <link rel="stylesheet" type="text/css" href="//cloud.typography.com/618400/733542/css/fonts.css" />
      <?php print $styles; ?>
      <!--[if lt IE 9]>
        <script src="<?php print drupal_get_path('theme', 'mothership'); ?>/js/html5.js"></script>
      <![endif]-->
      <?php print $selectivizr; ?>
<?php
if(!theme_get_setting('mothership_script_place_footer')) {
  print $scripts;
}
?>
    </head>
    <body>
      <?php print $page_top; //stuff from modules always render first ?>
      <?php print $page; // uses the page.tpl ?>

      <?php
        if(theme_get_setting('mothership_script_place_footer')) {
          print $scripts;
        }
      ?>

      <footer class="vcard">
        <a href="https://www.linkedin.com/in/deekayen" class="footer-1"><i class="fa fa-linkedin"></i> <span class="label">Profile</span></a>
        <a href="mai&#108;&#116;o&#58;%&#54;4&#101;e&#107;%6&#49;&#121;e&#110;&#64;d&#101;ekay&#37;&#54;5n&#46;&#110;et" class="footer-2"><i class="fa fa-envelope-o"></i> <span class="label email">dee&#107;aye&#110;&#64;deeka&#121;en&#46;ne&#116;</span></a>
        <a href="http://twitter.com/davidknorman" class="footer-3"><i class="fa fa-twitter"></i> <span class="label">@davidknorman</span></a>
        <a href="https://github.com/deekayen" class="footer-4"><i class="fa fa-github"></i> <span class="label">Github</span></a>
      </footer>
      <?php print $page_bottom; //stuff from modules always render last ?>
    </body>
  </html>
