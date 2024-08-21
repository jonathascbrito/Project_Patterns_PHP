<?php

namespace Singleton;

require_once 'LogsSingleton.php';

$instance = \Singleton\LogsSingleton::getInstance();

$newInstance = \Singleton\LogsSingleton::getInstance();

if($instance === $newInstance) {
    echo "The instances are the same";
}
