
<?php
include 'connectdb.php';
$page_id=$_GET['page_id'];
$sql="SELECT *FROM pages WHERE page_id =$page_id";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$P_Name=$row['page_name'];
$P_Title=$row['page_title'];
$Base_slug=$row['base_slug'];
$Page_Description=$row['page_description'];

if (isset($_POST['edit'])) {
    $P_Name = $_POST['page_name'];
    $P_Title = $_POST['page_title'];
    $Base_slug = $_POST['base_slug'];
    $Page_Description = $_POST['page_description'];
  
    $sql = "UPDATE  pages SET page_name='$P_Name',page_title='$P_Title',base_slug='$Base_slug',Page_Description='$Page_Description' WHERE page_id=$page_id";
    $result = mysqli_query($conn, $sql);
  

  if($result){
    header("Location: pages.php?msg=New record created successfully");
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
            <label class="label">Page_Name</label>
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" name="page_name" value =<?php echo $P_Name; ?>>
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
              <label class="label">Page_Title</label>
              <div class="field">
                <div class="control icons-left icons-right">
                  <input class="input" type="" name="page_title" value =<?php echo $P_Title; ?>>
                  <span class="icon left"><i class="mdi mdi-mail"></i></span>
                  <span class="icon right"><i class="mdi mdi-check"></i></span>
                </div>
              </div>
            </div>
          </div>
          <label class="label">Base_slug</label>
          <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="" name="base_slug" value =<?php echo $Base_slug;?>>
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
              <label class="label">Page_Description</label>
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="" name="page_description" value =<?php echo $Page_Description;?> >
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>

          <div class="field grouped">
            <div class="control">
              <button type="submit" name="edit" class="button green">
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
