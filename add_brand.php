<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("zc-header.php"); ?>
    <!-- ========================== Grid Home ==========================  -->
    <main class="container py-5">
        <div>
            <div class="d-flex align-items-center justify-content-between">
                <h5>Add a Brand</h5>
                <button class="btn btn-success">save</button>
            </div>
            <form action="">
                <div class="row g-4">
                    <div class="col-12 col-lg-6">
                        <span class="form-label">Brand Name</span>
                        <input type="text" class="form-control form-control-lg">
                    </div>
                    <div class="col-12 col-lg-6">
                        <span class="form-label">Brand Link</span>
                        <input type="url" class="form-control form-control-lg">
                    </div>
                    <div class="col-12 col-lg-6">
                        <span class="form-label">Status</span>
                        <select name="" id="" class="form-select form-select-lg">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <span class="form-label">Brand Image</span>
                                <div class="input-group">
                                    <input type="file" class="form-control form-control-lg">
                                    <input type="text" class="form-control form-control-lg" placeholder="alt text">
                                </div>
                            </div>
                            <div class="col-4">
                                <img src="https://vrdcreative.in/v9dindustry/uploads/banner_images/c1.jpg" alt="" style="width:100%;max-height:100px;object-fit:contain" class="rounded-4">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!--================== Essential Javascript Files  ==================-->
    <?php include("zc-footer.php"); ?>
    </body>

</html>