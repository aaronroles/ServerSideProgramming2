<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 09/12/2016
 * Time: 19:02
 */
get_header();
echo "<h1>View All Expenses</h1>";
// loop through wpdb for all expenses (Admin)
echo
"<table border='solid 1px black'>
    <tr>
        <th>Expense ID</th>
        <th>Description</th>
        <th>Category</th>
        <th>Cost</th>
        <th>Date</th>
        <th>Employee ID</th>
        <th>Status</th>
    </tr>";

$allExpenses = $wpdb->get_results(
    "SELECT * FROM ar_expenses"
);

foreach ($allExpenses as $data) {
    echo "<tr>";
    echo "<td>" . $data->expenseId . "</td>";
    echo "<td>" . $data->expenseDesc . "</td>";
    echo "<td>" . $data->expenseCategory . "</td>";
    echo "<td>" . $data->expenseCost . "</td>";
    echo "<td>" . $data->expenseDate . "</td>";
    echo "<td>" . $data->expenseUserId . "</td>";
    echo "<td>" . $data->expenseStatus . "</td>";
    echo "</tr>";
}
echo "</table>";
get_footer();