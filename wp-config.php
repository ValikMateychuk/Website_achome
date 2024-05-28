<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '****************' );

/** Database username */
define( 'DB_USER', '****************' );

/** Database password */
define( 'DB_PASSWORD', '**********' );

/** Database hostname */
define( 'DB_HOST', '********.mysql.tools' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'SyP),0=v>0vG$_<1Wb`BO[n/Iw?BHrDq>.6+$m8!iYsmWx^PTgu(v9l2^6h_^6Lc' );
define( 'SECURE_AUTH_KEY',  '}K4e _GpFp&7j%;S+D%@| t+c{b[n6A-,DBlu;oyw3_Mz2{%?p=WMF[+LDWfn7z2' );
define( 'LOGGED_IN_KEY',    'pH9_M+YFlG3A7E)wkW}(-VF=m~0s/DY037U|[EjMM`buU4VMSYN[_TPwVY7vW>|T' );
define( 'NONCE_KEY',        '{W[IxwD/M5r/HCj!&?h[?ARHW(`;Y1+D=^.j8PHV$`}-*ri[X5{VZcIDS+#6@Em}' );
define( 'AUTH_SALT',        '/yaYTrF@4yei7@AhH5y [bI_.}?RRO&Z&8Gf lJ1f[9dmaV6KFX88Fcq]u6.x_1|' );
define( 'SECURE_AUTH_SALT', 'oeAw=Qyg:CaI>|,zyi(jkSuxl+)+Q9fP^/krNhb0F`5U`n)DIgOt{r<@iR9i{X/u' );
define( 'LOGGED_IN_SALT',   'TzyP?[x>Kl2emfw8Y$i]l5~v0H,]$/V01k@8[kuMLEZZjZ,m}C+`/61r1,6n,s!|' );
define( 'NONCE_SALT',       '/Dh3#p_-;I6$If!H~UmrSMYi]rMSeo_/h5xG#-<%{:=Z 3fqNk>]2r?}1howo}&1' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
