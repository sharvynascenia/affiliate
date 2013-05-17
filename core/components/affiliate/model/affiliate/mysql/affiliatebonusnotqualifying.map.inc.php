<?php
$xpdo_meta_map['affiliateBonusNotQualifying']= array (
  'package' => 'affiliate',
  'version' => '1.1',
  'table' => 'bonus_not_qualifying',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'bonus_fk' => NULL,
    'game_fk' => NULL,
  ),
  'fieldMeta' => 
  array (
    'bonus_fk' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'game_fk' => 
    array (
      'dbtype' => 'smallint',
      'precision' => '6',
      'phptype' => 'integer',
      'null' => false,
    ),
  ),
  'indexes' => 
  array (
    'bonus_fk' => 
    array (
      'alias' => 'bonus_fk',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'bonus_fk' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'aggregates' => 
  array (
    'affiliateGame' => 
    array (
      'class' => 'affiliateGame',
      'local' => 'game_fk',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'affiliateBonus' => 
    array (
      'class' => 'affiliateBonus',
      'local' => 'bonus_fk',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
