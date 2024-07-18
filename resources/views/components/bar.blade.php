<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script defer>
    function handleAff(){
      var x = document.getElementById('myNav');
      var icon = document.getElementById('forChangeIcon');
      icon.innerHTML = '\
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">\
          <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>\
        </svg>';
      var logo = document.getElementById('logo');
      if (x.className === 'unClicked'){
        x.className += ' clicked';
        icon.innerHTML = '\
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">\
          <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>\
        </svg>';
        logo.style.cssText = "width: 106px; height: 61px;";
      }else{
        x.className = 'unClicked';
        icon.innerHTML = '\
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">\
          <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>\
        </svg>';
        logo.style.cssText = "display: none;";
      }
    }
  </script>
  <style>
    .item-link{
      color: white ;
    }
    .box{
      display: contents;
      height: 100vh;
      position: fixed;
    }
    .unClicked{
      color: white;
      background-color: rgb(33 37 41);
      font-size: 35px;
      padding: 347px 0px 0px 0px;
    }
    .box .unClicked + div{
      width: 0%; 
      padding: 0px !important;
      transition: width 0.5s
    }
    .box .unClicked.clicked + div{
      width: 18%;

    }
  </style>
</head>

<body>
<div class="container-fluid">
  <div class="row flex-nowrap">
    <div class="box">        
      <div id="myNav" class="unClicked" style="display: none;"></div>
      <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark menu">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
          <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none text-center" style="padding-left: 89px;">
                <img id="logo" src="{{asset('assets/img/logo.png')}}" alt="ofppt" style="display: none;">
              </a>
              <br/>
              <br/>
              <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                  <li class="item-link" id="item-link-0">
                    <a href="{{ route('accuiel') }}" class="nav-link px-0 align-middle item-link">
                      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                      </svg><span style="font-style: italic;" class="ms-1 d-none d-sm-inline"><b>ACCUEIL</b></span></a>
                  </li>
                  <br>
                  <li class="item-link" id="item-link-1">
                    <a href="{{ route('form') }}" class="nav-link px-0 align-middle item-link">
                      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-file-earmark-excel-fill" viewBox="0 0 16 16">
                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M5.884 6.68 8 9.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 10l2.233 2.68a.5.5 0 0 1-.768.64L8 10.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 10 5.116 7.32a.5.5 0 1 1 .768-.64"/>
                      </svg><span style="font-style: italic;" class="ms-1 d-none d-sm-inline"><b>SAISIE LISTE STAGIAIRES</b></span></a>
                  </li>
                  <br>
                  <li class="item-link" id="item-link-2">
                    <a href="{{ route('index') }}" class="nav-link align-middle px-0 item-link">
                      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
                      </svg>
                      <span style="font-style: italic;" class="ms-1 d-none d-sm-inline" ><b>LISTE DES STAGIAIRES</b></span>
                    </a>
                  </li>
                  <br/>
                  <li class="item-link" id="item-link-3">
                    <a href="{{ route('absence') }}" class="nav-link px-0 align-middle item-link">
                      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                        <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5z"/>
                      </svg>
                      <span style="font-style: italic;" class="ms-1 d-none d-sm-inline"><b>SAISIE ABSENCES</b></span></a>
                  </li>
                  <br/>
                  <li class="item-link" id="item-link-4">
                      <a href="{{ route('comportement') }}" class="nav-link px-0 align-middle item-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-fill-exclamation" viewBox="0 0 16 16">
                          <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                          <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1.5a.5.5 0 0 0 1 0V11a.5.5 0 0 0-.5-.5m0 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
                        </svg>
                        <span style="font-style: italic;" class="ms-1 d-none d-sm-inline"><b>SAISIE COMPORTEMENTS</b></span></a> 
                  </li>
                  <br/>
                  <li class="item-link" id="item-link-5">
                      <a href="{{ route('retirement') }}" class="nav-link px-0 align-middle item-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708"/>
                        </svg>
                        <span style="font-style: italic;" class="ms-1 d-none d-sm-inline"><b>SAISIE RETIREMENTS</b></span></a>
                  </li>
              </ul>
          </div>
      </div>
      <div id="forChangeIcon" class="unClicked" style="cursor: pointer" onclick="handleAff()">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
          <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
        </svg>
      </div>
    </div>
      <div class="col" style="padding: 0px !important;">
        {{$slot}}
      </div>
  </div>
</div>

</body>
</html>