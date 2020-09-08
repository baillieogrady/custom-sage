<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$references = new FieldsBuilder('References');
 
$references
    ->setLocation('page_template', '==', 'views/template-references.blade.php');

$references
    ->setGroupConfig('position', 'acf_after_title');

$references
    ->addGroup('hero')
        ->addImage('background_image')
    ->endGroup()
    ->addGroup('headings')
        ->addText('heading')
        ->addText('lead')
    ->endGroup()
    ->addGroup('dominos')
        ->addRepeater('items', [
            'max' => 2,
            'layout' => 'block'
        ])
            ->addImage('image')
            ->addText('name')
            ->addWysiwyg('quote')
        ->endRepeater()
        ->addText('heading')
    ->endGroup()
    ->addGroup('dominos_alt', [
        'label' => 'Dominos'
    ])
        ->addRepeater('items', [
            'max' => 2,
            'layout' => 'block'
        ])
            ->addImage('image')
            ->addText('name')
            ->addWysiwyg('quote')
        ->endRepeater()
        ->addWysiwyg('heading')
    ->endGroup();

return $references;