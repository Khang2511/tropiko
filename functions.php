<?php
/**
 * @Khai bao hang gia tri
 * @ THEME_URL = lấy đường dẫn thư mục theme
 * @ CORE = lấy đường dẫn thư mục core
 */
define('THEME_URL', get_stylesheet_directory(  ));
define('CORE', THEME_URL . "/core");
/**
 * Nhúng file /core/init.php
 */

 require_once(CORE . "/init.php");
 /**
  * Chiều rộng
  */
  if(!isset($content_width)){
    $content_width=620;
  }

  /**
   * Khai báo chức năng theme
   */
  if(!function_exists('test_theme_setup')){
    function test_theme_setup(){
        /*Thiết lập textdomain
        */
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain( 'custom-language', $language_folder );
    
        /**Tự động thêm link RSS lên thẻ head */

        add_theme_support('automatic-feed-links' );
        
        /*Thêm post thumbnail*/
        add_theme_support( 'post-thumbnails');

        /*Thêm post format*/
        add_theme_support( 'post_formats', array(
            'image',
            'video',
        ) );

        /*Thêm tittle-tag*/
        add_theme_support( 'tittle-tag' );

        /*Thêm custom background*/
        $default_background = array(
            'default-color' => '#e8e8e8'
        );

        add_theme_support( 'custom-background', $default_background);

        /*Thêm menu */
        register_nav_menu('primary-menu', __('Primary Menu', 'custom-language') );

        /*Thêm sidebar */
        $sidebar = array(
            'name' => __('Main Sidebar', 'custom-language'),
            'id' => 'main_sidebar',
            'description' => __( 'Default Sidebar' ),
            'class' => 'main_sidebar',
            'before_title' => '<h2 class="widget_title">',
            'after_title' => '</h2>'
        );
        register_sidebar( $sidebar );

    }
    add_action('init', 'test_theme_setup');
  }

  /*---TEMPLATE FUNCTION---*/

  /*Header*/
  if(!function_exists('test_header')){
    function test_header(){
        ?>
<div class="site-name">
    <?php
                if(is_home(  )){
                    /**%[number]$s với number là thứ tự biến truyền sau dấu , */
                    printf('<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
                    get_bloginfo('url' ),
                    get_bloginfo('description' ),
                    get_bloginfo('sitename' )
                    );
                }
                else{
                    printf('<p><a href="%1$s" title="%2$s">%3$s</a></p>',
                    get_bloginfo('url' ),
                    get_bloginfo('description' ),
                    get_bloginfo('sitename' )
                    );
                }
            ?>
</div>
<div class="site-desc"><?php bloginfo( 'description' );?></div><?php
    }
  }

    /*Menu*/
  if(!function_exists('test_menu')){
    function test_menu($menu){
        $menu = array(
            'theme_location' => $menu,
            'container' => 'nav',
            'container_class' => $menu
        );
        wp_nav_menu( $menu );
    }
  }

    /*Pagination*/
    if ( ! function_exists( 'test_pagination' ) ) {
        function test_pagination() {
          /*
           * Không hiển thị phân trang nếu trang đó có ít hơn 2 trang
           */
          if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
            return '';
          }
        ?>
        <nav class="pagination" role="navigation">
          <?php if ( get_next_post_link() ) : ?>
            <div class="prev"><?php next_posts_link( __('Older Posts', 'custom-language') ); ?></div>
          <?php endif; ?>
    
    
          <?php if ( get_previous_post_link() ) : ?>
            <div class="next"><?php previous_posts_link( __('Newer Posts', 'custom-language') ); ?></div>
          <?php endif; ?>
    
    
        </nav><?php
        }
      }
    
    /*Thumbnail*/

    function load_css()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('main');

    wp_enqueue_script( 'bootstrapjs', get_theme_file_uri( '/js/bootstrap.js' ) );

}
add_action('wp_enqueue_scripts', 'load_css');