<?php
/**
 * Global Settings Page
 */

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Global Settings',
        'menu_title'    => 'Global Settings',
        'menu_slug'     => 'global-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

$social = new FieldsBuilder('Social');

$social
    ->setLocation('options_page', '==', 'global-settings');

$social
    ->addUrl('depop')
    ->addText('email')
    ->addTrueFalse('banner')
    ->addText('text')
    ->conditional('banner', '==', '1');

return $social;
