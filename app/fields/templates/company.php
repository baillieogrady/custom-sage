<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$company = new FieldsBuilder('Company');

$company
    ->setLocation('page_template', '==', 'views/template-company.blade.php');

$company
    ->setGroupConfig('position', 'acf_after_title');

$company
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
    ->endGroup()
    ->addGroup('manager')
        ->addText('heading')
        ->addWysiwyg('info')
        ->addImage('image')
        ->addImage('property_image')
    ->endGroup()
    ->addGroup('text')
        ->addText('heading')
        ->addWysiwyg('text')
    ->endGroup();

return $company;