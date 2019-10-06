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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Ov6Cn&.2%O?&s,`n?2K/96_?mSI1{k2^~QdIB*Q~ePvluiJh{ViKLQg umw&p?S+' );
define( 'SECURE_AUTH_KEY',  'J;Q|_+Zt9[C+WWJr4U@Z}]BcW(6viRy8LRQm$#J3QCr5xdBNGE*.z.AN2N?1sQdN' );
define( 'LOGGED_IN_KEY',    '._fVf*4B{jGb:6@Ha])a2:lqbJ#Fmf%?!y#nk,e.MrQ?5M5xGS%>FyckUXxzzvW!' );
define( 'NONCE_KEY',        'vqflnKCU4/&x#aBHtU=clgR`phOTo~{3F}C1i^GL,U?3&;Klb~|W,3}*= J>7b1R' );
define( 'AUTH_SALT',        '0jsw0{rGZz,EGI`a@]z=3MVazOIkW7BV2qvIa.pP*Q8lYF? JI*dfZ~~SN*x:{tx' );
define( 'SECURE_AUTH_SALT', '/ Higv`B(nqM;5^It)%,QNM5ACHJLe_S)>+ShPRvY>y$ar_nyx1e7o3wakVp@G.=' );
define( 'LOGGED_IN_SALT',   'q|LznHHD4`p6YtuU7*9kuiW4GikW}OK e{1|DMpEk6D?^ct5g1D%}|PQ}Gf14SnZ' );
define( 'NONCE_SALT',       'SwXE@fRL8$w8C+VNtApLfH~zTchX@<SA|uh.k)%s{1FC362LBi&hL==j%vokzra<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
define( 'SCRIPT_DEBUG', true);
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
