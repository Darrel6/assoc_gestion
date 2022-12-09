<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>fedSAEI</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>

    <div class=" body">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">

                <div class="row g-0">
                    <div class="col-xl-6 d-none d-xl-block">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                            alt="Sample photo" class="img-fluid"
                            style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height:100vh; width: 100%; filter: grayscale(100%); object-fit: cover; overflow: hidden" />
                    </div>
                    <div class="option col-xl-6 d-flex align-items-center flex-column justify-content-center">
                        <style>
                            @media (min-width: 200px) and (max-width: 319.98px) {
                                .option {
                                  height: 100vh;
                                }
                                .title{
                                  padding: 0
                                }
                                .title h1 {
                                    font-size: 20px;
                                }
                            }

                            @media (min-width: 320px) and (max-width: 564.98px) {
                                .option {
                                  height: 100vh;
                                }
                                .title{
                                  padding: 0
                                }

                                .title h1 {
                                    font-size: 30px;
                                }
                            }
                            @media (min-width: 565px) and (max-width: 764.98px) {
                                .option {
                                  height: 100vh;
                                }
                              
                            }
                            @media (min-width: 765px) and (max-width: 984.98px) {
                                .option {
                                  height: 100vh;
                                }
                              
                            }
                        </style>
                        <img src="{{ asset('pictures/logo.png') }}" alt="" width="80%">
                        <div class="title">
                            <h1>Bientôt Disponible ...</h1>
                        </div>



                    </div>
                </div>

            </div>
        </div>
    </div>




</body>

</html>
