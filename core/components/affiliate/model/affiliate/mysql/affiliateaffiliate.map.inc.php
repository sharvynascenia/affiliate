<?php
$xpdo_meta_map['affiliateAffiliate']= array (
  'package' => 'affiliate',
  'version' => '1.1',
  'table' => 'affiliate',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'id' => NULL,
    'category_fk' => NULL,
    'modx_users_fk' => NULL,
    'active' => NULL,
    'name' => NULL,
    'min_deposit' => NULL,
    'founded' => NULL,
    'payout_percentage' => NULL,
    'rating' => NULL,
    'created_time' => NULL,
    'public_live_chat' => NULL,
    'us_player' => NULL,
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
    'category_fk' => 
    array (
      'dbtype' => 'smallint',
      'precision' => '6',
      'phptype' => 'integer',
      'null' => false,
    ),
    'modx_users_fk' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
    ),
    'active' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '4',
      'phptype' => 'integer',
      'null' => false,
    ),
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'min_deposit' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
    ),
    'founded' => 
    array (
      'dbtype' => 'smallint',
      'precision' => '6',
      'phptype' => 'integer',
      'null' => true,
    ),
    'payout_percentage' => 
    array (
      'dbtype' => 'float',
      'phptype' => 'float',
      'null' => false,
    ),
    'rating' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '4',
      'phptype' => 'integer',
      'null' => false,
    ),
    'created_time' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
    ),
    'public_live_chat' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '4',
      'phptype' => 'integer',
      'null' => false,
    ),
    'us_player' => 
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
    'affiliateGameReference' => 
    array (
      'class' => 'affiliateGameReference',
      'local' => 'id',
      'foreign' => 'affiliate_fk',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'affiliateBonus' => 
    array (
      'class' => 'affiliateBonus',
      'local' => 'id',
      'foreign' => 'affiliate_fk',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'affiliateCurrencyReference' => 
    array (
      'class' => 'affiliateCurrencyReference',
      'local' => 'id',
      'foreign' => 'affiliate_fk',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
  'aggregates' => 
  array (
    'affiliateCategory' => 
    array (
      'class' => 'affiliateCategory',
      'local' => 'category_fk',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
