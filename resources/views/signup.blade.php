<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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

    <div class="d-md-flex d-block align-items-center justify-content-around w-full">
        <form action="{{ route('tourist.handleLogin') }}" class="w-full" method="post">
            @csrf <!-- Add CSRF token for security -->

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrOKT_nulU976YCS6mzgDbWCi6zp09ZC65rA&s" alt="" class="mx-auto">

            <!-- Email Input -->
            <div class="my-3 w-full">
                <input
                    type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    placeholder="Enter Email"
                    name="email"
                    value="{{ old('email') }}">
                <!-- Error Message for Email -->
                @error('email')
                <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password Input -->
            <div class="mb-2 w-full">
                <input
                    type="password"
                    class="form-control @error('password') is-invalid @enderror"
                    placeholder="Enter Password"
                    name="password">
                <!-- Error Message for Password -->
                @error('password')
                <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Forgot password link -->
            <p class="text-end">
                <a href="">Forgot password?</a>
            </p>

            <!-- Submit Button -->
            <p class="text-center">
                <button type="submit" class="btn btn-sm btn-border-1 btn-dark">Log in</button>
            </p>
        </form>


        <div class="d-none d-md-block col-6[">
            <img src="https://media.karousell.com/media/photos/products/2024/6/28/lot_for_sale_in_calintaan_occi_1719555349_dac2b451_progressive" alt="" class="img-fluid" style="object-fit: cover;">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>