<?php
$db_server = "localhost";
$db_database = "sep1901_s_toys_store";
$db_username = "sep1901_toys_store";
$db_password = "toys_store";

try
{
    // Koppla upp med PDO
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database;charset=utf8",
                     $db_username, $db_password);

    $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $error)
{
    echo "<div class='alert alert-danger'>";
    echo "<h3>Note: an error has occured</h3>";
    echo "<h4>";
    echo $error -> getMessage();
    echo "</h4>";
    echo "</div>";
    die;
}
?>
