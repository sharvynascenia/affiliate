<?php
$xpdo_meta_map['affiliateCategory']= array (
  'package' => 'affiliate',
  'version' => '1.1',
  'table' => 'category',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'id' => NULL,
    'name' => NULL,
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
    'affiliateAffiliate' => 
    array (
      'class' => 'affiliateAffiliate',
      'local' => 'id',
      'foreign' => 'category_fk',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
