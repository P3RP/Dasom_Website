<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>



  <body>

    <!-- Dropdown Trigger -->
    <!-- dropdown 버튼-->
  <a class='dropdown-button' href='#dropdown' data-activates='dropdown'>
    <i class="medium material-icons" style = "color: #f44336 ;">favorite</i>
  </a>

  <!-- Dropdown 메뉴들 -->

  <ul id='dropdown' class='dropdown-content'>
    <li><a style = "color:#000000;"><i class="material-icons" style = "color: #ffb300  ;">fingerprint</i>login</a></li>
    <li><a style = "color:#000000;"><i class="material-icons" style = "color: #80deea ;">usb</i>social</a></li>
    <li><a style = "color:#000000;"><i class="material-icons" style = "color: #03a9f4 ;">content_paste</i>project</a></li>
  </ul>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
    $(document).ready(function(){
      $('.dropdown-button').click(function(){
        $('#dropdown').dropdown('open');
      });
    });
  </script>
  </body>
</html>
