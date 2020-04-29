<?php
require_once("include/config.php");
require_once("include/header.php");
?>


<div class="container">
    <a class="btn btn-success btn-sm my-3" href="add_book.php">Add Book</a>
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4">
        <?php
        try {
            $conn = new PDO($dns, $user, $pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("SELECT * FROM books");
            $stmt->execute();

            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach ($stmt->fetchAll() as $key => $value) {
        ?>
                <div class="col mb-3">
                    <div class="card shadow h-100">
                        <img src="covers/<?php echo $value['cover'] ?>" class="card-img-top" alt="...">
                        <div class="card-body p-2">
                            <h5 class="card-title"><?php echo $value['name'] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $value['author'] ?></h6>
                        </div>
                        <div class="card-footer bg-white p-2">
                            <a href="controller.php?bookDelete=<?php echo $value['id'] ?>" class="btn btn-outline-danger btn-sm">Delete</a>
                            <a href="update_book.php?id=<?php echo $value['id'] ?>" class="btn btn-outline-info btn-sm ml-auto">Update</a>
                        </div>
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

<?php
require_once("include/footer.php");
?>