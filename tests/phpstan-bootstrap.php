<?php

define( 'ABSPATH', dirname( __DIR__ ) . '/' );
define( 'WP_DEBUG', true );
define( 'MINUTE_IN_SECONDS', 60 );
define( 'HOUR_IN_SECONDS',   60 * MINUTE_IN_SECONDS );
define( 'DAY_IN_SECONDS',    24 * HOUR_IN_SECONDS );
define( 'WEEK_IN_SECONDS',    7 * DAY_IN_SECONDS );
define( 'MONTH_IN_SECONDS',  30 * DAY_IN_SECONDS );
define( 'YEAR_IN_SECONDS',  365 * DAY_IN_SECONDS );
define( 'OBJECT', 'OBJECT' );
define( 'OBJECT_K', 'OBJECT_K' );
define( 'ARRAY_A', 'ARRAY_A' );
define( 'ARRAY_N', 'ARRAY_N' );

define( 'WPINC', '' );
define( 'WP_CONTENT_DIR', '' );
define( 'WP_CONTENT_URL', '' );
define( 'WP_PLUGIN_DIR', '' );
define( 'WP_PLUGIN_URL', '' );
define( 'WP_LANG_DIR', '' );
define( 'WPMU_PLUGIN_DIR', '' );
define( 'WP_OLD_HASH_PREFIX', '' );
define( 'WP_MAX_MEMORY_LIMIT', 0 );
define( 'FS_CHMOD_FILE', 0 );

define( 'FL_BUILDER_VERSION', '1.0' );
define( 'FL_BUILDER_FILE', dirname( __DIR__ ) . '/fl-builder.php' );
define( 'FL_BUILDER_DIR', dirname( __DIR__ ) . '/' );
define( 'FL_BUILDER_URL', '' );
define( 'FL_BUILDER_LITE', '1.0' );
define( 'FL_BUILDER_SUPPORT_URL', 'https://www.wpbeaverbuilder.com/support/' );
define( 'FL_BUILDER_UPGRADE_URL', 'https://www.wpbeaverbuilder.com/' );
define( 'FL_BUILDER_STORE_URL', 'https://www.wpbeaverbuilder.com/' );
define( 'FL_BUILDER_DEMO_URL', 'http://demos.wpbeaverbuilder.com' );
define( 'FL_BUILDER_OLD_DEMO_URL', 'http://demos.fastlinemedia.com' );
define( 'FL_BUILDER_DEMO_CACHE_URL', 'http://demos.wpbeaverbuilder.com/wp-content/uploads/bb-plugin/cache/' );

define( 'FL_UPDATER_DIR', FL_BUILDER_DIR . 'includes/updater/' );
define( 'FL_BUILDER_WHITE_LABEL_DIR', FL_BUILDER_DIR . 'extensions/fl-builder-white-label/' );
define( 'FL_BUILDER_WHITE_LABEL_URL', FL_BUILDER_URL . 'extensions/fl-builder-white-label/' );
define( 'FL_BUILDER_USER_TEMPLATES_DIR', FL_BUILDER_DIR . 'extensions/fl-builder-user-templates/' );
define( 'FL_BUILDER_USER_TEMPLATES_URL', FL_BUILDER_URL . 'extensions/fl-builder-user-templates/' );
define( 'FL_BUILDER_TEMPLATES_OVERRIDE_DIR', FL_BUILDER_DIR . 'extensions/fl-builder-templates-override/' );
define( 'FL_BUILDER_TEMPLATE_DATA_EXPORTER_DIR', FL_BUILDER_DIR . 'extensions/fl-builder-template-data-exporter/' );
define( 'FL_BUILDER_TEMPLATE_DATA_EXPORTER_URL', FL_BUILDER_URL . 'extensions/fl-builder-template-data-exporter/' );
define( 'FL_BUILDER_CORE_TEMPLATES_ADMIN_DIR', FL_BUILDER_DIR . 'extensions/fl-builder-core-templates-admin/' );
define( 'FL_BUILDER_CORE_TEMPLATES_ADMIN_URL', FL_BUILDER_URL . 'extensions/fl-builder-core-templates-admin/' );
define( 'FL_BUILDER_CACHE_HELPER_DIR', FL_BUILDER_DIR . 'extensions/fl-builder-cache-helper/' );

function w3tc_pgcache_flush() {}

class WPML_Post_Element { public function __construct( $post_id, $sitepress ) {} }

// FIXME Convert to a class
function fl_export_wp( $post_ids = array() ) {}

// BB Theme
class FLTheme {
	public static function get_setting( $settings ) {}
}

class FLCustomizer {
	public static function get_cache_dir() {}
	public static function refresh_css() {}
	public static function clear_all_css_cache() {}
}

class FLThemeBuilder {
	public static function has_layout() {}
}

class FLThemeBuilderFieldConnections {
	public static function connect_settings( $settings ) {}
	public static function has_layout() {}
}

class FLPageData {
	public static function init_properties() {}
}

define( 'FL_THEME_BUILDER_DIR', '' );
