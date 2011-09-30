<?php

/**
 * JobeetJob
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class JobeetJob extends BaseJobeetJob
{

  public function save(Doctrine_Connection $conn = null)
  {
    if ($this->isNew() && !$this->getExpiresAt()) {
      $now = $this->created_at ? $this->getDateTimeObject('created_at')->format('U') : time();
      $this->expires_at = date('Y-m-d H:i:s', $now + 86400 * sfConfig::get('app_active_days'));
    }

    return parent::save($conn);
  }

  public function getCompanySlug()
  {
    return Jobeet::slugify($this->company);
  }

  public function getPositionSlug()
  {
    return Jobeet::slugify($this->position);
  }

  public function getLocationSlug()
  {
    return Jobeet::slugify($this->location);
  }

  public function __toString()
  {
    return sprintf('%s at %s (%s)', $this->position, $this->company, $this->location);
  }
}
