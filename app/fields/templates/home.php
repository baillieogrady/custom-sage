<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$home = new FieldsBuilder('Front Page');

$home
    ->setLocation('post_type', '==', 'page')
    ->and('page_type', '==', 'front_page');

$home
    ->setGroupConfig('position', 'acf_after_title');

$home
    ->addGroup('hero')
        ->addImage('background_image')
        ->addRepeater('boxes', [
            'max' => 3
        ])
            ->addLink('link')
        ->endRepeater()
    ->endGroup()
    ->addGroup('heading_images', [
        'label' => 'Heading & Images'
    ])
        ->addText('lead')
        ->addText('heading')
        ->addText('subheading')
        ->addWysiwyg('text')
        ->addImage('top_image', [
            'label' => 'Top Image'
        ])
        ->addImage('bottom_image', [
            'label' => 'Bottom Image'
        ])
        ->addImage('display_image', [
            'label' => 'display image'
        ])
    ->endGroup()
    ->addGroup('images_quote', [
        'label' => 'Images & quote'
    ])
        ->addText('heading')
        ->addWysiwyg('text')
        ->addImage('top_image', [
            'label' => 'Top Image'
        ])
        ->addImage('bottom_image', [
            'label' => 'Bottom Image'
        ])
        ->addWysiwyg('quote')
    ->endGroup();

return $home;