<?php
define('DB_NAME', 'classicpress');
define('DB_USER', 'cp');
define('DB_PASSWORD', 'hihihihi');
define('DB_HOST', '0.0.0.0');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.classicpress.net/secret-key/1.0/salt/ ClassicPress.net secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since WP-2.6.0
 */
define('AUTH_KEY',         ':w-t6SCX%b)*!}d=a>;oiN3~zFHJvz?%pI;)$y7x*E*S$DPi%tvA#/ld?>:0n_my');
define('SECURE_AUTH_KEY',  '{O5u0f,}o[4[7`p@e@z7!&kHXKoiS(a&4>4ZCbT@K1w{wa@`<~-SZ$}Y0;VM625_');
define('LOGGED_IN_KEY',    'M0TIL9YU| G;K!!Vv`6,D_)5n2k^_ W38u[cHKVa@hw^H[C7L[)R[5dT+J{?Es1l');
define('NONCE_KEY',        'aCJ=vcJ=GaT[w1^Kh03O!X;,xYb*r1t=X-X)(1TWt*$v8Y.[6/NjdYqH=Owb0zZf');
define('AUTH_SALT',        '8,O18=rfyDFspsmH n#;ODv-rqsg8qrH1vJw0ELlYXq2iY(0qg/cl[@YT3m,#fp%');
define('SECURE_AUTH_SALT', 'XiMk{4U1rLpyf6;Z )_he9SALPLO_PLXt XD}ujF@^C4h-H^^41<o0:-Yj[)-?Mx');
define('LOGGED_IN_SALT',   'N-pv^Ig|7[5>5s eYSr< :twC36pwc- D-v*|f*g<rZ!-:}Ui<$Dq.G{3.R[^/sf');
define('NONCE_SALT',       'Ycp-QYoqES`}U(SBRGi,eU0`p_83whg``Fcf51{DO/ys%1Q^+JNGV)CW&vfukc;f');

$table_prefix  = 'cp_';
define( 'WP_DEBUG', false );

/** Absolute path to the ClassicPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once ABSPATH . 'wp-settings.php';
