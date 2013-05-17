<?php
$xpdo_meta_map['affiliateLinkReference']= array (
  'package' => 'affiliate',
  'version' => '1.1',
  'table' => 'link_reference',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'affiliate_fk' => NULL,
    'link_type_fk' => NULL,
    'language_fk' => NULL,
    'url' => NULL,
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
    'link_type_fk' => 
    array (
      'dbtype' => 'smallint',
      'precision' => '6',
      'phptype' => 'integer',
      'null' => false,
    ),
    'language_fk' => 
    array (
      'dbtype' => 'smallint',
      'precision' => '6',
      'phptype' => 'integer',
      'null' => false,
    ),
    'url' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
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
    'affiliateLinkType' => 
    array (
      'class' => 'affiliateLinkType',
      'local' => 'link_type_fk',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
