<?php

/**
 * Template Name: Logout
 * 
 */
wp_logout();
wp_redirect( home_url() );
exit;
