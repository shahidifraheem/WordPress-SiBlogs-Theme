<?php

/**
 * Template Name: Login
 * 
 */
get_header();

?>
<section class="authentication-section">
    <div class="si-wrapper">
        <?php
        wp_login_form();
        ?>
    </div>
</section>
<?php
get_footer();
