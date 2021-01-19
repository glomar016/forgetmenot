<header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo base_url()?>resources/images/icon/forgetmenot.png" alt="Forget-Me-Not" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li <?php if($this->router->fetch_class() == 'education') {?> class="active has-sub" <?php } ?>>
                            <a class="js-arrow" href="<?php echo base_url()?>user/education">
                                <i class="fas fa-tachometer-alt"></i>Education</a>
                        </li>
                        <li <?php if($this->router->fetch_class() == 'personal') {?> class="active has-sub" <?php } ?>> 
                            <a href="<?php echo base_url()?>user/personal">
                                <i class="fas fa-archive"></i>Personal</a>
                        </li>
                        <li <?php if($this->router->fetch_class() == 'work') {?> class="active has-sub" <?php } ?>> 
                            <a href="<?php echo base_url()?>user/work">
                                <i class="fas fa-trophy"></i>Work</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>