<?php
/**
 * Created by PhpStorm.
 * User: catalin
 * Date: 19/06/19
 * Time: 10:49
 */
require 'Feed.php';
$feed = new \EdmondsCommerce\CatalinTrainingXML\Reddit\Feed();
print_r($feed->getFeed());