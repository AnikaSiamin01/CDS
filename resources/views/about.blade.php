<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{--     {{asset('')}}--}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=" {{asset('css/bootstrap.min.css')}}"
    >
    <!-- font awesome -->
    <link rel="stylesheet" href=" {{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css')}}"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
          crossorigin="anonymous" />
    <!-- goole font -->
    <link
        href= {{asset('https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Source+Sans+Pro:wght@400;700;900&display=swap')}}""
        rel="stylesheet">
    <!-- tailwind css -->
    <link href=" {{asset('css/tailwind.css')}}" rel="stylesheet">

    <!-- custom css link -->
    <link rel="stylesheet" href=" {{asset('style.css')}}">

    <title>Course Distribution System</title>



</head>

<body>


<!-- Menu bar with logo -->
<div class="conatainer">
    <div class="menubar">
        <nav class="navbar navbar-expand-lg navbar-light nav-sticky bg-primary ">
            <a class="navbar-brand" href="#"><img src="{{asset('img/logo.png')}}" style="height: 60px;border-radius: 5px; " class="image-fluid;" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link mr-4" href="{{route('home')}}">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>

                </ul>


                <a href="{{route('login')}}" class="btn btn-success my-2 my-sm-0 mr-3 p-3" >Login</a>
                <a href="{{route('register')}}" class="btn btn-success my-2 my-sm-0 p-3" >Registration</a>

            </div>
        </nav>
    </div>
</div>
<!-- banner section    -->
<div class="  ">
    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>About Laravel</title>
            </head>
            <body>


           <b> <h1>Meet the Laravel Team</h1></b>
            <br>
            <ul class="ml-5">
                <li>1. Anika Siamia Oyshi(19211101):project create,blade create, dashboard</li>
                <br>
                <li>2. Ashiquer Rahman(19111103): Home page design</li>
                <br>
                <li>3. Susmita Nandi(19211107):database create,routing,controller</li>
                <br>
                <li>4. Samia Nasir Nira(19211114):project login and registration system</li>
                <br>
                <li>5. A.K.M. Abdullah Al Masud(19111119):html,css static page creation</li>
            </ul>
            </body>
            </html>
        </div>
    </section>

</div>
















<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script>
    //Get the button:
    mybutton = document.getElementById("myBtn");


    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>
<script src="js/jquery-3.5.1.slim.min.js"
></script>
<script src="js/popper.min.js"
></script>
<script src="js/bootstrap.min.js"
></script>
</body>

</html>
