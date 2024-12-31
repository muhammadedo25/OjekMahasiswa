<?php
// Create connection
$conn = mysqli_connect("sql300.epizy.com", "epiz_33149644", "QMAh8pfx16MdVbu", "epiz_33149644_db_jekma");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
