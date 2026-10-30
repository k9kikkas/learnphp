<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <form action="/admin/users/edit?id=<?= $user->id ?>" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input value="<?= $user->name ?>" name="name" type="text" class="form-control" id="name" placeholder="Update name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input value="<?= $user->email ?>" name="email" class="form-control" id="email" rows="1" placeholder="Update email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Update password">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>