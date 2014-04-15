<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_dgael');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'guitare75');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PP|y2c}.bH|?B[|4J,%)}at8D@4CP1q(c|49!3tM}]JT4Njz-1$2>T||mv3lctVp');
define('SECURE_AUTH_KEY',  'c8E~O7u.Djre{E%Q&I^mHq4i.cHMz}MN(j.~225BIOI-(S.@TXXk|s&*c[fVSHZ^');
define('LOGGED_IN_KEY',    ')~zN0#_/| $dPm!%=8S (D7Gv-I|PG%+P&g$ZvwEp0b=5XJJ%=fD5+%<#|sQJ5KD');
define('NONCE_KEY',        'P18ss:dYxp1]B>+{g,OS+7<Nl{Yd37hn=HG64{d6A^ny+3d+WDhu}8!Z*/+hbLG2');
define('AUTH_SALT',        '9z)qiGoLEUnd,-5L_P0aA8jg3v+0,dvgv7t_U49 >0.qb1;V{.NDbYsm|9m]`Ufl');
define('SECURE_AUTH_SALT', '7k+nf>McyAsb&C{kO2tty;(XsV)2@f|]3o*&%DKV$kUh(+=%O+O^+-!4s:am$/Sl');
define('LOGGED_IN_SALT',   '-qSB?&t-t99GpyMRYSIl)NUqc_y8Oq3)Sn9ami42@>_`YjsUP}~fG$@m9Ex@76&)');
define('NONCE_SALT',       'GK61%-]dyo]W6~x=K}1)5_D^ DEweRkOsdz%FudKBby*-oj]+/-PGya9I|zXRSBd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
