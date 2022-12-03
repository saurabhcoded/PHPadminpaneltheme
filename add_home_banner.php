<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("zc-header.php"); ?>
    <!-- ========================== Grid Home ==========================  -->
    <main class="container py-5">
        <div>
            <div class="d-flex align-items-center justify-content-between">
                <h5>Add a Banner</h5>
                <button class="btn btn-success">save</button>
            </div>
            <form action="">
                <div class="row g-4">
                    <div class="col-12 col-lg-6">
                        <span class="form-label">Editor Name</span>
                        <input type="text" class="form-control form-control-lg">
                    </div>
                    <div class="col-12 col-lg-6">
                        <span class="form-label">Title 2</span>
                        <input type="text" class="form-control form-control-lg">
                    </div>
                    <div class="col-12 col-lg-6">
                        <span class="form-label">Title 2</span>
                        <input type="text" class="form-control form-control-lg">
                    </div>
                    <div class="col-12 col-lg-6">
                        <span class="form-label">Banner Page Link</span>
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
                                <span class="form-label">Banner Editor Name</span>
                                <div class="input-group">
                                    <input type="file" class="form-control form-control-lg">
                                    <input type="text" class="form-control form-control-lg" placeholder="alt text">
                                </div>
                            </div>
                            <div class="col-4">
                                <img src="https://img.freepik.com/free-vector/decorative-diwali-festival-banner-with-text-space_1017-28267.jpg?w=1380&t=st=1670041207~exp=1670041807~hmac=b0f97f5b30d561c5f60be4d131ea539040d80c6eacc872cc16a14d1d29177ffc" alt="" style="width:100%;max-height:300px" class="rounded-4">
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