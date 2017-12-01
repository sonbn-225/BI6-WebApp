<div class="row">
    <nav class="navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo base_url(); ?>" class="navbar-brand"><img src="<?php echo public_url('site') ?>/images/logo.png" style="width: 400px; height:100px;" alt="Logo"></a>
            </div>

            <div class="navbar-collapse collapse" id="menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="dropdown"><a href="" data-toggle="dropdown">Menu<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php foreach($catalog_list as $row): ?>
                                <li><a href="<?php echo base_url('menu/'.seoname($row->name).'/'.$row->id_catalog); ?>"><?php echo $row->name; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>                
                    <li><a href="<?php echo base_url('gallery'); ?>">Gallery</a></li>
                    <li><a href="<?php echo base_url('cart'); ?>">Cart</a></li>
                    <li><a href="<?php echo base_url('signup'); ?>" id="SignUp">Sign Up</a></li>
                    <li><a href="<?php echo base_url('login'); ?>" id="LogIn">Log In</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>