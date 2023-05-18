<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Create new product</h5>

            <form action="/job" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="example-product-name">Company Name</label>
                    <input type="text" class="form-control" id="example-product-name" aria-describedby="emailHelp" 
                        placeholder="Enter company name" required name="name">
                </div>

                <div class="form-group">
                    <label for="example-product-stock">Quota</label>
                    <input type="number" min="1" class="form-control" id="example-product-stock" aria-describedby="emailHelp" 
                        placeholder="Enter Quota" required name="stock">
                </div>

                <div class="form-group">
                    <label for="example-product-name">Desciption</label>
                    <input type="text" class="form-control" id="example-product-name" aria-describedby="emailHelp" 
                        placeholder="Enter Enter description about your company" required name="description">
                </div>

                <div class="form-group">
                    <label for="example-product-category">Category</label>
                    <select class="form-control" name="category" id="example-product-category">
                        <option value="utilities">Logistic & supply</option>
                        <option value="food_and_beverages"> Desain</option>
                        <option value="books">Marketing</option>
                        <option value="books">Sales</option>
                        <option value="books">Manager</option>
                        <option value="books">Finance</option>
                        <option value="books">Admin</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="example-product-photo">Photo</label>
                    <input type="file" class="form-control" id="example-product-photo" aria-describedby="photoHelp" name="photo">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>