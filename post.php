<?php
require_once("assets/inc/configuration.php");
$page = "Post";
include "assets/inc/header.php";
?>
<div id="colorlib-main">
    <!-- blog post form -->
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Title">
                        </div>
                        <div class="form-group mt-3">
                            <textarea name="content" id="" cols="20" rows="5" class="form-control" placeholder="Content"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group mt-3">
                            <select name="category" id="" class="form-control">
                                <option value="0">Select Category</option>
                                <?php
                                $sql = "SELECT * FROM categories";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <!-- <div class="form-group mt-3">
                            <input type="text" class="form-control" name="tags" placeholder="Tags">
                        </div> -->
                        <div class="form-group mt-3">
                            <input type="submit" value="Post" class="btn btn-primary py-3 px-5" name="post">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->

<?php include 'assets/inc/footer.php'; ?>

</body>

</html>