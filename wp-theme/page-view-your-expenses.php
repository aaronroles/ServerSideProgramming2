<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 09/12/2016
 * Time: 19:03
 */

get_header();
echo "<h1>View Your Expenses</h1>";
// loop through wpdb for your expenses
echo
"<table border='solid 1px black'>
    <tr>
        <th>Description</th>
        <th>Category</th>
        <th>Cost</th>
        <th>Date</th>
        <th>Status</th>
    </tr>";

$yourQuery = "SELECT * FROM ar_expenses WHERE expenseUserId=".get_current_user_id();
$yourExpenses = $wpdb->get_results($yourQuery);

foreach ($yourExpenses as $data) {
    echo "<tr>";
    echo "<td>" . $data->expenseDesc . "</td>";
    echo "<td>" . $data->expenseCategory . "</td>";
    echo "<td>" . $data->expenseCost . "</td>";
    echo "<td>" . $data->expenseDate . "</td>";
    echo "<td>" . $data->expenseStatus . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a id='backToMenu' href='./index/'>Back to Menu</a>";
get_footer();