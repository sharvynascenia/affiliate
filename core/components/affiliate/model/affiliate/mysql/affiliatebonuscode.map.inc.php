<?php
$xpdo_meta_map['affiliateBonusCode']= array (
  'package' => 'affiliate',
  'version' => '1.1',
  'table' => 'bonus_code',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'id' => NULL,
    'bonus_fk' => NULL,
    'country_fk' => NULL,
    'bonus_code' => NULL,
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
    'bonus_fk' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
    ),
    'country_fk' => 
    array (
      'dbtype' => 'smallint',
      'precision' => '6',
      'phptype' => 'integer',
      'null' => false,
    ),
    'bonus_code' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
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
  'aggregates' => 
  array (
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
