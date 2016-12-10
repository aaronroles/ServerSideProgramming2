<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 09/12/2016
 * Time: 19:01
 */

get_header();
echo "<h2>Pending Expenses</h2>";
// Build a table with expense content
// Table headings contain links to sort data
echo
"<table class='expenseTable' border='solid 1px black'>
    <tr>
        <th><a href='?orderBy=expenseDesc'>&#9662;Description</a></th>
        <th><a href='?orderBy=expenseCategory'>&#9662;Category</a></th>
        <th><a href='?orderBy=expenseCost'>&#9662;Cost</a></th>
        <th><a href='?orderBy=expenseDate'>&#9662;Date</a></th>
        <th><a href='?orderBy=expenseUserId'>&#9662;Employee ID</a></th>
        <th>Approve/Reject</th>
    </tr>";

// If no GET data to sort information
if(!isset($_GET["orderBy"])){
    // Default query
    $pendingQuery = "SELECT * FROM ar_expenses WHERE expenseStatus='pending'";
}
// If there is GET data
if(isset($_GET["orderBy"])){
    // Store it
    $order = $_GET["orderBy"];
    // Attach it onto the query to sort by that data
    $pendingQuery = "SELECT * FROM ar_expenses WHERE expenseStatus='pending' ORDER BY ".$order;
}
// Run the query
$pendingExpenses = $wpdb->get_results($pendingQuery);

// For every item, build a row with data
foreach ($pendingExpenses as $data) {
    echo "<tr>";
        echo "<td>" . $data->expenseDesc . "</td>";
        echo "<td>" . $data->expenseCategory . "</td>";
        echo "<td>&#8364;" . $data->expenseCost . "</td>";
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
// Return to main menu
echo "<a id='backToMenu' href='./index/'>&#8629; Back to Menu</a>";
get_footer();