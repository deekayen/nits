<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!--node.tpl.php-->
<?php } ?>

<?php print $mothership_poorthemers_helper; ?>

<img style="position:fixed; bottom:0; left:0; width:inherit; max-width:30%; height:auto; z-index: -1;" src="<?php print drupal_get_path('theme', 'nits'); ?>/images/calvin_and_hobbes_thinking.png" alt="Calvin and Hobbes thinking" />
<div class="page cf">
  <a style="color:#000; padding-left:1em; float:left; position:fixed; font-size:35px;" href="<?php print $front_page; ?>"><i class="fa fa-home"></i></a>
  <article style="display:block; text-align:left; width:60%; margin-left:40%; clear:both">

   <h1>Not Found</h1>

    <h2>
      This is an error page
    </h2>

    <p>The page you were trying to view does not exist.</p>
    <p>Here are some possible root causes:</p>
    <ul>
      <li>a mistyped address</li>
      <li>an out-of-date link</li>
      <li>David decided to remove the content</li>
      <li>the site is broken and no pages are working</li>
    </ul>

    <a href="/search/">Try a search?</a>
  </article>

</div>
<style>
footer.vcard {
  display:none;
}
</style>
