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
    <main>
      <div class="container">
        <div>
          <h2>EMPLOYEE MANAGEMENT</h2>
        </div>
        <div>
          <div id="jsGrid" class="pb-4"></div>
        </div>
      </div>
    </main>
    <?php
    require "src/view/footer.php"
    ?>
</body>

<script>
    let baseUrl = '<?= BASE_URL ?>';
</script>
<script src="./public/assets/js/main.js"></script>
</html>
