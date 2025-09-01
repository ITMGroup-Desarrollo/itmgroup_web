<?php
namespace Util;


////////////////////////////////utils
function toBool($val = null) {
    $falseValues = ['no', 'false', '0', null, 'null'];
    $trueValues = ['si', 'yes', 'true', '1'];

    if (in_array($val, $falseValues, true)) {
        return false;
    } else if (in_array($val, $trueValues, true)) {
        return true;
    } else {
        return false;
    }
}
function isPostExist($id) {
  $id = ($id != null)? (int)($id) : 0;
  if($id <= 0) return false;
  return is_string( get_post_status( $id ) );
}
function root(){
  bloginfo('template_directory');
}
function getRoot(){
  return get_bloginfo('template_directory');
}
function getParamGet($param = null){
  return (isset($_GET[$param]))? $_GET[$param] : null;
}
function getParamPost($param = null){
  return (isset($_POST[$param]))? $_POST[$param] : null;
}
function unixToHuman($unix){
  return date("D, M d, Y", (int)$unix / 1000);
}
function getUUID(){
   $uuid = sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
    mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
    mt_rand( 0, 0xffff ),
    mt_rand( 0, 0x0fff ) | 0x4000,
    mt_rand( 0, 0x3fff ) | 0x8000,
    mt_rand( 0, 0xffff ), 
    mt_rand( 0, 0xffff ), 
    mt_rand( 0, 0xffff )
  );
   return $uuid;
}
function getDomain(){
  $url = get_site_url();
  $parsed_url = parse_url($url);
  $domain = $parsed_url['host'];

  return $domain;
}
function getPageName(){
    global $id, $wp_query, $post;

    if (is_singular()) {
        return $post->post_name;
    } elseif (is_page()) {
        return get_query_var('pagename');
    } elseif (is_archive()) {
        return post_type_archive_title('', false);
    }

    return '';
}
function setHomeClass() {
    return is_front_page() ? 'isHome' : '';
}

function arrayFlatten($array) {
    return array_reduce($array, function($result, $item) {
        if (is_array($item)) {
            $result = array_merge($result, arrayFlatten($item));
        } else {
            $result[] = $item;
        }
        return $result;
    }, array());
}
function truncateString($string, $maxLength) {
  if (strlen($string) > $maxLength) {
    return substr($string, 0, $maxLength - 3) . "...";
  }
  return $string;
}





?>