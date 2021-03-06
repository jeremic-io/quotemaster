<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Best quotes from famous people...">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <title>QuoteMaster</title>

  <style>
    body {
      padding:0;
      margin:0;
    }
    h1,h2,h3,h4,h5,h6 {
      padding:0;
      margin:0;
    }

    .intro {
      background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('images/landing.jpg');
      background-position: top fixed;
      background-attachment: fixed;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .intro-text {
      width:40%;
    }

    .intro-text h1 {
      font-family: "Open Sans";
      color: #fff;
      font-size:2.5em;
      padding-bottom:10px;
      text-align:center;
    }

    .intro-text p {
      font-family: "Open Sans";
      color:#fff;
      text-align: justify;
      margin-top: 25px;
    }

    @media screen and (max-width: 1999px) {
      .intro-text {
        width:50%;
      }
    }

    @media screen and (max-width: 991px) {
      .intro-text {
        width:60%;
      }
    }

    @media screen and (max-width: 767px) {
      .intro-text {
        width:80%;
      }
    }

    .text-center {
      text-align:center;
    }

    .call-to-action {
      border:1px solid #fff;
      padding:15px;
      background:transparent;
      color:#fff;
      font-size:1em;
      width:50%;
      display:block;
      margin:40px auto 40px auto;
      text-align:center;
    }

    .call-to-action:hover {
      background: #fff;
      color: #000;
      cursor: pointer;
    }

    .white-hr {
      background-color:#fff;
      height:1px;
      width:200px;
    }

  </style>
</head>
<body>
  <!-- Intro -->
  <section class="intro">
    <div class="intro-text">
      <h1>Dobrodošli na Religija.net</h1>
      <hr class="white-hr">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <a class="call-to-action">Call To Action</a>
    </div>
  </section>

  <aside class="main-aside">

  </aside>

  <main class="main-content">

  </main>

  <footer class="main-footer">

  </footer>

  <!-- Javascript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- defer loading of javascript files -->
  <script>
    function downloadJSAtOnload() {
      var element = document.createElement("script");
      element.src = "js/scripts.js";
      document.body.appendChild(element);
    }
    if (window.addEventListener) {
      window.addEventListener("load", downloadJSAtOnload, false);
    } else if (window.attachEvent) {
      window.attachEvent("onload", downloadJSAtOnload);
    } else {
      window.onload = downloadJSAtOnload;
    }
  </script>
</body>
</html>
