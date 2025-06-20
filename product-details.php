<?php
$products = [
  1 => [
    'name' => 'Handmade Star Bag',
    'desc' => 'Students are creating beautiful decorative stars using simple paper lunch bags as their primary material. This popular craft project involves stacking 7-9 standard lunch bags (or 12-14 smaller bags) together with glue applied along the bottom and center of each bag in an upside-down "T" pattern',
    'price' => 150,
    'image' => 'img19.jpeg'
  ],
  2 => [
    'name' => 'Jute Bag',
    'desc' => 'Students are increasingly engaging in handmade jute bag projects as part of environmental awareness programs and sustainable craft activities. These projects typically involve students decorating plain jute bags or creating bags from scratch using jute fabric.',
    'price' => 300,
    'image' => 'img17.jpeg'
  ],
  3 => [
    'name' => 'Painted Flower Pot',
    'desc' => 'Bright colored flower pot perfect for home garden.',
    'price' => 200,
    'image' => 'img18.jpeg'
  ]
];

$id = $_GET['id'] ?? 1;
$product = $products[$id] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $product['name'] ?? 'Product Not Found' ?></title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    .product-img-lg {
      height: 400px;
      object-fit: cover;
      width: 100%;
      border-radius: 12px;
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<?php if ($product): ?>
<section class="py-5">
  <div class="container">
    <div class="row align-items-start">
      <div class="col-md-6">
        <img src="assets/images/<?= $product['image'] ?>" class="product-img-lg" alt="<?= $product['name'] ?>">
      </div>
      <div class="col-md-6">
        <h2><?= $product['name'] ?></h2>
        <p><?= $product['desc'] ?></p>
        <h4>Price: ₹<?= $product['price'] ?></h4>

        <!-- Cart system later -->
        <form action="add-to-cart.php" method="POST">
          <input type="hidden" name="product_id" value="<?= $id ?>">
          <label>Quantity:</label>
          <input type="number" name="quantity" value="1" min="1" class="form-control mb-3" style="width: 120px;">
          <button type="submit" class="btn btn-success">Add to Cart</button>
        </form>
      </div>
    </div>
  </div>
</section>
<?php else: ?>
  <div class="container py-5 text-center">
    <h2>Product Not Found</h2>
  </div>
<?php endif; ?>

<?php include 'footer.php'; ?>
</body>
</html>
