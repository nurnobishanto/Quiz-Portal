<nav class="side-nav ">
    <a href="<?php echo e(route('portal')); ?>" class="intro-x flex items-center pl-5 pt-4">
        <?php if(setting('site.logodark')): ?>
        <img alt="<?php echo e(setting('site.title')); ?>" class="w-48" src="<?php echo e(asset('storage')."/".setting('site.logodark')); ?>">
        <?php else: ?>
        <span class="hidden xl:block text-white text-lg ml-3"> <?php echo e(setting('site.title')); ?> </span>
        <?php endif; ?>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="<?php echo e(route('portal')); ?>" class="side-menu  <?php echo e(((request()->is('portal')) == 1) ? 'side-menu--active' : ''); ?>">
                <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="side-menu__title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('portal.subject')); ?>" class="side-menu <?php echo e(((request()->is('portal/quiz')) == 1) ? 'side-menu--active' : ''); ?>">
                <div class="side-menu__icon"> <i data-lucide="file"></i> </div>
                <div class="side-menu__title">Quiz</div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('portal.attempt')); ?>" class="side-menu <?php echo e(((request()->is('portal/attempt')) == 1) ? 'side-menu--active' : ''); ?>">
                <div class="side-menu__icon"> <i data-lucide="file-check-2"></i> </div>
                <div class="side-menu__title">Attempt Quiz</div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('portal.result')); ?>" class="side-menu <?php echo e(((request()->is('portal/result')) == 1) ? 'side-menu--active' : ''); ?>">
                <div class="side-menu__icon"> <i data-lucide="bar-chart"></i> </div>
                <div class="side-menu__title">Result</div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('portal.deposit')); ?>" class="side-menu <?php echo e(((request()->is('portal/deposit')) == 1) ? 'side-menu--active' : ''); ?>">
                <div class="side-menu__icon"> <i data-lucide="plus-circle"></i> </div>
                <div class="side-menu__title"> Deposit </div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('portal.withdraw')); ?>" class="side-menu <?php echo e(((request()->is('portal/withdraw')) == 1) ? 'side-menu--active' : ''); ?>">
                <div class="side-menu__icon"> <i data-lucide="minus-circle"></i> </div>
                <div class="side-menu__title"> Withdraw </div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('portal.transaction')); ?>" class="side-menu <?php echo e(((request()->is('portal/transaction')) == 1) ? 'side-menu--active' : ''); ?>">
                <div class="side-menu__icon"> <i data-lucide="credit-card"></i> </div>
                <div class="side-menu__title"> Transaction </div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('portal.q_bank.subject')); ?>" class="side-menu <?php echo e(((request()->is('portal/q-bank')) == 1) ? 'side-menu--active' : ''); ?>">
                <div class="side-menu__icon"> <i data-lucide="landmark"></i> </div>
                <div class="side-menu__title"> Question Bank </div>
            </a>
        </li>
        <li>
            <a target="_blank" href="<?php echo e(route('blog')); ?>" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                <div class="side-menu__title"> Blog </div>
            </a>
        </li>
        <li>
            <a target="_blank" href="<?php echo e(route('contact')); ?>" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="help-circle"></i> </div>
                <div class="side-menu__title"> Help </div>
            </a>
        </li>
    </ul>
</nav>
<?php /**PATH E:\defence\resources\views/include/std_portal/side_menu.blade.php ENDPATH**/ ?>