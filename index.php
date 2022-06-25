<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="Forms/js/dark-mode-switch.min.js" defer></script>
    <link rel="icon" type="image/x-icon" href="favicon/favicon.ico">
    <link rel="stylesheet" href="Forms/style.css" />
    
</head>
<body class="p-3 mb-4 my-4">
    <div class="d-flex flex-column align-items-center justify-content-center mb-4" style="height: 350px">
        <img src="favicon/android-chrome-512x512.png" class="img-fluid mt-5" alt="logo">
        <h2>The best place to build, test, and discover front-end code.</h2>
        <p>This is a social development environment for front-end designers and developers.<br /> Build and deploy a website, show off your work, build test cases to learn and debug, and find inspiration.</p>
        <a class="btn btn-primary my-3" href="start/code/code.php" role="button">Start Coding !</a>
        <a class="btn btn-outline-secondary" href="start/index.php" role="button">Login / Register</a>
        <div class="custom-control custom-switch my-3">
            <input type="checkbox" class="custom-control-input" id="darkSwitch">
            <label class="custom-control-label fs-6 mb-4" for="darkSwitch">Dark Mode</label>
        </div>
    </div>
    
</body>
</html>