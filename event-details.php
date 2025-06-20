<?php
// Sample events data (normally from DB, abhi PHP array se kar rahe hain)
$events = [
  1 => [
    'title' => 'Digital Literacy Workshop',
    'date' => '25 June 2025',
    'time' => '10:00 AM - 4:00 PM',
    'location' => 'Community Center, Delhi',
    'participants' => 50,
    'image' => 'assets\images\event1.jpg',
    'description' => 'Empowering community members with essential digital skills for the modern world.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident',
    'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'points' => [
      'Using smartphones and basic apps',
      'Email, Google search, and social media basics',
      'Government digital services like DigiLocker, Aadhar, etc.',
      'Cyber safety and online scams awareness',
    ]
  ],
  2 => [
    'title' => 'Craft Making',
    'date' => '02 July 2025',
    'time' => '6:00 AM - 12:00 PM',
    'location' => 'India Gate, New Delhi',
    'participants' => 80,
    'image' => 'assets\images\event2.jpeg',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ',
    
    'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'points' => [
      'Learn handcraft basics',
      'Support artisan communities',
      'Make and take your own souvenir',
    ]
  ],
  3 => [
    'title' => 'Health Awareness Camp',
    'date' => '15 July 2025',
    'time' => '9:00 AM - 5:00 PM',
    'location' => 'Rural Health Center',
    'participants' => 120,
    'image' => 'assets\images\event3.jpeg',
    'description' => 'Free health checkups and awareness sessions on preventive healthcare.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    'about' => 'With top doctors and awareness volunteers Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'points' => [
      'Free sugar and BP check',
      'Diet and fitness consultations',
      'Health education leaflets',
    ]
  ],
];

// Get ID from URL
$eventId = $_GET['id'] ?? 1;
$event = $events[$eventId] ?? null;
?>

<head>
  <meta charset="UTF-8">
  <title><?= $event['title'] ?? 'Event Not Found' ?></title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<?php $page = 'event';include 'header.php';?>

<?php if ($event): ?>
<section class="py-5" style="background-color: #f9f9f9;">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <img src="<?= $event['image'] ?>" alt="Event Image" class="img-fluid rounded">
      </div>
      <div class="col-lg-5">
        <h2><?= $event['title'] ?></h2>
        <p class="text-muted"><?= $event['description'] ?></p>

        <ul class="list-unstyled">
          <li><strong>Date:</strong> <?= $event['date'] ?></li>
          <li><strong>Time:</strong> <?= $event['time'] ?></li>
          <li><strong>Location:</strong> <?= $event['location'] ?></li>
          <li><strong>Participants:</strong> <?= $event['participants'] ?> registered</li>
        </ul>

        <!-- <a href="#" class="btn btn-danger">Register Now</a> -->
      </div>
    </div>

    <div class="mt-5">
      <h4>About the Event</h4>
      <p><?= $event['about'] ?></p>

      <h5 class="mt-4">What You Will Learn:</h5>
      <ul>
        <?php foreach ($event['points'] as $point): ?>
          <li><?= $point ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
<?php else: ?>
  <div class="container py-5 text-center">
    <h2>Event Not Found</h2>
    <p>The event you're looking for doesn't exist.</p>
  </div>
<?php endif; ?>

<?php include 'footer.php'; ?>
</body>
</html>
