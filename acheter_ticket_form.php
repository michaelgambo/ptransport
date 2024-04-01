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
                        <a class="nav-link" href="../accueil.php">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="acheter_ticket_form.php">Achat ticket</a>
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

    <br><br><br><br>

    <div class="container">
        <form action="acheter_ticket.php" method="post">
            <div class="card">
                <div class="card-header justify-content-center d-flex fw-semibold">ACHETER OU RESERVER UN TICKET</div>

                <div class="card-body">
                    <div class="form-floating mb-3">
                        <input type="text" name="nom_acheteur" class="form-control" id="floatingInput" placeholder="Nom" required>
                        <label for="floatingInput">Nom : </label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="prenom_acheteur" class="form-control" id="floatingInput" placeholder="Prénom(s)" required>
                        <label for="floatingInput">Prénom(s) : </label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="num_cnib_acheteur" class="form-control" id="floatingInput" placeholder="CNIB" required>
                        <label for="floatingInput">N° CNIB : </label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" id="numericInput" name="num_telephone_acheteur" class="form-control" id="floatingInput" placeholder="Téléphone" required>
                        <label for="floatingInput">N° de téléphone : </label>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" name="ville_depart_acheteur" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Selectionner une ville de départ</option>
                            <option value="BANFORA">BANFORA</option>
                            <option value="BITOU">BITOU</option>
                            <option value="BOBO-DIOULASSO">BOBO-DIOULASSO</option>
                            <option value="BOUAKE">BOUAKE</option>
                            <option value="CINKANSE">CINKANSE</option>
                            <option value="DEDOUGOU">DEDOUGOU</option>
                            <option value="DJIBO">DJIBO</option>
                            <option value="DORI">DORI</option>
                            <option value="FADA">FADA</option>
                            <option value="GAOUA">GAOUA</option>
                            <option value="KAMPTI">KAMPTI</option>
                            <option value="KONGOUSSI">KONGOUSSI</option>
                            <option value="KOUDOUGOU">KOUDOUGOU</option>
                            <option value="KOUPELA">KOUPELA</option>
                            <option value="LEO">LEO</option>
                            <option value="NIANGOLOKO">NIANGOLOKO</option>
                            <option value="NIASSAN">NIASSAN</option>
                            <option value="NOUNA">NOUNA</option>
                            <option value="OUAGADOUGOU">OUAGADOUGOU</option>
                            <option value="OUAHIGOUYA">OUAHIGOUYA</option>
                            <option value="SEGUENEGA">SEGUENEGA</option>
                            <option value="TENKODOGO">TENKODOGO</option>
                            <option value="TOUGAN">TOUGAN</option>
                            <option value="YAMOUSSOKRO">YAMOUSSOKRO</option>
                        </select>
                        <label for="floatingSelect">Ville de départ :</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" name="ville_arrive_acheteur" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Selectionner une ville de d'arrivé</option>
                            <option value="BANFORA">BANFORA</option>
                            <option value="BITOU">BITOU</option>
                            <option value="BOBO-DIOULASSO">BOBO-DIOULASSO</option>
                            <option value="BOUAKE">BOUAKE</option>
                            <option value="CINKANSE">CINKANSE</option>
                            <option value="DEDOUGOU">DEDOUGOU</option>
                            <option value="DJIBO">DJIBO</option>
                            <option value="DORI">DORI</option>
                            <option value="FADA">FADA</option>
                            <option value="GAOUA">GAOUA</option>
                            <option value="KAMPTI">KAMPTI</option>
                            <option value="KONGOUSSI">KONGOUSSI</option>
                            <option value="KOUDOUGOU">KOUDOUGOU</option>
                            <option value="KOUPELA">KOUPELA</option>
                            <option value="LEO">LEO</option>
                            <option value="NIANGOLOKO">NIANGOLOKO</option>
                            <option value="NIASSAN">NIASSAN</option>
                            <option value="NOUNA">NOUNA</option>
                            <option value="OUAGADOUGOU">OUAGADOUGOU</option>
                            <option value="OUAHIGOUYA">OUAHIGOUYA</option>
                            <option value="SEGUENEGA">SEGUENEGA</option>
                            <option value="TENKODOGO">TENKODOGO</option>
                            <option value="TOUGAN">TOUGAN</option>
                            <option value="YAMOUSSOKRO">YAMOUSSOKRO</option>
                        </select>
                        <label for="floatingSelect">Ville d'arrivé :</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" name="compagnie_acheteur" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Selectionner une compagnie</option>
                            <option value="1">STAF</option>
                            <option value="2">SBTA</option>
                            <option value="3">TSR</option>
                        </select>
                        <label for="floatingSelect">Compagnie :</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" name="heure_depart_acheteur" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Selectionner une heure de départ</option>
                            <option value="05:30">05:30</option>
                            <option value="06:00">06:00</option>
                            <option value="06:30">06:30</option>
                            <option value="07:00">07:00</option>
                            <option value="08:00">08:00</option>
                            <option value="09:00">09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                        </select>
                        <label for="floatingSelect">Heure de départ :</label>
                    </div>
                </div>

                <div class="card-footer justify-content-center d-flex">
                    <button type="submit" class="btn btn-primary mx-3">Acheter un ticket</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        const numericInput =document.getElementById('numericInput');
        numericInput.addEventListener('input', (event) => {
            const inputValue = event.target.value;
            const numericValue = inputValue.replace(/[^0-9]/g, '');
            event.target.value = numericValue;
        });
    </script>
</body>
</html>