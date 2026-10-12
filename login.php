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
  <title>Log In | Northstar Portal</title>
</head>

<body>

  <!-- Authentication Page Start -->
  <main class="auth-page">
    <section class="auth-container">

      <!-- Brand Start -->
      <a class="brand-container" href="login.php">
        <div class="brand-logo">
          <span class="brand-logo-text">N</span>
        </div>
        <p class="brand-name">Northstar Portal</p>
      </a>
      <!-- Brand End -->

      <!-- Success Message Start -->
      <div class="form-message success-message">
        <p>Account created successfully. Please log in.</p>
      </div>
      <!-- Success Message End -->

      <!-- Authentication Heading Start -->
      <div class="auth-heading-container">
        <h1 class="auth-heading">Welcome back</h1>
        <p class="auth-description">Sign in to access your dashboard.</p>
      </div>
      <!-- Authentication Heading End -->

      <!-- Login Form Start -->
      <div class="auth-form-container">
        <form class="auth-form" action="login.php" method="POST">

          <div class="form-group">
            <label class="form-label" for="email">Email address</label>
            <input class="form-input" type="email" id="email" name="email" placeholder="alex@example.com">
          </div>

          <div class="form-group">
            <label class="form-label" for="password">Password</label>
            <input class="form-input" type="password" id="password" name="password" placeholder="Enter your password">
          </div>

          <button class="primary-button auth-submit-button" type="submit">
            Log In
          </button>

        </form>
      </div>
      <!-- Login Form End -->

      <!-- Authentication Footer Start -->
      <footer class="auth-footer-container">
        <p class="auth-footer-text">
          New here?
          <a class="auth-link" href="register.php">Create an account</a>
        </p>
      </footer>
      <!-- Authentication Footer End -->

    </section>
  </main>
  <!-- Authentication Page End -->

</body>

</html>