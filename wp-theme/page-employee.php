<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 09/12/2016
 * Time: 19:21
 */

get_header();
// Links to the employee's accessible pages
echo "
    <h2>Welcome Employee</h2>
    <ul>
        <li><a href='/view-your-expenses/'>View your expenses</a></li>
        <li><a href='/add/'>Add an expense</a></li>
    </ul>";
get_footer();