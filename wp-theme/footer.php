<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 09/12/2016
 * Time: 12:47
 */

?>
    <?php if(is_user_logged_in()){ ;?>
        <form id='logoutForm' method="post">
            <input type="submit" name="logOutBtn" value="Log Out">
        </form>
    <?php } ?>
    </body>
</html>
