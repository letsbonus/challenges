<?php

/*
 * Defines for defaults paths
 */
defined('LOG_PATH') || define('LOG_PATH', realpath(dirname(__FILE__) . '/../public/logs'));
defined('TMP_PATH') || define('TMP_PATH', realpath(dirname(__FILE__) . '/../public/tmp'));

/*
 * Defines for manage the file columns
 */
define('ITEM_TITLE', 0);
define('ITEM_DESCRIPTION', 1);
define('ITEM_PRICE', 2);
define('ITEM_INIT_DATE', 3);
define('ITEM_EXP_DATE', 4);
define('ITEM_MERCHANT_ADD', 5);
define('ITEM_MERCHANT_NAME', 6);

/*
 * Defines for manage the DB tables fields
 */
// Table 'items'
define('DB_ITEM_ID', 'item_id');
define('DB_ITEM_TITLE', 'item_title');
define('DB_ITEM_DESCRIPTION', 'item_description');
define('DB_ITEM_PRICE', 'item_price');
define('DB_ITEM_INIT_DATE', 'item_init_date');
define('DB_ITEM_EXP_DATE', 'item_exp_date');

// Table 'merchants'
define('DB_MERCHANT_ID', 'merchant_id');
define('DB_MERCHANT_NAME', 'merchant_name');
define('DB_MERCHANT_ADDRESS', 'merchant_address');