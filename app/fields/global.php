<?php
/**
 * Global Settings Page
 */

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

$theme = new FieldsBuilder('Theme');

$theme
    ->setLocation('options_page', '==', 'theme-settings');

$theme
    ->addTab('header', [
        'placement' => 'left'
    ])
        ->addImage('logo')
    ->addTab('footer', [
        'placement' => 'left'
    ])
        ->addWysiwyg('text')
        ->addImage('footer_logo', [
            'label' => 'Logo'
        ])
        ->addGallery('images', [
            'max' => 2
        ])
        ->addUrl('facebook')
        ->addUrl('instagram');

return $theme;
