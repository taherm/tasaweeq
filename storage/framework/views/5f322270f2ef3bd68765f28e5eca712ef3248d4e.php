<?php $__env->startSection('content'); ?>






<div class="container">
    
<div class="row text-center mt-5">
    <div class="owl-carousel owl-theme" data-plugin-options="{'items': 6, 'autoplay': true, 'autoplayTimeout': 3000}">
        <div>
            <img class="img-fluid" src="<?php echo e(asset('img/logos/logo-1.png')); ?>" alt="">
        </div>
        <div>
            <img class="img-fluid" src="<?php echo e(asset('img/logos/logo-2.png')); ?>" alt="">
        </div>
        <div>
            <img class="img-fluid" src="<?php echo e(asset('img/logos/logo-3.png')); ?>" alt="">
        </div>
        <div>
            <img class="img-fluid" src="<?php echo e(asset('img/logos/logo-4.png')); ?>" alt="">
        </div>
        <div>
            <img class="img-fluid" src="<?php echo e(asset('img/logos/logo-5.png')); ?>" alt="">
        </div>
        <div>
            <img class="img-fluid" src="<?php echo e(asset('img/logos/logo-6.png')); ?>" alt="">
        </div>

    </div>
</div>
</div>




<br>
<div class="container">

    <div class="row align-items-center">
        <div class="col-lg-12">
            <p>
                The majority of traditional marketers create their yearly marketing campaigns by advertising on social
                media networks, television, and other outlets. They then design a number of print media packages and
                assign a budget. At the end of every year, the process is repeated where they may add an extra 10% to
                their new budgets in an attempt to increase the volume of their campaigns. However, the end result is
                always the same.. <a href="/about" style="color:#0099e6 !important">More</a>
            </p>
        </div>

    </div>

</div>

<br>



<div class="container">



    <div class="row portfolio-list sort-destination" data-sort-id="portfolio">

        <?php $__currentLoopData = $ser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 isotope-item websites" id="websites">
            <div class="portfolio-item">
                <a href="<?php echo e(url('services_en/'.$s->id)); ?>">
                    <span class="thumb-info thumb-info-lighten thumb-info-bottom-info thumb-info-centered-icons">
                        <span class="thumb-info-wrapper">
                            <img src="<?php echo e(asset('uploads/'.$s->image)); ?>" class="img-fluid" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner text-1 line-height-xs pt-1"><?php echo e($s->title_en); ?></span>

                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </div>
</div>



<div class="container">

    <div class="row align-items-center">
        <div class="col-lg-12">
            <form action="/send-mail" method="POST">
                <?php echo e(csrf_field()); ?>


                <div class="form-row">
                    <div class="form-group col">
                        <label>Your name *</label>
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label>Your email address *</label>
                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label>Subject *</label>
                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label>Message *</label>
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <input type="submit" style="color:white !important" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                    </div>
                </div>
            </form>



        </div>

    </div>
    <div class="row">
        <div class="col-md-4">
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>

            <?php endif; ?>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-en', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>