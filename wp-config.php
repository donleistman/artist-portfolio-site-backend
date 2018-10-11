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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'FN~s4T%&A-n6AFPkwJ;gNqevfB|F#3^HMCq_R|%V7>r./S`;8`15TT57bp+BEnyN');
define('SECURE_AUTH_KEY',  'N&tZ1yg~q#T;.59rE~*c8h.q^S)GI0Fkxas*nX!{sR-9jiVMc-$SSh+AM &Z<BNq');
define('LOGGED_IN_KEY',    'RFO2_V1Jpv+ASAEDy{AE87wWn&ttAn^_BF;fdpEEX9[9<K9Pw$oI&#3EKe6i&)O1');
define('NONCE_KEY',        'f>A83-81>3!dW(4&l{eJHfDpLeIZn/@5,9;vBlapMBYuG.c:|wmP67mh1Z#6#QvW');
define('AUTH_SALT',        'H}R.cwLt{Lt`*t[lMLpo!c!@CPREHeU%VC16{Y1 _NQ)CgP#(QY}1ui.w_blG/3[');
define('SECURE_AUTH_SALT', 'YU3tYw|,3R1Bm_=<8)9/cZyf*>RR1NwBIHp-vby2iQHA^Y#_$c-)d6yLt0IAkAWr');
define('LOGGED_IN_SALT',   '|QLAnz5%kbwv,?J%q8Q~&6Hn#)/VJQ_)kOche(gy?;NZW4lT,;A|+9X$eL?<tj>q');
define('NONCE_SALT',       'i[kTN?X-JpQ=(Ni_zw23YkgS%ebl>1O4B@ef5V;lkm{}Gm(T.1`EmFALB0]/64n}');

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
