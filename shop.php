<?php
// Sample products array (MySQL se aayega baad mein)
$products = [
  [
    'id' => 1,
    'name' => 'Handmade Star Bag',
    'price' => 150,
    'image' => 'img19.jpeg',
    'short_desc' => 'Decorative  hand-painted Bag by students.'
  ],
  [
    'id' => 2,
    'name' => 'Jute Bag',
    'price' => 300,
    'image' => 'img17.jpeg',
    'short_desc' => 'Eco-friendly jute bag with beautiful design.'
  ],
  [
    'id' => 3,
    'name' => 'Painted Flower Bag',
    'price' => 200,
    'image' => 'img18.jpeg',
    'short_desc' => 'Painted Bag by Students.'
  ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sulbha Trust Shop</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    .product-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      transition: 0.3s;
      height: 100%;
    }
    .product-card:hover {
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .product-img {
      height: 220px;
      object-fit: cover;
      width: 100%;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Shop - Made with Love by Our Students</h2>
    <div class="row g-4">
      <?php foreach ($products as $product): ?>
        <div class="col-md-4">
          <div class="product-card">
            <img src="assets/images/<?= $product['image'] ?>" class="product-img" alt="<?= $product['name'] ?>">
            <div class="p-3">
              <h5><?= $product['name'] ?></h5>
              <p class="text-muted"><?= $product['short_desc'] ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <strong>₹<?= $product['price'] ?></strong>
                <a href="product-details.php?id=<?= $product['id'] ?>" class="btn btn-sm btn-outline-primary">View</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>
