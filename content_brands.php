<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("zc-header.php"); ?>
    <!-- ========================== Grid Home ==========================  -->
    <main class="container py-5">
        <!-- Heading  -->
        <div>
            <form action="">
                <div class="title text-uppercase d-flex align-items-center justify-content-between">
                    <h5>Brands Content</h5>
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
                        <span class="form-label">Title</span>
                        <input type="text" class="form-control form-control-lg" disabled />
                    </div>
                    <div class="col-12 col-lg-6">
                        <span class="form-label">Subtitle</span>
                        <input type="text" class="form-control form-control-lg" disabled />
                    </div>
                    <div class="col-12">
                        <span class="form-label">Description</span>
                        <textarea name="" id="" cols="30" rows="5" class="form-control" disabled> </textarea>
                    </div>
                </div>
            </form>
        </div>
        <!-- Details  -->
        <div>
            <div class="d-flex flex-column flex-md-row align-items-center flex-wrap justify-content-between py-3">
                <div class="input-group rounded-pill border border-success w-100 m-1" style="overflow: hidden;max-width:600px">
                    <input type="text" name="" id="" class="form-control border-0  ps-4 m-1" placeholder="Search Here the Brand Name" style="box-shadow: none;outline:0">
                    <button class="btn btn-success border-0 rounded-pill px-4">
                        <i class="bi bi-search"></i> search
                    </button>
                </div>
                <div>
                    <button class="btn btn-outline-success">Add Brand</button>
                </div>
            </div>
        </div>
        <!-- Table  -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped f-size-12 align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Brand Name</th>
                        <th scope="col">Alt Text</th>
                        <th scope="col">Image</th>
                        <th scope="col">Index</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">4</th>
                        <td>JBM</td>
                        <td>JBM Tablet</td>
                        <td><img src="https://vrdcreative.in/v9dindustry/uploads/banner_images/c1.jpg" alt="" class="img-responsive" style="max-width:100px;max-height:80px"></td>
                        <td><input type="number" class="form-control mx-auto text-center px-0 py-0 m-0" min="0" value="0" style="max-width: 50px;"></td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" checked>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center justify-content-around">
                                <button class="btn p-0" data-bs-toggle="tooltip" data-bs-title="Edit">
                                    <i class="bi bi-pen text-primary"></i>
                                </button>
                                <button class="btn p-0" data-bs-toggle="tooltip" data-bs-title="Edit">
                                    <i class="bi bi-trash text-danger"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Add a Brand Modal  -->
    </main>
    <!--================== Essential Javascript Files  ==================-->
    <?php include("zc-footer.php"); ?>
    </body>

</html>