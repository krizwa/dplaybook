<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * additional areas for the top and the bottom.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top']: Content in the top row.
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 *   - $content['middle']: Content in the middle row.
 */
?>
<div class="homepage-hero">
  <div class="row homepage-hero-wrapper">
    <div class="col-sm-10 col-sm-offset-1 homepage-hero-top">
      <div class="inside"><?php print $content['top']; ?></div>
    </div>
  </div>
  <div class="row homepage-hero-content-wrapper">
    <div class="col-sm-4">
      <div class="inside"><?php print $content['left']; ?></div>
    </div>
    <div class="col-sm-4">
      <div class="inside"><?php print $content['middle']; ?></div>
    </div>
    <div class="col-sm-4">
      <div class="inside"><?php print $content['right']; ?></div>
    </div>
  </div>
</div>