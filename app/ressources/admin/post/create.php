<?php $title = 'Home page'; ?>
<?php ob_start() ?>
<section class="content container mt-5">
    <h1 class="mb-4">Add Post</h1>
    <form action="/add/post" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content:</label>
            <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category:</label>
            <select class="form-select" id="category" name="category" required>
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>
<?php $content = ob_get_clean() ?>
<?php include __DIR__ . '/../../layout.php' ?>
