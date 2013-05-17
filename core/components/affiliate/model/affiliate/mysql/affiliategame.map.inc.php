<?php
$xpdo_meta_map['affiliateGame']= array (
  'package' => 'affiliate',
  'version' => '1.1',
  'table' => 'game',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'id' => NULL,
    'name' => NULL,
    'type' => NULL,
    'progressive' => NULL,
    'live' => NULL,
  ),
  'fieldMeta' => 
  array (
    'id' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'pk',
      'generated' => 'native',
    ),
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'type' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'progressive' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '4',
      'phptype' => 'integer',
      'null' => false,
    ),
    'live' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '4',
      'phptype' => 'integer',
      'null' => false,
    ),
  ),
  'indexes' => 
  array (
    'PRIMARY' => 
    array (
      'alias' => 'PRIMARY',
      'primary' => true,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'composites' => 
  array (
    'affiliateBonusNotQualifying' => 
    array (
      'class' => 'affiliateBonusNotQualifying',
      'local' => 'id',
      'foreign' => 'game_fk',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'affiliateGameReference' => 
    array (
      'class' => 'affiliateGameReference',
      'local' => 'id',
      'foreign' => 'game_fk',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'affiliateCasinoDetails' => 
    array (
      'class' => 'affiliateCasinoDetails',
      'local' => 'id',
      'foreign' => 'game_fk',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
