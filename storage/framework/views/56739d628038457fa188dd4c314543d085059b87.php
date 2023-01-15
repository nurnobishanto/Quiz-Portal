<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="<?php echo e(route('portal')); ?>" class="flex mr-auto">
            <img alt="<?php echo e(setting('site.title')); ?>" class="w-48" src="<?php echo e(asset('storage')."/".setting('site.logodark')); ?>">
        </a>
        <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <div class="scrollable">
        <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>

        <ul class="scrollable__content py-2">
            <li>
                <a href="<?php echo e(route('portal')); ?>" class="menu  <?php echo e(((request()->is('portal')) == 1) ? 'menu--active' : ''); ?>">
                    <div class="menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="menu__title">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('portal.subject')); ?>" class="menu <?php echo e(((request()->is('portal/quiz')) == 1) ? 'menu--active' : ''); ?>">
                    <div class="menu__icon"> <i data-lucide="file"></i> </div>
                    <div class="menu__title">Quiz</div>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('portal.attempt')); ?>" class="menu <?php echo e(((request()->is('portal/attempt')) == 1) ? 'menu--active' : ''); ?>">
                    <div class="menu__icon"> <i data-lucide="file-check-2"></i> </div>
                    <div class="menu__title">Attempt Quiz</div>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('portal.result')); ?>" class="menu <?php echo e(((request()->is('portal/result')) == 1) ? 'menu--active' : ''); ?>">
                    <div class="menu__icon"> <i data-lucide="bar-chart"></i> </div>
                    <div class="menu__title">Result</div>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('portal.deposit')); ?>" class="menu <?php echo e(((request()->is('portal/deposit')) == 1) ? 'menu--active' : ''); ?>">
                    <div class="menu__icon"> <i data-lucide="plus-circle"></i> </div>
                    <div class="menu__title"> Deposit </div>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('portal.withdraw')); ?>" class="menu <?php echo e(((request()->is('portal/withdraw')) == 1) ? 'menu--active' : ''); ?>">
                    <div class="menu__icon"> <i data-lucide="minus-circle"></i> </div>
                    <div class="menu__title"> Withdraw </div>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('portal.transaction')); ?>" class="menu <?php echo e(((request()->is('portal/transaction')) == 1) ? 'menu--active' : ''); ?>">
                    <div class="menu__icon"> <i data-lucide="credit-card"></i> </div>
                    <div class="menu__title"> Transaction </div>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('portal.q_bank.subject')); ?>" class="menu <?php echo e(((request()->is('portal/q-bank')) == 1) ? 'menu--active' : ''); ?>">
                    <div class="menu__icon"> <i data-lucide="landmark"></i> </div>
                    <div class="menu__title"> Question Bank </div>
                </a>
            </li>
            <li>
                <a target="_blank" href="<?php echo e(route('blog')); ?>" class="menu">
                    <div class="menu__icon"> <i data-lucide="file-text"></i> </div>
                    <div class="menu__title"> Blog </div>
                </a>
            </li>
            <li>
                <a target="_blank" href="<?php echo e(route('contact')); ?>" class="menu">
                    <div class="menu__icon"> <i data-lucide="help-circle"></i> </div>
                    <div class="menu__title"> Help </div>
                </a>
            </li>
        </ul>
    </div>
</div><?php /**PATH E:\defence\resources\views/include/std_portal/mobile_menu.blade.php ENDPATH**/ ?>