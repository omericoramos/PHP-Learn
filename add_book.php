<?php
require_once("include/config.php");
require_once("include/header.php");
?>
<div class="container">
    <a class="btn btn-info btn-sm my-3" href="index.php">Back</a>

    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card shadow">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="covers/addbook.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title text-center">Book Add</h5>
                            <form action="controller.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="bookName">Book Name</label>
                                    <input type="text" class="form-control" id="bookName" name="bookName" placeholder="Enter book name">
                                </div>
                                <div class="form-group">
                                    <label for="authorName">Book Name</label>
                                    <input type="text" class="form-control" id="authorName" name="authorName" placeholder="Enter author name">
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="cover" name="cover">
                                    <label class="custom-file-label" for="cover">Choose book cover</label>
                                </div>
                                <button type="submit" class="btn btn-success mt-3 w-100" name="addBook">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once("include/footer.php");
?>