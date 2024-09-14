<?php
include_once "lib/load.php";
get_page("_head");
?>
 
<body class="d-flex align-items-center py-4 bg-body-tertiary">
  
    
<?php
get_page("_main");
?>        

    
<main class="form-signin w-100 m-auto">
 <?php 
get_page("_login");?>
</main>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
