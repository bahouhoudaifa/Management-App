<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>    
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function(){
            var ps = new PerfectScrollbar(this);
            $(window).on('resize', function(){
                ps.update();
            })
        });
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-23581568-13');
    </script>
    <title>Saisie Absences</title>
</head>

<body>
    <x-bar>
        <div>
            <br>
            <h1 class="text-center" style="font: small-caps bold 24px/1 sans-serif; font-size: 50px" ><u>Saisie Absences</u></h1>
            <div class="limiter">
                <div class="container-table100">
                    <div class="wrap-table100">
                        <div class="table100 ver5 m-b-110">
                            <div class="table100-head">
                                <table>
                                    <thead>
                                        <tr class="row100 head">
                                            <th class="cell100 column1" style="padding-left: 100px" >CEF</th>
                                            <th class="cell100 column2" style="padding-left: 100px" >Nom</th>
                                            <th class="cell100 column3" style="padding-left: 70px" >Prenom</th>
                                            <th class="cell100 column4" style="padding-left: 0px" >
                                                <div class="form-group">
                                                    <label for="formGroupe">Groupe</label>
                                                <form id="formGroupe">
                                                    <select name="groupe" class="form-select" onchange="this.form.submit()">
                                                        <option></option>
                                                        <option value="AA101">AA101</option>
                                                        <option value="AA102">AA102</option>
                                                        <option value="AA103">AA103</option>
                                                        <option value="AA104">AA104</option>
                                                        <option value="AA105">AA105</option>
                                                        <option value="AA106">AA106</option>
                                                    </select>
                                                </form>
                                                </div>
                                            </th>
                                            <th class="cell100 column5">Absence</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="table100-body js-pscroll">
                                <table>
                                    <tbody>
                                        @foreach ($stagiaires as $stagiaire)
                                            <tr class="row100 body">
                                                <td class="cell100 column1" style="padding-left: 60px" >{{ $stagiaire->CEF }}</td>
                                                <td class="cell100 column2" style="padding-left: 90px" >{{ $stagiaire->Nom }}</td>
                                                <td class="cell100 column3" style="padding-left: 90px" >{{ $stagiaire->Prenom }}</td>
                                                <td class="cell100 column4" style="padding-left: 65px" >{{ $stagiaire->Groupe }}</td>
                                                <td class="cell100 column5" style="padding-left: 40px;">
                                                    <a style="text-decoration: none ;" href="{{ route('SaisieAbsence', $stagiaire->idStag) }}" class="link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" color="black" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-bar>
</body>
</html>