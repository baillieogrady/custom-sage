<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$contact = new FieldsBuilder('Contact');
 
$contact
    ->setLocation('page_template', '==', 'views/template-contact.blade.php');

$contact
    ->setGroupConfig('position', 'acf_after_title');

$contact
    ->addGroup('hero')
        ->addImage('background_image')
    ->endGroup()
    ->addGroup('headings')
        ->addText('heading')
        ->addText('lead')
    ->endGroup()
    ->addGroup('form')
        ->addwysiwyg('shortcode')
    ->endGroup()
    ->addGroup('location')
        ->addRepeater('items', [
        'layout' => 'block'
    ])
            ->addText('heading')
            ->addText('subheading')
            ->addWysiwyg('address')
            ->addText('tel')
            ->addText('fax')
            ->addText('email')
            ->addText('web')
            ->addGoogleMap('map')
        ->endRepeater()
    ->endGroup();

return $contact;