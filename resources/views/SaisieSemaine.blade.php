<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<script type="module" src="{{ asset('/js/app.js') }}"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
<title>Saisie Semaine</title>
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
</head>
<body>
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<a type="button" class="btn btn-dark btn-rounded" href="{{ route('absence') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
</svg></a>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="col-md-8 text-center"> 
                <p class="title">Ajouter Semaine</p>
            </div>
            <form method="POST" style="width: 80%; margin: 0 auto;">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label"><b>Date : </b></label>
                    <input type="date" id="date" name="DateSem" class="form-control">
                    @error('DateSem')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark btn-block me-2">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>