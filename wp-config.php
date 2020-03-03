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
define( 'DB_NAME', 'wordpresstest_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ',X:wc:&IyI6KSE2wF; o#_b`I!)dnizfOy=ev(fVN_yNP+/ca&O,].xU@xOICX;C' );
define( 'SECURE_AUTH_KEY',  '6PH/1?h:R>r7w(Q42f8,. L1(dT[:`a:oiFM0 BvO}*l2H@mC48x4tZ*]2(6B:^g' );
define( 'LOGGED_IN_KEY',    '-B-uFPNaA@<a_2#E#q#e&@kiBXt[AVxSKD(X&)iXbqD6]{tVoC?1wnb{hq*E>1q>' );
define( 'NONCE_KEY',        '+_?PE-^<xh)S gxooR.29mJVn|3yvQ}D8)kW*NIQ $|2p-lgM~sF!Otw[SvQS.*M' );
define( 'AUTH_SALT',        '80XX`WD~6{HaR<n2dCXB)Gqyu$>nVEV2*@Ts@.r<<hXyp|v_p:ab#fQ~Q_A.UQLg' );
define( 'SECURE_AUTH_SALT', 'ogJD8DhW?}&VFt0G[K?Ul)n>JS~rdu4RqY=GR.HfrQsF*5+KV|?HW0MX{jVa#>mo' );
define( 'LOGGED_IN_SALT',   '1?+vnwA<sClcI&40]3Sl;bJH:#;o.1]%4n][2tj Cd3_w`u<~`2{:C!5!XVPY9id' );
define( 'NONCE_SALT',       '6b,*Ni(T 3EL%>r3xNH(L9?^.BdbMM>mWg3|T(7dieo(={rRcgPYT9NV}6W0RQ{N' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
