<!--views-view-normanisms-quote-block-->
<div class="<?php print $classes; ?>">
  <?php if ($rows): ?>
    <aside>
      <p><cite>"<?php print trim(strip_tags($rows, "<a>")); ?>"</cite> <small><a href="<?php print url('node/add/normanism'); ?>" style="display: inline" class="fa fa-pencil" title="Submit a Normanism"></a> <a href="<?php print url('normanisms.xml'); ?>" style="display: inline" class="fa fa-rss" title="Normanisms feed"></a></small></p>
    </aside>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>
</div> <?php /* class view */ ?>
<!--/views-view-normanisms-quote-block-->
