<?php

require_once("./include/config.php");

if (isset($_GET['bookDelete'])) {
    try {
        $conn = new PDO($dns, $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("DELETE FROM books WHERE id = :id");

        $stmt->execute([
            "id" => $_GET["bookDelete"]
        ]);

        header("location:index.php");
        die();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

if (isset($_POST['bookUpdate'])) {

    if (!empty($_FILES["cover"]["name"])) {

        $target_dir  = "covers/";
        $target_file = $target_dir . basename($_FILES["cover"]["name"]);
        $uploadOk    = 1;

        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["cover"]["tmp_name"]);

        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file)) {
                $_POST["cover"] = $_FILES["cover"]["name"];
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }


    try {
        $conn = new PDO($dns, $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("UPDATE books SET name = :name, author = :author, cover = :cover WHERE id = :id");

        $stmt->execute([
            "id" => $_POST["id"],
            "author" => $_POST["authorName"],
            "name" => $_POST["bookName"],
            "cover" => $_POST["cover"]
        ]);

        header("location:index.php");
        die();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

if (isset($_POST['addBook'])) {

    if (!empty($_FILES["cover"]["name"])) {
        $target_dir  = "covers/";
        $target_file = $target_dir . basename($_FILES["cover"]["name"]);
        $uploadOk    = 1;

        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image

        $check = getimagesize($_FILES["cover"]["tmp_name"]);

        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["cover"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        $_FILES["cover"]["name"] = "addbook.jpg";
    }

    try {
        $conn = new PDO($dns, $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO books (name, author, cover) VALUES (:bookName, :authorName, :cover)");

        $stmt->execute([
            "bookName" => $_POST["bookName"],
            "authorName" => $_POST["authorName"],
            "cover" => $_FILES["cover"]["name"]
        ]);

        header("location:index.php");
        die();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
