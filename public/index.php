<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 19/10/17
 * Time: 10:07
 */

include '../connect.php';
include '../src/model/QuestManager.php';

$test = new QuestManager();

print_r($test->findAll());