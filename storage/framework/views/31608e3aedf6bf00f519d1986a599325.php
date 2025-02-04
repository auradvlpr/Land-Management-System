<?php
$ptype = App\Models\PropertyType::latest()->limit(5)->get();
?>


<section class="category-section centred">
<div class="auto-container">
<div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
<ul class="category-list clearfix">

<?php $__currentLoopData = $ptype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
	$property = App\Models\Property::where('ptype_id',$item->id)->get();
?>
<li>
<div class="category-block-one">
<div class="inner-box">
<div class="icon-box"><i class="<?php echo e($item->type_icon); ?>"></i></div>
<h5><a href="<?php echo e(route('property.type',$item->id)); ?>"><?php echo e($item->type_name); ?></a></h5>
<span><?php echo e(count($property)); ?></span>
</div>
</div>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<div class="more-btn"><a href="categories.html" class="theme-btn btn-one">All Categories</a></div>
</div>
</div>
</section><?php /**PATH /Users/aurabhattacharyya/Documents/localhost/xamppfiles/htdocs/laravelbackup/realestate/resources/views/frontend/home/category.blade.php ENDPATH**/ ?>