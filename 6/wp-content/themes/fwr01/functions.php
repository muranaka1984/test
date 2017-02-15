<?php
/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentysixteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own twentysixteen_setup() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentysixteen
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'twentysixteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentysixteen' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', twentysixteen_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'twentysixteen_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'twentysixteen_content_width', 840 );
}
add_action( 'after_setup_theme', 'twentysixteen_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'twentysixteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'twentysixteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );

if ( ! function_exists( 'twentysixteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Sixteen.
 *
 * Create your own twentysixteen_fonts_url() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentysixteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Inconsolata:400';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentysixteen_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentysixteen-fonts', twentysixteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	// Theme stylesheet.
	wp_enqueue_style( 'twentysixteen-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	wp_enqueue_script( 'twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'twentysixteen-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160816', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160816' );
	}

	wp_enqueue_script( 'twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160816', true );

	wp_localize_script( 'twentysixteen-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'twentysixteen' ),
		'collapse' => __( 'collapse child menu', 'twentysixteen' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function twentysixteen_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'twentysixteen_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function twentysixteen_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function twentysixteen_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args' );


// '投稿'を'  'に変更
function edit_admin_menus() {  
	global $menu;
	global $submenu;
 
	$menu[5][0] = 'お知らせ';
}  
add_action( 'admin_menu', 'edit_admin_menus' ); 


// スケジュール
function my_meta_cast_schedule_box(){
	add_meta_box('my_meta_cast_schedule_box', '出勤予定', 'my_meta_cast_schedule_html', 'girls', 'normal', 'high');
	// カスタム投稿タイプ「cast」に追加する場合 投稿は「post」
}
function my_meta_cast_schedule_html($post, $box){
	echo'
	<style type="text/css"><!--
	.wp-media-buttons{}
	.wp-media-buttons a.insert-media{display:none;}
	.wp-media-buttons:after{content:"【店長メッセージ】";}
	.schedule_list_wrap{}
	.schedule_list{max-width:50%;float:left;border-bottom: 1px solid #dfdfdf;padding:8px 0; margin-right:15px}
	.schedule_list input{width:130px; margin-right:15px;}
	.schedule_date{width: 60px;float:left;padding-top:6px;}
	--></style>
	<input type="hidden" name="my_meta_cast_schedule_nonce" id="my_meta_cast_schedule_nonce" value="'.wp_create_nonce(get_bloginfo('template_url')).'" />';
	for($i=0; $i<31; $i++){
		$time = strtotime('+' . $i . ' days');
		$key = 'date-' . date('m-d', $time);
		echo '<div class="schedule_list"><div class="schedule_date"><label for="' . $key . '" class="'.date('D',$time).'">'. date('n/j', $time) .'</label></div>';
		echo '<input type="text" name="' . $key . '" value="'. get_post_meta($post->ID, $key, true) .'" list="timelist">'.'
				<datalist id="timelist">
				<option value="要電話連絡">
				<option value="9:00～15:00">
				<option value="9:00～16:30">
				<option value="9:00～23:59">
				<option value="10:00～16:30">
				<option value="17:00～23:59">
				<option value="18:00～23:59">
				</datalist>'.
		'</div>';
	}
	echo'<div class="clear"></div>';
}
function my_meta_cast_schedule_update($post_id){
	if (!wp_verify_nonce( $_POST['my_meta_cast_schedule_nonce'], get_bloginfo('template_url'))){
		return $post_id;
	}
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
	return $post_id;
	 
	if(!current_user_can('edit_post', $post_id))
	return $post_id;
	 
	$key = date('m-d', strtotime('-1 day'));
	delete_post_meta($post_id, $key);
	 
	for($i=0; $i<31; $i++){ // 31日分の予定を管理画面に表示
		$time	= strtotime('+' . $i . ' days');
		$key = 'date-' . date('m-d', $time);
		$value = $_POST[$key];
		if($value == '') $value = ''; // $valueの値に文言を入れると、空だった場合の文言を指定できる ex. > if($value == '') $value = '未定';
		update_post_meta($post_id, $key, $value);
	}
}
add_action('admin_menu', 'my_meta_cast_schedule_box');
add_action('save_post', 'my_meta_cast_schedule_update');


/* WP 本体 更新通知 非表示 */
add_filter('pre_site_transient_update_core', '__return_zero');
remove_action('wp_version_check', 'wp_version_check');
remove_action('admin_init', '_maybe_update_core');
 
/* WP プラグイン 更新通知 非表示 */
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );


// ダッシュボードに追加
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
 
function my_custom_dashboard_widgets() {
  $file_name = site_url()."/analytics/analytics.php";
  $ret_str = file_get_contents( $file_name );
	global $wp_meta_boxes; 
	wp_add_dashboard_widget('custom_analytics_widget', 'アクセス解析', 'dashboard_text');
}
function dashboard_text() {
	// ログインユーザー条件分岐
	global $current_user;
	get_currentuserinfo();

	if ($current_user->ID == "4" ) {
		echo '<p class="loginname">【A】でログイン中です</p>';
	}
	if ($current_user->ID == "3" ) {
		echo '<p class="loginname">【B】でログイン中です</p>';
	}
	echo '<a href="'.wp_logout_url().'" class="logoutbtn">ログアウトする</a>';


	echo '<ul class="dashboard_navi">
	<li><a href="edit.php"><span>お知らせ</span></a></li>
	<li><a href="edit.php?post_type=girls"><span>ガールズ管理</span></a></li>
	<li><a href="edit.php?post_type=blog"><span>ブログ</span></a></li>
	</ul>';

	echo '<iframe class="analytics" src="'.site_url().'/analytics/analytics.php"></iframe>';

/*
	if ($current_user->ID == "4" ) {
		echo '<iframe class="analytics" src="/analytics/analytics_nl.php"></iframe><iframe class="analytics" src="/analytics/analytics_gr.php"></iframe>';
	}
	else {
		echo '<iframe class="analytics" src="/analytics/analytics_gr.php"></iframe><iframe class="analytics" src="/analytics/analytics_nl.php"></iframe>';
	}
	*/
	echo '<div class="dashboard_content">
	<h2>お知らせ</h2><br>
	写真がない時には、こちらの画像をダウンロードしてお使いください。
	<p><br></p>
	<a href="" target="_blank"><img src="" width="200"></a>
	<a href="" target="_blank"><img src="" width="200"></a>

	<p><br></p>

	</div>';
}

// 投稿一覧画面にカスタムフィールドの表示カラムを追加

function my_posts_columns( $defaults ) {
	$defaults['GG'] = '写真';
//	$defaults['NN'] = 'NN';
	$defaults['待機中'] = '待機中';
//	$defaults['指名料'] = '指名料';
 	return $defaults;
}
add_filter( 'manage_posts_columns', 'my_posts_columns' );
function my_posts_custom_column( $column, $post_id ) {
	switch ( $column ) {
		case 'GG':
			$post_meta = get_the_title();
			if ( $post_meta ) {
			//echo $post_meta;
				echo wp_get_attachment_image(get_post_meta($post_id, '写真', true),'thumbnail');
			}
			break;
/*		case 'NN':
			$post_meta = get_the_title();
			if ( $post_meta ) {
				echo wp_get_attachment_image(get_post_meta($post_id, 'NN写真1', true),'thumbnail');
			}
			break; */
		case '待機中':
			//チェックボックスの場合
			if ( !!get_post_meta( $post_id , '待機中' , true ) ) {
				//$checked = 'checked';
				$checked = '待機中';
			} else {
				$checked = '';
			}
//			echo "<input type='checkbox' readonly $checked >";
			echo $checked;
			break;
/*		case '指名料':
			$post_meta = get_post_meta( $post_id, '指名料', true );
			if ( $post_meta ) {
				 echo $post_meta;
			}
			break; */
	}
}
add_action( 'manage_posts_custom_column' , 'my_posts_custom_column', 10, 2 );


// ログイン画面 カスタマイズ
function custom_login() { ?>
	<style>
		body{
			color: #fff !important;
			background: #333 !important;
		}
		a{
			color: #fff !important;			
		}
		.login h1 a{
/*			width: 100% !important;
			background: url(/wp-content/themes/hoge/img/admin_logo_login.png) no-repeat center center !important;
			background-size: cover; */
		}
		.login #login_error, .login .message{
			border: none !important;
			background: none !important;
			box-shadow: none !important;
		}
		.login form{
			border: none !important;
			background: none !important;
			box-shadow: none !important;			
		}
	</style>
	<script>
		/* ここにスクリプトを記述 */
	</script>
<?php }
add_action( 'login_enqueue_scripts', 'custom_login' );


// wp head 削除
// フィード出力を削除します
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
// スタイルシートを削除します
remove_action('wp_head', 'wp_print_styles', 8);
// スクリプトを削除します
remove_action('wp_head', 'wp_print_head_scripts', 9);
// リンク情報「prev」「next」を削除します
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
// リンク情報「shortlink」を削除します
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
// リンク情報「canonical」を削除します
remove_action('wp_head', 'rel_canonical');
// リンク情報「EditURI」を削除します
remove_action('wp_head', 'rsd_link');
// リンク情報「wlwmanifest」を削除します
remove_action('wp_head', 'wlwmanifest_link');
// WordPressのバージョン情報を削除します
remove_action('wp_head', 'wp_generator');


// クイック編集にカスタムフィールドの入力フォームを表示
/*
function display_my_custom_quickedit( $column_name, $post_type ) {
    static $print_nonce = TRUE;
    if ( $print_nonce ) {
        $print_nonce = FALSE;
        wp_nonce_field( 'quick_edit_action', $post_type . '_edit_nonce' ); //CSRF対策
    }

    ?>
    <fieldset class="inline-edit-col-right inline-custom-meta inline-edit-col-right_mycustom">
        <div class="inline-edit-col column-<?php echo $column_name ?>">
            <label class="inline-edit-group">
                <?php
                switch ( $column_name ) {
                    case '指名料':
                        ?><span class="title">指名料</span>　<input name="指名料"><?php
                        break;
                    case '待機中':
                        //チェックボックスの場合
                        ?><!--span class="name">【<?php echo get_the_title(); ?>】</span--><input name="待機中" type="checkbox"> <span class="title">待機中</span><?php
                        break;
                }
                ?>
            </label>
        </div>
    </fieldset>
<?php
}
add_action( 'quick_edit_custom_box', 'display_my_custom_quickedit', 10, 2 );
*/

// 管理ページ（投稿一覧）でスクリプトの読み込み
function my_admin_edit_foot() {
    global $post_type;
    $slug = 'girls'; //他の一覧ページで動作しないように投稿タイプの指定をする

    if ( $post_type == $slug ) {
        echo '<script type="text/javascript" src="', get_stylesheet_directory_uri() .'/admin/admin_edit.js', '"></script>';
    }
}
add_action('admin_footer-edit.php', 'my_admin_edit_foot');

// カスタムフィールドの保存処理
function save_custom_meta( $post_id ) {
    $slug = 'girls'; //カスタムフィールドの保存処理をしたい投稿タイプを指定

    if ( $slug !== get_post_type( $post_id ) ) {
        return;
    }
    if ( !current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    $_POST += array("{$slug}_edit_nonce" => '');
    if ( !wp_verify_nonce( $_POST["{$slug}_edit_nonce"], 'quick_edit_action' ) ) {
        return;
    }

    if ( isset( $_REQUEST['指名料'] ) ) {
        update_post_meta( $post_id, '指名料', $_REQUEST['指名料'] );
    }

    //チェックボックスの場合
    if ( isset( $_REQUEST['待機中'] ) ) {
        update_post_meta($post_id, '待機中', TRUE);
    } else {
        update_post_meta($post_id, '待機中', FALSE);
    }
}
add_action( 'save_post', 'save_custom_meta' );

// 管理画面にオリジナルページ追加
function ranking_page() {
	add_menu_page('ランキング', 'ランキング', 1, 'ranking', 'ranking_menu', '', 5);
}
add_action('admin_menu', 'ranking_page');

// 管理画面にオリジナルページ追加 リンク先
function ranking_menu() {include 'admin_ranking.php';}



// 使用しないメニューを非表示にする
function remove_admin_menus() {
  // level10以外のユーザーの場合
  if (!current_user_can('level_10')) {
		// 「Contact Form 7」を使用している場合
		remove_menu_page('wpcf7');
    global $menu;
    // unsetで非表示にするメニューを指定
    //unset($menu[20]);       // 固定ページ
    unset($menu[25]);       // コメント
    unset($menu[60]);       // 外観
    unset($menu[65]);       // プラグイン
    unset($menu[70]);       // ユーザー
    unset($menu[75]);       // ツール
    unset($menu[80]);       // 設定
  }
}
add_action('admin_menu', 'remove_admin_menus');


// モバイル判定 is_mobile
function is_mobile() {
    $useragents = array(
        'iPhone',          // iPhone
        'iPod',            // iPod touch
        '^(?=.*Android)(?=.*Mobile)', // 1.5+ Android
        'dream',           // Pre 1.5 Android
        'CUPCAKE',         // 1.5+ Android
        'blackberry9500',  // Storm
        'blackberry9530',  // Storm
        'blackberry9520',  // Storm v2
        'blackberry9550',  // Storm v2
        'blackberry9800',  // Torch
        'webOS',           // Palm Pre Experimental
        'incognito',       // Other iPhone browser
        'webmate'          // Other iPhone browser
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

//管理画面にユーザー権限グループに応じた class を出力する
function add_user_role_class( $admin_body_class ) {
    global $current_user;
    if ( ! $admin_body_class ) {
        $admin_body_class .= ' ';
    }
    $admin_body_class .= 'role-' . urlencode( $current_user->roles[0] );
    return $admin_body_class;
}
add_filter( 'admin_body_class', 'add_user_role_class' );


// アーカイブタイトルのアレンジ
add_filter( 'get_the_archive_title', function ($title) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_month() ) {
		$date = single_month_title('',false);
		$pos  = strpos($date, '月');
		$title = mb_substr($date, $pos+1).'年'.mb_substr($date, 0, $pos+1);
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} 
	return $title;
});

// 管理画面ロゴ
function custom_login_logo() { ?>
	<style>
		.login #login h1 a {
			width: 300px;
			height: 100px;
			background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo_login.png) no-repeat 0 0;
			background-size: cover;
			margin-bottom: 0;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'custom_login_logo' );


// 管理画面一覧非表示
function custom_columns($columns) {
unset($columns['author']);
return $columns;
}
add_filter( 'manage_posts_columns', 'custom_columns' );

