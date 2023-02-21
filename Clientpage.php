<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/37af1810bd.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
                <img src="./images/3.png" alt="img">
                <h3>USERNAME</h3>
                <p>profile</p>
            </div>
            <ul>
                <li><a href="Clientpage.php">
                        <span class="icon"><i class="fa-solid fa-house"></i></span>
                        <span class="item">Client</span>
                    </a></li>
                <li><a href="idea.php">
                        <span class="icon"><i class="fa-solid fa-lightbulb"></i></span>
                        <span class="item">Ideas</span>
                    </a></li>
                <li><a href="Product.php">
                        <span class="icon"><i class="fa-solid fa-address-card"></i></span>
                        <span class="item">Products</span>
                    </a></li>
                <li><a href="index.php">
                        <span class="icon"><i class="fa-solid fa-right-to-bracket"></i></span>
                        <span class="item">Logout</span>
                    </a></li>
            </ul>
        </div>
        <div class="section">
            <div class="topnavbar">
                <div class="hamburger">
                    <a href="#"><i class="fa-sharp fa-solid fa-bars text-white"></i></a>
                </div>
                <div class="container-fluid ">
                    <div class="row">
                        <div class="text-end p-1">
                            <h5>register@gmail.com</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contentbutton text-end p-3">
            <button type="button" onclick="window.location.href = 'Cleintadd.php';" class="btn btn-primary">ADD</button>
        </div>
        <div class="container p-5">
            <h3 class="text-center text-primary">OUR CLIENTS</h3>
            <div class="containercard mx-5 p-5">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">SRINI</h5>
                                <p class="card-text">28</p>
                                <a href="#" class="btn btn-primary">View profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">SRIRAM</h5>
                                <p class="card-text">26</p>
                                <a href="#" class="btn btn-primary">View profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">MANU</h5>
                                <p class="card-text">26</p>
                                <a href="#" class="btn btn-primary">View profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">SRINI</h5>
                                <p class="card-text">28</p>
                                <a href="#" class="btn btn-primary">View profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">SRIRAM</h5>
                                <p class="card-text">26</p>
                                <a href="#" class="btn btn-primary">View profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">MANU</h5>
                                <p class="card-text">26</p>
                                <a href="#" class="btn btn-primary">View profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">SRINI</h5>
                                <p class="card-text">28</p>
                                <a href="#" class="btn btn-primary">View profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">SRIRAM</h5>
                                <p class="card-text">26</p>
                                <a href="#" class="btn btn-primary">View profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">MANU</h5>
                                <p class="card-text">26</p>
                                <a href="#" class="btn btn-primary">View profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var srini = document.querySelector(".hamburger");
            srini.addEventListener("click", function () {
                document.querySelector("body").classList.toggle("active")
            })
        </script>
</body>

</html>