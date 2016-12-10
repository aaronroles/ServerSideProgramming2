<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 09/12/2016
 * Time: 12:47
 */

?>

<html>
    <title>Financial Recording</title>
    <head>
        <?php
        wp_head();
        $currentUserId = get_current_user_id();
        ?>
    </head>

    <body>
        <h1>Financial Recording</h1>
        <?php echo "Welcome user ".$currentUserId; ?>