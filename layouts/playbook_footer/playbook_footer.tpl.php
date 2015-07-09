<?php
/**
 * @file
 * Template for a 1 column panel layout.
 *
 * This template provides a one column panel display layout
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['column']: Content in the middle row.
 */
?>
<div class="col-sm-3">
	<?php print $content['column']; ?>
</div>

