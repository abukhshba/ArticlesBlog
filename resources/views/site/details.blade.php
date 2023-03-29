<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>BlogHub - Blog post</title>

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
          <a class="topbar-brand" href="{{url("/")}}">
            <img class="logo-default" src="{{asset("assets/assets/img/logo.png")}}" alt="">
            <img class="logo-inverse" src="{{asset("assets/assets/img/logo-light.png")}}" alt="">
          </a>
        </div>

        <div class="topbar-right">
            <x-nav></x-nav>
        </div>

      </div>
    </nav>
    <!-- END Topbar -->

    <!-- Header -->
    <header class="header header-inverse h-fullscreen pb-80" style="background-image: {{asset("assets/assets/img/bg-cup.jpg")}};" data-overlay="8">
      <div class="container text-center">

        <div class="row h-full">
          <div class="col-12 col-lg-8 offset-lg-2 align-self-center">

            <p class="opacity-70">{{$article->category->name}}</p>
            <br>
            <h1 class="display-4 hidden-sm-down">{{$article->title}}</h1>
            <br><br>
            <p><span class="opacity-70 mr-8">By</span> <a class="text-white" href="#">{{$article->user->name}}</a></p>
            <p><img class="rounded-circle w-40" src="{{asset("assets/assets/img/avatar/2.jpg")}}" alt="..."></p>

          </div>

          <div class="col-12 align-self-end text-center">
            <a class="scroll-down-1 scroll-down-inverse" href="#" data-scrollto="section-content"><span></span></a>
          </div>

        </div>

      </div>
    </header>
    <!-- END Header -->

    <!-- Main container -->
    <main class="main-content">

      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Blog content
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <div class="section" id="section-content">
        <div class="container">

          <div class="row">

            {!! $article->content !!}
          </div>

        </div>
      </div>

      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Comments
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <div class="section bt-1 bg-grey">
        <div class="container">

          <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">

              <div class="media-list">
                @foreach ($comments as $comment)

                <div class="media">
                  <img class="rounded-circle w-40" src="{{asset("assets/assets/img/avatar/1.jpg")}}" alt="...">

                  <div class="media-body">
                    <p class="fs-14">
                      <strong>{{$comment->name}}</strong>
                      <time class="ml-16 opacity-70 fs-12" datetime="2017-07-14 20:00">24 min ago</time>
                    </p>
                    <p class="fs-13">{{$comment->review}}</p>
                  </div>
                </div>

                @endforeach

                <div id="res"></div>

              </div>


                <div class="row">
                  <div class="form-group col-12 col-md-6">
                    <input id="name" class="form-control" type="text" placeholder="Name">
                  </div>

                  <div class="form-group col-12 col-md-6">
                    <input id="email" class="form-control" type="text" placeholder="Email">
                  </div>
                </div>
                <input type="hidden" id="article_id" value="{{ $article->id}}">
                <div class="form-group">
                  <textarea id="review" class="form-control" placeholder="Comment" rows="4"></textarea>
                </div>

                <button id="sendreview" class="btn btn-primary btn-block" type="submit">Submit your comment</button>

            </div>
          </div>

        </div>
      </div>

    </main>
    <!-- END Main container -->

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
          <div class="row gap-y align-items-center">
            <div class="col-12 col-lg-3">
              <p class="text-center text-lg-left">
                <a href="{{url("/")}}"><img src="{{asset("assets/assets/img/logo.png")}}" alt="logo"></a>
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
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        $("#sendreview").click(function(){

            let name = $("#name").val();
            let email = $("#email").val();
            let review = $("#review").val();
            $.ajax({
            method:"POST",
            url:"http://127.0.0.1:8000/comment",
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{
                name:name,
                email:email,
                review:review,
                article_id:{{$article->id}}
            },
            success:function(res){
                console.log("yes");
                $("#res").append(`
                <div class="media">
                  <img class="rounded-circle w-40" src="assets/img/avatar/1.jpg" alt="...">

                  <div class="media-body">
                    <p class="fs-14">
                      <strong>${name}</strong>
                      <time class="ml-16 opacity-70 fs-12" datetime="2017-07-14 20:00">24 min ago</time>
                    </p>
                    <p class="fs-13">${review}</p>
                  </div>
                </div>
                `);
            },
            error:function(res){
                console.log("error");
            }
        });
        });

    </script>
  </body>
</html>
