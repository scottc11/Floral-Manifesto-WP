<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'floralmanifesto');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'AI`(geWz:sL3xZOW&b!!rT<E;w8(K`P_3i[0?!<j2PT!m$e-Es.8.KAH*cD$f@3U');
define('SECURE_AUTH_KEY',  'c2AR@OCy#NMVr;Bdbmr8jrT:nt?>RG|u&wm:@rLy6t;MgQq6U/L$Kd(s,D9<:g!C');
define('LOGGED_IN_KEY',    'dO.2C><3X7}yj45)HCrm?Vp?ezxC =Ab>A@e:Jc^<g3}.Y(-U@*N8)m)xf|0o@R:');
define('NONCE_KEY',        '/3Y%ovt!F@SGb[-;nsAy~mPN(tT%gtc28pkW$6)2FjhN,*`^MfgRVWj%C)cI1`aZ');
define('AUTH_SALT',        '>W3g46N[:)tfp:Nm,ii(7Vqy]p_eS}K/Mo$wbtttjElOn2Sb(j-7DVV3FX][H~Z8');
define('SECURE_AUTH_SALT', 'lEpa!OFW3$Z~J4wEI5zv$XonJ `Q&bEdsJF4XdMJCFmpn$yQ2VVZh_}^2cglz$rH');
define('LOGGED_IN_SALT',   'u?$f0<;/uIx-yKqHXRIu*g2wDMjiY1Js[giM0],h<<T-Lu/Meje|4rGBhw}7l[o)');
define('NONCE_SALT',       '!rmeOd.q.]lKsO|/=*/BCoRm5Ykqp.K!M}S% l1p,YctRAh>&,IWuq<W,Y]cL[aQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
