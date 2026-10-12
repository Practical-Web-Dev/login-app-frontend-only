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

  <title>Create Account | Northstar Portal</title>
</head>

<body>

  <!-- Authentication Page Start -->
  <main class="auth-page">
    <section class="auth-container">

      <!-- Brand Start -->
      <a class="brand-container" href="register.php">
        <div class="brand-logo">
          <span class="brand-logo-text">N</span>
        </div>

        <p class="brand-name">Northstar Portal</p>
      </a>
      <!-- Brand End -->

      <!-- Authentication Heading Start -->
      <div class="auth-heading-container">
        <h1 class="auth-heading">Create your account</h1>

        <p class="auth-description">
          Join the private member area.
        </p>
      </div>
      <!-- Authentication Heading End -->

      <!-- Error Message Start -->
        <div class="form-message error-message">
          <ul class="error-list">

              <li class="error-list-item">
              </li>

          </ul>
        </div>
      <!-- Error Message End -->

      <!-- Registration Form Start -->
      <div class="auth-form-container">
        <form class="auth-form" action="register.php" method="POST">

          <div class="form-group">
            <label class="form-label" for="full-name">
              Full name
            </label>

            <input
              class="form-input"
              type="text"
              id="full-name"
              name="fullName"
              placeholder="Alex Morgan">
          </div>

          <div class="form-group">
            <label class="form-label" for="email">
              Email address
            </label>

            <input
              class="form-input"
              type="email"
              id="email"
              name="email"
              placeholder="alex@example.com">
          </div>

          <div class="form-group">
            <label class="form-label" for="password">
              Password
            </label>

            <input
              class="form-input"
              type="password"
              id="password"
              name="password"
              placeholder="Enter your password">
          </div>

          <div class="form-group">
            <label class="form-label" for="confirm-password">
              Confirm password
            </label>

            <input
              class="form-input"
              type="password"
              id="confirm-password"
              name="confirmPassword"
              placeholder="Enter your password again">
          </div>

          <button class="primary-button auth-submit-button" type="submit">
            Create Account
          </button>

        </form>
      </div>
      <!-- Registration Form End -->

      <!-- Authentication Footer Start -->
      <footer class="auth-footer-container">
        <p class="auth-footer-text">
          Already have an account?
          <a class="auth-link" href="login.php">Log in</a>
        </p>
      </footer>
      <!-- Authentication Footer End -->

    </section>
  </main>
  <!-- Authentication Page End -->

</body>

</html>