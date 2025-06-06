<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * This template is managing authors rules and custom validation rules
 * 
 */

/**
 * Login and Registration css and js
 *
 */
function authenticate_scripts()
{
    wp_enqueue_style('authenticate-styles', get_template_directory_uri() . '/assets/css/authenticate.css');
}
add_action('login_enqueue_scripts', 'authenticate_scripts');

// Add custom message to login form
add_action('login_form', 'add_custom_login_message');
function add_custom_login_message()
{
    $first_val = rand(1, 100);
    $second_val = rand(1, 100);
?>
    <div id="captcha">
        <label for="captcha-input" class="captcha-label">You must fill this captcha <span>*</span></label>
        <div class="first-value"><?= $first_val ?></div>
        <input type="text" name="first-value" value="<?= $first_val ?>" hidden>
        <span class="operator">+</span>
        <input type="text" value="<?= $second_val ?>" name="second-value" hidden>
        <div class="second-value"><?= $second_val ?></div>
        <div class="captcha-input">
            <input type="text" id="captcha-input" name="si-captcha" placeholder="5 etc...">
        </div>
    </div>
<?php
}

// Add custom message to registration form
add_action('register_form', 'add_custom_registration_message');
function add_custom_registration_message()
{
    $first_val = rand(1, 100);
    $second_val = rand(1, 100);
?>
    <div id="captcha">
        <label for="captcha-input" class="captcha-label">You must fill this captcha <span>*</span></label>
        <div class="first-value"><?= $first_val ?></div>
        <input type="text" name="first-value" value="<?= $first_val ?>" hidden>
        <span class="operator">+</span>
        <input type="text" value="<?= $second_val ?>" name="second-value" hidden>
        <div class="second-value"><?= $second_val ?></div>
        <div class="captcha-input">
            <input type="text" id="captcha-input" name="si-captcha" placeholder="5 etc...">
        </div>
    </div>
<?php
}

// Add custom message to forgot password form
add_action('lostpassword_form', 'add_custom_lostpassword_message');
function add_custom_lostpassword_message()
{
    $first_val = rand(1, 100);
    $second_val = rand(1, 100);
?>
    <div id="captcha">
        <label for="captcha-input" class="captcha-label">You must fill this captcha <span>*</span></label>
        <div class="first-value"><?= $first_val ?></div>
        <input type="text" name="first-value" value="<?= $first_val ?>" hidden>
        <span class="operator">+</span>
        <input type="text" value="<?= $second_val ?>" name="second-value" hidden>
        <div class="second-value"><?= $second_val ?></div>
        <div class="captcha-input">
            <input type="text" id="captcha-input" name="si-captcha" placeholder="5 etc...">
        </div>
    </div>
<?php
}

/**
 * Login Validate the captcha
 *
 * @return void
 */
function si_login_captcha_validation()
{
    if (isset($_POST['si-captcha']) && !empty($_POST['si-captcha'])) {
        $first_value = trim($_POST['first-value']);
        $second_value = trim($_POST['second-value']);
        $si_captcha = trim($_POST['si-captcha']);

        if (!empty($first_value) && !empty($second_value)) {
            $captcha_sum = $first_value + $second_value;
            if ($captcha_sum == $si_captcha) {
                // Get the current user object
                $user = wp_get_current_user();
                
                // Get the user's login name
                $username = $user->user_login;
                $user = get_user_by('login', $username);
                return $user;
            } else {
                return new WP_Error('custom_field_error', __('<strong>ERROR</strong>: Invalid Captcha.'));
            }
        } else {
            return new WP_Error('custom_field_error', __('<strong>ERROR</strong>: Invalid Captcha Input.'));
        }
    } else {
        // Custom field is not filled, prevent login
        return new WP_Error('custom_field_error', __('<strong>ERROR</strong>: Please fill the captcha.'));
    }
}
add_filter('wp_login', 'si_login_captcha_validation');

/**
 * Registration Captcha Validation
 *
 * @param [type] $errors
 * @param [type] $sanitized_user_login
 * @param [type] $user_email
 * @return void
 */
function si_register_captcha_validation($errors, $sanitized_user_login, $user_email)
{
    if (!$errors) {
        $errors = new WP_Error();
    }
    if (isset($_POST['si-captcha']) && !empty($_POST['si-captcha'])) {
        $first_value = trim($_POST['first-value']);
        $second_value = trim($_POST['second-value']);
        $si_captcha = trim($_POST['si-captcha']);

        if (!empty($first_value) && !empty($second_value)) {
            $captcha_sum = $first_value + $second_value;
            if ($captcha_sum == $si_captcha) {
                // User registered successfully
            } else {
                $errors->add('custom_field_error', __('<strong>ERROR</strong>: Invalid Captcha.'));
            }
        } else {
            $errors->add('custom_field_error', __('<strong>ERROR</strong>: Invalid Captcha Input.'));
        }
    } else {
        // Custom field is not filled, prevent login
        $errors->add('custom_field_error', __('<strong>ERROR</strong>: Please fill the captcha.'));
    }
    return $errors;
}
add_filter('registration_errors', 'si_register_captcha_validation', 10, 3);

/**
 * Forget Password Captcha Validation
 *
 * @return void
 */
// This function is called on forget password but now its not working properly that's why I also need to check this on live server
function si_lost_password_action($user_data, $errors)
{
    if (!$errors) {
        $errors = new WP_Error();
    }
    if (isset($_POST['si-captcha']) && !empty($_POST['si-captcha'])) {
        $first_value = trim($_POST['first-value']);
        $second_value = trim($_POST['second-value']);
        $si_captcha = trim($_POST['si-captcha']);
        
        if (!empty($first_value) && !empty($second_value)) {
            $captcha_sum = $first_value + $second_value;
            if ($captcha_sum == $si_captcha) {
                // New password send to the user
                $new_password = wp_generate_password();
                wp_set_password($new_password, $user_data->ID);
                wp_mail($user_data->user_email, 'New Password', 'Your new password is: ' . $new_password);
            } else {
                $errors->add('custom_field_error', __('<strong>ERROR</strong>: Invalid Captcha.'));
            }
        } else {
            $errors->add('custom_field_error', __('<strong>ERROR</strong>: Invalid Captcha Input.'));
        }
    } else {
        // Custom field is not filled, prevent login
        $errors->add('custom_field_error', __('<strong>ERROR</strong>: Please fill the captcha.'));
    }
    return $errors;
}
add_action('lostpassword_post', 'si_lost_password_action', 10, 2);


// Change login page logo
function custom_login_logo()
{
    $logo_id = get_theme_mod('custom_logo');
    $logo_url = wp_get_attachment_image_src($logo_id, 'full')[0];

    echo '<style type="text/css">
        h1 a { background-image: url(' . $logo_url . ') !important; }
    </style>';
}
add_action('login_head', 'custom_login_logo');

function custom_login_logo_url()
{
    return home_url('/');
}
add_filter('login_headerurl', 'custom_login_logo_url');
