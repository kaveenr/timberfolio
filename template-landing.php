<?php
/**
 * Template Name: landing Template
 * Description: show landing page
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render( array( 'page-' . $post->post_name . '.twig', 'page-gallery.twig' ), $context );