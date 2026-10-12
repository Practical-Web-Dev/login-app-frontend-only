<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Dashboard | Northstar Portal</title>
</head>

<body>

  <!-- Dashboard Header Start -->
  <header class="dashboard-header">
    <div class="dashboard-header-container">

      <!-- Brand Start -->
      <a class="brand-container" href="dashboard.php">
        <div class="brand-logo">
          <span class="brand-logo-text">N</span>
        </div>
        <p class="brand-name">Northstar Portal</p>
      </a>
      <!-- Brand End -->

      <!-- Dashboard Navigation Start -->
      <nav class="dashboard-nav">
        <a class="dashboard-nav-link" href="dashboard.php">Dashboard</a>

        <form class="logout-form" action="logout.php" method="POST">
          <button class="logout-button" type="submit">
            Log Out
          </button>
        </form>
      </nav>
      <!-- Dashboard Navigation End -->

    </div>
  </header>
  <!-- Dashboard Header End -->

  <!-- Dashboard Page Start -->
  <main class="dashboard-page">
    <div class="dashboard-container">

      <!-- Dashboard Heading Start -->
      <section class="dashboard-heading-container">
        <h1 class="dashboard-heading">Welcome back, Alex!</h1>
        <p class="dashboard-description">
          Your account is active and this page is protected by a PHP session.
        </p>
      </section>
      <!-- Dashboard Heading End -->

      <!-- Dashboard Cards Start -->
      <div class="dashboard-grid-container">

        <!-- Account Details Card Start -->
        <section class="dashboard-card account-card">
          <h2 class="dashboard-card-heading">Account Details</h2>

          <div class="account-details-container">

            <div class="account-detail-row">
              <p class="account-detail-label">Name</p>
              <p class="account-detail-value">Alex Morgan</p>
            </div>

            <div class="account-detail-row">
              <p class="account-detail-label">Email</p>
              <p class="account-detail-value">alex@example.com</p>
            </div>

            <div class="account-detail-row">
              <p class="account-detail-label">Member since</p>
              <p class="account-detail-value">October 2026</p>
            </div>

          </div>
        </section>
        <!-- Account Details Card End -->

        <!-- Security Status Card Start -->
        <section class="dashboard-card security-card">
          <h2 class="dashboard-card-heading">Security Status</h2>

          <div class="security-status-container">
            <span class="security-status-icon">✓</span>
            <p class="security-status-text">Session active</p>
          </div>

          <p class="security-description">
            Only authenticated users can view this page.
          </p>
        </section>
        <!-- Security Status Card End -->

      </div>
      <!-- Dashboard Cards End -->

    </div>
  </main>
  <!-- Dashboard Page End -->

</body>

</html>