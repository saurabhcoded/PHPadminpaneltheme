<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("zc-header.php"); ?>
    <!-- ========================== Grid Home ==========================  -->
    <main class="container py-5">
        <div>
            <form action="">
                <div class="title text-uppercase d-flex align-items-center justify-content-between">
                    <h5>About Content</h5>
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
                        <span class="form-label">About Image</span>
                        <div class="d-flex align-items-center">
                            <div class="input-group">
                                <input type="file" class="form-control " disabled />
                                <input type="text" placeholder="Alt text" class="form-control">
                            </div>
                            <img src="https://vrdcreative.in/v9dindustry/upload/cat_banners/OPUSCART_8c2aa3_istockphoto-1266175895-612x612.jpg" alt="" class="img-responsive mw-100 ms-3" style="max-width:100px;max-height:100px">
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- blank space  -->
                    </div>
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
    </main>
    <!--================== Essential Javascript Files  ==================-->
    <?php include("zc-footer.php"); ?>
    </body>

</html>