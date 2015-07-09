<?php

/**
 * @file
 * Implementation for the two column bricked layout
 */

// Plugin definition
$plugin = array(
  'title' => t('Playbook Two column Custom'),
  'category' => t('Columns: 2'),
  'icon' => 'playbook_twocol_custom.png',
  'theme' => 'playbook_twocol_custom',
  //'css' => 'playbook_twocol_custom.css',
  'regions' => array(
    'top' => t('Top'),
    'left' => t('Left'),
    'right' => t('Right')
  ),
);

