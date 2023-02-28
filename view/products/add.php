<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<button type="button" id="addItem" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add new item
</button>
<div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="../../controller/addProduct.php">

                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add new Product</h5>
                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <!-- todo -->
                    <!-- <div class="mb-2">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile">
                    </div> -->
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" minlength="10" id="exampleFormControlInput1" placeholder="new Product" Rrequired>
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Sub Title</label>
                        <input type="text" class="form-control" name="subTitle" id="exampleFormControlInput1" minlength="10" placeholder="more info about the item" Rrequired>
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" minlength="20" placeholder="a description of the item" rows="3" Rrequired></textarea>
                    </div>

                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Item price</label>
                        <input type="number" min="0" max="10000" name="price" class="form-control" id="exampleFormControlInput1" Rrequired>
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Item old price</label>
                        <input type="number" min="0" max="10000" name="oldPrice" class="form-control" id="exampleFormControlInput1" Rrequired>
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Upload image</label>
                        <!-- <input type="image" name="link" class="form-control" id="exampleFormControlInput1" Rrequired> -->
                        <input type="file" accept="image/png" name="image" Rrequired />
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>