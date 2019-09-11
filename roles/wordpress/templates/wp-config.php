<?php
define('DB_NAME', '{{ wp_db_name }}');
/** MySQL database username */
define('DB_USER', '{{ wp_db_user }}');
/** MySQL database password */
define('DB_PASSWORD', '{{ wp_db_password }}');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

$table_prefix  = 'wp_';

define('WPLANG', '');
define('WP_DEBUG', false);
#/** Disable Automatic Updates Completely */
#define( 'AUTOMATIC_UPDATER_DISABLED', {{auto_up_disable}} );
/** Define AUTOMATIC Updates for Components. */
#define( 'WP_AUTO_UPDATE_CORE', {{core_update_level}} );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');