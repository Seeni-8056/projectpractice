<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ideaadd page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/37af1810bd.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid  p-5">
        <div class="row">
            <div class="col-md-6">
                <img src="./images/add.png">
            </div>
            <div class="col-md-6 text-center">
                <h2 class="text-primary my-4">ADD Client</h2>
                <input class="form-control form-control-lg " type="text" placeholder="first name">
                <input class="form-control form-control-lg my-3" type="text" placeholder="last name">
                <input class="form-control form-control-lg my-3" type="text" placeholder="Email id">
                <input class="form-control form-control-lg  my-3" type="text" placeholder="Recommended ideas">
                <input class="form-control form-control-lg" type="text" placeholder="contact number">
                <div class="singlefield mt-2 text-start">
                    <button type="button" onclick="window.location.href = 'Clientpage.php';"
                        class="btn btn-danger">BACK</button>
                    <button type="button" onclick="window.location.href = ' ';"
                        class="btn btn-primary ">SUBMIT</button>
                </div>
            </div>

        </div>

    </div>
</body>

</html>