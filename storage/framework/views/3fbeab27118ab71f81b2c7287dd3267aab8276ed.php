<!--Start Footer-->
<footer>

    <div class="footer-row2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-sm-6  ftr-brand-pp">
                    <a class="navbar-brand mt30 mb25" href="<?php echo e(route('front')); ?>"> <img src="<?php echo e(asset('storage')."/".setting('site.logo')); ?>" alt="<?php echo e(setting('site.title')); ?>" width="250" /></a>
                    <p><?php echo e(setting('site.description')); ?></p>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <h5>Contact Us</h5>
                    <ul class="footer-address-list ftr-details">
                        <li>
                            <span><i class="fas fa-envelope"></i></span>
                            <p>Email <span> <a href="mailto:<?php echo e(setting('site.email')); ?>"><?php echo e(setting('site.email')); ?></a></span></p>
                        </li>
                        <li>
                            <span><i class="fas fa-phone-alt"></i></span>
                            <p>Phone <span> <a href="tel:<?php echo e(setting('site.phone')); ?>"><?php echo e(setting('site.phone')); ?></a></span></p>
                        </li>
                        <li>
                            <span><i class="fas fa-map-marker-alt"></i></span>
                            <p>Address <span> <?php echo e(setting('site.address')); ?></span></p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h5>Company</h5>
                    <ul class="footer-address-list link-hover">
                        <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                        <li><a href="<?php echo e(route('about')); ?>">About Us</a></li>
                        <li><a href="<?php echo e(route('privacy')); ?>">Privacy Policy</a></li>
                        <li><a href="<?php echo e(route('terms')); ?>">Terms and Conditions</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-row3">
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="footer-social-media-icons">
                            <?php if(setting('facebook')): ?>
                            <a href="<?php echo e(setting('facebook')); ?>" target="blank"><i class="fab fa-facebook"></i></a>
                            <?php endif; ?>

                            <?php if(setting('twitter')): ?>
                            <a href="<?php echo e(setting('twitter')); ?>" target="blank"><i class="fab fa-twitter"></i></a>
                            <?php endif; ?>

                            <?php if(setting('instagram')): ?>
                            <a href="<?php echo e(setting('instagram')); ?>" target="blank"><i class="fab fa-instagram"></i></a>
                            <?php endif; ?>

                            <?php if(setting('linkedin')): ?>
                            <a href="<?php echo e(setting('linkedin')); ?>" target="blank"><i class="fab fa-linkedin"></i></a>
                            <?php endif; ?>

                            <?php if(setting('youtube')): ?>
                            <a href="<?php echo e(setting('youtube')); ?>" target="blank"><i class="fab fa-youtube"></i></a>
                            <?php endif; ?>

                            <?php if(setting('pinterest')): ?>
                            <a href="<?php echo e(setting('pinterest')); ?>" target="blank"><i class="fab fa-pinterest-p"></i></a>
                            <?php endif; ?>

                            <?php if(setting('vimeo')): ?>
                            <a href="<?php echo e(setting('vimeo')); ?>" target="blank"><i class="fab fa-vimeo-v"></i></a>
                            <?php endif; ?>

                            <?php if(setting('dribbble')): ?>
                            <a href="<?php echo e(setting('dribbble')); ?>" target="blank"><i class="fab fa-dribbble"></i></a>
                            <?php endif; ?>

                            <?php if(setting('behance')): ?>
                            <a href="<?php echo e(setting('behance')); ?>" target="blank"><i class="fab fa-behance"></i></a>
                            <?php endif; ?>
                        </div>

                        <?php if(setting('site.copyright')): ?>
                        <div class="footer-">
                            <p><?php echo setting('site.copyright'); ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End Footer--><?php /**PATH E:\defence\resources\views/include/front/footer.blade.php ENDPATH**/ ?>