<?php
/**
 * App\Model\User=> ./App/model/User.php
 */

function __autoload($class){
    echo __DIR__.'/'.str_replace('\\','/',$class).'.php';
    require __DIR__.'/'.str_replace('\\','/',$class).'.php';
}
