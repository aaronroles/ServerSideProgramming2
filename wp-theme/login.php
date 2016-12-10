<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 09/12/2016
 * Time: 14:18
 */

// Default wordpress log in form
$args = array(
    'label_remember' => ("Remember Me"),
    'label_log_in' => ("Login"),
    'redirect' => "/index/",
    'remember' => true,
    'id_submit' => 'fp-wp-submit'
);
echo "<div id='loginDiv'>";
    echo "<h2>Login</h2>";
    wp_login_form($args);
echo "</div>";