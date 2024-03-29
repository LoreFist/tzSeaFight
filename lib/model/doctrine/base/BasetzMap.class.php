<?php

/**
 * BasetzMap
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property array $pattern
 * 
 * @method array getPattern() Returns the current record's "pattern" value
 * @method tzMap setPattern() Sets the current record's "pattern" value
 * 
 * @package    tzSeaFight
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasetzMap extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('map');
        $this->hasColumn('pattern', 'array', 10240, array(
             'type' => 'array',
             'notnull' => true,
             'default' => '',
             'length' => 10240,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}