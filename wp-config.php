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
define('DB_NAME', 'abdulnasser');

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
define('AUTH_KEY',         'o+/J.Dae]J}`Rg/|W^#h|/Bsh9{-Gv7}o]k9,M1s7bnHQRVNB=q6:%>{|Eo9Kt:F');
define('SECURE_AUTH_KEY',  ',>R@dLve/ a$<r^zjvO*o~+kN$XK}i(Jb]]#)U+3c_X.}e.n#R@]v|WSS*>c8#7>');
define('LOGGED_IN_KEY',    '5NI=6T6+>#` >N|^~~;[=lll:aL=%a-=j`d4fq;;B0@Bjjdxdu~z>[M+$G&/d|jh');
define('NONCE_KEY',        'v#Jy*kf>qFjAFEJ*O_W@nP]vs/Gy3ub+$<:4u[PXh/ZOc8jC!#L-|sS:9cr4/|jC');
define('AUTH_SALT',        'X[G]Gepe,IuvH+H+LP=DZ9FO3&-#!&)FD!=@g;|NqlZ|HVeJ$qdF;Ve!2?TO%,@t');
define('SECURE_AUTH_SALT', ',0:}+:xce+YIJ3t}LMpGil8Wwoc3jj#;mI+H:lRz-~M)$@ta8t1m_2$)V:k^]Gr0');
define('LOGGED_IN_SALT',   '.4.*s0D#X]>Hb0l~~g(|JM#7FKnZK/rea,O6856.*{=G-2&_&.gZ:]6sT-^!ZQ+?');
define('NONCE_SALT',       'w?!|d$-kuc+46~VST{065Sv*Ah6|!5H<NM#cgcd6bhq]s}FJfX:W|e;4%Kp$yV]c');

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
