<?php
/**
 * Plugin Name: Brizy
 * Description: A free drag & drop front-end page builder to help you create WordPress pages lightning fast. It's easy with Brizy.
 * Plugin URI: https://brizy.io/
 * Author: Brizy.io
 * Author URI: https://brizy.io/
 * Version: 2.2.7
 * Text Domain: brizy
 * License: GPLv3
 * Domain Path: /languages
 */
/**
 * This will fix the url protocol for websites that are working behind a load balancer
 */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && stripos( $_SERVER['HTTP_X_FORWARDED_PROTO'], 'https' ) !== false ) {
	$_SERVER['HTTPS'] = 'on';
}

define( 'BRIZY_DEVELOPMENT', false );
define( 'BRIZY_LOG', false );
define( 'BRIZY_VERSION', '2.2.7' );
define( 'BRIZY_EDITOR_VERSION', BRIZY_DEVELOPMENT ? 'dev' : '166-wp' );
define( 'BRIZY_SYNC_VERSION', '166' );
define( 'BRIZY_FILE', __FILE__ );
define( 'BRIZY_PLUGIN_BASE', plugin_basename( BRIZY_FILE ) );
define( 'BRIZY_PLUGIN_PATH', dirname( BRIZY_FILE ) );
define( 'BRIZY_PLUGIN_URL', rtrim( plugin_dir_url( BRIZY_FILE ), "/" ) );
define( 'BRIZY_MAX_REVISIONS_TO_KEEP', 30 );

include_once rtrim( BRIZY_PLUGIN_PATH, "/" ) . '/autoload.php';
include_once rtrim( BRIZY_PLUGIN_PATH, "/" ) . '/languages/main.php';

add_action( 'plugins_loaded', 'brizy_load' );
add_action( 'upgrader_process_complete', 'brizy_upgrade_completed', 10, 2 );
add_action( 'wp', 'testDynamicContent' );

register_activation_hook( BRIZY_FILE, 'brizy_install' );
register_deactivation_hook( BRIZY_FILE, 'brizy_clean' );

function brizy_load() {

	if ( version_compare( PHP_VERSION, '5.6.0' ) < 0 ) {
		add_action( 'admin_notices', 'brizy_notices' );

		return;
	}


	$instance = Brizy_Editor::get();

	do_action( 'brizy_plugin_included' );
}

function brizy_notices() {
	?>
    <div class="notice notice-error is-dismissible">
        <p>
			<?php
			printf(
				__( '%1$s requires PHP version 5.6+, you currently running PHP %2$s. <b>%3$s IS NOT RUNNING.</b>', 'brizy' ),
				__bt( 'brizy', 'Brizy' ),
				PHP_VERSION,
				strtoupper( __bt( 'brizy', 'Brizy' ) )
			);
			?>
        </p>
    </div>
	<?php
}

function brizy_upgrade_completed( $upgrader_object, $options ) {
	if ( $options['action'] == 'update' && $options['type'] == 'plugin' && isset( $options['plugins'] ) ) {
		foreach ( $options['plugins'] as $plugin ) {
			if ( $plugin == BRIZY_PLUGIN_BASE ) {
				add_option( 'brizy-regenerate-permalinks', 1 );
				do_action( 'brizy-updated' );
			}
		}
	}
}

function brizy_install() {
	Brizy_Logger::install();
	add_option( 'brizy-regenerate-permalinks', 1 );
	do_action( 'brizy-activated' );
}

function brizy_clean() {
	Brizy_Logger::clean();
	add_option( 'brizy-regenerate-permalinks', 1 );
	do_action( 'brizy-deactivated' );
}

new Brizy_Compatibilities_Init();


