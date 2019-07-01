<!doctype html>
<html lang="pt-br" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

    <title>Home</title>
</head>

<body class="d-flex flex-column h-100 bg-light">

    <!-- --------------- HEADER ---------------  -->
    <?php
        include_once("menus/header.php");
    ?>

    <!-- --------------- CONTENT ---------------  -->
    <main role="main">

        <!-- --------------- Jumbotron ---------------  -->
        <div class="collapse show" id="jumbotron">
            <div class="jumbotron text-center py-5">
                <div class="container">
                    <h1 class="jumbotron-heading">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"
                            class="mr-2" viewBox="0 0 24 24" focusable="false">
                            <path
                                d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                            <circle cx="12" cy="13" r="4" /></svg>
                        Album example
                    </h1>
                    <p class="lead text-muted">Something short and leading about the collection below—its contents, the
                        creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it
                        entirely. <i class="fas fa-heart"></i></p>
                </div>
            </div>
        </div>

        <!-- --------------- Album ---------------  -->
        <div class="pt-5" id="album">
            <div class="container">

                <!-- --------------- row 1 ---------------  -->
                <div class="row">

                    <!-- --------------- row 1 card 1 ---------------  -->
                    <div class="col-lg teste">
                        <div class="card mb-4 shadow-sm">
                            <img src="./img/tulips.jpg" class="card-square-img">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="card-link">Card title</a><span
                                        class="badge badge-primary float-right">New</span></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <hr>
                                <p style="text-align: center;" class="p-0 m-0">
                                    <a href="#" class="card-link">#Tag1</a>
                                    <a href="#" class="card-link">#Tag2</a>
                                    <a href="#" class="card-link">#Tag3</a>
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                <small>Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>

                    <!-- --------------- row 1 card 2 ---------------  -->
                    <div class="col-lg teste">
                        <div class="card mb-4 shadow-sm">
                            <img src="img/tulips.jpg" class="card-square-img">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="card-link">Card title</a></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <hr>
                                <p style="text-align: center;" class="p-0 m-0">
                                    <a href="#" class="card-link">#Tag1</a>
                                    <a href="#" class="card-link">#Tag2</a>
                                    <a href="#" class="card-link">#Tag3</a>
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                <small>Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>

                    <!-- --------------- row 1 card 3 ---------------  -->
                    <div class="col-lg teste">
                        <div class="card mb-4 shadow-sm">
                            <img src="img/tulips.jpg" class="card-square-img">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="card-link">Card title</a></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <hr>
                                <p style="text-align: center;" class="p-0 m-0">
                                    <a href="#" class="card-link">#Tag1</a>
                                    <a href="#" class="card-link">#Tag2</a>
                                    <a href="#" class="card-link">#Tag3</a>
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                <small>Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- --------------- row 2 ---------------  -->
                <div class="row">

                    <!-- --------------- row 2 card 1 ---------------  -->
                    <div class="col-lg teste">
                        <div class="card mb-4 shadow-sm">
                            <img src="img/tulips.jpg" class="card-square-img">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="card-link">Card title</a></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <hr>
                                <p style="text-align: center;" class="p-0 m-0">
                                    <a href="#" class="card-link">#Tag1</a>
                                    <a href="#" class="card-link">#Tag2</a>
                                    <a href="#" class="card-link">#Tag3</a>
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                <small>Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>

                    <!-- --------------- row 2 card 2 ---------------  -->
                    <div class="col-lg teste">
                        <div class="card mb-4 shadow-sm">
                            <img src="img/tulips.jpg" class="card-square-img">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="card-link">Card title</a></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <hr>
                                <p style="text-align: center;" class="p-0 m-0">
                                    <a href="#" class="card-link">#Tag1</a>
                                    <a href="#" class="card-link">#Tag2</a>
                                    <a href="#" class="card-link">#Tag3</a>
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                <small>Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>

                    <!-- --------------- row 2 card 3 ---------------  -->
                    <div class="col-lg teste">
                        <div class="card mb-4 shadow-sm">
                            <img src="img/tulips.jpg" class="card-square-img">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="card-link">Card title</a></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <hr>
                                <p style="text-align: center;" class="p-0 m-0">
                                    <a href="#" class="card-link">#Tag1</a>
                                    <a href="#" class="card-link">#Tag2</a>
                                    <a href="#" class="card-link">#Tag3</a>
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                <small>Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- --------------- Pagination ---------------  -->
        <div class="pb-2" id="pagination">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- --------------- FOOTER ---------------  -->
    <?php
        include_once("menus/footer.php");
    ?>

    <!-- --------------- MODAL ---------------  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Cras justo odio<span class="badge badge-primary badge-pill">14</span></a>
                        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                        <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Cras justo odio
                            <span class="badge badge-primary badge-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Dapibus ac facilisis in
                            <span class="badge badge-primary badge-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Morbi leo risus
                            <span class="badge badge-primary badge-pill">1</span>
                        </li>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {

        });

        function round() {
            $(".teste").addClass("card-round text-center");
            $(".teste").html("<img src='img/tulips.jpg' class='card-round-img rounded-circle mb-3'>" +
                "<div class='card mb-4 shadow-sm'>" +
                "<div class='card-body'>" +
                "<h5 class='card-title'><a href='#' class='card-link'>Card title</a></h5>" +
                "<h6 class='card-subtitle mb-2 text-muted'>Card subtitle</h6>" +
                "<p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>" +
                "<hr>" +
                "<p style='text-align: center;' class='p-0 m-0'>" +
                "<a href='#' class='card-link'> #Tag1 </a>" +
                "<a href='#' class='card-link'> #Tag2 </a>" +
                "<a href='#' class='card-link'> #Tag3 </a>" +
                "</p>" +
                "</div>" +
                "<div class='card-footer text-muted'>" +
                "<small>Last updated 3 mins ago</small>" +
                "</div>" +
                "</div>");
        }

        function square() {
            $(".teste").removeClass("card-round text-center");
            $(".teste").html("<div class='card mb-4 shadow-sm'>" +
                "<img src='img/tulips.jpg' class='card-square-img'>" +
                "<div class='card-body'>" +
                "<h5 class='card-title'><a href='#' class='card-link'>Card title</a></h5>" +
                "<h6 class='card-subtitle mb-2 text-muted'>Card subtitle</h6>" +
                "<p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>" +
                "<hr>" +
                "<p style='text-align: center;' class='p-0 m-0'>" +
                "<a href='#' class='card-link'> #Tag1 </a>" +
                "<a href='#' class='card-link'> #Tag2 </a>" +
                "<a href='#' class='card-link'> #Tag3 </a>" +
                "</p>" +
                "</div>" +
                "<div class='card-footer text-muted'>" +
                "<small>Last updated 3 mins ago</small>" +
                "</div>" +
                "</div>");
        }
    </script>
</body>

</html>