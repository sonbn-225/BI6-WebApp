<html>
    <head>
        <?php $this->load->view('site/head'); ?>
    </head>
    <body>
        <div class="container-fluid">
            <?php $this->load->view('site/container-fluid'); ?>
        </div>

        <div id="welcome menu" class="container-fluid">
            <?php $this->load->view('site/container-fluid-welcome'); ?>
        </div>

        <?php $this->load->view($temp, $this->data); ?>
      
        <footer class="footer style4">
            <?php $this->load->view('site/footer'); ?>
        </footer>
        
        <script type="text/javascript" src="<?php echo public_url('site') ?>/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo public_url('site') ?>/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
    </body>



</html>