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
define('DB_NAME', 'UAP');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'DkOa9fC$sVCMGyH14VNaB@kDKg`jn@|ZcQ1(PA<kiED:A=W?,T{C:e(i3ux|[Z,H');
define('SECURE_AUTH_KEY',  'fqA0RqO$Hp22(auQu<Q2)5(#0S]edxJ YeVHn1[EH,jls :]wBMGrTu`<tV._VG}');
define('LOGGED_IN_KEY',    'F2ml|]6/s$4LVBK`ao{S7sp=8e?/1% ]e~.ftkas~NHhvlU3x*(Rx*Xlw7eQbDAV');
define('NONCE_KEY',        'M+7yMCzGv0G2|,1nEljayxoPwn/r6g:$e`NmLTVHB>^hwjQH!UF/j:5LosC{Z3sR');
define('AUTH_SALT',        '>*=5|tkZg@@%(W4KzUJ.0e,[H 76kjM-H9(<Vo)28aXFqMmj,=oJo`aJN.YA;0ah');
define('SECURE_AUTH_SALT', 'x-Qs$SFsG>@g5b`6?pfV.{6?;$~2(u=@2c2W$OI.wxEit~{N}E7eB?QC|cN$1^kO');
define('LOGGED_IN_SALT',   '4sJ3@g VM-+jWpvY4u9Z I|NZ{3;n#HebP k0IFzmZ0[Z#Uw/LJ[zVWxbpEudCO,');
define('NONCE_SALT',       '`0a9^8d`9c=;Y)=,F{=g[vXSaV*6F@3Sgj1`$p]k{zoUw_jmhJHo/BPy65%9]`Cl');

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
