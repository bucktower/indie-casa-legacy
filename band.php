<!doctype html><html><head>  <title>Indie Casa</title>  <meta charset="utf-8" />  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />  <meta name="viewport" content="width=device-width, initial-scale=1" />  <!-- bower:css -->  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/  bootstrap.min.css">  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/  bootstrap-theme.min.css">  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" />  <link rel="stylesheet" href="bower_components/bootstrap-social/bootstrap-social.css" />  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">  <!-- endbower -->  <link rel="stylesheet" href="styles/main.css">  <link rel="stylesheet" href="styles/band.css"></head><body>  <?php    include 'band-backend.php';  ?>  <div class="logo-div">    <a href="index.php"><img src="images/logo.png" id="logo" /></a>  </div>  <div class="container">    <div id="indie-alert" class="alert alert-danger">This band is signed to <b><?php echo $label ?></b>, <?php echo $isBandIndie ?>!</div>    <div id="band-info" class="section-padding">      <img id="band-photo" src="images/imageplaceholder.png" id="what" />      <h1><?php echo $band_name; ?></h1>      <h4>        <?php          echo $origin;        ?>      </h4>      <p>        <?php          echo $wiki_content_p_parsed;        ?>      </p>    </div>    <div id="band-concerts" class="section-padding">      <h2>Upcoming Concerts</h2>      <ul>        <li>Houston, TX - 12/2/15</li>        <li>London, UK - 1/30/16</li>        <li>New York, NY - 4/23/16</li>        <li>Vail, CO - 5/2/16</li>        <li>San Diego, CA - 5/10/16</li>      </ul>    </div>    <div id="band-music" class="section-padding">      <h2>Tune In</h2>    </div>  </div>  <div class="footer">    <p>Created by Buck Tower</p>    <p>Powered by Wikipedia</p>    <a class="btn btn-default btn-sm" href="https://github.com/bucktower/indie-casa"><span class="fa fa-github"></span> Liberated under the GPL v3.0</a>  </div>  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>  <script>    var isBandIndie = <?php echo json_encode($isBandIndie); ?>;    console.log(isBandIndie);    if(isBandIndie == "a <b>truly independent record label</b>") {      console.log("true");      $("#indie-alert").toggleClass("alert-danger");      $("#indie-alert").toggleClass("alert-success");    }  </script>  <!-- bower:js -->  <script src="bower_components/bootstrap/js/affix.js"></script>  <script src="bower_components/bootstrap/js/alert.js"></script>  <script src="bower_components/bootstrap/js/dropdown.js"></script>  <script src="bower_components/bootstrap/js/tooltip.js"></script>  <script src="bower_components/bootstrap/js/modal.js"></script>  <script src="bower_components/bootstrap/js/transition.js"></script>  <script src="bower_components/bootstrap/js/button.js"></script>  <script src="bower_components/bootstrap/js/popover.js"></script>  <script src="bower_components/bootstrap/js/carousel.js"></script>  <script src="bower_components/bootstrap/js/scrollspy.js"></script>  <script src="bower_components/bootstrap/js/collapse.js"></script>  <script src="bower_components/bootstrap/js/tab.js"></script>  <!-- endbower -->  </body></html>