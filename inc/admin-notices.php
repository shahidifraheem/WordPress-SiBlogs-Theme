<?php
add_action('admin_notices', 'show_admin_notices');
function show_admin_notices()
{
    $plugin_messages = array();
    include_once(ABSPATH . 'wp-admin/includes/plugin.php');

    // Install and activate the Advanced Custom Fields system
    if (!is_plugin_active('advanced-custom-fields/acf.php')) {
        $plugin_messages[] = '<br>This theme requires you to install and activate the advanced custom fields plugin, <a style="display:inline-block;padding:5px; margin: 10px 0;" href="/si-blogs/wp-admin/update.php?action=install-plugin&plugin=advanced-custom-fields&_wpnonce=de06861948">download it from here</a>.';
    }

    // Install and activate the Post Views Counter system
    if (!is_plugin_active('post-views-counter/post-views-counter.php')) {
        $plugin_messages[] = '<br>This theme requires you to install and activate the post views system plugin, <a style="display:inline-block;padding:5px; margin: 10px 0;" href="/si-blogs/wp-admin/update.php?action=install-plugin&plugin=post-views-counter&_wpnonce=5f0c408aa1">download it from here</a>.';
    }

    if (count($plugin_messages) > 0) {
        echo '<div id="message" class="error">';
        foreach ($plugin_messages as $message) {
            echo '<strong>' . $message . '</strong>';
        }
        echo '</div>';
    }
}
