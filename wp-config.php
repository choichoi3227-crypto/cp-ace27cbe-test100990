<?php
/**
 * CloudPress WordPress 설정 (자동 생성)
 * DB: GitHub 레포 내 _db/wordpress.db (SQLite)
 */

// ── SQLite 연동 (sqlite-database-integration 플러그인) ──
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );
define( 'table_prefix', 'wp_' );

// SQLite 플러그인 설정
define( 'SQLITE_DB_DIR',  __DIR__ . '/_db/' );
define( 'SQLITE_DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         'gbok4g6xr387mqo0qr31wua1gj94cwoqssrh5nkgbhwzyjjoy922wztcbh377u85' );
define( 'SECURE_AUTH_KEY',  'e171jm5sjb0rn18qif785qcung4j2gcsrsgoggsjufoen5p11ab7nv5y99rjn0ab' );
define( 'LOGGED_IN_KEY',    'cbaya8d3dyyybiekpbm3ju6zhkk8x835ymy5ti5ukwldjyc4rontjkx4aqcs5cpj' );
define( 'NONCE_KEY',        'h0ejsevkw1x3a25872dj2o4ebyhsj4ei3360mb97yxb1lryypm95vn2rp01n0yrm' );
define( 'AUTH_SALT',        '3wjmchkpgzsndd6r8x3zvha7jy903kotvnu0xb0l2iozi8qyaw7obw45b1nn0w9e' );
define( 'SECURE_AUTH_SALT', 'gzsat7cs0qrraquw5jodefnq3etretxcal432vuq5vhc3lik3l8ee7vwegwlb22q' );
define( 'LOGGED_IN_SALT',   'zeb2yy1oy905vmnqj39l7w7e31k08lidnwhqs9rixnkkfgy7oqeic2xf00rav2iz' );
define( 'NONCE_SALT',       'nyc8lvtudd9g8bqb5doqmkm307aufcz1twhigpdshfpp2wbret5ohttb7amb5t5d' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-ace27cbe-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-ace27cbe-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
