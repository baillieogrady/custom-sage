<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero = new FieldsBuilder('Hero');

$hero
->setLocation('block', '==', 'acf/hero');

$hero
    ->addImage('image');

return $hero;