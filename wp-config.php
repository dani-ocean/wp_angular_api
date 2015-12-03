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
define('DB_NAME', 'angular_wordpress');

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
define('AUTH_KEY',         'y}$q$hN+>];U+`XgK(Fve.9+gD|ShR[Ui(!O<#`)5&~2!6p%jiJj}5M 7xj+Ct|^');
define('SECURE_AUTH_KEY',  'gbO-9aXMg5,e#HA#-5=_ ug-=Hw|SR7+3&G@b@[ y@r}*Ceeb10O6$F/ vd,pnBO');
define('LOGGED_IN_KEY',    'eXadgp.^rS ,UFNBIzmg,$8FId5AwjR3zi@`iO/}E]F6]AY>-0Oi-wC@I0({;2M$');
define('NONCE_KEY',        'Dk-yw/)fxV`H)IH,sF^+?Q<klBuztdPQa!xFvbuS&Q4dWy?^W-o2<>5$F(>d|9^5');
define('AUTH_SALT',        '2<OEG7tM-]CsM$NsBAxA;Z-#Ki]*MN5%U0X 6X[7ffQ+46KhY6mogjQB@N8vxhHx');
define('SECURE_AUTH_SALT', '=DYRz y Sw62_hjRvfEH[0|,;3WjR#G` |)gDL/B.a8~)aBc=<o{*l@k([<a: gn');
define('LOGGED_IN_SALT',   '[CJc-|ur}{Gaz=?~W6wCJiwe/maV+8r}|H*EilEz]KxKG,QZa5%+?@vuD-CypDq~');
define('NONCE_SALT',       '2J7gi*YW]_p#3&gz|NxTv<|**?6+)% Ee?U-9~j.C-GuhueK]l8}!0^92#Hce5-T');

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
