<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./public/assets/css/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- <link rel="stylesheet" href="../assets/css/login.css"> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <!-- ------------- FOR JS-GRID ------------- -->
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
  <script        type="text/javascript"   src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
    </style>
    <title>EMPLOYEE MANAGEMENT</title>
</head>

<body>
    <div class="d-flex login-container align-items-center justify-content-center">
        <div class="login-form p-5 rounded-5 d-flex flex-column justify-content-between max-width-450 bg-light">
            <div class="h-25 text-center">
                <h2>Welcome</h2>
                <p>Log in to start</p>
            </div>
            <form class="d-flex flex-column align-items-center" id="formLogin" action="<?= BASE_URL ?>login/login" method="post">
                <div class="mb-3 w-100">
                    <input type="email" class="form-control rounded-4 py-2 border-0" placeholder="Your Email *" value="" name="email" required />
                </div>
                <div class="mb-3 w-100">
                    <input type="password" class="form-control rounded-4 py-2 border-0" placeholder="Your Password *" name="password" value="" required />
                </div>
                <div class="my-3 w-100 text-center">
                    <input type="submit" class="btn btnSubmit rounded-4 py-2 border-0" value="Sign In" />
                </div>
            </form>
            <div class="text-danger text-center">
            </div>
        </div>
    </div>
</body>

</html>