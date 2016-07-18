<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Best quotes from famous people...">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QuoteMaster</title>
  <style>
    h1 {
      color:green;
    }
  </style>
</head>
<body>

  <header class="main-header">
    <h1>QuoteMaster</h1>
  </header>

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
