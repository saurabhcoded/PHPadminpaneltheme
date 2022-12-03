<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("zc-header.php"); ?>
    <!-- ========================== Grid Home ==========================  -->
    <main class="container py-5">
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
                    <button class="btn btn-outline-success">Add Gallery</button>
                </div>
            </div>
        </div>
        <!-- Table  -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped f-size-12 align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Gallery Name</th>
                        <th scope="col">Url</th>
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
                        <td>htpps://localhost:3000</td>
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
                                <button class="btn p-0" data-bs-toggle="tooltip" data-bs-title="Delete">
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