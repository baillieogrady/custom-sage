<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$service = new FieldsBuilder('Service');

$service
    ->setLocation('page_template', '==', 'views/template-service.blade.php');

$service
    ->setGroupConfig('position', 'acf_after_title');

$service
    ->addGroup('hero')
        ->addImage('background_image')
    ->endGroup()
    ->addGroup('heading_images', [
        'label' => 'Heading & Images'
    ])
        ->addText('heading')
        ->addText('lead')
        ->addImage('top_image')
        ->addImage('bottom_image')
        ->addText('subheading')
        ->addWysiwyg('text')
        ->addImage('display_image')
    ->endGroup()
    ->addGroup('list')
        ->addText('heading')
        ->addRepeater('items')
            ->addText('item')
        ->endRepeater()
        ->addText('subheading')
    ->endGroup()
    ->addGroup('documents')
        ->addText('heading')
        ->addRepeater('lists')
            ->addRepeater('items')
                ->addText('item')
            ->endRepeater()
        ->endRepeater()
    ->endGroup();

return $service;