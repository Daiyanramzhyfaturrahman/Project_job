<html>
    <head>
        <?= $this->include('layouts/head') ?>
    </head>
    <body>
            <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="/assets/img/logo/ini logo.jpeg" alt=""width="200" height="16">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
        <?= $this->include('layouts/navbar') ?>

        <main role="main " class="container">
            <?= $this->include('layouts/header') ?>

            <?= $this->renderSection('content') ?>
        </main>
        <?= $this->include('layouts2/footer') ?>

        <?= $this->include('layouts/scripts') ?>
    </body>
</html>