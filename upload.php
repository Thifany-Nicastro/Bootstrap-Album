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

    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

    <title>Title</title>
</head>

<body class="d-flex flex-column h-100 bg-light">

    <!-- --------------- HEADER ---------------  -->
    <header>
        <?php
            include_once("menus/header.php");
        ?>
    </header>

    <!-- --------------- CONTENT ---------------  -->
    <main role="main">

        <!-- --------------- Jumbotron ---------------  -->
        <div class="collapse" id="jumbotron">
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

        <!-- --------------- Upload ---------------  -->
        <div class="py-5" id="upload">
            <div class="container">

                <!-- --------------- row 1 ---------------  -->
                <div class="row justify-content-md-center">

                    <!-- --------------- row 1 col 1 ---------------  -->
                    <div class="col-lg-8">
                        <div class="card mb-4 shadow-sm">
                            <form id="myform">
                                <div class="card-header">
                                    <div class="form-group">
                                        <label for="inputTitle">Title</label>
                                        <input type="text" class="form-control" id="inputTitle" placeholder="Title"
                                            required>
                                        <div class="invalid-feedback">
                                            Por favor escolha um título.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSubtitle">Subtitle</label>
                                        <input type="text" class="form-control" id="inputSubtitle"
                                            placeholder="Subtitle">
                                    </div>
                                </div>
                                <img src="img/placeholder.png" id="target"
                                    class="rounded mx-auto d-block img-thumbnail card-upload-img mt-4">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="customFile">File</label>
                                        <div class="custom-file" id="customFile">
                                            <input type="file" class="custom-file-input" id="inputFile"
                                                aria-describedby="inputFile" onchange="putImage()" required>
                                            <label class="custom-file-label form-control-file" for="inputFile">Choose
                                                file</label>
                                            <div class="invalid-feedback">
                                                Por favor escolha um arquivo.
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-row">


                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Description</label>
                                        <textarea class="form-control" id="inputDescription" rows="4" maxlength="150"
                                            style="resize:none"></textarea>
                                    </div>
                                    <hr>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="input-group m-0 p-0">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">#</div>
                                                </div>
                                                <input type="text" class="form-control" id="inputTag1" placeholder="Tag"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="input-group m-0 p-0">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">#</div>
                                                </div>
                                                <input type="text" class="form-control" id="inputTag2"
                                                    placeholder="Tag">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="input-group m-0 p-0">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">#</div>
                                                </div>
                                                <input type="text" class="form-control" id="inputTag3"
                                                    placeholder="Tag">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="controle">
                            <a href="#" class="btn btn-danger">Go somewhere</a>
                            <a href="#" class="btn btn-primary float-right">Go somewhere</a>
                        </div>
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
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Cras
                            justo odio<span class="badge badge-primary badge-pill">14</span></a>
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
            /* show file value after file select */
            $('.custom-file-input').on('change', function () {
                var fileName = document.getElementById("inputFile").files[0].name;
                $(this).next('.form-control-file').addClass("selected").html(fileName);
            })

            /* method 2 - change file input to text input after selection
            $('.custom-file-input').on('change',function(){
                var fileName = $(this).val();
                $(this).next('.form-control-file').hide();
                $(this).toggleClass('form-control custom-file-input').attr('type','text').val(fileName);
            })
            */
        });

        function showImage(src, target) {
            var fr = new FileReader();

            fr.onload = function () {
                target.src = fr.result;
            }
            fr.readAsDataURL(src.files[0]);

        }
        function putImage() {
            var src = document.getElementById("inputFile");
            var target = document.getElementById("target");
            showImage(src, target);
        }
    </script>
</body>

</html>
