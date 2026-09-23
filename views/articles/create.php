<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
  <form action="/admin/articles" method="POST">
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input name="title" type="text" class="form-control" id="title" placeholder="Title Here">
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Content</label>
      <textarea name="body" class="form-control" id="body" rows="3"></textarea>
    </div>
    <div class="mb-3">
      <label for="date" class="form-label">Date</label>
      <input name="date" type="date" class="form-control" id="date" placeholder="hype skeletons">
    </div>
    <div class="mb-3">
      <label for="author" class="form-label">Author</label>
      <input name="author" type="text" class="form-control" id="author" placeholder="hype skeletons">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
