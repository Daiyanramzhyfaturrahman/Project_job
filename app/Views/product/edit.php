<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Update product <?= $data['name'] ?></h5>

            <form action="/job/<?= $data['id'] ?>" method="post">
                <input type="hidden" name="_method" value="put" />

                <div class="form-group">
                    <label for="example-product-name">Company Name</label>
                    <input type="text" class="form-control" id="example-product-name" aria-describedby="emailHelp" 
                        placeholder="Enter company name" required name="name" value="<?= $data['name'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-product-name">description</label>
                    <input type="text" class="form-control" id="example-product-name" aria-describedby="emailHelp" 
                        placeholder="Enter description about your company" required name="description" value="<?= $data['description'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-product-stock">Quota</label>
                    <input type="number" min="1" class="form-control" id="example-product-stock" aria-describedby="emailHelp" 
                        placeholder="Enter Quota" required name="stock" value="<?= $data['stock'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-product-price">Price</label>
                    <input type="number" min="1" class="form-control" id="example-product-price" aria-describedby="emailHelp" 
                        placeholder="Enter range price" required name="price" value="<?= $data['price'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-product-category">Category</label>
                    <select class="form-control" name="category" id="example-product-category">
                        <option value="logistic & supply" <?= $data['category'] == "logistic & supply" ? "selected" : "" ?>>Logistic & Supply</option>
                        <option value="desain" <?= $data['category'] == "desain" ? "selected" : "" ?>> Desain</option>
                        <option value="marketing" <?= $data['category'] == "marketing" ? "selected" : "" ?>>Marketing</option>
                        <option value="sales" <?= $data['category'] == "sales" ? "selected" : "" ?>>Sales</option>
                        <option value="manager" <?= $data['category'] == "manager" ? "selected" : "" ?>>Manager</option>
                        <option value="finance" <?= $data['category'] == "finance" ? "selected" : "" ?>>Finance</option>
                        <option value="admin" <?= $data['category'] == "admin" ? "selected" : "" ?>>Admin</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>