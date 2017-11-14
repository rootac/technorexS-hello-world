<nav class="navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="hidden-md hidden-lg hidden-sm">
                <div class="header_tagline">
                    Awarded &lsquo;National Funder Of The Year&rsquo; 2016
                </div>
            </div>
            <a href='<?= PROJECT_URL; ?>' class="scroll_hide">
                <img src="<?= ASSETS ?>images/bright-energy-logo.png" title='<?= __('login_logo_alt'); ?>' alt='<?= __('login_logo_alt'); ?>' class="main_logo" />
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!--<div class="col-sm-10 col-lg-10 col-md-10">
                <div class="nmenu-main-menu-container">-->
            <ul id="menu-main-menu" class="nav navbar-nav navbar-left">
                <li class="home_link"><!-- DOC: use "active_menu" class for active menu -->
                    <?php echo $this->Html->link('' . __('home') . '', array('controller' => 'pages', 'action' => 'index')); ?>
                </li>
                <li class="boiler_link "><!-- DOC: use "active_menu_boiler" class for active menu -->
                    <?php echo $this->Html->link('' . __('boiler_grants') . '', array('controller' => 'pages', 'action' => 'boiler')); ?>
                </li>
                <li class="heater_link "><!-- DOC: use "active_menu_heater" class for active menu -->
                    <?php echo $this->Html->link('' . __('ele_heat_gr') . '', array('controller' => 'pages', 'action' => 'electric')); ?>
                </li>
                <li class="ins_link "><!-- DOC: use "active_menu_ins" class for active menu -->
                    <?php echo $this->Html->link('' . __('ex_insulation') . '', array('controller' => 'pages', 'action' => 'insulation')); ?>
                </li>

                <li class="room_link "><!-- DOC: use "active_menu_room" class for active menu -->
                    <?php echo $this->Html->link('' . __('rir_insulation') . '', array('controller' => 'pages', 'action' => 'rir')); ?>
                </li>
                <li class="report_link "><!-- DOC: use "active_menu_report" class for active menu -->
                    <?php echo $this->Html->link('' . __('download_free_report') . '', array('controller' => 'pages', 'action' => 'report')); ?>
                </li>
                <li class="landlord_link "><!-- DOC: use "active_menu_landlord" class for active menu -->
                    <?php echo $this->Html->link('' . __('landlords') . '', array('controller' => 'pages', 'action' => 'landlord')); ?>
                </li>
                <li class="about_link "><!-- DOC: use "active_menu_about" class for active menu -->
                    <?php echo $this->Html->link('' . __('about_us') . '', array('controller' => 'pages', 'action' => 'about')); ?>
                </li>
            </ul>
        </div>
        <!--</div>
    </div>-->
    </div>
</nav>
