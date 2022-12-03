<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("zc-header.php"); ?>
    <!-- ========================== Grid Home ==========================  -->
    <main class="container py-5">
        <!-- Edit Account  -->
        <div>
            <form action="">
                <div class="title text-uppercase d-flex align-items-center justify-content-between">
                    <h5>Edit Account Details</h5>
                    <div class="d-flex align-items-center justify-content-end">
                        <button class="btn btn-outline-primary m-1">
                            Edit
                        </button>
                        <button class="btn btn-outline-danger m-1">
                            Cancel
                        </button>
                        <button class="btn btn-outline-success m-1">Save</button>
                    </div>
                </div>
                <div class="row mt-4 g-3">
                    <div class="col-12 col-lg-6">
                        <span class="form-label">First Name</span>
                        <input type="text" class="form-control form-control-lg" disabled />
                    </div>
                    <div class="col-12 col-lg-6">
                        <span class="form-label">Last Name</span>
                        <input type="text" class="form-control form-control-lg" disabled />
                    </div>
                    <div class="col-12 col-lg-6">
                        <span class="form-label">Telephone No.</span>
                        <input type="text" class="form-control form-control-lg" disabled />
                    </div>
                    <div class="col-12 ">
                        <span class="form-label">Address</span>
                        <textarea name="" id="" cols={30} rows={3} class="form-control" disabled></textarea>
                    </div>
                </div>
            </form>
        </div>
        <!-- Password Manager  -->
        <div class="mt-5" style="max-width: 500px;">
            <form action="">
                <div class="title text-uppercase d-flex align-items-center justify-content-between">
                    <h5>Reset Password</h5>
                    <div class="d-flex align-items-center justify-content-end">
                        <button class="btn btn-outline-success m-1">Save</button>
                    </div>
                </div>
                <div class="row mt-4 g-3">
                    <div class="col-12 ">
                        <span class="form-label">Old Password</span>
                        <input type="text" class="form-control form-control-lg" />
                    </div>
                    <div class="col-12 ">
                        <span class="form-label">New Password</span>
                        <input type="text" class="form-control form-control-lg" />
                    </div>
                    <div class="col-12 ">
                        <span class="form-label">Confirm Password</span>
                        <input type="text" class="form-control form-control-lg" />
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!--================== Essential Javascript Files  ==================-->
    <?php include("zc-footer.php"); ?>
    </body>

</html>