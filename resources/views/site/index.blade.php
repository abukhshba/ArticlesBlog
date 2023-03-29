<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>BlogHub - Blog list</title>

    <!-- Styles -->
    <link href="{{asset("assets/assets/css/core.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/assets/css/thesaas.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/assets/css/style.css")}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset("assets/assets/img/apple-touch-icon.png")}}">
    <link rel="icon" href="{{asset("assets/assets/img/favicon.png")}}">
  </head>

  <body>


    <!-- Topbar -->


    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
      <div class="container">

        <div class="topbar-left">
          <button class="topbar-toggler">&#9776;</button>
          <a style="text-decoration: none; font-size: 20px; font-weight: 800; color:beige;" class="topbar-brand" href="{{url("/")}}">BlogHub
            {{-- <img class="logo-default" src="{{asset("assets/assets/img/logo.png")}}" alt="">
            <img class="logo-inverse" src="{{asset("assets/assets/img/logo-light.png")}}" alt=""> --}}
          </a>
        </div>


        <div class="topbar-right">
            <x-nav></x-nav>
        </div>

      </div>
    </nav>
    <!-- END Topbar -->



    <!-- Header -->
    <header class="header header-inverse" style="background-color: #577043">
      <div class="container text-center">

        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">

            <h1>Latest Blog Posts</h1>
            <p class="fs-20 opacity-70">Read and get updated on how we progress.</p>

          </div>
        </div>

      </div>
    </header>
    <!-- END Header -->

    <!-- Main container -->
    <main class="main-content">

      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Basic cards
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section bg-gray">
        <div class="container">

            @foreach ($articles as $article)

          <div class="card mb-30">
            <div class="row">
              <div class="col-12 col-md-4 align-self-center">
                <a href="{{url("blog/$article->id")}}"><img width="300px" height="300px" src="{{asset("uploads/$article->cover")}}" alt="..."></a>
              </div>
              <div class="col-12 col-md-5">
                <div class="card-block">
                  <h4 class="card-title">{{$article->title}}</h4>
                  <p class="card-text">{{$article->short_description}}</p>
                  <a class="fw-600 fs-12" href="{{url("blog/$article->id")}}">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach


          <nav class="flexbox mt-30">
            <a class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-4"></i> Newer</a>
            <a class="btn btn-white" href="#">Older <i class="ti-arrow-right fs-9 ml-4"></i></a>
          </nav>


        </div>
      </section>

    </main>
    <!-- END Main container --

    <!-- Footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row gap-y align-items-center">
          <div class="col-12 col-lg-3">
            <p class="text-center text-lg-left">
                <a style="text-decoration: none; font-size: 20px; font-weight: 800; color:rgb(54, 54, 53);" class="topbar-brand" href="{{url("/")}}">BlogHub
                    {{-- <img class="logo-default" src="{{asset("assets/assets/img/logo.png")}}" alt="">
                    <img class="logo-inverse" src="{{asset("assets/assets/img/logo-light.png")}}" alt=""> --}}
                  </a>
            </p>
          </div>

          <div class="col-12 col-lg-6">
            <ul class="nav nav-primary nav-hero">
              <li class="nav-item">
                <a class="nav-link" href="{{url("/")}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url("login")}}">admin</a>
              </li>
              </li>
              <li class="nav-item hidden-sm-down">
                <a class="nav-link" href="#">Contacts ->>></a>
              </li>
            </ul>
          </div>

          <div class="col-12 col-lg-3">
            <div class="social text-center text-lg-right">

              <a class="social-facebook" href="https://www.facebook.com/mahmoudabukhashaba"><i class="fa fa-facebook"></i></a>
              <a class="social-twitter" href="https://twitter.com/abukhshba"><i class="fa fa-twitter"></i></a>
              <a class="social-instagram" href="https://www.instagram.com/abukhshba/"><i class="fa fa-instagram"></i></a>
              <a class="social-linkedin" href="https://www.linkedin.com/in/mahmoudabukhashaba/"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- END Footer -->



    <!-- Scripts -->
    <script src="{{asset("assets/assets/js/core.min.js")}}"></script>
    <script src="{{asset("assets/assets/js/thesaas.min.js")}}"></script>
    <script src="{{asset("assets/assets/js/script.js")}}"></script>

  </body>
</html>
