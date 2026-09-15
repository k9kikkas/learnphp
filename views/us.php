<?php
$title = 'U.S';
$posts = [
  [
    'title' => 'Some U.S title 1', 
    'content' => 'Some U.S content 1', 
    'date' => 'Jan 1, 2026', 
    'author' => 'Pets',
  ],
  [
    'title' => 'Some U.S title 2', 
    'content' => 'Some U.S content 2', 
    'date' => 'Nov 29, 2023', 
    'author' => 'Steve',
  ],
  [
    'title' => 'Some U.S title 3', 
    'content' => 'Some U.S content 3', 
    'date' => 'May 20, 2009', 
    'author' => 'Alex',
  ],
  [
    'title' => 'Some U.S title 4', 
    'content' => 'Some U.S content 4', 
    'date' => 'Sept 13, 2018', 
    'author' => 'Tommi sularaha',
  ],
];

?>


<?php include __DIR__ . '/partials/header.php'; ?>
    
    <main class="container">
      <?php include __DIR__ . '/partials/featured.php'; ?>

      <div class="row g-5">
        <div class="col-md-8">
          <?php include __DIR__ . '/partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
          <?php include __DIR__ . '/partials/sidebar.php'; ?>
        </div>
      </div>
    </main>
    <?php include __DIR__ . '/partials/footer.php'; ?>
