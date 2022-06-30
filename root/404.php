<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tanya's Website</title>
  <link rel="stylesheet" type="text/css" href="public/styles/styles.css" media="all" />
</head>

<body class="home">
  <?php include('includes/header.php'); ?>
  <main class="home-pg-text">
    <div>
      <p>Sorry about that! The page you were looking for, <em>&quot;<?php echo htmlspecialchars($request_uri); ?>&quot;</em>, does not exist.</p>
      <p>Try rerouting to any of the pages linked above.</p>
    </div>
  </main>
  <?php include('includes/footer.php'); ?>
</body>

</html>
