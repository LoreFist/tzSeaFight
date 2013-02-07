<?php

/**
 * generator actions.
 *
 * @package    tzSeaFight
 * @subpackage generator
 * @author     Timofey Krishenko
 */
class generatorActions extends sfActions
{
  private function newMap(){
    $map = new tzMap();
    $map->generatorPositionMap();  
    $map->setPattern($map->getMap());
    $map->save();
    return $map->getMap();    
  }
  
 /**
  * Generator map action controler
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request){
    if ($request->getParameter('id') <= 0){//generate new
      $this->mapGen = $this->newMap();
    }
    else{//get id
      $mapGen = Doctrine_Core::getTable('tzMap')->findOneById(array($request->getParameter('id')));
      $this->forward404Unless($mapGen, sprintf('Object map does not exist (%s).', $request->getParameter('id')));
      $this->mapGen = $mapGen->getPattern();
    }
  }  
  
  public function executeUpdate(sfWebRequest $request){
    return $this->renderPartial('map',array('mapGen'=> $this->newMap()));
  }
}
