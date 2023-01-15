<div class="top-bar">
    <!-- BEGIN: Breadcrumb -->
    <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Application</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <!-- END: Breadcrumb -->
    <!-- BEGIN: Search -->
    <div class="intro-x relative mr-3 sm:mr-6">
        <a class="notification sm:hidden" href=""> <i data-lucide="search" class="notification__icon dark:text-slate-500"></i> </a>
    </div>
    <!-- END: Search -->
    <!-- BEGIN: Notifications -->
    <div class="intro-x dropdown mr-auto sm:mr-6">
        <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
        <div class="notification-content pt-2 dropdown-menu">
            <div class="notification-content__box dropdown-content">
                <div class="notification-content__title">Notifications</div>
                <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <?php if($notice->image): ?>
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="<?php echo e($notice->title); ?>" class="rounded-full" src="<?php echo e(asset('storage')."/".$notice->image); ?>">
                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                    </div>
                    <?php endif; ?>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="<?php echo e($notice->url); ?>" class="font-medium truncate mr-5"><?php echo e($notice->title); ?></a>
                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap"><?php echo e($notice->created_at->diffForHumans()); ?></div>
                        </div>
                        <div class="w-full truncate text-slate-500 mt-0.5"><?php echo e($notice->details); ?></div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- END: Notifications -->
    <!-- BEGIN: Account Menu -->
    <div class="intro-x dropdown w-8 h-8">
        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
            <?php if(auth()->user()->image): ?>
                <img alt="<?php echo e(auth()->user()->name); ?>" src="<?php echo e(asset('storage/'.auth()->user()->image)); ?>">
            <?php else: ?>
                <img alt="<?php echo e(auth()->user()->name); ?>" src="<?php echo e(asset('student_portal/images/user.png')); ?>">
            <?php endif; ?>
        </div>
        <div class="dropdown-menu w-56">
            <ul class="dropdown-content bg-primary text-white">
                <li class="p-2">
                    <div class="font-medium"><?php echo e(auth()->user()->id); ?></div>
                    <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500"><?php echo e(auth()->user()->name); ?> </div>
                </li>
                <li>
                    <hr class="dropdown-divider border-white/[0.08]">
                </li>
                <li>
                    <a href="<?php echo e(route('profile')); ?>" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                </li>
                <li>
                    <a href="<?php echo e(route('portal.deposit')); ?>" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Fund </a>
                </li>
                <li>
                    <a href="<?php echo e(route('password.request')); ?>" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                </li>
                <li>
                    <hr class="dropdown-divider border-white/[0.08]">
                </li>
                <li>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                    <a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="<?php echo e(route('logout')); ?>" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                </li>
            </ul>
        </div>

    </div>
    <!-- END: Account Menu -->
</div>
<?php /**PATH E:\defence\resources\views/include/std_portal/top_menu.blade.php ENDPATH**/ ?>