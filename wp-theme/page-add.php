<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 09/12/2016
 * Time: 18:59
 */

get_header();
echo "<h1>Add Expense</h1>";
// a form to add expenses
echo
    "<form method='post'>
        <input type='text' name='description' minlength='10' maxlength='250' placeholder='Description'><br>
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
echo "<a id='backToMenu' href='./index/'>Back to Menu</a>";
get_footer();