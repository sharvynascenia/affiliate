<?php
$xpdo_meta_map['affiliateCasinoDetails']= array (
  'package' => 'affiliate',
  'version' => '1.1',
  'table' => 'casino_details',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'affiliate_fk' => NULL,
    'software_fk' => NULL,
    'license_country_fk' => NULL,
    'stock_country_fk' => NULL,
    'game_fk' => NULL,
    'total_games' => NULL,
    'jackpot' => NULL,
    'download' => NULL,
    'flash_version' => NULL,
    'mac_compatible' => NULL,
    'bet_slots_min' => NULL,
    'bet_slots_max' => NULL,
    'bet_roulette_min' => NULL,
    'bet_roulette_max' => NULL,
    'bet_blackjack_min' => NULL,
    'bet_blackjack_max' => NULL,
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
    'software_fk' => 
    array (
      'dbtype' => 'smallint',
      'precision' => '6',
      'phptype' => 'integer',
      'null' => false,
    ),
    'license_country_fk' => 
    array (
      'dbtype' => 'smallint',
      'precision' => '6',
      'phptype' => 'integer',
      'null' => false,
    ),
    'stock_country_fk' => 
    array (
      'dbtype' => 'smallint',
      'precision' => '6',
      'phptype' => 'integer',
      'null' => false,
    ),
    'game_fk' => 
    array (
      'dbtype' => 'smallint',
      'precision' => '6',
      'phptype' => 'integer',
      'null' => true,
    ),
    'total_games' => 
    array (
      'dbtype' => 'smallint',
      'precision' => '6',
      'phptype' => 'integer',
      'null' => true,
    ),
    'jackpot' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '4',
      'phptype' => 'integer',
      'null' => false,
    ),
    'download' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '4',
      'phptype' => 'integer',
      'null' => false,
    ),
    'flash_version' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '4',
      'phptype' => 'integer',
      'null' => false,
    ),
    'mac_compatible' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '4',
      'phptype' => 'integer',
      'null' => false,
    ),
    'bet_slots_min' => 
    array (
      'dbtype' => 'decimal',
      'precision' => '8,2',
      'phptype' => 'float',
      'null' => false,
    ),
    'bet_slots_max' => 
    array (
      'dbtype' => 'decimal',
      'precision' => '8,2',
      'phptype' => 'float',
      'null' => false,
    ),
    'bet_roulette_min' => 
    array (
      'dbtype' => 'decimal',
      'precision' => '8,2',
      'phptype' => 'float',
      'null' => false,
    ),
    'bet_roulette_max' => 
    array (
      'dbtype' => 'decimal',
      'precision' => '8,2',
      'phptype' => 'float',
      'null' => false,
    ),
    'bet_blackjack_min' => 
    array (
      'dbtype' => 'decimal',
      'precision' => '8,2',
      'phptype' => 'float',
      'null' => false,
    ),
    'bet_blackjack_max' => 
    array (
      'dbtype' => 'decimal',
      'precision' => '8,2',
      'phptype' => 'float',
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
    'affiliateSoftware' => 
    array (
      'class' => 'affiliateSoftware',
      'local' => 'software_fk',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
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
