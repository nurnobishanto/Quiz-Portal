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
                                    <li><a href="<?php echo e(route('post',['slug'=>$post->slug])); ?>"><?php echo e($post->title); ?></a></li>
                                </ul>
                            </div>
                            <div class="bread-title">
                                <h2><?php echo e($post->title); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->
    <!--Start Blog Details-->
    <section class="blog-page pad-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-header">
                        <p><?php echo e($post->excerpt); ?></p>
                        <h1><?php echo e($post->title); ?></h1>
                        <div class="row mt20 mb20">
                            <div class="col-md-8 col-9">
                                <div class="media">
                                    <div class="user-image bdr-radius">
                                    <?php if($post->author->photo): ?>

                                            <img src="<?php echo e(asset('storage/'.$post->author->photo)); ?>" alt="<?php echo e($post->author->name); ?>" class="img-fluid" />
                                    <?php endif; ?>
                                   </div>
                                    <div class="media-body user-info">
                                        <a href="<?php echo e(route('blog.author',['id'=>$post->author->id])); ?>">
                                        <h5><?php echo e($post->author->name); ?></h5></a>
                                        <p><?php echo e($post->created_at->diffForHumans()); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-3">
                                <div class="postwatch">
                                    <i class="far fa-eye"></i>
                                        <?php if($post->view<1000): ?>
                                            ( <?php echo e($post->view); ?> )
                                        <?php elseif($post->view<1000000): ?>
                                            ( <?php echo e(round($post->view/1000, 2)); ?>K )
                                        <?php else: ?>
                                            <?php echo e(round($post->view/1000000, 2)); ?>M
                                        <?php endif; ?>
                                    <i class="fas fa-comment-dots"></i>
                                    <?php if(count($post->comments)<1000): ?>
                                       ( <?php echo e(count($post->comments)); ?> )
                                    <?php elseif(count($post->comments)<1000000): ?>
                                       ( <?php echo e(round(count($post->comments)/1000, 2)); ?>K )
                                    <?php else: ?>
                                         <?php echo e(round(count($post->comments)/1000000, 2)); ?>M
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div  class="image-set"><img  src="<?php echo e($post->banner_url); ?>" alt="<?php echo e($post->title); ?>" class="img-fluid" /></div>
                    <div class="blog-content mt30">
                       <?php echo $post->content; ?>

                        <div class="row">
                            <div class="col-lg-8 col-md-8 mt30 mb30">
                                <div class="blog-post-tag">
                                    <span>Releted Tags</span>
                                    <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a><?php echo e($tag->name); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 mt30 mb30">
                                <div class="blog-share-icon text-left text-md-right">
                                    <span>Share: </span>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(url($post->slug)); ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/intent/tweet?text=<?php echo e($post->title); ?>&url=<?php echo e(url($post->slug)); ?>"><i class="fab fa-twitter"></i></a>
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo e(url($post->slug)); ?>&title=<?php echo e($post->title); ?>&summary=<?php echo e($post->excerpt); ?>"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://wa.me/?text=<?php echo e(url($post->slug)); ?>"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="author-block">
                        <div class="media">
                            <div class="user-image">
                                <?php if($post->author->photo): ?>
                                <img src="<?php echo e(asset('storage/'.$post->author->photo)); ?>" alt="<?php echo e($post->author->name); ?>" class="img-fluid" />
                                <?php endif; ?>
                            </div>
                            <div class="media-body user-info">
                                <h5 class="mb10"><?php echo e($post->author->name); ?></h5>
                                <?php echo $post->author->bio; ?>

                            </div>
                        </div>
                    </div>
                    <div class="comments-block mt60">
                        <div class="form-block form-blog mt60">
                            <form action="<?php echo e(route('blog.comment')); ?>" method="post" name="#">
                                <?php echo csrf_field(); ?>
                                <?php if(Session::has('success')): ?>
                                    <div class="alert alert-success">
                                        <?php echo e(Session::get('success')); ?>

                                        <?php
                                            Session::forget('success');
                                        ?>
                                    </div>
                                <?php endif; ?>
                                <div class="fieldsets row">
                                    <input type="number" hidden value="<?php echo e($post->id); ?>" name="blog_post_id">
                                    <div class="col-md-6"><input type="text"  placeholder="Name" name="name" required /></div>
                                    <div class="col-md-6"><input type="email" placeholder="Email" name="email" required/></div>
                                </div>
                                <div class="fieldsets row">
                                    <div class="col-md-12"><input type="text" placeholder="Website" name="website" /></div>
                                </div>
                                <div class="fieldsets"><textarea placeholder="Write Your Comment" name="comment" required></textarea></div>
                                <div class="fieldsets mt10">
                                    <button type="submit" name="#" class="btn-main bg-btn lnk">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                                </div>
                            </form>
                        </div>
                        <h2 class="mt-2 mb-1">Comments:</h2>
                        <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="mb-2">
                                <div class="media-body user-info">
                                    <h5 >
                                        <?php echo e($comment->name); ?> <small>says:</small>
                                        <span> <?php echo e($comment->created_at->diffForHumans()); ?><i class="fas fa-reply"></i></span>
                                    </h5>
                                    <p><?php echo e($comment->comment); ?></p>
                                    <hr>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>
                </div>
                <!--End Blog Details-->
                <!--Start Sidebar-->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <!--Start block for offer/ads-->
                        <div class="offer-image">

                        </div>
                        <!--End block for offer/ads-->
                        <!--Start Recent post-->
                        <div class="recent-post widgets mt60">
                            <h3 class="mb30">Recent post</h3>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="media">
                                    <div class="post-image bdr-radius">
                                        <?php if($post->banner): ?>
                                            <a href="<?php echo e(route('post',['slug'=>$post->slug])); ?>"><img src="<?php echo e($post->banner_url); ?>" alt="<?php echo e($post->title); ?>" class="img-fluid"></a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="media-body post-info">
                                        <h5><a href="#"><?php echo e($post->title); ?></a></h5>
                                        <p><?php echo e($post->updated_at->diffForHumans()); ?></p>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!--Start Recent post-->
                        <!--Start Blog Category-->
                        <div class="recent-post widgets mt60">
                            <h3 class="mb30">Blog Category</h3>
                            <div class="blog-categories">
                                <ul>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e(route('blog.category',['slug'=>$category->slug])); ?>"><?php echo e($category->name); ?> <span class="categories-number">(<?php echo e(count($category->posts)); ?>)</span></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </div>
                        </div>
                        <!--End Blog Category-->
                        <!--Start Tags-->
                        <div class="recent-post widgets mt60">
                            <h3 class="mb30">Most Used Tags</h3>
                            <div class="tabs">
                                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a><?php echo e($tag->name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <!--End Tags-->
                        <!--Start block for offer/ads-->
                        <div class="offer-image mt60">

                        </div>
                        <!--End block for offer/ads-->
                    </div>
                </div>
                <!--End Sidebar-->
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nurnobis/quizportal.online/resources/views/front/blog_content.blade.php ENDPATH**/ ?>