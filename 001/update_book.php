<?php
require_once("./include/config.php");
require_once("./include/header.php");
?>

<div class="container">
    <a class="btn btn-info btn-sm my-3" href="index.php">Back</a>

    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card shadow">
                <div class="row no-gutters">
                    <?php
                    try {
                        $conn = new PDO($dns, $user, $pass);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $stmt = $conn->prepare("SELECT * FROM books WHERE id = :id");
                        $stmt->execute([
                            "id" => $_GET["id"]
                        ]);

                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

                        foreach ($stmt->fetchAll() as $key => $value) {
                    ?>

                            <div class="col-md-5">
                                <img src="covers/<?php echo $value['cover'] ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Book Update</h5>
                                    <form action="controller.php" method="post" enctype="multipart/form-data" id="updateForm">
                                        <div class="form-group">
                                            <label for="bookName">Book Name</label>
                                            <input type="text" class="form-control" id="bookName" name="bookName" value="<?php echo $value['name'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="authorName">Book Name</label>
                                            <input type="text" class="form-control" id="authorName" name="authorName" value="<?php echo $value['author'] ?>">
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="cover" name="cover">
                                            <label class="custom-file-label" for="cover">Choose book cover</label>
                                        </div>
                                        <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                                        <input type="hidden" name="cover" value="<?php echo $value['cover'] ?>">
                                    </form>
                                </div>
                                <div class="card-footer bg-white">
                                    <button type="submit" class="btn btn-outline-success btn-sm" form="updateForm" name="bookUpdate">Update</button>
                                    <a href="controller.php?bookDelete=<?php echo $value['id'] ?>" class="btn btn-outline-danger btn-sm" name="bookDelete">Delete</a>
                                </div>
                            </div>
                    <?php
                        }
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once("include/footer.php");
?>