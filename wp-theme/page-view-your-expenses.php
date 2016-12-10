<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 09/12/2016
 * Time: 19:03
 */

get_header();
echo "<h2>View Your Expenses</h2>";
// Build a table with expense content
// Table headings contain links to sort data
echo
"<table class='expenseTable' border='solid 1px black'>
    <tr>
        <th><a href='?orderBy=expenseDesc'>&#9662;Description</a></th>
        <th><a href='?orderBy=expenseCategory'>&#9662;Category</a></th>
        <th><a href='?orderBy=expenseCost'>&#9662;Cost</a></th>
        <th><a href='?orderBy=expenseDate'>&#9662;Date</a></th>
        <th><a href='?orderBy=expenseStatus'>&#9662;Status</a></th>
    </tr>";

// If no GET data to sort information
if(!isset($_GET["orderBy"])){
    // Default query
    $yourQuery = "SELECT * FROM ar_expenses WHERE expenseUserId=".get_current_user_id();
}
// If there is GET data
if(isset($_GET["orderBy"])){
    // Store the data
    $order = $_GET["orderBy"];
    // Attach it to end of query to sort with
    $yourQuery = "SELECT * FROM ar_expenses WHERE expenseUserId=".get_current_user_id()." ORDER BY ".$order;
}
// Run query
$yourExpenses = $wpdb->get_results($yourQuery);
// Build table rows
foreach ($yourExpenses as $data) {
    echo "<tr>";
    echo "<td>" . $data->expenseDesc . "</td>";
    echo "<td>" . $data->expenseCategory . "</td>";
    echo "<td>&#8364;" . $data->expenseCost . "</td>";
    echo "<td>" . $data->expenseDate . "</td>";
    echo "<td>" . $data->expenseStatus . "</td>";
    echo "</tr>";
}
echo "</table>";
// Return to main menu
echo "<a id='backToMenu' href='./index/'>&#8629; Back to Menu</a>";
get_footer();