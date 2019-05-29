<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 55, 'stickySetTop': '-55px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/">
                                <img alt="Tasaweeq" width="120" height="35" data-sticky-width="120" data-sticky-height="35" data-sticky-top="33" src="<?php echo e(asset('uploads/logo.png')); ?>">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row pt-3">
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">
                                <li><a href="http://instagram.com/tsaweeq" target="_blank" title="Instagram">
                                        <i class="fa fa-instagram fa-2x"></i>
                                    </a></li>

                                <li><a href="http://twitter.com/tasaweeq" target="_blank" title="Linkedin">
                                        <i class="fa fa-twitter fa-2x"></i>
                                    </a></li>
                                <li>
                                <li><a href="https://www.linkedin.com/company/tasaweeq" target="_blank" title="Linkedin">
                                        <i class="fa fa-linkedin fa-2x"></i>
                                    </a></li>
                                <li>
                                    <a class="nav-link" href="/">
                                        English
                                    </a>

                                </li>
                            </ul>
                        </nav>

                    </div>
                    <div class="header-row">
                        <div class="header-nav">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="">
                                            <a class="nav-link" href="/home-ar">
                                                الرئيسية
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="nav-link" href="/about-ar">
                                                عن تساويق </a>
                                        </li>

                                        <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item->services->count()): ?>

                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" onclick="return false" style="cursor:default" href="/">
                                                <?php echo e($item->title_ar); ?>

                                            </a>
                                            <ul class="dropdown-menu">
                                                <?php $__currentLoopData = $item->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <a class="dropdown-item" href="<?php echo e(url('services_ar/'.$submenu->id)); ?>"><?php echo e($submenu->title_ar); ?></a>
                                                </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>

                                        </li>

                                        <?php else: ?>
                                        <li class="">
                                            <a class="nav-link" href="/">
                                                <?php echo e($item->title_ar); ?>

                                            </a>

                                        </li>

                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                        <li class="">
                                            <a class="nav-link" href="/workspace-ar">
                                                نطاق العمل </a>
                                        </li>
                                        <li class="">
                                            <a class="nav-link" href="/clients-ar">
                                                عملاءنا </a>
                                        </li>

                                        



                                        <li class="">
                                            <a class="nav-link" href="/contact-ar">
                                                إتصل بنا </a>

                                        </li>


                                        <li class="">
                                            <a class="nav-link" href="/careers-ar">
                                                وظائف </a>

                                        </li>

                                        

                                        

                                    </ul>
                                </nav>
                            </div>

                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>