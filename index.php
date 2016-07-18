<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Best quotes from famous people...">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QuoteMaster</title>
  <style>
    nav {
      height: 40px;
      width: 100%;
      background: #455868;
      font-size: 11pt;
      font-family: 'PT Sans', Arial, sans-serif;
      font-weight: bold;
      position: relative;
      border-bottom: 2px solid #283744;
    }
    nav ul {
      padding: 0;
      margin: 0 auto;
      width: 600px;
      height: 40px;
    }
    nav li {
      display: inline;
      float: left;
    }
    .clearfix:before,
.clearfix:after {
    content: " ";
    display: table;
}
.clearfix:after {
    clear: both;
}
.clearfix {
    *zoom: 1;
}
nav a {
  color: #fff;
  display: inline-block;
  width: 100px;
  text-align: center;
  text-decoration: none;
  line-height: 40px;
  text-shadow: 1px 1px 0px #283744;
}
nav li a {
  border-right: 1px solid #576979;
  box-sizing:border-box;
  -moz-box-sizing:border-box;
  -webkit-box-sizing:border-box;
}
nav li:last-child a {
  border-right: 0;
}
nav a:hover, nav a:active {
  background-color: #8c99a4;
}
nav a#pull {
  display: none;
}
@media screen and (max-width: 600px) {
  nav {
      height: auto;
    }
    nav ul {
      width: 100%;
      display: block;
      height: auto;
    }
    nav li {
      width: 100%;
      float: left;
      position: relative;
    }
    nav li a {
    border-bottom: 1px solid #576979;
    border-right: 1px solid #576979;
  }
    nav a {
      text-align: left;
      width: 100%;
      text-indent: 25px;
    }
}
@media only screen and (max-width : 480px) {
  nav {
    border-bottom: 0;
  }
  nav ul {
    display: none;
    height: auto;
  }
  nav a#pull {
    display: block;
    background-color: #283744;
    width: 100%;
    position: relative;
  }
  nav a#pull:after {
    content:"";
    background: url('nav-icon.png') no-repeat;
    width: 30px;
    height: 30px;
    display: inline-block;
    position: absolute;
    right: 15px;
    top: 10px;
  }
}
@media only screen and (max-width : 320px) {
  nav li {
    display: block;
    float: none;
    width: 100%;
  }
  nav li a {
    border-bottom: 1px solid #576979;
  }
}
  </style>
</head>
<body>

  <header class="main-header">
    <nav class="clearfix">
      <ul class="clearfix">
        <li><a href="#">How-to</a></li>
        <li><a href="#">Icons</a></li>
        <li><a href="#">Design</a></li>
        <li><a href="#">Web 2.0</a></li>
      </ul>
      <a href="#" id="pull">Vennvest</a>
    </nav>
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
