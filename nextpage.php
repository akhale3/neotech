<?php

$link = mysql_connect('localhost', 'root', 'password'); 
if (!$link) {
    die('Could not connect: ' . mysql_error());
}


$var = @$_GET['q'] ;



$sk = trim($var);

// check for a search parameter
if (!isset($var))
{
echo "<p>We dont seem to have a search parameter!</p>";
exit;
}


// Connect to database.
// select table
mysql_select_db('neotech');

// Build SQL Query
$query = "select * from products"; // EDIT HERE and specify your table and field names for the SQL query
$numresults=mysql_query($query);
$numrows=mysql_num_rows($numresults);
// get results
if ($numrows == 0)
{
echo "<h4>Results</h4>";
echo "<p>Sorry, your search: &quot;" . $trimmed . "&quot; returned zero results</p>";

}

//how many rows to show per page
$rowsPerPage = 5;

// by default we show first page
$pageNum = 1;

// if $_GET['page'] defined, use it as page number
if(isset($_GET['page']))
{
$pageNum = $_GET['page'];
}

// counting the offset
$offset = ($pageNum - 1) * $rowsPerPage;
$count=1;

// get results
$query .= " limit $offset, $rowsPerPage";

$result = mysql_query($query) or die("Couldn't execute query");

while ($row= mysql_fetch_array($result)) {

$pro_no = $row["pro_no"];
$pro_name= $row["pro_name"];

// result table
echo "<td>$pro_no </td>";
echo "<td>$pro_name</td>";
//echo "<td> $description </td>";
//echo "<td> $cd_num </td>";
//echo " <td> $track </td>";
$count++;
}
$maxPage = ceil($numrows/$rowsPerPage);
//break before paging
echo "<br />";
$self = $_SERVER['PHP_SELF'];
$nav = '';
for($page = 1; $page <= $maxPage; $page++)
if ($page == $pageNum)
{
$nav .= " $page "; // no need to create a link to current page
}
else
{
$nav .= " <a href=\"$self?page=$page\">$page</a> ";
}

// creating previous and next link
// plus the link to go straight to
// the first and last page

if ($pageNum > 1)
{
$page = $pageNum - 1;
$prev = " <a href=\"$self?page=$page\">[Prev]</a> ";

$first = " <a href=\"$self?page=1\">[First Page]</a> ";
}
else
{
$prev = '&nbsp;'; // we're on page one, don't print previous link
$first = '&nbsp;'; // nor the first page link
}

if ($pageNum < $maxPage)
{
$page = $pageNum + 1;
$next = " <a href=\"$self?page=$page&q=$q\">[Next]</a> ";  
$last = " <a href=\"$self?page=$maxPage\">[Last Page]</a> ";
}
else
{
$next = '&nbsp;'; // we're on the last page, don't print next link
$last = '&nbsp;'; // nor the last page link
}
// print the navigation link
echo $first . $prev . $nav . $next . $last;
?>