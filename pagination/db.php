<?php
/**
 * @link: http://www.Awcore.com/dev
 */
 
    $db = @mysql_connect('localhost', 'root', 'password') or die(mysql_error());
    @mysql_select_db('neotech', $db) or die(mysql_error());
 
?>
