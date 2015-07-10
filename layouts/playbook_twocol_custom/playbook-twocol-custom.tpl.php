<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * each column roughly equal in width. It is 5 rows high; the top
 * middle and bottom rows contain 1 column, while the second
 * and fourth rows contain 2 columns.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top']: Content in the top row.
 *   - $content['left_above']: Content in the left column in row 2.
 *   - $content['right_above']: Content in the right column in row 2.
 *   - $content['middle']: Content in the middle row.
 *   - $content['left_below']: Content in the left column in row 4.
 *   - $content['right_below']: Content in the right column in row 4.
 *   - $content['right']: Content in the right column.
 *   - $content['bottom']: Content in the bottom row.
 */
?>
<div class="two-col-custom">
	<div class="row two-col-custom-top-wrapper">
	  <div class="col-sm-10 col-sm-offset-1 two-col-custom-top">
	    <div class="inside"><?php print $content['top']; ?></div>
	  </div>
	</div>
	<div class="row two-col-custom-content-wrapper">
	  <div class="col-sm-3 col-sm-offset-1 two-col-custom-left">
	    <div class="inside"><?php print $content['left']; ?></div>
	  </div>
	  <div class="col-sm-7 two-col-custom-right">
	    <div class="inside"><?php print $content['right']; ?></div>
	  </div>
	</div>
</div>
