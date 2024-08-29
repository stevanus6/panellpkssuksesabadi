<?php
// login.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPKS SUKSES ABADI JAYA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css">
    <style>
        body {
            background-color: #f7f7f7;
        }
        .vh-100 {
            height: 100vh;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-control {
            border-radius: 10px;
            padding: 15px;
        }
        .form-label {
            color: #495057;
        }
        h1 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    <section class="vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <!-- Gambar lokal dari folder -->
                    <img src="img/undraw_posting_photo.svg" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form>
                        <h1><b>LPKS SUKSES ABADI</b></h1>
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" id="form1Example13" class="form-control form-control-lg" />
                            <label class="form-label" for="form1Example13">Username</label>
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="form1Example23" class="form-control form-control-lg" />
                            <label class="form-label" for="form1Example23">Password</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
</html>
s