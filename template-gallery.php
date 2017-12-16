<?php
/**
 * Template Name: Gallery Template
 * Description: Show Gallery
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render( array( 'page-' . $post->post_name . '.twig', 'page-gallery.twig' ), $context );