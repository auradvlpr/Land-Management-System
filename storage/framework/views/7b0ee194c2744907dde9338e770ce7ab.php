<?php
$property = App\Models\Property::where('status','1')->where('hot','1')->limit(3)->get();
?> 
<section class="deals-section sec-pad">
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Hot Property</h5>
                    <h2>Our Best Deals</h2>
                </div>

 <div class="row clearfix">

 <?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
            <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo e(asset($item->property_thambnail  )); ?>" alt=""></figure>
                        <div class="batch"><i class="icon-11"></i></div>
                        <span class="category">Hot</span>
                    </div>
                    <div class="lower-content">
                        <div class="author-info clearfix">
                            <div class="author pull-left">
                            <?php if($item->agent_id == Null): ?>

<figure class="author-thumb"><img src="<?php echo e(url('upload/ariyan.jpg')); ?>" alt=""></figure>
                           <h6>Admin </h6>

      <?php else: ?>




      <figure class="author-thumb"><img src="<?php echo e((!empty($item->user->photo)) ? url('upload/agent_images/'.$item->user->photo) : url('upload/no_image.jpg')); ?>" alt=""></figure>
                                <h6><?php echo e($item->user->name); ?></h6>
           <?php endif; ?>       
                            </div>
                            <div class="buy-btn pull-right"><a href="property-details.html">For <?php echo e($item->property_status); ?></a></div>
                        </div>
                        <div class="title-text"><h4><a href="<?php echo e(url('property/details/'.$item->id.'/'.$item->property_slug)); ?>"><?php echo e($item->property_name); ?></a></h4></div>
                        <div class="price-box clearfix">
                            <div class="price-info pull-left">
                                <h6>Start From</h6>
                                <h4>$<?php echo e($item->lowest_price); ?></h4>
                            </div>
                            <ul class="other-option pull-right clearfix">
        <li><a aria-label="Compare" class="action-btn" id="<?php echo e($item->id); ?>" onclick="addToCompare(this.id)"><i class="icon-12"></i></a></li>

        <li><a aria-label="Add To Wishlist" class="action-btn" id="<?php echo e($item->id); ?>" onclick="addToWishList(this.id)" ><i class="icon-13"></i></a></li>
    </ul>
                        </div>
                        <p><?php echo e($item->short_descp); ?></p>
                        <ul class="more-details clearfix">
                            <li><i class="icon-14"></i><?php echo e($item->bedrooms); ?> Beds</li>
                            <li><i class="icon-15"></i><?php echo e($item->bathrooms); ?> Baths</li>
                            <li><i class="icon-16"></i><?php echo e($item->property_size); ?> Sq Ft</li>
                        </ul>
     <div class="btn-box"><a href="<?php echo e(url('property/details/'.$item->id.'/'.$item->property_slug)); ?>" class="theme-btn btn-two">See Details</a></div>
                    </div>

                    </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 





 </div>

            </div>
        </section><?php /**PATH /Users/aurabhattacharyya/Documents/localhost/xamppfiles/htdocs/laravelbackup/realestate/resources/views/frontend/home/deals.blade.php ENDPATH**/ ?>