<?php
$states = App\Models\State::latest()->get();
$ptypes = App\Models\PropertyType::latest()->get();

 ?>

 <section class="banner-section" style="background-image: url(<?php echo e(asset('frontend/assets/images/banner/banner-1.jpg')); ?>);">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="content-box centred">
                        <h2>Create Lasting Wealth Through Realshed</h2>
                        <p>Amet consectetur adipisicing elit sed do eiusmod.</p>
                    </div>
                    <div class="search-field">
                        <div class="tabs-box">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons centred clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1">BUY</li>
                                    <li class="tab-btn" data-tab="#tab-2">RENT</li>
                                </ul>
                            </div>
<div class="tabs-content info-group">
<div class="tab active-tab" id="tab-1">
<div class="inner-box">
<div class="top-search">

<form action="<?php echo e(route('buy.property.search')); ?>" method="post" class="search-form">
    <?php echo csrf_field(); ?> 

    <div class="row clearfix">
        <div class="col-lg-4 col-md-12 col-sm-12 column">
            <div class="form-group">
                <label>Search Property</label>
                <div class="field-input">
                    <i class="fas fa-search"></i>
                    <input type="search" name="search" placeholder="Search by Property, Location or Landmark..." required="">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Location</label>
                <div class="select-box">
                    <i class="far fa-compass"></i>
                    <select name="state" class="wide">
                       <option data-display="Input location">Input location</option>
   <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <option value="<?php echo e($state->state_name); ?>"><?php echo e($state->state_name); ?></option>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Property Type</label>
                <div class="select-box">
                    <select name="ptype_id" class="wide">
                       <option data-display="All Type">All Type</option>
                        <?php $__currentLoopData = $ptypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <option value="<?php echo e($type->type_name); ?>"><?php echo e($type->type_name); ?></option>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="search-btn">
        <button type="submit"><i class="fas fa-search"></i>Search</button>
    </div>
</form>
</div>


 



</div>
</div>
<div class="tab" id="tab-2">
<div class="inner-box">
<div class="top-search">
<form action="<?php echo e(route('rent.property.search')); ?>" method="post" class="search-form">
    <?php echo csrf_field(); ?> 
    
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12 col-sm-12 column">
            <div class="form-group">
                <label>Search Property</label>
                <div class="field-input">
                    <i class="fas fa-search"></i>
                    <input type="search" name="search" placeholder="Search by Property, Location or Landmark..." required="">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Location</label>
                <div class="select-box">
                    <i class="far fa-compass"></i>
                    <select name="state" class="wide">
                       <option data-display="Input location">Input location</option>
   <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <option value="<?php echo e($state->state_name); ?>"><?php echo e($state->state_name); ?></option>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Property Type</label>
                <div class="select-box">
                    <select name="ptype_id" class="wide">
                       <option data-display="All Type">All Type</option>
                        <?php $__currentLoopData = $ptypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <option value="<?php echo e($type->type_name); ?>"><?php echo e($type->type_name); ?></option>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="search-btn">
        <button type="submit"><i class="fas fa-search"></i>Search</button>
    </div>
</form>
</div>


 

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section><?php /**PATH /Users/aurabhattacharyya/Documents/localhost/xamppfiles/htdocs/laravelbackup/realestate/resources/views/frontend/home/banner.blade.php ENDPATH**/ ?>