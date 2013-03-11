<?php
  
    /************************************************************\
    *
    *	  PHP Array Pagination Copyright 2007 - Derek Harvey
    *	  www.lotsofcode.com
    *
    *	  This file is part of PHP Array Pagination .
    *
    *	  PHP Array Pagination is free software; you can redistribute it and/or modify
    *	  it under the terms of the GNU General Public License as published by
    *	  the Free Software Foundation; either version 2 of the License, or
    *	  (at your option) any later version.
    *
    *	  PHP Array Pagination is distributed in the hope that it will be useful,
    *	  but WITHOUT ANY WARRANTY; without even the implied warranty of
    *	  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.	See the
    *	  GNU General Public License for more details.
    *
    *	  You should have received a copy of the GNU General Public License
    *	  along with PHP Array Pagination ; if not, write to the Free Software
    *	  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA	02111-1307	USA
    *
    \************************************************************/
    
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <title>PHP Array Pagination</title>
  <style>
  <!--
   body {
    font-family: Tahoma, Verdana, Arial, Sans-serif;
    font-size: 11px;
   }
   hr {
    border: 1px #ccc;
    border-style: none none solid none;
    margin: 20px 0;
   }
   a {
    color: #333;
    text-decoration: none;
   }
   a:hover {
    text-decoration: underline;
   }
   a.selected {
    font-weight: bold;
    text-decoration: underline;
   }
   .numbers {
    line-height: 20px;
    word-spacing: 4px;
   }
  //-->
  </style>
  </head>
  <body>
    <h1>PHP Array Pagination</h1>
    <hr  />
    
    <?php session_start();
//Connect to database from here
$link = mysql_connect('localhost', 'root', 'password'); 
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//select the database | Change the name of database from here
mysql_select_db('neotech'); 
//echo($_SESSION['user']);
$sql="SELECT * FROM products";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$price=$row['price'];
$name=$row['image'];
?>
    
      <?php
        // Include the pagination class
        include 'pagination.class.php';
        // Create the pagination object
        $pagination = new pagination;
        
        // some example data
        do {
          $products[] = array(
            'Product' => $name,
            'Price' => $price,
          );
        }while($row = mysql_fetch_array($result));
        
        // If we have an array with items
        if (count($products)) {
          // Parse through the pagination class
          $productPages = $pagination->generate($products, 5);
          // If we have items 
          if (count($productPages) != 0) {
            // Create the page numbers
            echo $pageNumbers = '<div class="numbers">'.$pagination->links().'</div>';
            // Loop through all the items in the array
            foreach ($productPages as $productArray) {
              // Show the information about the item
              echo "<p><br><img src=\"".$productArray['Product']."\" /></br> &nbsp; &dollar;".$productArray['Price']."</p>";
            }
            // print out the page numbers beneath the results
            echo $pageNumbers;
          }
        }
      ?>
      <hr />
      
  </body>
</html>