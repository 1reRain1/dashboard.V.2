<?php

require '/app/public/db.con.php';
$ingredients = $db->query("SELECT * FROM ingredients");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $query = "INSERT INTO ingredients (name, price) VALUES (:name, :price)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(":name", $_POST["ingredientName"]);
    $stmt->bindParam(":price", $_POST["ingredientprice"]);
    $stmt->execute();
}
require '/app/public/views/ingredients/ingredients.php';