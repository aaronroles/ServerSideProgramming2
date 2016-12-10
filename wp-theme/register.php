<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 09/12/2016
 * Time: 14:21
 */
// A form to register new employees
echo '<div id="registerDiv">';
    echo '<h2>Register</h2>';
    echo '<form method="POST" id="userLogin">';
    echo '<label for="username">Username or Email Address</label>';
    echo '<input type="text" id="username" name="username" placeholder="Username..."><br/>';
    echo '<label for="password">Password</label>';
    echo '<input type="password" id="password" name="password" placeholder="Password..."><br/>';
    echo '<input type="submit" id="register" name="register" value="Register"><br/>';
    echo '</form>';
echo '</div>';