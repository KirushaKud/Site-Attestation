<?php
try{


    $conn = new PDO("mysql:host=localhost;dbname=testDB",'root','62089286Xx');

    if (empty($_POST['name'])) exit("Поле не заполнено");
    if (empty($_POST['content'])) exit("Поле не заполнено");

    $query = "INSERT INTO message VALUES (NULL , :name, :email, :content, NOW())";
    $msg = $conn->prepare($query);
    $msg->execute(['name' => $_POST['name'],'email' => $_POST['email'], 'content' => $_POST['content']]);

    header("Location: index.html");

}
catch (PDOException $e)
{
    echo "error" .$e->getMessage();
}
?>