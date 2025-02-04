<?php
    $skip_state_0 = App\Models\State::skip(0)->first();
    $property_0 = $skip_state_0 ? App\Models\Property::where('state', $skip_state_0->id)->get() : [];

    $skip_state_1 = App\Models\State::skip(1)->first();
    $property_1 = $skip_state_1 ? App\Models\Property::where('state', $skip_state_1->id)->get() : [];

    $skip_state_2 = App\Models\State::skip(2)->first();
    $property_2 = $skip_state_2 ? App\Models\Property::where('state', $skip_state_2->id)->get() : [];

    $skip_state_3 = App\Models\State::skip(3)->first();
    $property_3 = $skip_state_3 ? App\Models\Property::where('state', $skip_state_3->id)->get() : [];
?>

<section class="place-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred">
            <h5>Top Places</h5>
            <h2>Most Popular Places</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt <br />labore dolore magna aliqua enim.</p>
        </div>
        <div class="sortable-masonry">
            <div class="items-container row clearfix">

                <?php if($skip_state_0): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration brand marketing software">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="<?php echo e(asset($skip_state_0->state_image)); ?>" alt="" style="width:370px; height:580px;"></figure>
                            <div class="text">
                            <h4><a href="<?php echo e(route('state.details',$skip_state_0->id)); ?>"><?php echo e($skip_state_0->state_name); ?></a></h4>
                                <p><?php echo e(count($property_0)); ?> Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($skip_state_1): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration brand marketing software">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="<?php echo e(asset($skip_state_1->state_image)); ?>" alt="" style="width:370px; height:580px;"></figure>
                            <div class="text">
                            <h4><a href="<?php echo e(route('state.details',$skip_state_1->id)); ?>"><?php echo e($skip_state_1->state_name); ?></a></h4>
                                <p><?php echo e(count($property_1)); ?> Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($skip_state_2): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration brand marketing software">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="<?php echo e(asset($skip_state_2->state_image)); ?>" alt="" style="width:370px; height:580px;"></figure>
                            <div class="text">
                            <h4><a href="<?php echo e(route('state.details',$skip_state_2->id)); ?>"><?php echo e($skip_state_2->state_name); ?></a></h4>
                                <p><?php echo e(count($property_2)); ?> Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($skip_state_3): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration brand marketing software">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="<?php echo e(asset($skip_state_3->state_image)); ?>" alt="" style="width:370px; height:580px;"></figure>
                            <div class="text">
                            <h4><a href="<?php echo e(route('state.details',$skip_state_3->id)); ?>"><?php echo e($skip_state_3->state_name); ?></a></h4>
                                <p><?php echo e(count($property_3)); ?> Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<?php /**PATH /Users/aurabhattacharyya/Documents/localhost/xamppfiles/htdocs/laravelbackup/realestate/resources/views/frontend/home/place.blade.php ENDPATH**/ ?>