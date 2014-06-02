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
define('DB_NAME', 'webapp');

/** MySQL database username */
define('DB_USER', 'webapp');

/** MySQL database password */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         '|~|.]I33`}g{^M6]xGa.epV/6z6;ws~&}LIjC/j$yPRe#(^@ZQ)&qOX8}leB.tVb');
define('SECURE_AUTH_KEY',  '<?IsT`%x^!C5-[yU5/+8-M`NjppK<gTojMmkIf$gtTDU<(9vv#gB^[HoL6cBvl6F');
define('LOGGED_IN_KEY',    'vfG@Mc3^We:csD]jzc9UP#u&SVn!U-v-UE0+K0[u|?Jq?|HjvTW}p8NCbdq&UQd/');
define('NONCE_KEY',        'JET-ZXj?1)%+g`8x)p|8@FBVS7x7WE1o+B|9rh{pCKm$Js|gsOH|.6O,80@#Hk]m');
define('AUTH_SALT',        'XzBof)m<-TxON$:-C #A}o7=c6v^[h<!_RHp/>=A,]eT)*@|iBA^SeLX*,99T^XS');
define('SECURE_AUTH_SALT', '+fz$mOt%=%;.[g<7}I+:B?b;{nds7d@aWy+`}p9K=^_hS{D*,N;8MQB []=Cf.)b');
define('LOGGED_IN_SALT',   'IduE{$P$~ZA&pW<wyEVtjxMZCpe}i-]a2h$B^9 !hWw8{BwaLg$}Nq!F*t&hc]{J');
define('NONCE_SALT',       ' #={e*15d!:sXA>b*o:4n*@S,?0+9M,3c-Y8MNUB{=5tYAIc)PBZ9ROVXCNP9*^/');

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

