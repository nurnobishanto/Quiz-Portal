<?php $__env->startSection('content'); ?>
    <!--Breadcrumb Area-->
    <section class="breadcrumb-area ">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
                                <ul>
                                    <li><a href="<?php echo e(route('front')); ?>">Home</a></li>
                                    <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                                </ul>
                            </div>
                            <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                                <h2>Contact</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->

    <!--Start Enquire Form-->
    <section class="contact-page pad-tb">
        <div class="container">
            <div class="row justify-content-center">


                <div class="col-lg-5 contact2dv">

                    <div class="info-wrapr">
                        <h3 class="mb-4">Contact us</h3>
                        <div class="dbox d-flex align-items-start">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="fas fa-map-marker"></i>
                            </div>
                            <div class="text pl-4">
                                <p><span>Address:</span><?php echo e(setting('site.address')); ?></p>
                            </div>
                        </div>
                        <div class="dbox d-flex align-items-start">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="text pl-4">
                                <p><span>Phone:</span> <a href="tel:<?php echo e(setting('site.phone')); ?>"><?php echo e(setting('site.phone')); ?></a></p>
                            </div>
                        </div>
                        <div class="dbox d-flex align-items-start">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="text pl-4">
                                <p><span>Email:</span> <a href="mailto:<?php echo e(setting('site.email')); ?>"><?php echo e(setting('site.email')); ?></a></p>
                            </div>
                        </div>
                        <div class="dbox d-flex align-items-start">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="text pl-4">
                                <p><span>Website</span> <a href="<?php echo e(setting('website')); ?>"><?php echo e(setting('website')); ?></a></p>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-lg-7 m-mt30 pr30 pl30">
                    <div class="common-heading text-l">
                        <h2 class="mt0 mb0">Get in touch</h2>
                        <p class="mb60 mt10">We will catch you as early as we receive the message</p>
                    </div>
                    <div class="form-block">
                        <form method="post" action="<?php echo e(route('contact.store')); ?>" id="contactForm" data-bs-toggle="validator" class="shake">
                            <?php echo csrf_field(); ?>
                            <?php if(Session::has('success')): ?>
                                <div class="alert alert-success">
                                    <?php echo e(Session::get('success')); ?>

                                    <?php
                                        Session::forget('success');
                                    ?>
                                </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <input name="name" type="text"  id="name" placeholder="Enter name" required data-error="Please fill Out">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input name="email" type="email"  id="email" placeholder="Enter email" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <input name="phone" type="text" id="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input name="subject" type="text" id="subject" placeholder="Enter Subject" required data-error="Please fill Out">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" rows="5" placeholder="Enter your message" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1" checked="checked">
                                <label class="custom-control-label" for="customCheck">I agree to the <a href="<?php echo e(route('terms')); ?>">Terms &amp; Conditions</a> of Business Name.</label>
                            </div>
                            <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span class="circle"></span>Submit</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                            <p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>
                        </form>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!--End Enquire Form-->


    <?php if(setting('site.iframe')): ?>
    <!--Start Location-->
    <div class="contact-location">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="map-div">
                        <iframe src="<?php echo e(setting('site.iframe')); ?>" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!--End Location-->
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nurnobis/quizportal.online/resources/views/front/contact.blade.php ENDPATH**/ ?>