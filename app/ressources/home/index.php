<?php $title = 'Home page'; ?>
<?php ob_start() ?>
<section class="content container mt-5">
    <?php foreach ($posts as $post): ?>
        <div class="card mb-3">
            <div class="card-body">
                <p class="card-text">lorem</p>
                <p class="card-text">
                    <small class="text-muted">Date of publication: 
                        <?php 
                        $datetime = new DateTime($post['created_at']);
                        echo $datetime->format('d/m/Y'); 
                        ?>
                    </small>
                </p>
                <p class="card-text">
                    <small class="text-muted">Number of comments: 10</small>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
</section>
<?php $content = ob_get_clean() ?>
<?php include __DIR__ . '/../layout.php' ?>
