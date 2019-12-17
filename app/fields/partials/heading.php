<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$heading = new FieldsBuilder('heading');

$heading
    ->addWysiwyg('heading');

return $heading;
