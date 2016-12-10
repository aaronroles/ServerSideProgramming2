<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 09/12/2016
 * Time: 19:01
 */

get_header();
echo "<h1>Pending Expenses</h1>";
// loop through wpdb for pending expenses
echo
"<table border='solid 1px black'>
    <tr>
        <th>Expense ID</th>
        <th>Description</th>
        <th>Category</th>
        <th>Cost</th>
        <th>Date</th>
        <th>Employee ID</th>
        <th>Approve/Reject</th>
    </tr>";

$pendingExpenses = $wpdb->get_results(
    "SELECT * FROM ar_expenses WHERE expenseStatus='pending'"
);

foreach ($pendingExpenses as $data) {
    echo "<tr>";
        echo "<td>" . $data->expenseId . "</td>";
        echo "<td>" . $data->expenseDesc . "</td>";
        echo "<td>" . $data->expenseCategory . "</td>";
        echo "<td>" . $data->expenseCost . "</td>";
        echo "<td>" . $data->expenseDate . "</td>";
        echo "<td>" . $data->expenseUserId . "</td>";
        echo "<td>
                <form method='post'>
                    <input type='hidden' name='expenseId' value='".$data->expenseId."'>
                    <input type='hidden' name='expenseUserId' value='".$data->expenseUserId."'>
                    <input type='submit' name='approveExpense' value='Approve'>
                    <input type='submit' name='rejectExpense' value='Reject'>
                </form>";
    echo "</tr>";
}
echo "</table>";
echo "<a id='backToMenu' href='./index/'>Back to Menu</a>";
get_footer();