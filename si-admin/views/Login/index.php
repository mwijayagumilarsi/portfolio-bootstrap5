<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <style>
        .login-container {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }
        .fixed-top-left {
        position: fixed;
        top: 20px;
        left: 20px;
        z-index: 1000; /* Assure it's above other content */
      }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-container">
                    <h2 class="text-center mb-4">Selamat Datang</h2>
                    <div id="message"></div>
                    <form id="sample_form">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-box-arrow-in-right"></i> Masuk
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="https://mwijayagumilar.amisbudi.cloud/porto/index.html#" class="btn btn-primary fixed-top-left">Kembali</a>
    <script>
        $(document).ready(function() {
            $('#sample_form').on('submit', function(event) {
                event.preventDefault();
                var formData = {
                    'email': $('#email').val(),
                    'password': $('#password').val()
                }
                $.ajax({
                    url: "https://mwijayagumilar.amisbudi.cloud/porto/si-admin/api/auth/login.php",
                    method: "POST",
                    data: JSON.stringify(formData),
                    success: function(data) {
                        $('#action_button').attr('disabled', false);
                        window.location.href = 'https://mwijayagumilar.amisbudi.cloud/porto/si-admin/views/users/';
                    },
                    error: function(err) {
                        console.log(err);
                        $('#message').html('<div class="alert alert-danger">' + err.responseJSON + '</div>');
                    }
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
