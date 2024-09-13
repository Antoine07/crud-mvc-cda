<?php $title = 'Posts Dashboard'; ?>
<?php ob_start() ?>
<section class="container mt-5">
    <h1 class="mb-4">Posts Dashboard</h1>

    <!-- Bouton pour rediriger vers la page d'ajout de post -->
    <a href="/add/post" class="btn btn-primary mb-4">Add New Post</a>

    <!-- Tableau des posts -->
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Category</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <th scope="row"><?php echo $post['id']; ?></th>
                    <td><?php echo $post['title']; ?></td>
                    <td><?php echo substr($post['content'], 0, 100) . '...'; ?></td>
                    <td><?php echo $post['category_name']; ?></td>
                    <td><?php $datetime = new DateTime($post['created_at']);
                              echo $datetime->format('d/m/Y'); ?></td>
                    <td>
                        <form action="/delete/post" method="post" style="display:inline;">
                            <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
<?php $content = ob_get_clean() ?>
<?php include __DIR__ . '/../../layout.php' ?>
