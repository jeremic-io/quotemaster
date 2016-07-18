<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Best quotes from famous people...">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QuoteMaster</title>
</head>
<body>

  <header class="main-header">
    
  </header>

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
