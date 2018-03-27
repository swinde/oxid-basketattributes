<?php
/**
 * @package       basketattributes
 * @category      module
 * @author        Steffen Winde
 * @link          http://winde-ganzig.de/
 * @licenses      GNU GENERAL PUBLIC LICENSE. More info can be found in LICENSE file.
 * @copyright (C] OXID e-Sales, 2003-2017
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = [
    'id'           => 'swinde/basketattributes',
    'title'        => 'Warenkorb Attribute der Artikel ausgeben',
    'description'  => [
        'de' => 'Warenkorb Attribute der Artikel ausgeben',
        'en' => 'Warenkorb Attribute der Artikel ausgeben',
    ],
    'version'      => '1.0.0',
    'author'       => 'Steffen Winde',
    'url'          => 'http://winde-ganzig.de/',
    'email'        => 'mailto:inserv@winde-ganzig.de',
    'events'       => [],
    'blocks' => [
        [
            'template' => 'page/checkout/inc/basketcontents_table.tpl',
            'block'    => 'dd_checkout_inc_basketcontents_table_item_desc',
            'file'     => 'views/blocks/basketcontents_table_basketattributtes.tpl'
        ],

    ],

    'settings'     => []
];
