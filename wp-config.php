<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '+/uS#-/T{@8~$iKE*B9>w3ZU|m$_7qywd+${LW9duQ0_180+tCdn VR}w=Rm;AQ+');
define('SECURE_AUTH_KEY',  '7XETuFpj#0Aki%t:XLuk@eVTg|554CMy]50WX6n1)S.NG.$q;<<y#}Z]/y#DU:?T');
define('LOGGED_IN_KEY',    'h@}u_W /LYSgvw83koL>[A|Dt7T7^mb3PqT=6#c-Vs-dj}[p]|$~A-+(6&ljY9-1');
define('NONCE_KEY',        '#Q)r8!-t+c9{`Wq-2%+b4u+GgdV[YsG;9vg<w=F>O8 Ki>tlRgm?Z9|#08u;|/Mg');
define('AUTH_SALT',        'A;!&pT+q:7c&=pUa]Xodtz[T#Be[|BC`M`r@$^:*z|#E7~GX|}$8,FHcGAt-w]XQ');
define('SECURE_AUTH_SALT', 'v*PO5sJ+I]Lm6eg_8w*kaFyB|vG)qRAqO^s|D7w.$msuJ_)%q(q}$4+Y6[=^v/:!');
define('LOGGED_IN_SALT',   '@;`19)+p,3&l_C`4$aHBKV8UF,&}A.MI^D42q}ThBwjFr#7/y?|*:}+K/=`L|lH_');
define('NONCE_SALT',       'rD>MwF@&D_}}TyW_DKL/~xw)~?-,#4s&;m4NEAUXNSI1z%k<j-jo1_e&w@#P@Aa?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bm_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
