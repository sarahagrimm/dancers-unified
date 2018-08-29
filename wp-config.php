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
define('DB_NAME', 'dancers-unified');

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
define('AUTH_KEY',         'OLl|<p7ESQek@/be,U~aj)|`i}eh$bZ]`O;@vQMF07Mba~NO&AwB[c?#Bt,//Ij*');
define('SECURE_AUTH_KEY',  'BMj2!_Ep9)bt%X_crSAz_Q/3o_xl*43t8 xcG54g7sCW58KZ)8YOXMz{4WTtVrUY');
define('LOGGED_IN_KEY',    '=GI%A1L+dOUM}r63S@1P;1Hi?I{Rs0C~JAY6yp1y|Ofc_Zm {BDlazXNp{`u%+eU');
define('NONCE_KEY',        'U7lk/92nrML%Puw0F@K/o&buNiVho-UQ&/ISL_R}F}~0uzjNz71r/YSG5)+N(rF^');
define('AUTH_SALT',        '*``2g.c^GN1!9wb:Pr|q]__/h?OvsZ^VR|NJYn`sijkpTpM! B4+W(A2K zDb!Wg');
define('SECURE_AUTH_SALT', 'WZWz_)kcy(gAWg?.=!p$MJJJ {|GhY)9&.~J+c_Y))?HeC`JUw14fLC|yxcw0;aG');
define('LOGGED_IN_SALT',   '+iCQ8OmG3Ah|zJwZIC0([9XUTM{xFE 35$VScfy)jki:R2)xi&yz*WO}1#fV`Zh1');
define('NONCE_SALT',       'dD<e<+Qe721=EB`r)ZA@._6p-or&^N_sx^Np!15%.mPdv%&RWcYeB_Nj>~|[t `h');

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
