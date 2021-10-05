<?php

# $object::class -- get the dynamic class name from object
// in php 8 you can get class name dynamically from object, also class itself
// in php 7 you can only get class name from class itself, when trying to run $object::class
// you will get fatal error but it will get class name if you wrote
// ClassName::class
class Conversation {}

$object = new Conversation;

switch ($object::class) {
    case 'Conversation' :
        $type = 'started';
        break;

    case 'Reply' :
        $type = 'replied';
        break;
}
//echo $type;
echo 'class name: '.$object::class;