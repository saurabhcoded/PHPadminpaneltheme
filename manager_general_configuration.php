<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("zc-header.php"); ?>
    <!-- ========================== Grid Home ==========================  -->
    <main class="container py-5">
        <div>
            <form action="">
                <div class="title text-uppercase d-flex align-items-center justify-content-between">
                    <h5>General Configurations</h5>
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
                    <div class="col-12">
                        <h5 class="subtitle">Website Configuration</h5>
                    </div>
                    <div class="col-12 col-lg-6">
                        <span class="form-label">Company Name</span>
                        <input type="text" class="form-control form-control-lg" disabled />
                    </div>
                    <!-- Contact Details -->
                    <div class="col-12">
                        <h5 class="subtitle">Contact Information</h5>
                    </div>
                    <div class="col-12 col-lg-6">
                        <span class="form-label">Email</span>
                        <input type="text" class="form-control form-control-lg" disabled />
                    </div>
                    <div class="col-12 col-lg-6">
                        <span class="form-label">Contact</span>
                        <input type="text" class="form-control form-control-lg" disabled />
                    </div>
                    <div class="col-12 col-lg-6">
                        <span class="form-label">Contact 2</span>
                        <input type="text" class="form-control form-control-lg" disabled />
                    </div>
                    <div class="col-12 col-lg-6">
                        <span class="form-label">Contact 3</span>
                        <input type="text" class="form-control form-control-lg" disabled />
                    </div>
                    <div class="col-12 col-lg-6">
                        <span class="form-label">Whatsapp</span>
                        <input type="text" class="form-control form-control-lg" disabled />
                    </div>
                    <div class="col-12 ">
                        <span class="form-label">Address 1</span>
                        <textarea name="" id="" cols={30} rows={3} class="form-control" disabled></textarea>
                    </div>
                    <div class="col-12 ">
                        <span class="form-label">Address 2</span>
                        <textarea name="" id="" cols={30} rows={3} class="form-control" disabled></textarea>
                    </div>
                    <div class="col-12 ">
                        <span class="form-label">Fax</span>
                        <textarea name="" id="" cols={30} rows={3} class="form-control" disabled></textarea>
                    </div>
                    <div class="col-12 ">
                        <span class="form-label">GoogleMap Iframe</span>
                        <textarea name="" id="" cols={30} rows={3} class="form-control" disabled></textarea>
                    </div>
                    <!-- Social Profile Links -->
                    <div class="col-12">
                        <h5 class="subtitle">Social Profile Links</h5>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <span class="form-label">Facebook</span>
                        <input type="text" class="form-control form-control-lg" disabled />
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <span class="form-label">Twitter </span>
                        <input type="text" class="form-control form-control-lg" disabled />
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <span class="form-label">Instagram </span>
                        <input type="text" class="form-control form-control-lg" disabled />
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <span class="form-label">LinkedIn </span>
                        <input type="text" class="form-control form-control-lg" disabled />
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <span class="form-label">Youtube </span>
                        <input type="text" class="form-control form-control-lg" disabled />
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!--================== Essential Javascript Files  ==================-->
    <?php include("zc-footer.php"); ?>
    </body>

</html>