function testDynamicContent() {

//============================================

	$content   = '
<div style="overflow: auto;"> 
<div style="width: 30%; float:left;">
<form action="">
{{ brizy_dc_filter
	type="radio"
	optionSource="query"
	optionQuery="post_type=post"	
	group="group-1"
	postLoopId="123456789"
}}
    <input type="radio" name="{{brizy_dc_option_name}}" id="ff{{brizy_dc_option_index}}" value="{{brizy_dc_option_value}}" {{brizy_dc_option_checked}}/>
    <label for="ff{{brizy_dc_option_index}}">{{brizy_dc_option_label}} ({{brizy_dc_option_count}})</label><br>  
{{ end_brizy_dc_filter }}
<hr>
{{ brizy_dc_filter
	type="checkbox"
	optionSource="query"
	optionQuery="post_type=post"	
	group="group-1"
	postLoopId="123456789"
}}
    <input type="checkbox" name="{{brizy_dc_option_name}}" id="ff{{brizy_dc_option_index}}"    value="{{brizy_dc_option_value}}" {{brizy_dc_option_checked}}/>
    <label for="ff{{brizy_dc_option_index}}">{{brizy_dc_option_label}} ({{brizy_dc_option_count}})</label><br>  
{{ end_brizy_dc_filter }}
<hr>
{{ brizy_dc_filter
	type="checkbox"
	optionSource="query"
	optionQuery="role="	
	group="group-1"
	postLoopId="123456789"
}}
    <input type="checkbox" name="{{brizy_dc_option_name}}" id="ff{{brizy_dc_option_index}}" value="{{brizy_dc_option_value}}" {{brizy_dc_option_checked}}/>
    <label for="ff{{brizy_dc_option_index}}">{{brizy_dc_option_label}} ({{brizy_dc_option_count}})</label><br>  
{{ end_brizy_dc_filter }}

<hr>
{{ brizy_dc_filter
	type="radio"
	optionSource="query"
	optionQuery="taxonomy=category&hide_empty=0"
	group="group-1"
	postLoopId="123456789"
}}
    <input type="radio" name="{{brizy_dc_option_name}}" id="bb{{brizy_dc_option_index}}" value="{{brizy_dc_option_value}}" {{brizy_dc_option_checked}}/>
    <label for="bb{{brizy_dc_option_index}}">{{brizy_dc_option_label}} ({{brizy_dc_option_count}})</label><br>
{{ end_brizy_dc_filter }}

<hr>
{{ brizy_dc_filter
	type="checkbox"
	optionSource="query"
	optionQuery="taxonomy=post_tag&hide_empty=0"
	group="group-1"
	postLoopId="123456789"
}}
   <input type="checkbox" name="{{brizy_dc_option_name}}" id="hh{{brizy_dc_option_index}}" value="{{brizy_dc_option_value}}" {{brizy_dc_option_checked}}/>
   <label for="hh{{brizy_dc_option_index}}">{{brizy_dc_option_label}} ({{brizy_dc_option_count}})</label><br>
{{ end_brizy_dc_filter }}
<hr>
{{ brizy_dc_filter
	type="text"
	optionSource="manual"
	filterQuery="postField=s"
	filterName="name"
	group="group-2"
	postLoopId="99999999"
}}
    By post field post_title <input type="text" name="{{brizy_dc_option_name}}"  value="{{brizy_dc_option_value}}">
{{ end_brizy_dc_filter }}

<hr>
{{ brizy_dc_filter
	type="range"
	optionSource="manual"
	filterQuery="metaKey=brizy_data_version"
	filterName="data_version_range"
	group="group-2"
	postLoopId="99999999"
}}
    By meta brizy_data_version
    <input type="text" name="{{brizy_dc_option_name}}"  value="{{brizy_dc_option_value valueIndex="0"}}">
    <input type="text" name="{{brizy_dc_option_name}}"  value="{{brizy_dc_option_value valueIndex="1"}}">
{{ end_brizy_dc_filter }}
<hr>
{{ brizy_dc_filter
	type="range"
	optionSource="manual"
	filterQuery="postField=comment_count"
	filterName="comment_count_range"
	group="group-2"
	postLoopId="99999999"
}}
    By post field comment_count
    <input type="text" name="{{brizy_dc_option_name}}"  value="{{brizy_dc_option_value valueIndex="0"}}">
    <input type="text" name="{{brizy_dc_option_name}}"  value="{{brizy_dc_option_value valueIndex="1"}}">
{{ end_brizy_dc_filter }}
<hr>
{{ brizy_dc_filter
	type="range"
	optionSource="manual"
	filterQuery="postField=post_date"
	filterName="date_range"
	group="group-2"
	postLoopId="99999999"
}}
    By post field date range
    <input type="text" name="{{brizy_dc_option_name}}"  value="{{brizy_dc_option_value valueIndex="0"}}">
    <input type="text" name="{{brizy_dc_option_name}}"  value="{{brizy_dc_option_value valueIndex="1"}}">
{{ end_brizy_dc_filter }}
<hr>
<input type="submit" >
<input type="reset" >
</form>
</div>
<div style="width: 60%; float:right; padding-left: 50px;">
<hr>
<ul>
{{ brizy_dc_post_loop
	id="123456789"
	query="post_type=post"
	count="10"
}}
    <li>{{brizy_dc_post_title}}</li> 
{{ end_brizy_dc_post_loop }}
</ul>
<hr>
<ul>
{{ brizy_dc_post_loop
	id="99999999"
	query="post_type=post"
	count="10"
}}
    <li>{{brizy_dc_post_title}}</li> 
{{ end_brizy_dc_post_loop }}
</ul>
<hr>
</div>
</div>
';
	$context   = Brizy_Content_ContextFactory::createContext( Brizy_Editor_Project::get(), null, null, null );
	$provider  = new Brizy_Content_PlaceholderProvider( $context );
	$extractor = new Brizy_Content_PlaceholderExtractor( $provider );
	$replacer  = new Brizy_Content_PlaceholderReplacer( $context, $provider, $extractor );

	$content = $replacer->getContent( $content );

	echo $content;
	echo "<pre>";
	if ( isset( $_GET['filter'] ) ) {
		print_r( $_GET['filter'] );
	}
	exit;
//============================================
}
