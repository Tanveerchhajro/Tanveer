<?php
include ("components/header.php");
?>

<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
                <div class="row  bg-light rounded  mx-0">
                    <div class="col-md-12">
                        <h6 class="mb-4">Add category</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">category Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="cName" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Image</label>
                                    <input type="file" name="cImage" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <!-- <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> -->
                                <button type="submit" name="addcategory" class="btn btn-primary">add category</button>
                            </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->




<?php
include ("components/footer.php");
?>