<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 09/12/2016
 * Time: 12:47
 */

?>

    <?php if (is_user_logged_in()) : ?>
        <a href="<?php echo wp_logout(); ?>">Logout</a>
    <?php endif;?>
    </body>
</html>
