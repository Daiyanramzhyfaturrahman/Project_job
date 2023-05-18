<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
        <?php if (session('loggedIn', true)): ?>
            <h5 class="mb-4">Hello <?= session('name') ?> </h5><br/>
            <?php endif; ?>
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">ID</th>
                        <th scope="col ">Photo</th>
                        <th scope="col ">Company Name</th>
                        <th scope="col ">description</th>
                        <th scope="col ">Quota</th>
                        <th scope="col ">Price</th>
                        <th scope="col ">Category</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($jobs as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><img src="/photos/<?= $item['photo'] ?>" alt="" width=100 height=100></td>
                        <td><?= $item['name'] ?></td>
                        <td><?= $item['description'] ?></td>
                        <td><?= $item['stock'] ?></td>
                        <td><?= $item['price'] ?></td>
                        <td><?= $item['category'] ?></td>
                        <td>
                        <?php if (session('loggedIn', true)): ?>
                            <div class="btn-group " role="group " aria-label="Basic example ">
                                <form action="/job/<?= $item['id'] ?>" method="POST" onsubmit="return confirm(`Are you sure?`)">
                                    <a href="/job/<?= $item['id'] ?>/edit" class="btn head-btn2">edit</a>
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn head-btn3" type="submit">delete</a>
                                    </button>
                                </form>
                            </div>
                            <?php else: ?>
                            <div class="btn-group " role="group " aria-label="Basic example ">
                          <a href="/registration/<?= $item['id'] ?>"class="btn head-btn2">Apply</a>
                        </div>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="col-12">
            <?= $pager->links('jobs', 'custom_pagination') ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>