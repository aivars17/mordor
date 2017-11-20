<!DOCTYPE html>
<html>
<head>
<title><?= $data['post']['title'] . " | " . CONFIG['site_title']; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/style.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Vollkorn+SC" rel="stylesheet">

</head>
<body>
<div class="container-fluid">
<!-- !PAGE CONTENT! -->


<nav class=" navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php uFrame\Menu::top(); ?>
    </ul>
    <form action="/<?= CONFIG['site_path']; ?>/Blog/search" method="GET" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="row">
    <div class="col blog">Blog</div>
</div><div class="row">
    <div class="col blog"><?= $data['error']['er']?></div>
</div>

</div>

<!-- Photo Grid -->

  <div class="container">
    <div class='row'>
        <?php foreach ($data['S_post'] as $search) {
            echo 
             
            "<div class='col-5 content'>
                <a href='/".CONFIG['site_path']."/Blog/show/".$search['id']."'><h2>".$search['title']."</h2></a>
                 <h6>".$search['date']."</h6>
                <hr>
                ".$search['readmore']."<a class='readmore' href='/".CONFIG['site_path']."/Blog/show/".$search['id']."'> Read more...</a>
            </div>";
        
        }
       ?>
   </div>
    </div>
<div class="container-fluid"> 
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large"> 
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Powered by CA</p>
</footer>
</div>
<script src="/<?= CONFIG['site_path']; ?>/assets/js/script.js"></script>

</body>
</html>
