<?php include 'includes/header.php'; ?>



      <?php 
        if(isset($_GET['web-hosting'])){
          include 'includes/web-hosting.php';
        }else if(isset($_GET['reseller-hosting'])){
          include 'includes/reseller-hosting.php';
        }else if(isset($_GET['vps-hosting'])){
          include 'includes/vps-hosting.php';
        }else if(isset($_GET['domains'])){
          include 'includes/domains.php';
        }else if(isset($_GET['contact'])){
          include 'contact.php';
        }else if(isset($_GET['contactform.php'])){
          include 'contactform.php';
        }else {
          include 'includes/index.php';
        }

      ?>
<?php include 'includes/footer.php'; ?>
