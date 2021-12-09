
<?php


/**
 * Output the full site url dynamically instead of statically
 *
 * @param string $path
 * @return string
 */

/**
 * Snippet to redirect to a page
 *
 * @param string $url
 * @return void
 */

/**
 * return date and time in the correct
 * mysqi 'datetime' format
 *
 * @return string
 */




/**
 * determine if current page is an admin page
 *
 * @return boolean
 */
    // Getting Slug
    $uri = $_SERVER['REQUEST_URI'];
    $string_to_check_for = '/admin';
    if (strpos($uri, $string_to_check_for) === false) {
        return false;
    } else {
        return true;
    }

?>