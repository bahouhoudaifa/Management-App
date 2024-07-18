<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <script type="module" src="{{ asset('/js/app.js') }}"></script>
    <title>Saisie Absences</title>
    <style>    
        .title {
            font-size: 28px;
            color: black;
            font-weight: 600;
            letter-spacing: -1px;
            position: relative;
            display: flex;
            align-items: center;
            padding-left: 330px;
        }
        
        .title::before,.title::after {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        border-radius: 50%;
        left: 300px;
        background-color: black;
        }

        .title::before {
        width: 18px;
        height: 18px;
        background-color: black;
        }

        .title::after {
        width: 18px;
        height: 18px;
        animation: pulse 1s linear infinite;
        }
        @keyframes pulse {
        from {
            transform: scale(0.9);
            opacity: 1;
        }

        to {
            transform: scale(1.8);
            opacity: 0;
        }
        }
    </style>
    <script>
        window.addEventListener('load', function () {
            var myModal = new bootstrap.Modal(document.getElementById('alert1'), {
                keyboard: false
            });
            myModal.show();
        });
        function closeModal() {
            var myModal = document.getElementById('alert1');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();
        }
    </script>
    <script>
        window.addEventListener('load', function () {
            var myModal = new bootstrap.Modal(document.getElementById('alert2'), {
                keyboard: false
            });
            myModal.show();
        });
        function closeModal2() {
            var myModal = document.getElementById('alert2');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();
        }
    </script>
</head>
<body>
    @if(session('success'))
        <div id="alert1" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" color="green" height="40" fill="currentColor" class="bi bi-check-circle-fill " viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Votre absence enregistrée avec succès.</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success btn-block" data-dismiss="modal" onclick="closeModal()">OK</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if ($errors->any())
        <div id="alert2" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" color="red" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                        </svg>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Cette absence a déjà été enregistrée.</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger btn-block" data-dismiss="modal" onclick="closeModal2()">OK</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    
    <a type="button" class="btn btn-dark btn-rounded" href="{{ route('absence') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
    </svg></a>

    <div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8 text-center"> 
                    <p class="title">Saisie Absence</p>
                </div>
            <div class="col-md-8">
                <br/>
                <form  action="{{ route('storeAbsence') }}" method="POST" style="width: 80%; margin: 0 auto;">
                @csrf
                    <div class="d-flex justify-content-between">
                        <div class="mb-3">
                            <label for="" class="form-label"><b> ID : </b></label>
                            <input type="text" value="{{ $stagiaire->idStag }}" class="form-control" name="idStag" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><b> Nom : </b></label>
                            <input type="text" id="id" value="{{ $stagiaire->Nom }}" class="form-control" disabled >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><b> Prénom : </b></label>
                            <input type="text" id="id" value="{{ $stagiaire->Prenom }}" class="form-control" disabled >
                        </div>
                    </div>

                    
                    <div class="mb-3">
                        <label for="" class="form-label"><b>Semaine : </b></label>
                        <div class="select-wrapper" >
                            <select id="selectList" name="IdSem" class="form-select">
                                @foreach ($semaines as $semaine)
                                    <option value="{{$semaine->IdSem}}">{{$semaine->DateSem}}</option>
                                @endforeach
                            </select>
                               <span>     <a href="{{ route('saisiesemaine') }}"   ><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"  color="black"  fill="currentColor" class="bi bi-calendar-plus" viewBox="0 0 16 16">
                                <path d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7"/>
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                              </svg></a></span>

                              @error('IdSem')
                                <div class="text-danger" >
                                    {{$message}}
                                </div>
                              @enderror

                        </div>
                    </div>                    
                    <div class="mb-3">
                        <label for="" class="form-label"><b>Date D'absence : </b></label>
                        <input type="date" id="dateabsence" name="JourAbs" class="form-control">
                        @error('JourAbs')
                            <div class="text-danger" >
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"><b>Journée : </b></label>
                        <select id="selectList" name="JourneeAbs" class="form-select" >
                            <option value="1">8:30 - 11:00</option>
                            <option value="2">11:00 - 13:30 </option>
                            <option value="3">13:30 - 16:00</option>
                            <option value="4">16:00 - 18:30</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for=""><b>Type Justification : </b></label>
                        <br/>
                        <div class="select-wrapper" id="selectWrapper">
                            <select id="selectList" name="IdJust" class="form-select">
                                @foreach ($justife as $justif)
                                        <option value="{{$justif->IdJust}}">{{$justif->Justif}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                    </div>
                    <br/>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark btn-block me-2"  >Enregistrer</button>
                    </div>
                    <hr/>
                </form>
            </div>
        </div>
    </div>
</body>
</html>