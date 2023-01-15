<!--Start sidebar -->
<div class="niwaxofcanvas offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample">
    <div class="offcanvas-body">
        <div class="cbtn animation">
            <div class="btnclose"> <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
        </div>
        <div class="form-block sidebarform">
            <h4>Request A Quote</h4>
            <form id="contactForm" data-bs-toggle="validator" class="shake mt20" method="post" action="<?php echo e(route('contact.store')); ?>">
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
                    <div class="form-group col-sm-12">
                        <input name="name" type="text"  id="name" placeholder="Enter name" required data-error="Please fill Out">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-12">
                        <input name="email" type="email"  id="email" placeholder="Enter email" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <input name="phone" type="text" id="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-12">
                        <input name="subject" type="text" id="subject" placeholder="Enter Subject" required data-error="Please fill Out">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" rows="5" placeholder="Enter your message" required></textarea>
                    <div class="help-block with-errors"></div>
                </div>
                <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span class="circle"></span></button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="getintouchblock mt30">
            <h4>Get In Touch</h4>
            <p class="mt10">Please fill out the form below if you have a plan or project in mind that you'd like to share with us.</p>
            <div class="media mt15">
                <div class="icondive"><img src="<?php echo e(asset('frontsite')); ?>/images/icons/call.svg" alt="icon"></div>
                <div class="media-body getintouchinfo">
                    <a href="tel:<?php echo e(setting('site.phone')); ?>"><?php echo e(setting('site.phone')); ?> <span>Sun-Thur 9am - 9pm</span></a>
                </div>
            </div>
            <div class="media mt15">
                <div class="icondive"><img src="<?php echo e(asset('frontsite')); ?>/images/icons/whatsapp.svg" alt="icon"></div>
                <div class="media-body getintouchinfo">
                    <a href="tel:<?php echo e(setting('site.whatsapp')); ?>"><?php echo e(setting('site.whatsapp')); ?> <span>Mon-Fri 8am - 11pm</span></a>
                </div>
            </div>
            <div class="media mt15">
                <div class="icondive"><img src="<?php echo e(asset('frontsite')); ?>/images/icons/mail.svg" alt="icon"></div>
                <div class="media-body getintouchinfo">
                    <a href="mailto:<?php echo e(setting('site.enail')); ?>"><?php echo e(setting('site.email')); ?> <span>Online Support</span></a>
                </div>
            </div>
            <div class="media mt15">
                <div class="icondive"><img src="<?php echo e(asset('frontsite')); ?>/images/icons/map.svg" alt="icon"></div>
                <div class="media-body getintouchinfo">
                    <a href="mailto:<?php echo e(setting('site.enail')); ?>"><?php echo e(setting('site.address')); ?><span>Visit Our Office</span></a>
                </div>
            </div>
        </div>
        <div class="contact-data mt30">
            <h4>Follow Us On:</h4>
            <div class="social-media-linkz mt10">
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
        </div>
    </div>
</div>
<!--end sidebar -->
<?php /**PATH E:\defence\resources\views/include/front/nav_sidebar.blade.php ENDPATH**/ ?>