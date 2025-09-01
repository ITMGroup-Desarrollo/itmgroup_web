<?php
define('WP_CACHE', true);
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'itmg_itmgroupdb');
/** Database username */
define('DB_USER', 'itmg_itmgroupmx');
/** Database password */
define('DB_PASSWORD', 'y2SE6eCpRCHW1NTWQ504');
/** Database hostname */
define('DB_HOST', 'localhost');
/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'fm*jsWg%:&`TFy;Ex,7Zjee?>W<q@eaI84CJ:3@NDZU1oR*om+p$[VZr:,5vdzh4');
define('SECURE_AUTH_KEY', '2wA8tS*+{6b[|`]5Q,KQ(FV dbhLg,l*#D_ #_v+JC<@SmP#7H8WIq~Dhc7_p?U]');
define('LOGGED_IN_KEY', 'OZpQLN]kIO^8F[86V{9{z&T#Hl=KqU,7]}S` l;P[zkiz551eW*=}-bM{SFw^qy<');
define('NONCE_KEY', '}l^|Mbc54aafz-u@^FK^L8FGJOiL/[O)3=N]bArao`@KY;2BXXRs6o,IpVQ<Rc;D');
define('AUTH_SALT', 'g+L.e hpn#77qk2o-6d+SaS(q;UD@g3L:|H[}:vBYI3$q*t;Pfw_X4)v$fO2y,>7');
define('SECURE_AUTH_SALT', '=Gg:xz&<11rKq:)07^Yn0FBKWcx}c-0~mOKhlnexM=v03x#>/0#X0Lo2*_s7A8&:');
define('LOGGED_IN_SALT', 'hObpAK)ajYl&w{2eu^ezn|bQ^HIMyWJel_8$CR?5oyPJ5tTG/W12]rcI@&.(<KA0');
define('NONCE_SALT', 'EbW4-@R=^lu@w,}zP&<)bh9w2fow2#&sQ|SB1qU<c}?O8}`HADY$~0a5S313]q;W');
define('WP_CACHE_KEY_SALT', 'abTS $FNz,|?>?H!T8CNFp;<o@l6<z>3=Vy`=d;:7q1O*b6XJ&O,u6d,k8Dp#`e=');
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* Add any custom values between this line and the "stop editing" line. */
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
// if (!defined('WP_DEBUG')) {
//     define('WP_DEBUG', false);
// }
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);

define('DISABLE_WP_CRON', true);

/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}
define('FS_METHOD', false);
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
