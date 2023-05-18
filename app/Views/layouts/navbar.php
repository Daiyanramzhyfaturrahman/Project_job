<header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="coba"><img src="/assets/img/logo/ini logo.jpeg" alt="" width="200"></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="coba">Home</a></li>
                                            <li><a href="job">Find a Jobs </a></li>
                                            <?php if (session('loggedIn', true)): ?>
                                            <li><a href="job/new">New</a></li>
                                            <?php endif; ?>
                                            <?php if (session('loggedIn', true)): ?>
                                                <?php else: ?>
                                            <li><a href="about">About</a></li>
                                            <?php endif; ?>

                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <?php if (session('loggedIn', true)): ?>
                                <div class="header-btn d-none f-right d-lg-block">
                                    <!-- <a href="register" class="btn head-btn2">Register</a> -->
                                    <a href="logout" class="btn head-btn2">Logout</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>