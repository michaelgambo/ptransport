<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-primary">
        
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo
                <img src="" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="accueil.php">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="ticket/acheter_ticket_form.php">Achat ticket</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Réservation ticket</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Découvertes</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="text" id="livre" onkeyup="livre_recherche()" placeholder="Search">
                    <button class="btn btn-primary" type="button" onclick="livre_recherche()">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <br><br><br>

    <div class="container-fluid container-expand-sm">
        <div class="container-fluid bienvenue inline-block col-auto">
            <img src="images/burkinaTransport-1.png" class="img-fluid" alt="image de bienvenue">
        </div>

        <hr>

        <div class="container text-center">
            <div class="card">
                <div class="card-header">
                    NOS SERVICES
                </div>
                <div class="card-body">

                    <div class="row row-cols-3">
                        <div class="col">
                            <div class="card" style="width: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card" style="width: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>                    
                        </div>
                        
                        <div class="col">
                            <div class="card" style="width: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row row-cols-3">
                        <div class="col">
                            <div class="card" style="width: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card" style="width: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>                    
                        </div>
                        
                        <div class="col">
                            <div class="card" style="width: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>