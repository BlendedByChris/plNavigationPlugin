<?php

/**
 * plNavigation components
 *
 * @package    plNavigation
 * @author     Chris LeBlanc <chris@webPragmatist.com>
 */
class plNavigationComponents extends sfComponents
{
  public function executeShow() {
    $this->items = sfConfig::get('app_plNavigation_items');
  }
}