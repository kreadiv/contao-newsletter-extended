<?php

// Palettes 
$GLOBALS['TL_DCA']['tl_newsletter_recipients']['palettes']['default'] = str_replace('{email_legend},email', '{email_legend},email,name', $GLOBALS['TL_DCA']['tl_newsletter_recipients']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_newsletter_recipients']['fields']['name'] = [
    'label'                   => &$GLOBALS['TL_LANG']['tl_newsletter_recipients']['name'],
    'exclude'                 => true,
    'search'                  => true,      
    'sorting'                 => false,
    'flag'                    => 1,
    'inputType'               => 'text',
    'eval'                    => ['mandatory' => true, 'maxlength' => 255, 'tl_class' => 'clr w50'],
    'sql'                     => "varchar(255) NOT NULL default ''"
];