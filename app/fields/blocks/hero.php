<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$icons = new FieldsBuilder('Icons');

$icons
->setLocation('block', '==', 'acf/hero');

$icons
    ->addFields(get_field_partial('partials.heading'));

return $icons;