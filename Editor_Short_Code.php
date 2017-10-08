<?php
/*
Plugin Name: Social Media Shortcode
Plugin URI: https://github.com/NachoLambardi
Description: Shortcode Social Media
Author: Nacho Lambardi
Author URI: https://github.com/NachoLambardi
Version: 1.0
License: GLPv2 or later
*/

 function social_media( $atts ) {
  $args = shortcode_atts(
        array(
                'facebook' => 'http://facebook.com/',
                'instagram' => 'http://instagram.com',
                'twitter' => 'http://twitter.com',
                ),
                $atts
);

$url_facebook = $args['facebook'];
$url_instagram = $args['instagram'];
$url_twitter = $args['twitter'];

  $facebook = "<a href= ' .$url_facebook. ' target='_blank'>Facebook</a>";
  $instagram = "<a href= ' .$url_instagram. ' target='_blank'>Instagram</a>";
  $twitter = "<a href = ' .$url_twitter. ' target='_blank'>Twitter</a>";

$social = $facebook . " " . $instagram . " " . $twitter;
return $social;
}
add_shortcode( "social_media", "social_media" );
