<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <title>ACCUEIL</title>

    <style>
        .f1{
            background: url('assets/img/OFPPT.jpg') ;
            background-position: center;
            background-size: cover;
            width: 100%;
            height: 100%;
        }
        .f2{
            background: linear-gradient(
                to right, 
                rgba(0 ,0 ,0 ,0.80) 0%,
                rgba(0 ,0 ,0 ,0) 100%
            );
            width: 100%;
            height: 100%;
            position: relative;
            z-index: 1;
        }
        .f2 .box {
            color: white;
            padding: 250px 0px 0px 70px;
            display: block;
        }
        .f2 .box h1{
            padding-bottom: 20px;
        }
        .f2 .box p{
            width: 50%;
            padding-left: 20px;
        }

    </style>
    
</head>
<body>
    <x-bar>
        <div class="f1" >
            <div class="f2">
                <div class="box">
                    <h1 style="font-style: italic;font-size: 50px ">BIENVENUE</h1>
                    <br>
                    <p style="font-family: cursive;font-size: 20px">Ce site a été développé avec Laravel par "HOUDAIFA BAHOU" et "MOUSAAB NAJAH". Il gère la situation des stagiaires dans un centre de formation.</p>
                </div>
            </div>
        </div>
    </x-bar>
</body>
</html>