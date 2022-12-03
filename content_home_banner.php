<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("zc-header.php"); ?>
    <!-- ========================== Grid Home ==========================  -->
    <main class="container py-5">
        <div>
            <div class="d-flex flex-column flex-md-row align-items-center flex-wrap justify-content-between py-3">
                <div class="input-group rounded-pill border border-success w-100 m-1" style="overflow: hidden;max-width:600px">
                    <input type="text" name="" id="" class="form-control border-0 ps-4 m-1" placeholder="Search Here" style="box-shadow: none;outline:0">
                    <button class="btn btn-success border-0 rounded-pill">
                        <i class="bi bi-search"></i> search
                    </button>
                </div>
                <div>
                    <button class="btn btn-outline-success">Add Banner</button>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped f-size-12 align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Banner Title</th>
                        <th scope="col">paragraph</th>
                        <th scope="col">link</th>
                        <th scope="col">Banner Image</th>
                        <th scope="col">alt</th>
                        <th scope="col">order</th>
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($x = 0; $x < 3; $x++) : ?>
                        <tr>
                            <th scope="row"><?php echo $x ?></th>
                            <td>Get Best Free Products</td>
                            <td>.....</td>
                            <td>www.adminpanel.com/products/product-details.html</td>
                            <td><img src="https://vrdcreative.in/v9dindustry/uploads/banner_images/bnr1.webp" alt="" style="width: 100%;;max-width:100px;max-height:80px"></td>
                            <td>Service Name</td>
                            <td><input type="number" class="form-control mx-auto text-center px-0" min="0" value="0" style="max-width: 50px;"></td>
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
                    <?php endfor; ?>


                </tbody>
            </table>
        </div>
    </main>
    <!--================== Essential Javascript Files  ==================-->
    <?php include("zc-footer.php"); ?>
    </body>

</html>