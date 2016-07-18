<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Best quotes from famous people...">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QuoteMaster</title>

  <style>
    body {
      padding:0;
      margin:0;
    }
    .intro {
      background-image:url('images/landing.jpg');
      background-position: top fixed;
      background-attachment: fixed;
      background-size: cover;
      height:1000px;
    }

  </style>
</head>
<body>

  <header class="main-header">
    <h1>QuoteMaster</h1>
  </header>

  <section class="intro">

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
