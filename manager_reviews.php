<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("zc-header.php"); ?>
    <!-- ========================== Grid Home ==========================  -->
    <main class="container py-5">
        <div>
            <div class="d-flex flex-column flex-md-row align-items-center flex-wrap justify-content-between py-3">
                <div class="input-group rounded-pill border border-success w-100 m-1" style="overflow: hidden;max-width:600px">
                    <input type="text" name="" id="" class="form-control border-0  ps-4 m-1" placeholder="Search Here the Product Name" style="box-shadow: none;outline:0">
                    <button class="btn btn-success border-0 rounded-pill px-4">
                        <i class="bi bi-search"></i> search
                    </button>
                </div>
                <div>
                    <button class="btn btn-outline-success">Add Review</button>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped f-size-12">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Product ID</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Review</th>
                        <th scope="col">Rating</th>
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">4</th>
                        <td>Saurabh Sharma</td>
                        <td>saurabhcoded@gmail.com</td>
                        <td>+91 9999-9999-888</td>
                        <td>5</td>
                        <td>New Products</td>
                        <td>Nice Product Best for this budget</td>
                        <td>3.4 <i class="bi bi-star-fill text-warning"></i></td>
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
    </main>
    <!--================== Essential Javascript Files  ==================-->
    <?php include("zc-footer.php"); ?>
    </body>

</html>