<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 09/12/2016
 * Time: 19:20
 */

get_header();
// Links to the employer's pages
echo
    "<h2>Welcome Employer</h2>
    <ul>
        <li><a href='/view-all-expenses/'>View all expenses</a></li>
        <li><a href='/pending/'>View pending expenses</a></li>
    </ul>";
get_footer();