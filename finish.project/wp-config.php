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
define( 'DB_NAME', 'finish_project' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'finish.project' );

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
define( 'AUTH_KEY',         'X,W%ZtdB{Jk.VaRGn4 Y[kTCt^Nm],DMFK4H>H.Y!r0!~:]^~P`gSL&)jUL4b$g!' );
define( 'SECURE_AUTH_KEY',  'ehu2.NeLRH2r:47/`Rn!Hl-B<X|?]$_!X`g|Vf8uo5]z38BXVy>M]t$3a8Ui7UZL' );
define( 'LOGGED_IN_KEY',    'mnMKl:b@Lcuh3q2^PeDB`.y)7_MF#vMV%WWltB~^k}H;kS|}&;SRf[!H^o%)oXGr' );
define( 'NONCE_KEY',        '$pa=+(d#g^(!Ukk_DD4g_BTaVXKi`qCu%(U pZzfM`J|+$D^e}pjI[5pplot(8ZU' );
define( 'AUTH_SALT',        ')wjc@J ,Mgu/LfYYoi}Zfy~q?#dNAH6xR_}Mfyw#*)&~#e]dX}Kfz9tvU$YLbz^a' );
define( 'SECURE_AUTH_SALT', ' U~C@j@0o8> iR`iT_8{(.WQf4]v67,$_Z/HrrMh7 jg]5V?!Ex|SW{{zJr-OWuH' );
define( 'LOGGED_IN_SALT',   ')&qlRvpowS:SG09nb<qp)m^PHfX7V4Q>i6l}Zb@z%0QSK@6Bzg]1+)(fdjRQ32al' );
define( 'NONCE_SALT',       'p=L;426:w!ug2)iHDJKAXO!zbeVA#<Bp8;H_I>lYeCIpd*>B*^0b(}xe9z7rqYfL' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
