<?php
/**
 * @file
 * Implementation of a panels grid ready layout.
 *
 * Available variables:
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout.
 * - $css_id: unique id if present.
 */
?>
<div class="panel-display grid-ready two-33-66 clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['two_33_66_top']): ?>
    <div class="region region-top region-conditional-stack">
      <div class="region-inner clearfix">
        <?php print $content['two_33_66_top']; ?>
      </div>
    </div>
  <?php endif; ?>
  <div class="region region-first">
    <div class="region-inner clearfix">
      <?php print $content['two_33_66_first']; ?>
    </div>
  </div>
  <div class="region region-second">
    <div class="region-inner clearfix">
      <?php print $content['two_33_66_second']; ?>
    </div>
  </div>
  <?php if ($content['two_33_66_bottom']): ?>
    <div class="region region-bottom region-conditional-stack">
      <div class="region-inner clearfix">
        <?php print $content['two_33_66_bottom']; ?>
      </div>
    </div>
  <?php endif; ?>
</div>
