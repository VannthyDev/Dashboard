<?php

include 'connectdb.php';
$post_id=$_GET['post_id'];
$sql="SELECT *FROM post WHERE post_id =$post_id";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$PName=$row['post_name'];
$PTitle=$row['post_title'];
$Article=$row['article'];
$PCss=$row['post_css'];

if (isset($_POST['edit'])) {
  $PName = $_POST['post_name'];
  $PTitle = $_POST['post_title'];
  $Article = $_POST['article'];
  $PCss = $_POST['post_css'];

  $sql = "UPDATE  post SET post_name='$PName',post_title='$PTitle',article='$Article',post_css='$PCss' WHERE post_id=$post_id";
  $result = mysqli_query($conn, $sql);

  if($result){
    header("Location: post.php?msg=New record created successfully");
  }
  else {
    echo"Failed:" .mysqli_error($conn);
  }

}
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
            <label class="label">Post Name</label>
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" name="post_name" value =<?php echo $PName; ?>>
                  
                </div>
              </div>
              <label class="label">Post Title</label>
              <div class="field">
                <div class="control icons-left icons-right">
                  <input class="input" type="" name="post_title" value =<?php echo $PTitle; ?>>
                 
                </div>
              </div>
            </div>
          </div>
          <label class="label">Article</label>
          <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="" name="article" value =<?php echo $Article; ?>>
                  
                </div>
              </div>
              <label class="label">Post CSS</label>
          <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="" name="post_css" value =<?php echo $PCss; ?>>
                </div>
              </div>  
             

          <div class="field grouped">
            <div class="control">
              <button type="submit" name="edit" class="button green">
                Edit
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
