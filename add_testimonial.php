<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("zc-header.php"); ?>
    <!-- ========================== Grid Home ==========================  -->
    <div class="bg-light p-4 text-center">
        <a href="<?php echo $admin_url; ?>">Dashboard</a> /
        <a href="<?php echo $admin_url . "manager_testimonials.php"; ?>">Testimonials</a> /
        <a href="<?php echo $admin_url; ?>" aria-disabled="true">Add Testimonial</a>
    </div>
    <main class="container py-5">
        <div>
            <form action="add_testimonial.controller.php" id="serviceForm" method="POST" enctype="multipart/form-data">
                <div class="row gy-4">
                    <div class="col-12 col-lg-6">
                        <label for="" class="fs-5">Person Name</label>
                        <input type="text" name="name" class="form-control form-control-lg" required>
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="" class="fs-5">Category</label>
                        <select name="category" value="<?php echo $testimonial['category'] ?>" class="form-select form-select-lg" required>
                            <?php $services = $conn->query("SELECT * FROM services ORDER BY created_at ASC");
                            while ($service = mysqli_fetch_assoc($services)) { ?>
                                <option value="<?php echo $service['title']; ?>"><?php echo $service['title']; ?></option>
                            <?php }; ?>
                        </select>
                    </div>
                    <div class="col-12 col-lg-6">
                        <label for="" class="fs-6">Rating</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rating" id="rating1" value="1">
                            <label class="form-check-label" for="rating1">
                                1 <i class="bi bi-star-fill text-warning"></i>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rating" id="rating2" value="2">
                            <label class="form-check-label" for="rating2">
                                2 <i class="bi bi-star-fill text-warning"></i>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rating" id="rating3" value="3">
                            <label class="form-check-label" for="rating3">
                                3 <i class="bi bi-star-fill text-warning"></i>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rating" id="rating4" value="4">
                            <label class="form-check-label" for="rating4">
                                4 <i class="bi bi-star-fill text-warning"></i>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rating" id="rating5" value="5" checked>
                            <label class="form-check-label" for="rating5">
                                5 <i class="bi bi-star-fill text-warning"></i>
                            </label>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <label for="" class="fs-5">person image</label>
                        <input type="file" name="img" class="form-control form-control-lg" required>
                    </div>
                    <div class="col-12">
                        <label for="" class="fs-5">Text Content</label>
                        <textarea name="content" class="form-control form-control-lg" rows="5" required></textarea>
                    </div>
                    <div class="col-12">
                        <input type="submit" value="Add Testimonial" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!--================== Essential Javascript Files  ==================-->
    <?php include("zc-footer.php"); ?>
    </body>

</html>