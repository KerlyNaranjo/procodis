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
define('DB_NAME', 'procodis');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'j2w]A;K.SRZ+.eiGc!3#}969+ohUvY7or5B}{=  oq_Pn+M/+r;Y?* 4y4A|r#IK');
define('SECURE_AUTH_KEY',  'I  @6M`+dsTQnTJ32:M;3@^zJVB#jyTZqkV|<9=2<R/?.-X.Vf:(<gJ>}J1~dE0$');
define('LOGGED_IN_KEY',    'uIlC&h1mwZ<=+UV=Lyk?VNl%MSgyo=%g.xcGcq+_n+|Ra0kx?hS;R-U1EP8kOj|X');
define('NONCE_KEY',        '4j/APS.J+>I@06$n#rD:F`FQmGjn5z-jaRxnR.etU5:Gu.VuAn|W_CNom:nLe-n-');
define('AUTH_SALT',        'II6D=IoJAd</YGMlxO0+!0KL(3BSBR9pT0P8dy!#n6#FkRmapD5b|+7{mf+AzjUN');
define('SECURE_AUTH_SALT', 'EdY=J{M9!?UB>=M@;AC~h!~<@4nVnG;:/q3}mQneR~a!.$V)+o{2)`O:n!`Xwc2|');
define('LOGGED_IN_SALT',   'rKU[s-Tn%_8Uk,yHP~rvo!whBQE_sH?;,Pu|eE-AtFflKa%txk>7V1,V$kMa]9q&');
define('NONCE_SALT',       'Jm=Q9kn&.gMC}Q .JbPXJ9;21FboV0-(/)wB60-MHw,zq=pQB+hj2s}B:.-J8K_g');

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
