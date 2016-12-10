<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 09/12/2016
 * Time: 18:59
 */

get_header();
echo "<h2>Add Expense</h2>";
// A form to add expenses
echo
    "<form method='post'>
        <input id='expDesc' type='text' name='description' minlength='10' maxlength='250' placeholder='Description'><br>
        <select name='category'>
            <option value='food'>Food</option>
            <option value='fuel'>Fuel</option>
            <option value='accomodation'>Accomodation</option>
            <option value='equipment'>Equipment</option>
            <option value='other'>Other</option>
        </select><br>
        <input type='number' name='cost' min='0' maxlength='5' placeholder='Cost'><br>
        <input type='submit' name='submitExpense' value='Submit'>
    </form>";
echo "<a id='backToMenu' href='./index/'>&#8629; Back to Menu</a>";
get_footer();