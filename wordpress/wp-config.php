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
define('DB_NAME', 'bymillsc_ss_dbname1e8');

/** MySQL database username */
define('DB_USER', 'bymillsc_ss_d1e8');

/** MySQL database password */
define('DB_PASSWORD', 'Vsr6cH53TYUA');

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
define('AUTH_KEY', '[+_gSUGXI[P^](->QpbVWDW/}_*pk_QONc<Z]M(d?*qP]riyw&x?%rV&W>/MXqtn}vbD=qIwrdDOyIzz+BlnOx]{s_=V?qIHZsB%]Ib_=B>oeda-W$!ziTx_I?^T%C{R');
define('SECURE_AUTH_KEY', 'IM+s)KKHII(gWLy>$HhyyOU=/{bZ&ruZKzdBZY&WrtCyd&kDf*&yI!be%yE*L!e|?rDzzUykQqYm{q;rGzk=%[m|igXQphzNDbNl*=|Pc%X&N>[S)T+S;<pIb{rjIE_R');
define('LOGGED_IN_KEY', '&;tlt(NmXR]]SWUGm<|EkqYFdFn=LmQg;J+N%=HaMgcxC=lwhXJF)/LHC?XoDxnV;USS?r(zIp;f!Y&XgrXD=&u?u=)o]/=^}avfjD?Jq?u%$tkGUJ$@)VwFf]Y@AY$>');
define('NONCE_KEY', 'JlM-/W%rkGBt@_x^/q=xHYZGZqvjpRmVQaUBOg)ShcVIXNedfx}y$FLOrIL<XQDFaxNPX|qb[hQgD_}PEN&NjCNre<r!UlzZznfa/!rmojoAfBnQi|gF<kW|b{Vkp@>V');
define('AUTH_SALT', 'JDE]m@%-FOlk]DddQZe)t!z^!bOEwF@$TIoIwKkk)dXzDgUYAbq$C>|LViPyTyfXAgTC$G|hwM^KBS*Tcz<*eO%mP/ql&?=</G{<iB-sAmW$_OAgS@hdN}ch&YpW%H%n');
define('SECURE_AUTH_SALT', '*qX$xdly^y?l]AYD)T=<Ycv&eSg*gEEdkYL<F%[mvebzq;H[!*O?MZnw^QRaPSvdsS*JGOBx_e@(]ZQg_LG/Gly|Y(;Eq?o%=Yr!TojYfgO*f|tkkDG/G)/&%(?q}dHn');
define('LOGGED_IN_SALT', '(S[eeNHsnDqJuCMW&Nk/F|Zyx^{We}rwbk[rsc__?hTGef<sIyVdvjXoSYLimo{GV|yt[}mvRbtl&]J&d;BM/pl}%/mals/!ehGGaQ&r@*i}*i;J*}FDGQJSeVxzPmB&');
define('NONCE_SALT', 'ZNDPRHFM%_U^kmn-osorw+tK@-xqNc>B=h}dqS&KTXW/lDMg+WY|KDbooEwV|@[+RFB?V>+NNqi?VbA*@PNAvLiuBtBXBwrXA}rCBybExw]@ziP?/%pwgG|tWxhl[O@k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_yprh_';

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
