<?php
/**
 * Template Name: Gallery Template
 * Description: Show Gallery
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
if(get_post_gallery()){
    $context['gallery'] = get_post_gallery(get_the_ID(),false);
}
Timber::render( array( 'page-' . $post->post_name . '.twig', 'page-gallery.twig' ), $context );