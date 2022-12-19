<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css">
  <link rel="stylesheet" href="/assets/css/login.css" />
  <title>ShareFood</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="/login" class="sign-in-form" method="post">
          @csrf
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror"
              name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input placeholder="Password" id="password" type="password" method="post"
              class="form-control @error('password') is-invalid @enderror" name="password" required
              autocomplete="current-password">
          </div>

          <button type="submit" class="btn btn-solid"> {{ __('Login') }}
          </button>
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fa fa-instagram"></i>
            </a>
          </div>
        </form>
        <form action="{{ route('store_register') }}" class="sign-up-form" method="post">
          @csrf
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input placeholder="Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror"
              name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror"
              name="email" value="{{ old('email') }}" required autocomplete="email">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input placeholder="Password" id="password" type="password"
              class="form-control @error('password') is-invalid @enderror" name="password" required
              autocomplete="new-password">
          </div>
          <input type="submit" class="btn" value="Sign up" />
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fa fa-instagram"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h1>ShareFood</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            ex ratione. Aliquid!
          </p>
          <button type="submit" class="btn transparent" id="sign-up-btn" style="font-family:'Montserrat'">
            {{ __('Register') }}
          </button>
        </div>
        <img src="assets\images\5391079-removebg-preview.png" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h1>ShareFood</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button type="submit" class="btn transparent" id="sign-in-btn" style="font-family:'Montserrat'">
            {{ __('Login') }}
          </button>

        </div>
        <img src="assets\images\5391079-removebg-preview.png" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="/assets/js/app.js"></script>
</body>

</html>