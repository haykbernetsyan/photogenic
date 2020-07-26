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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hayk_th' );

/** MySQL database username */
define( 'DB_USER', 'hayk_th' );

/** MySQL database password */
define( 'DB_PASSWORD', 'C1s3H4o8' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C^-W9c?/:?uIYO?zLH.ZfJbJB&*bbxF/{cC7_r_HeC[6g4@P^Ia+SV#FADv]7SFB' );
define( 'SECURE_AUTH_KEY',  'Kf~9-5)AX*@oqL[sxcaU*2;rA$Bf6I+Q_F$D=Dqhz Q9,X!&&3l5wbV|d82muF+7' );
define( 'LOGGED_IN_KEY',    ':nIPWz{I|QYYTyX3>D/w@s5ZTR:BJ]b|1,V0V+[zS#PD+|7$t_h[,Duh SPv4t<)' );
define( 'NONCE_KEY',        'd:Z!?{cp3wW2vOak1R0l!NtU[rMtGS~AL`UavuS2wc@yPGOF/dKQ:I1-F+4~OCR@' );
define( 'AUTH_SALT',        'KEJP9E83mprS?dQwT{5C`lBR@MKpuQEKYG[k1,84)||rHj^X;S@pVt^EwU5`diX:' );
define( 'SECURE_AUTH_SALT', '-T@_eOzCYM#@tT1(MKm!^b[g+@^Z,u{-#L+fo3KG(!>KF}|EB@T?q*t3P0-@W<@X' );
define( 'LOGGED_IN_SALT',   '-8Pbseo=MqI|+ICWz=3t%Eo+Xem*/$[xxFOB{+!F![tdU[y=1au@*$sSkEcm@}K@' );
define( 'NONCE_SALT',       'kP$#.{nw;V`v6F.[pGDhh@BT5SPDRuyqlzvYAMNGD+6c~-O@xpFUf=oKO2mMBtRf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
