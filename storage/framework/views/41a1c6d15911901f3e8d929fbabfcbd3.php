<?php
 $tesimonials = App\Models\Testimonial::latest()->get();
?>

  <section class="testimonial-section bg-color-1 centred">
            <div class="pattern-layer" style="background-image: url(<?php echo e(asset('frontend/assets/images/shape/shape-1.png')); ?>);"></div>
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Testimonials</h5>
                    <h2>What They Say About Us</h2>
                </div>
                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">

        <?php $__currentLoopData = $tesimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="testimonial-block-one">
            <div class="inner-box">
                <figure class="thumb-box"><img src="<?php echo e(asset($item->image)); ?>" alt=""></figure>
                <div class="text">
                    <p><?php echo e($item->message); ?></p>
                </div>
                <div class="author-info">
                    <h4><?php echo e($item->name); ?></h4>
                    <span class="designation"><?php echo e($item->position); ?></span>
                </div>
            </div>
        </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>         
                
                </div>
            </div>
        </section><?php /**PATH /Users/aurabhattacharyya/Documents/localhost/xamppfiles/htdocs/laravelbackup/realestate/resources/views/frontend/home/testimonial.blade.php ENDPATH**/ ?>