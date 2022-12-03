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
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped f-size-12 align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Address</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                        <th scope="col">Page URL</th>
                        <th scope="col">Enquiry Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($x = 0; $x < 10; $x++) : ?>
                        <tr>
                            <th scope="row"><?php echo $x ?></th>
                            <td>Saurabh Sharma</td>
                            <td>saurabhcoded@gmail.com</td>
                            <td>+91&nbsp;9999-9999-888</td>
                            <td>New Delhi </td>
                            <td>Service Name</td>
                            <td>Nice Product Best for this budget</td>
                            <td>localhost/v9dindustry/contact-us.html</td>
                            <td>
                                2022-11-29 05:45:55
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-around">
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