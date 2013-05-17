<?php
$xpdo_meta_map['affiliateGameReference']= array (
  'package' => 'affiliate',
  'version' => '1.1',
  'table' => 'game_reference',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'affiliate_fk' => NULL,
    'game_fk' => NULL,
  ),
  'fieldMeta' => 
  array (
    'affiliate_fk' => 
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
    'affiliate_fk' => 
    array (
      'alias' => 'affiliate_fk',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'affiliate_fk' => 
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
    'affiliateAffiliate' => 
    array (
      'class' => 'affiliateAffiliate',
      'local' => 'affiliate_fk',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'affiliateGame' => 
    array (
      'class' => 'affiliateGame',
      'local' => 'game_fk',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
