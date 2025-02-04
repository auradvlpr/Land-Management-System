<?php
$agents = App\Models\User::where('status','active')->where('role','agent')->orderBy('id','DESC')->limit(5)->get();
 ?>
<section class="team-section sec-pad centred bg-color-1">
            <div class="pattern-layer" style="background-image: url(<?php echo e(asset('frontend/assets/images/shape/shape-1.png')); ?>);"></div>
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Our Agents</h5>
                    <h2>Meet Our Excellent Agents</h2>
                </div>
                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                <?php $__currentLoopData = $agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="team-block-one">
        <div class="inner-box">
            <figure class="image-box"><img src="<?php echo e((!empty($item->photo)) ? url('upload/agent_images/'.$item->photo) : url('upload/no_image.jpg')); ?>" alt="" style="width:370px; height:370px;" ></figure>
            <div class="lower-content">
                <div class="inner">
                <h4><a href="<?php echo e(route('agent.details',$item->id)); ?>"><?php echo e($item->name); ?></a></h4>
                    <span class="designation"><?php echo e($item->email); ?></span>
                    <ul class="social-links clearfix">
                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>           
                </div>
            </div>
        </section><?php /**PATH /Users/aurabhattacharyya/Documents/localhost/xamppfiles/htdocs/laravelbackup/realestate/resources/views/frontend/home/team.blade.php ENDPATH**/ ?>