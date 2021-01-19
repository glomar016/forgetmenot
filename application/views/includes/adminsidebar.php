<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url()?>resources/images/icon/logo.png" alt="Forget-Me-Not" />_
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li <?php if($this->router->fetch_class() == 'home') {?> class="active has-sub" <?php } ?>>
                            <a class="js-arrow" href="<?php echo base_url()?>user/home">
                                <i class="fas fa-home"></i>Home</a>
                        </li>
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
                        <li <?php if($this->router->fetch_class() == 'settings') {?> class="active has-sub" <?php } ?>> 
                            <a href="<?php echo base_url()?>user/work">
                                <i class="fas fa-user-circle"></i>Settings</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>