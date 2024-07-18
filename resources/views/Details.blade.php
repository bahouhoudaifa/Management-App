<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/details.css') }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <title>Details de Stagiaire</title> 
</head>

<body>
<a href="{{ route('index') }}" class="btn btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
</svg> </a>

<h1 class="text-center" style="font: small-caps bold 24px/1 sans-serif; font-size: 50px" > <u>Details de Stagiaire</u> </h1>
<br>
<div class="container">
    <div class="main-body">    
        <div class="box">
            <div class="profile-box">
                <div class="card"  style="height: 100%;">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <br>
                            {{-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150"> --}}
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAPFBMVEXk5ueutLepsLPo6uursbXJzc/p6+zj5ea2u76orrKvtbi0ubzZ3N3O0dPAxcfg4uPMz9HU19i8wcPDx8qKXtGiAAAFTElEQVR4nO2d3XqzIAyAhUD916L3f6+f1m7tVvtNINFg8x5tZ32fQAIoMcsEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQTghAJD1jWtnXJPP/54IgNzZQulSmxvTH6oYXX4WS+ivhTbqBa1r26cvCdCu6i0YXbdZ0o4A1rzV+5IcE3YE+z58T45lqo7g1Aa/JY5tgoqQF3qb382x7lNzBLcxft+O17QUYfQI4IIeklKsPSN4i6LKj/7Zm8n99RbHJpEw9gEBXNBpKIYLJqKYRwjOikf//r+J8ZsVuacbqCMNleI9TqGLGqMzhnVdBOdd6F/RlrFijiCoVMk320CBIahUxTWI0KKEcJqKbMdpdJb5QvdHq6wCI5qhKlgGMS/RBHkubWDAE+QZxB4xhCyDiDkLZxgGEVdQldzSKbTIhmZkFkSEPcVvmBn2SMuZB9od7fQDsMiDdKJjFUSCQarM5WirZ3C2TT/htYnyPcPfgrFHWz0BI74gr6J/IZiGUxAZGQLqmvQLTrtE/Go4YxhVRIpEw+sww1IIcqr5NKmUUzLF3d4/qPkYIp2T/obPuemlojFUR4t9Q2Vojhb7BmgElWHzLPH8hucfpefPNFTVgs9h1AdU/Pin96vwWbWdf+X9Absn3OdO34aMdsDnP8WgKYisTqI6CkNGqZQo1XA6Ef6AU32SJzOcBukHPF07/xNSgmHKa5BOhtezv6mA/rYJpwXNAnbRZ1XuF3BzDcO3vpA3+ny2909gbqE4hhD3LIPhLLyBNhPZvbZ3B+3tPYa18A7auSlXQayKwTPNLKDcuOB0xPYKDPFTkWsevQPRZ1J8Hji9I1KQ34r7hZhrwNwOZ97QxNx0drwn4QI0wQk1DcEsfKCWKdxVvxPSNUIp/knmAXT+nT+Ko3+0H96rcNb3m1fx7MBTJdeBJ7uFcWsc0wvgAsC4pROW0l2inbAmIBv/7GZmuhQH6API2rr8T0e6yuZJ+80A9LZeG62T3tik31XwxtwZcizKuTHkMjB1WdZde4Kmic/A5ZI3rr1ae21d08PlVHYfAaxw9G9CYRbJ+8ZdbTcMRV1XM3VdF0M32vtoTdZ0+u29s0OttJ5bz64UwinjaFMVY9vkqc3KKSxN21Xl+0L4Q3Vuv1tYl0pqnX6ms4XetFz7gdZVAgUEoJntfOUe4ZwsHd9FzqQ3Vv6xe41l0XJcqcKl6TZvlv7ClAW3BsqQW4X7ypApB8dmTgK4IX5wvqIVj33HtD2qSG4BqznxdIefL27Y4sahi0MdIdvUsDva8agGGbCtITmCY31MHD2O0uIdh/0rJDQ1VX5Zdxz3rR2QDbv6qXl9vudzqQtGm1Jv9LDXOsfvvB7VcZ8PDKD0mQ1VHPYQ9O+Yj4hR1IUD8rBnn3ho2m8oQMxbCFiKlL2ioSW5heeJqegED52CzxCtcGD3Kv8Wms9EYLyUhwaFIhSMBClevWEmiK/Iaogu4H7sg6ppQhQG8RUqivuTGOAJOg6FfgW0q0M0PQMRMEgXaeNf3SYDZ8PIMI0+wHgr/MgN7wYwpiLjCCqM6ydUDZLQiB6nDdNC8SDyig3jPPpFXGcC9O8BUBDVmgBY59E7Md/35Loe/UVEECEJwYggJjELZ4J71SaQSBeC02n4Da29CayJNA28SAhd2CQyC1Xw6pSmGSINQVuMhAZp4DClan9MgmkDDNmezqwS8sgtlXK/EPBhoaSmYVC/F7IO1jQEdHOlabpKh3+jzLQSTUiq4X2I+Ip/zU8rlaqAvkS21ElR+gqu3zbjjL+hIAiCIAiCIAiCIAiCsCf/AKrfVhSbvA+DAAAAAElFTkSuQmCC" alt="Admin" class="rounded-circle" width="150">
                            <br>
                            <div class="mt-3">
                                <h4>{{ $stagiaire->Nom }} {{ $stagiaire->Prenom }}</h4>
                                <p class="text-secondary mb-1">{{ $stagiaire->Filiere }}</p>
                                <p class="text-muted font-size-sm">{{ $stagiaire->Groupe }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-info-box">
                @if(count($absences) > 0)
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <h2 class="mb-0 text-center " style="font: italic 2rem Fira Sans serif;" ><u><b>ABSENCES</b></u></h2>
                            </div>
                            <br>
                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                        <th>Semaine</th>
                                        <th>Jour Absence</th>
                                        <th>Journée Absence</th>
                                        <th>Type Justification</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($absences as $absence)
                                        <tr class="text-center">
                                            <td>{{ $absence->semaine->DateSem }}</td>
                                            <td>{{ $absence->JourAbs }}</td>
                                            <td>Séance {{ $absence->JourneeAbs }}</td>
                                            <td>{{ $absence->justife->Justif }}</td>
                                            <td>
                                                <a type="button" class="btn btn-outline-primary" href="{{ route('modifierAbsence', ['id' => $absence->IdAbs]) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                                    </svg>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteAbsence{{ $absence->IdAbs }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                                    </svg>  
                                                </button>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="deleteAbsence{{ $absence->IdAbs }}">
                                            <div class="modal-dialog modal-confirm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title w-100" style="text-align: center;">Etes-vous sûr?</h2>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p style="text-align: center" >Voulez-vous vraiment supprimer cette absence ? </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('deleteAbsence', $absence->IdAbs) }}" method="POST" style="display: inline;" >
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                                        </form>
                                                        <a href="{{ route('details',$stagiaire->idStag) }}" type="button" class="btn btn-secondary" data-dismiss="modal" >Annuler</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <h2 class="mb-0 text-center " style="font: italic 2rem Fira Sans serif;" ><u><b>ABSENCES</b></u></h2>
                            </div>
                            <br>
                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                        <th>Semaine</th>
                                        <th>Jour Absence</th>
                                        <th>Journée Absence</th>
                                        <th>Type Justification</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td colspan="5" style="color: grey" >Pas d'absence</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
                @if(count($comportements) > 0)
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <h2 class="mb-0 text-center " style="font: italic 2rem Fira Sans serif;"><u><b>COMPORTEMENTS</b></u></h2>
                        </div>
                        <br>
                        <table  class="table">
                            <thead>
                                <tr class="text-center">
                                    <th>Formateur</th>
                                    <th>Motif</th>
                                    <th>Sanction</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comportements as $comportement)
                                    <tr class="text-center">
                                        <td>{{ $comportement->formateur->Formateur }}</td>
                                        <td>{{ $comportement->Motif }}</td>
                                        <td>{{ $comportement->TypeComportement }}</td>
                                        <td>{{ $comportement->DateComportement }}</td>
                                        <td>
                                            <a type="button" class="btn btn-outline-primary" href="{{ route('modifierComportement', ['id' => $comportement->IdCom]) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                                </svg>
                                            </a>
                                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteComportement{{ $comportement->IdCom }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                                </svg>  
                                            </button>                                            
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="deleteComportement{{ $comportement->IdCom }}">
                                        <div class="modal-dialog modal-confirm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h2 class="modal-title w-100" style="text-align: center;">Etes-vous sûr?</h2>
                                                </div>
                                                <div class="modal-body">
                                                    <p style="text-align: center" >Voulez-vous vraiment supprimer ce comportement ? </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('deleteComportement', $comportement->IdCom) }}" method="POST" style="display: inline;" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                                    </form>
                                                    <a href="{{ route('details',$stagiaire->idStag) }}" type="button" class="btn btn-secondary" data-dismiss="modal" >Annuler</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>                    
                @else
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <h2 class="mb-0 text-center " style="font: italic 2rem Fira Sans serif;"><u><b>COMPORTEMENTS</b></u></h2>
                        </div>
                        <br>
                        <table  class="table">
                            <thead>
                                <tr class="text-center">
                                    <th>Formateur</th>
                                    <th>Motif</th>
                                    <th>Sanction</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td colspan="5" style="color: grey">Pas de comportement</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif

                @if(count($retirements) > 0)
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <h2 class="mb-0 text-center" style="font: italic 2rem Fira Sans serif;"><u><b>RETIREMENTS</b></u></h2>
                            </div>
                            <br>
                            <table  class="table">
                                <thead>
                                    <tr class="text-center">
                                        <th>Motif</th>
                                        <th>Date Retirement</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($retirements as $retirement)
                                        <tr class="text-center">
                                            <td>{{ $retirement->MotifRet }}</td>
                                            <td>{{ $retirement->DateRetirement }}</td>
                                            <td>
                                                <a type="button" class="btn btn-outline-primary" href="{{ route('modifierRetirement', ['id' => $retirement->IdRet]) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                                    </svg>
                                                </a>  
                                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteRetirement{{ $retirement->IdRet }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                                    </svg>  
                                                </button>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="deleteRetirement{{ $retirement->IdRet }}">
                                            <div class="modal-dialog modal-confirm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title w-100" style="text-align: center;">Etes-vous sûr?</h2>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p style="text-align: center" >Voulez-vous vraiment supprimer ce retirement ? </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('deleteRetirement', $retirement->IdRet) }}" method="POST" style="display: inline;" >
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                                        </form>
                                                        <a href="{{ route('details',$stagiaire->idStag) }}" type="button" class="btn btn-secondary" data-dismiss="modal" >Annuler</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
                @if (count($retirements) <= 0)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="mb-0 text-center" style="font: italic 2rem Fira Sans serif;"><u><b>NOTE ACTUELLE D'ASSIDUITE:</b></u></h2>
                            <br>
                            <center>
                                <input type="text" id="id" value="{{ $assiduite }}/15" class="form-control" style="width: 150px;text-align: center;" readonly >
                            </center>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <center>
        <button class="print-btn" onclick="window.print()">
            <span class="printer-wrapper">
                <span class="printer-container">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 92 75">
                    <path stroke-width="5" stroke="black" d="M12 37.5H80C85.2467 37.5 89.5 41.7533 89.5 47V69C89.5 70.933 87.933 72.5 86 72.5H6C4.067 72.5 2.5 70.933 2.5 69V47C2.5 41.7533 6.75329 37.5 12 37.5Z"></path>
                    <mask fill="white" id="path-2-inside-1_30_7">
                        <path d="M12 12C12 5.37258 17.3726 0 24 0H57C70.2548 0 81 10.7452 81 24V29H12V12Z"></path>
                    </mask>
                    <path mask="url(#path-2-inside-1_30_7)" fill="black" d="M7 12C7 2.61116 14.6112 -5 24 -5H57C73.0163 -5 86 7.98374 86 24H76C76 13.5066 67.4934 5 57 5H24C20.134 5 17 8.13401 17 12H7ZM81 29H12H81ZM7 29V12C7 2.61116 14.6112 -5 24 -5V5C20.134 5 17 8.13401 17 12V29H7ZM57 -5C73.0163 -5 86 7.98374 86 24V29H76V24C76 13.5066 67.4934 5 57 5V-5Z"></path>
                    <circle fill="black" r="3" cy="49" cx="78"></circle>
                    </svg>
                </span>
                <span class="printer-page-wrapper">
                    <span class="printer-page"></span>
                </span>
            </span>
            Imprimer
        </button>
    </center>
</div>    
</body>
</html>