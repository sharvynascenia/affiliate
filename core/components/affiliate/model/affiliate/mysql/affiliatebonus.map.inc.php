<?php
$xpdo_meta_map['affiliateBonus']= array (
  'package' => 'affiliate',
  'version' => '1.1',
  'table' => 'bonus',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'id' => NULL,
    'bonus_type_fk' => NULL,
    'affiliate_fk' => NULL,
    'currency_fk' => NULL,
    'value' => NULL,
    'value_max' => NULL,
    'percentage' => NULL,
    'wager' => NULL,
    'withdraw' => NULL,
    'requirements' => NULL,
    'casinoverdiener' => NULL,
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
    'bonus_type_fk' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
    ),
    'affiliate_fk' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
    ),
    'currency_fk' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '4',
      'phptype' => 'integer',
      'null' => false,
    ),
    'value' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
    ),
    'value_max' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
    ),
    'percentage' => 
    array (
      'dbtype' => 'float',
      'phptype' => 'float',
      'null' => false,
    ),
    'wager' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '4',
      'phptype' => 'integer',
      'null' => false,
    ),
    'withdraw' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '4',
      'phptype' => 'integer',
      'null' => false,
    ),
    'requirements' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'casinoverdiener' => 
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
    'affiliateBonusCode' => 
    array (
      'class' => 'affiliateBonusCode',
      'local' => 'id',
      'foreign' => 'bonus_fk',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'affiliateBonusNotQualifying' => 
    array (
      'class' => 'affiliateBonusNotQualifying',
      'local' => 'id',
      'foreign' => 'bonus_fk',
      'cardinality' => 'many',
      'owner' => 'local',
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
    'affiliateBonusType' => 
    array (
      'class' => 'affiliateBonusType',
      'local' => 'bonus_type_fk',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
