<?php
require '/app/public/db.con.php';
require '/app/public/Validator.php';
// var_dump($_POST);
$dishes = $db->query("SELECT * FROM dishes");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    if (!Validator::string($_POST['dishname'], 1, 100)) {
        $errors['body'] = "a name between 1 and 100 chars is required";
    }

    if (empty($errors)) {
        $query = 'INSERT INTO dishes (name) VALUES (:dishname)';
        $stmt = $db->prepare($query);
        $stmt->bindParam(":dishname", $_POST["dishname"]);
        $stmt->execute();
    }


}



require '/app/public/views/dishes/dishes.php';