
<?php

include 'connectdb.php';
if (isset($_POST['submit'])) {
  $page_id = $_POST['page_id'];
  $post_id = $_POST['post_id'];
  $is_order = $_POST['order'];
  $sql = "INSERT INTO related_page_post(page_id,post_id,is_order,is_active) VALUES ('$page_id','$post_id','order',1)";

  $result = mysqli_query($conn, $sql);

  if($result){
    header("Location: rPage.php?msg=New record created successfully");
  }
  else {
    echo"Failed:" .mysqli_error($conn);
  }

}
?>
<?php
$sql = "SELECT DISTINCT page_name, page_id FROM pages order by page_name ";
$result = mysqli_query($conn, $sql);

$pag = "<select  name='page_id'>
        <option >Select Page</option>";
  while ($row = mysqli_fetch_assoc($result)) {
    $pag .= "<option value='".$row['page_id']."'>".$row['page_name']."</option>";
  }

$pag .= "</select>";


$sql = "SELECT DISTINCT post_name, post_id FROM post order by post_name ";
$result = mysqli_query($conn, $sql);

$pos = "<select  name='post_id'>
        <option >Select Post</option>";
  while ($row = mysqli_fetch_assoc($result)) {
    $pos .= "<option value='".$row['post_id']."'>".$row['post_name']."</option>";
  }

$pos .= "</select>";

?>

<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forms - Admin One Tailwind CSS Admin Dashboard</title>

  <!-- Tailwind is included -->
  <link rel="stylesheet" href="css/main.css?v=1652870200386">

  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png"/>
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png"/>
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png"/>
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b4b6"/>

  <meta name="description" content="Admin One - free Tailwind dashboard">

  <meta property="og:url" content="https://justboil.github.io/admin-one-tailwind/">
  <meta property="og:site_name" content="JustBoil.me">
  <meta property="og:title" content="Admin One HTML">
  <meta property="og:description" content="Admin One - free Tailwind dashboard">
  <meta property="og:image" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1920">
  <meta property="og:image:height" content="960">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="Admin One HTML">
  <meta property="twitter:description" content="Admin One - free Tailwind dashboard">
  <meta property="twitter:image:src" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="twitter:image:width" content="1920">
  <meta property="twitter:image:height" content="960">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-130795909-1');
  </script>

</head>
<body>

<div id="app">
<?php include "includes/slidebar.php";?>



<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>Admin</li>
      <li>Forms</li>
    </ul>
   
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
      Forms
    </h1>
    <button class="button light">Button</button>
  </div>
</section>

  <section class="section main-section">
    <div class="card mb-2">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-ballot"></i></span>
          Forms
        </p>
      </header>
      <div class="card-content">
        <form action="" method="POST">
        <div class="field">
            <label class="label">Page</label>
            <div class="control">
              <div class="select" >
                <?php
                    echo $pag;
                ?>
              </div>
            </div>
          </div>
        <div class="field">
            <label class="label">Post</label>
            <div class="control">
              <div class="select" >
              <?php
                  echo $pos;
              ?>
              </div>
            </div>
          </div>
          
              <button type="submit" name="submit" class="button green">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
      
    </div>
  </section>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="js/main.min.js?v=1652870200386"></script>


<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>
</html>
