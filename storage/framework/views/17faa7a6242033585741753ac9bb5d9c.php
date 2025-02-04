<?php

$blog = App\Models\BlogPost::latest()->limit(3)->get();
?>

<section class="news-section sec-pad">
           <div class="auto-container">
               <div class="sec-title centred">
                   <h5>News & Article</h5>
                   <h2>Stay Update With Realshed</h2>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt <br />labore dolore magna aliqua enim.</p>
               </div>
               <div class="row clearfix">
                   
<?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
<div class="col-lg-4 col-md-6 col-sm-12 news-block">
   <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
       <div class="inner-box">
           <div class="image-box">
               <figure class="image"><a href="<?php echo e(url('blog/details/'.$item->post_slug)); ?>"><img src="<?php echo e(asset($item->post_image)); ?>" alt=""></a></figure>
               <span class="category">New</span>
           </div>
           <div class="lower-content">
               <h4><a href="<?php echo e(url('blog/details/'.$item->post_slug)); ?>"><?php echo e($item->post_title); ?></a></h4>
               <ul class="post-info clearfix">
                   <li class="author-box">
                       <figure class="author-thumb"><img src="<?php echo e((!empty($item->user->photo)) ? url('upload/admin_images/'.$item->user->photo) : url('upload/no_image.jpg')); ?>" alt=""></figure>
                       <h5><a href=" "><?php echo e($item['user']['name']); ?></a></h5>
                   </li>
                   <li><?php echo e($item->created_at->format('M d Y')); ?></li>
               </ul>
               <div class="text">
                   <p> <?php echo e($item->short_descp); ?></p>
               </div>
               <div class="btn-box">
                   <a href="<?php echo e(url('blog/details/'.$item->post_slug)); ?>" class="theme-btn btn-two">See Details</a>
               </div>
           </div>
       </div>
   </div>
</div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>               





               </div>
           </div>
       </section><?php /**PATH /Users/aurabhattacharyya/Documents/localhost/xamppfiles/htdocs/laravelbackup/realestate/resources/views/frontend/home/news.blade.php ENDPATH**/ ?>