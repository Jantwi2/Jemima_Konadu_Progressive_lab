<?php
require_once '../settings/core.php';
require_once '../actions/fetch_category_action.php';


// Redirect if not logged in or not admin
if (!isLoggedIn() || !isAdmin()) {
    header("Location: ../view/login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Categories</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f7f7f7; }
        .container { max-width: 600px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.08);}
        h2 { margin-bottom: 20px; }
        .error { color: red; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px;}
        th, td { padding: 10px; border-bottom: 1px solid #eee; text-align: left;}
        form.inline { display: inline; }
        input[type="text"] { padding: 6px; border-radius: 4px; border: 1px solid #ccc;}
        button, input[type="submit"] { padding: 6px 12px; border-radius: 4px; border: none; background: #007BFF; color: #fff; cursor: pointer;}
        button.delete { background: #dc3545; }
    </style>
</head>
<body>
<div class="container">
    <h2>Manage Categories</h2>
    <?php if (!empty($error)): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <!-- CREATE -->
    <form id="categoryForm">
        <input type="text" id="category_name" name="category_name" placeholder="New Category Name" required>
        <input type="submit" value="Add Category">
    </form>


    <!-- RETRIEVE, UPDATE, DELETE -->
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($categories as $cat): ?>
            <tr>
                <td><?= $cat['cat_id'] ?></td>
                <td>
                <form class="updateCategoryForm inline" data-id="<?= $cat['cat_id'] ?>">
                    <input type="text" class="new_name" value="<?= htmlspecialchars($cat['cat_name']) ?>" required>
                    <input type="submit" value="Update">
                </form>

                </td>
                <td>
                    <form class="deleteCategoryForm inline" data-id="<?= $cat['cat_id'] ?>">
                        <button type="submit" class="delete">Delete</button>
                    </form>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<script src="../js/category.js"></script>
</body>
</html>