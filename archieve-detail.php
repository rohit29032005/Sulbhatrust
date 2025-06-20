<?php
$archiveEvents = [
  1 => [
    'title' => 'Women Empowerment Summit',
    'description' => 'Womens empowerment summits are transformative gatherings designed to unite women from diverse backgrounds, industries, and life experiences to foster personal growth, professional development, and collective action toward gender equality. These events serve as powerful platforms for education, networking, and inspiration while addressing critical challenges facing women globally.',
    'details' => 'These summits prioritize several key objectives: informing and educating participants about global crises affecting women through comprehensive presentations and workshops, inspiring actionable change through discussions on local and global issues, and encouraging collaboration by facilitating networking opportunities and resource sharing.',
    'gallery' => ['archieve3.jpg', 'archieve2.jpeg', 'archieve.jpeg','archieve3.jpg'],
  ],
  2 => [
    'title' => 'Inclusive Craft Making Programme',
    'description' => 'Specially abled students bring distinctive perspectives and creative approaches to craft making that often result in innovative and inspiring artistic expressions. Their different ways of processing information and interacting with materials can lead to breakthrough techniques and unexpected artistic discoveries that benefit entire creative communities.',
    'details' => 'Rather than focusing on what students cannot do, the specially abled framework highlights what they can accomplish exceptionally well. Many specially abled students demonstrate remarkable focus, attention to detail, and creative problem-solving abilities that make them natural artists and innovators in craft making activities Rather than focusing on what students cannot do, the specially abled framework highlights what they can accomplish exceptionally well. Many specially abled students demonstrate remarkable focus, attention to detail, and creative problem-solving abilities that make them natural artists and innovators in craft making activities',
    'gallery' => ['img4.jpg', 'img13.jpg', 'img17.jpeg','img4.jpg'],
  ]
];

$id = $_GET['id'] ?? 1;
$event = $archiveEvents[$id] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $event['title'] ?? 'Archive Event Not Found' ?></title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    .banner-img {
      width: 100%;
      height: 490px;
      object-fit: cover;
    }
    .fixed-img {
      height: 250px;
      object-fit: cover;
      width: 100%;
      border-radius: 10px;
    }
  </style>
</head>
<body>

<?php $page = 'event'; include 'header.php'; ?>

<?php if ($event): ?>
  <!-- Full-width Banner Image -->
  <section>
    <img src="assets/images/<?= $event['gallery'][0] ?>" class="banner-img" alt="Banner Image">
  </section>

  <!-- Title + Short Description -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="mb-3"><?= $event['title'] ?></h2>
      <p class="lead"><?= $event['description'] ?></p>

      <div class="mt-4">
        <h4>Event Summary</h4>
        <p><?= $event['details'] ?></p>
      </div>
    </div>
  </section>

  <!-- Photo Highlights (excluding banner image) -->
  <section class="py-5">
    <div class="container">
      <h4 class="mb-4">Photo Highlights</h4>
      <div class="row g-4">
        <?php
        $gallery = $event['gallery'];
        unset($gallery[0]); // Remove banner image
        foreach ($gallery as $img):
        ?>
          <div class="col-md-4">
            <img src="assets/images/<?= $img ?>" class="fixed-img shadow-sm" alt="Event Image">
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

<?php else: ?>
  <div class="container py-5 text-center">
    <h2>Archive Event Not Found</h2>
    <p>This event may have been removed or doesn't exist.</p>
  </div>
<?php endif; ?>

<?php include 'footer.php'; ?>
</body>
</html>
