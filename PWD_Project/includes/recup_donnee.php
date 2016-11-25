<?php
include_once 'db_con.php';


//run the query
$result = mysqli_query($link,"SELECT * FROM article")or die (mysqli_error($link));