<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page_builder = new FieldsBuilder('Page Builder');

$page_builder
    ->setLocation('post_type', '==', 'page');

$page_builder
    ->setGroupConfig('position', 'acf_after_title');

$page_builder
    ->addFlexibleContent('page_builder', ['button_label' => 'Add Block'])

    ->addLayout('hero')
    ->addTab('content')
    ->addFields(get_field_partial('partials.heading'))
    ->addTextArea('text');

return $page_builder;