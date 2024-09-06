<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Custom Styles */
        .bg-image {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDhLj7aMekqp1K3SJ1_QrlmDAcAJqyWnoMkQ&s');
            /* Replace with the image URL */
            background-size: cover;
            background-position: center;
            height: 100vh;
            position: relative;
     
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content {
            text-align: center;
        }

        .signup-form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }

        .signup-form input {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary px-3 py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrOKT_nulU976YCS6mzgDbWCi6zp09ZC65rA&s" alt="Malpalon Logo" width="40px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <div class="d-flex gap-3 align-items-center justify-content-end">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>

                    <div>
                        <select name="language" id="language" class="form-select">
                            <option value="En-US" selected>English (united States)</option>
                        </select>
                    </div>

                    <a href="{{ route('tourist.login') }}" class="btn btn-border btn-white btn-sm py-2 border-2 border-dark">Log in</a>
                    <a href="{{ route('tourist.signup') }}" class="btn btn-dark btn-sm py-2">Sign up</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-image">
        <div class="container text-center content text-white" id="main">
            <h1 class="display-4">Travel with us</h1>
            <p class="fs-3 pr-5">It sounds like you're inviting people to visit a small barangay named Malpalon!
                Could you share more about it?</p>
            <p class="fs-3">I'd love to help you craft a travel message or details to promote it.</p>
            <button class="btn btn-success btn-lg">Sign up</button>
        </div>

        <!-- Signup Form -->
        <div class="position-absolute" style="top: 50%; right: 50px; transform: translateY(-50%);">
            <div class="signup-form">
                <h4>Sign up for free</h4>
                <p>Full access to any of our products</p>
                <form action="/signup" method="POST">
                    @csrf
                    <input type="email" class="form-control" placeholder="Enter your email address" required>
                    <button type="submit" class="btn btn-primary btn-block">Continue</button>
                    <div class="text-center mt-3">
                        <small>OR</small>
                    </div>
                    <button class="btn btn-light btn-block">
                        <img src="https://img.icons8.com/color/16/000000/google-logo.png" alt="Google"> Continue with Google
                    </button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>