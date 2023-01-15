<?php $__env->startSection('content'); ?>
    <!--Breadcrumb Area-->
    <section class="breadcrumb-area banner-1">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-menu">
                                <ul>
                                    <li><a href="<?php echo e(route('front')); ?>">Home</a></li>
                                    <li><a href="<?php echo e(route('blog')); ?>">Blog</a></li>
                                </ul>
                            </div>
                            <div class="bread-title">
                                <h2><?php echo e($title); ?> Posts</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->
    <!--Start Blog Grid-->
    <section class="blog-page pad-tb pt40">
        <div class="container">

            <div class="row">

                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 mt60">
                    <div class="single-blog-post- shdo">
                        <div class="single-blog-img-">
                            <?php if($post->banner): ?>
                                <a href="<?php echo e(route('post',['slug'=>$post->slug])); ?>"><img src="<?php echo e($post->banner_url); ?>" alt="<?php echo e($post->title); ?>" class="img-fluid"></a>
                            <?php endif; ?>

                            <div class="entry-blog-post dg-bg2">
                                <span class="bypost-"><a href="<?php echo e(route('blog.category',['slug'=>$post->category->slug])); ?>"><i class="fas fa-tag"></i> <?php echo e($post->category->name); ?></a></span>
                                <span class="bypost"><a href="<?php echo e(route('blog.author',['id'=>$post->author->id])); ?>"><i class="fas fa-user"></i> <?php echo e($post->author->name); ?></a></span>
                            </div>
                        </div>
                        <div class="blog-content-tt">
                            <div class="single-blog-info-">
                                <div class="entry-blog">
                                    <span>
                                        <a href="#"><i class="fas fa-comment-dots"></i>
                                           <?php if(count($post->comments)<1000): ?>
                                                ( <?php echo e(count($post->comments)); ?> )
                                            <?php elseif(count($post->comments)<1000000): ?>
                                                ( <?php echo e(round(count($post->comments)/1000, 2)); ?>K )
                                            <?php else: ?>
                                                 <?php echo e(round(count($post->comments)/1000000, 2)); ?>M
                                            <?php endif; ?>
                                        </a>
                                    </span>
                                    <span class="posted-on">
                                        <a href="#"><i class="fas fa-eye"></i>
                                            <?php if($post->view<1000): ?>
                                            <?php echo e($post->view); ?>

                                            <?php elseif($post->view<1000000): ?>
                                                <?php echo e(round($post->view/1000, 2)); ?>K
                                            <?php else: ?>
                                                <?php echo e(round($post->view/1000000, 2)); ?>M
                                            <?php endif; ?>
                                        </a>
                                    </span>
                                    <span class="posted-on"><a href="#"><i class="fas fa-clock"></i> <?php echo e($post->updated_at->diffForHumans()); ?></a></span>

                                </div>
                                <h4><a href="<?php echo e(route('post',['slug'=>$post->slug])); ?>"><?php echo e($post->title); ?></a></h4>
                                <p><?php echo e($post->excerpt); ?></p>
                            </div>
                            <div class="post-social">
                                <div class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                    <div class="ss-inline-share-content">
                                        <div class="ss-social-icons-container">
                                            <a href="javascript:void(0)">Shares</a>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(url($post->slug)); ?>"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://twitter.com/intent/tweet?text=<?php echo e($post->title); ?>&url=<?php echo e(url($post->slug)); ?>"><i class="fab fa-twitter"></i></a>
                                            <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo e(url($post->slug)); ?>&title=<?php echo e($post->title); ?>&summary=<?php echo e($post->excerpt); ?>"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="https://wa.me/?text=<?php echo e(url($post->slug)); ?>"><i class="fab fa-whatsapp"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </div>

        </div>
    </section>
    <!--End Blog Grid-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nurnobis/quizportal.online/resources/views/front/blog.blade.php ENDPATH**/ ?>