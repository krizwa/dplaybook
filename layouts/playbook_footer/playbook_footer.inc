<?php

/**
 * @file
 * Implementation for the two column bricked layout
 */

// Plugin definition
$plugin = array(
  'title' => t('Playbook Footer'),
  'category' => t('Columns: 4'),
  'icon' => 'playbook_footer.png',
  'theme' => 'playbook_footer',
  'regions' => array(
    'column1' => t('Footer Column1'),
    'column2' => t('Footer Column2'),
    'column3' => t('Footer Column3'),
    'column4' => t('Footer Column4')
  ),
);

