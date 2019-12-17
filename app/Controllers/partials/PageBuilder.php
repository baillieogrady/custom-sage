<?php

/** 
 * Partials are useful for re-using variables 
 * across different Post Types / etc
 * 
 * Here we're using our page-builder ACF in Pages and single Posts
 */

namespace App\Controllers\Partials;

trait PageBuilder
{
    public function pageBuilder()
    {
        $post_id = get_the_ID();
        $page_builder = get_field('page_builder', $post_id);

        if (!$page_builder) {
            return false;
        } else {
            return $page_builder;
        }
    }
}