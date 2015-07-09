<?php

/**
 * @file
 * Implementation for the two column bricked layout
 */

// Plugin definition
$plugin = array(
  'title' => t('Playbook Footer'),
  'category' => t('Columns: 1'),
  'icon' => 'playbook_footer.png',
  'theme' => 'playbook_footer',
  'regions' => array(
    'column' => t('Footer Column')
  ),
);

