<?php

/**
 * Parent class for functional tests
 **/
class JobeetTestFunctional extends sfTestFunctional
{
  public function loadData()
  {
    Doctrine_Core::loadData(sfConfig::get('sf_test_dir').'/fixtures');

    return $this;
  }

  public function getMostRecentProgrammingJob()
  {
    $q = Doctrine_Query::create()
      ->select('j.*')
      ->from('JobeetJob j')
      ->leftJoin('j.JobeetCategory c')
      ->where('c.slug = ?', 'programming');

    $q = Doctrine_Core::getTable('JobeetJob')->addActiveJobsQuery($q);

    return $q->fetchOne();
  }
}
