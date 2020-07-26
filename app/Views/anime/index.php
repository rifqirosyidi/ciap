<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="text-center">
                <a href="/anime/create" class="btn btn-primary text-center mb-2">Add</a>
            </div>
            <h1 class="mt-4 mb-4 text-center">List Anime</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Studio</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($all_anime as $anime) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><img class="sampul" src="/img/<?= $anime['sampul']; ?>" alt=""></td>
                            <td><?= $anime['judul']; ?></td>
                            <td><?= $anime['penerbit']; ?></td>
                            <td>
                                <a href="/anime/<?= $anime['slug']; ?>" class="btn btn-sm btn-secondary">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>