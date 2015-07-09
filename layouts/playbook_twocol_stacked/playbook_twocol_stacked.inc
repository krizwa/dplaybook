<?php

// Plugin definition
$plugin = array(
  'title' => t('Playbook Two column stacked'),
  'category' => t('Columns: 2'),
  'icon' => 'playbook_twocol_stacked.png',
  'theme' => 'playbook_twocol_stacked',
  'css' => 'playbook_twocol_stacked.css',
  'regions' => array(
    'top' => t('Top'),
    'left' => t('Left side'),
    'right' => t('Right side'),
    'bottom' => t('Bottom')
  ),
);
