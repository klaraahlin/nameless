<?php

/**
 * @file
 * nameless theme implementation to display a block.
 * - headline markup has been altered to a h4, because we already have h2 all over
 *   the place
 * - wrapping div around content has been removed
 *
 * Available variables:
 * for info on available variables see modules/block/block.tpl.php
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see template_process()
 */
?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h4<?php print $title_attributes; ?>><?php print $title; ?></h4>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php print $content ?>

</div>
