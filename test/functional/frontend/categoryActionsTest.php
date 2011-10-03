<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctional(new sfBrowser());

$browser->
  get('/category/programming')->

  with('request')->begin()->
    isParameter('module', 'category')->
    isParameter('action', 'show')->
  end()->

  with('response')->begin()->
    isStatusCode(200)->
    checkElement('.jobs tr', sfConfig::get('app_max_jobs_on_category'))->
  end()
;
