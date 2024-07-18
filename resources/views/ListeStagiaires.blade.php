<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <link rel="stylesheet" href="{{ asset('css/listestag.css') }}"/>
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
    <title>Liste des Stagiaires</title>
</head>

<body>
    <x-bar>
        <div>
            <br>
            <h1 class="text-center" style="font: small-caps bold 24px/1 sans-serif; font-size: 50px" ><u>Liste Des Stagiaires</u></h1>
            <div class="limiter">
                <div class="container-table100">
                    <div class="wrap-table100">
                        <div class="table100 ver5 m-b-110">
                            <div class="table100-head">
                                <table>
                                    <thead>
                                        <tr class="row100 head">
                                            <th class="cell100 column1" style="padding-left: 55px" >CEF</th>
                                            <th class="cell100 column2" style="padding-left: 130px" >Nom</th>
                                            <th class="cell100 column3" style="padding-left: 100px" >Prenom</th>
                                            <th class="cell100 column4" style="padding-left: 53px" >Etudiant_Actif</th>
                                            <th class="cell100 column5" style="padding-left: 165px" >Filiere</th>
                                            <th class="cell100 column6" style="padding-right: 50px" >
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
                                            <th class="cell100 column7" style="padding-right: 30px" >Details</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="table100-body js-pscroll">
                                <table>
                                    <tbody>
                                        @foreach ($stagiaires as $stagiaire)
                                            <tr class="row100 body">
                                                <td class="cell100 column1" style="padding-left: 20px" >{{ $stagiaire->CEF }}</td>
                                                <td class="cell100 column2" style="padding-left: 90px" >{{ $stagiaire->Nom }}</td>
                                                <td class="cell100 column3" style="padding-left: 30px" >{{ $stagiaire->Prenom }}</td>
                                                <td class="cell100 column4" style="padding-left: 55px" >{{ $stagiaire->Etudiant_Actif }}</td>
                                                <td class="cell100 column5" style="padding-left: 105px" >{{ $stagiaire->Filiere }}</td>
                                                <td class="cell100 column6" style="padding-right: 110px" >{{ $stagiaire->Groupe }}</td>
                                                <td class="cell100 column7" style="padding-left: 10px;">
                                                    <a style="text-decoration: none ;" href="{{ route('details',$stagiaire->idStag) }}" class="link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  color='black'  fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2"/>
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