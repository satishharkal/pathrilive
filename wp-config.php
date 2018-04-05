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
define('DB_NAME', 'etlpoint');

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
define('AUTH_KEY',         'Nvk@QNb!Fp3L<,zpb.tROFFf,r~y.~&|}E=,$q~kp]lb;ufYz&Xj>v-l2m9Pb:n6');
define('SECURE_AUTH_KEY',  '.kVBwc*/xdDisF_PL8:$}*)m_6n}=*c6eUGD-;&1q9LQ3t#ts-*`YUKp28r$=a66');
define('LOGGED_IN_KEY',    '[sXyE!(XLKM~W+@QNgmV76wwe5b5nrB(EX96@NpzH&ex7~!P*3tBT407=5<*dM*Q');
define('NONCE_KEY',        '[5wa.aKZRN~J!}xA4j^ch}pH&/rH&J?uuAfn7yE?Zy1ftmGc(TDeG-A@Q*^}v-z=');
define('AUTH_SALT',        'mh1iW{vz;LU]>ga7w#?~(Gdu1E1k;O8I,cv]X.Ns__s4>Uj5m?j/00w]Nfu],M{e');
define('SECURE_AUTH_SALT', 'paI 4^XR_-2b_fz4t Yh.U@QhXYM`M;GrV*=cJW$EqV>q(kX~h%Ex!O)d5_j#emJ');
define('LOGGED_IN_SALT',   'eTt=d~@9-y;jDhNEf8SG)x!TV?G:r#mResTSA!HYJIGS[ygTt},<Fe[o+Cfn{.jk');
define('NONCE_SALT',       ' oNEVUT59$9q6*cYz=45M>nYF~dHoWHYD7m-jdG/M.q%D8Yv9@1h_j1_mHM]H$GD');

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
