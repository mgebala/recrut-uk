<?php
/**
 * Theme functions and definitions
 */
?>
<?php

/**
 * Basic Constants
 */

define('THEME_DIR', trailingslashit(get_template_directory()));
define('THEME_URI', trailingslashit(get_template_directory_uri()));

define('ASSETS_DIR', trailingslashit(THEME_DIR . 'assets'));
define('ASSETS_URI', trailingslashit(THEME_URI . 'assets'));

define('CSS_DIR', trailingslashit(THEME_DIR . 'assets/css'));
define('CSS_URI', trailingslashit(THEME_URI . 'assets/css'));

define('IMG_DIR', trailingslashit(THEME_DIR . 'assets/img'));
define('IMG_URI', trailingslashit(THEME_URI . 'assets/img'));

define('JS_DIR', trailingslashit(THEME_DIR . 'assets/js'));
define('JS_URI', trailingslashit(THEME_URI . 'assets/js'));

define('INC_DIR', trailingslashit(THEME_DIR . 'includes'));
define('INC_URI', trailingslashit(THEME_URI . 'includes'));


/**
 * Files to include
 */
$file_Includes = array(
    INC_DIR . 'custom.php'
);

foreach ($file_Includes as $file_Include) {
    require($file_Include);
}

