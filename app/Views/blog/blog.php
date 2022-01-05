<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<?= $this->include('partials/header');?>
<div class="container py-5">
    <div class="row g-3 justify-content-center">
        <?php foreach($post as $post): ?>
        <?= view_cell('\App\Libraries\Blog::postItem', ['title'=> $post]); ?>
        <?php endforeach; ?>
    </div>

</div>

<?= $this->include('partials/footer');?>

<?= $this->endSection('content'); ?>