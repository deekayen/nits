<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<!--page.tpl.php-->
<?php print $mothership_poorthemers_helper; ?>



<?php if ($logo OR $site_name OR $site_slogan OR $page['header'] OR ($logged_in && $main_menu)): ?>
<header class="cf" role="banner">
  <?php if ($logo): ?>
    <figure class="logo">
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    </a>
    </figure>
  <?php endif; ?>

	<?php if($site_name OR $site_slogan ): ?>
  <hgroup>
		<?php if($site_name): ?>
    <h1><?php print $site_name; ?></h1>
    <?php endif; ?>
    <?php if ($site_slogan): ?>
      <h2><?php print $site_slogan; ?></h2>
    <?php endif; ?>
  </hgroup>
  <?php endif; ?>

  <?php if ($page['header']): ?>
    <div class="header">
      <?php print render($page['header']); ?>
    </div>
  <?php endif; ?>
  <?php if($logged_in && $main_menu): ?>
  <nav id="main-menu" role="navigation">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
        )); ?>
  </nav>
  <?php endif; ?>
</header>
<?php endif; ?>

<div id="page_nav">

<?php if($blog_prev_url): ?>
<a href="<?php print $blog_prev_url; ?>" class="fa fa-chevron-left" id="blog-prev" title="<?php print $blog_prev_title; ?>"></a>
<?php endif; ?>

<div id="allofit">

<!--end mothership-->

<section>
  <section id="blog-entry">
    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>

    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span class="page-title-home"></span></a> <?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($tabs): ?>
      <nav class="tabs"><?php print render($tabs); ?></nav>
    <?php endif; ?>

    <?php if($page['highlighted'] OR $messages){ ?>
      <div class="drupal-messages">
      <?php print render($page['highlighted']); ?>
      <?php print $messages; ?>
      </div>
    <?php } ?>

    <?php print render($page['content_pre']); ?>
    <?php print render($page['content']); ?>
    <?php print render($page['content_post']); ?>
  </section>
</section>
<?php if ($page['bottom_nav_first'] || $page['bottom_nav_second'] || $page['bottom_nav_third']): ?>
<section id="bottom-nav">
  <?php if ($page['bottom_nav_first']): ?>
    <?php print render($page['bottom_nav_first']); ?>
  <?php endif; ?>

  <?php if ($page['bottom_nav_second']): ?>
    <?php print render($page['bottom_nav_second']); ?>
  <?php endif; ?>

  <?php if ($page['bottom_nav_third']): ?>
    <?php print render($page['bottom_nav_third']); ?>
  <?php endif; ?>
</section>
<?php endif; ?>
</div>

<?php if($blog_next_url): ?>
<a href="<?php print $blog_next_url; ?>" class="fa fa-chevron-right" id="blog-next" title="<?php print $blog_next_title; ?>"></a>
<?php endif; ?>

</div>
