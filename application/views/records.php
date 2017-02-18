<!-- index.html -->

<!DOCTYPE html>
<html>
<head>

    <!-- CSS (load bootstrap) -->
    
    <style>
        .navbar { border-radius:0; }
    </style>

    <!-- JS (load angular, ui-router, and our custom js file) -->
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.10.9/js/jquery.dataTables.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-datatables/0.6.0/angular-datatables.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/angular-datatables/0.6.0/css/angular-datatables.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.4.2/angular-ui-router.min.js"></script>
    <!-- <script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script> -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap-tpls.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-animate.js"></script>
    <script src="<?php echo base_url();?>assets/js/apphome.js"></script>
    <script src="<?php echo base_url();?>assets/controllers/RecordsController.js"></script>
    <script src="<?php echo base_url();?>assets/controllers/ModalInstanceCtrl.js"></script>
</head>

<!-- apply our angular app to our site -->
<body ng-app="routerApp">

<!-- NAVIGATION -->
<nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" ui-sref="#">Record Collection</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a ui-sref="records">Records</a></li>
    </ul>
</nav>

<!-- MAIN CONTENT -->
<div class="container">

    <!-- THIS IS WHERE WE WILL INJECT OUR CONTENT ============================== -->
    <div ui-view></div>

</div>

</body>
</html>
