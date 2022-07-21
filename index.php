<!DOCTYPE html>

<html>



<head>

    <title>EasyCarbon - Calculate Carbonfoot</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/meuEstilo.css" rel="stylesheet">

    <style>
        body {

            background-color: rgba(0, 50, 34, 0.2);

        }
    </style>

</head>



<body class="body-image">

    <nav class="container-fluid sticky-top navbar navbar-expand-lg navbar-dark" style="background-color:rgba(1,46,62 ,1 ); ">

        <div class="container-fluid">

            <span class="navbar-brand"><i class="fas fa-leaf"></i> EasyCarbon <i class="fas fa-leaf"></i></span>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li id="pageCalculadora" class="nav-item">

                        <a class="nav-link pointer-cursor">Calcular Pegadas</a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <div id="mainContentPage" name="content"></div>



    <footer class="footer text-light p-3" style="background-color:rgba(1,46,62 ,1 )">

        <div class="row my-5 justify-content-center py-5">

            <div class="col-11">

                <div class="row ">

                    <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-1 mx-auto ">

                        <h3 class="text-muted mb-md-0 mb-5 bold-text"><i class="fas fa-leaf"></i> EasyCarbon <i class="fas fa-leaf"></i></h3>

                    </div>

                    <div class="col-xl-2 col-md-4 col-sm-4 col-12">

                        <h6 class="mb-3 mb-lg-4 text-muted bold-text "><b>MENU</b></h6>

                        <ul class="list-unstyled">

                            <li>Calculadora</li>

                        </ul>

                    </div>

                    <div class="col-xl-2 col-md-4 col-sm-4 col-12">

                        <h6 class="mb-3 mb-lg-4 text-muted  bold-text mt-sm-0 mt-5"><b>ENDEREÇO</b></h6>

                        <p class="mb-1">SÃO PAULO, BRASIL</p>



                    </div>

                </div>

                <div class="row ">

                    <div class="col-xl-8 col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">

                        <p class="social text-muted mb-0 pb-0 bold-text">
                            <span class="mx-2">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </span>
                            <span class="mx-2">
                                <ion-icon name="logo-whatsapp"></ion-icon>
                            </span>
                            <span class="mx-2">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </span>
                            <span class="mx-2">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </span>
                        </p><small class="rights"><span>&#174;</span>EasyCarbon - All Rights Reserved.</small>

                    </div>

                    <div class="col-xl-3 col-md-4 col-sm-4 col-auto order-1 align-self-end ">

                        <h6 class="mt-55 mt-2 text-muted bold-text"><b>MATEUS CAMACHO</b></h6><small> <span><i class="fa fa-envelope" aria-hidden="true"></i> mateus.camaccho@gmail.com</small></span>

                        <br><small><i class="fab fa-whatsapp"></i> +55 11 99999-9999</small>

                    </div>

                </div>

            </div>

        </div>

    </footer>

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <script>
        $(document).ready(function() {

            $("#mainContentPage").load("pageCalculadora.html");

            $("#pageCalculadora").click(function() {

                $("#mainContentPage").load("pageCalculadora.html");

            })

            return false;

        });
    </script>

</body>



</html>