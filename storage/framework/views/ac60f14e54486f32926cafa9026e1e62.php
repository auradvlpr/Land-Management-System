<?php $__env->startSection('agent'); ?>



<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
	  <a href="<?php echo e(route('agent.add.property')); ?>" class="btn btn-inverse-info"> Add Property    </a>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Package History All </h6>

                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Sl </th>
                        <th>Image </th> 
                        <th>Package </th> 
                        <th>Invoice </th> 
                        <th>Amount  </th> 
                        <th>Date </th> 
                        <th>Action </th> 
                      </tr>
                    </thead>
                    <tbody>
                   <?php $__currentLoopData = $packagehistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($key+1); ?></td>
                        <td><img src="<?php echo e((!empty($item->user->photo)) ? url('upload/agent_images/'.$item->user->photo) : url('upload/no_image.jpg')); ?>" style="width:70px; height:40px;"> </td> 
                        <td><?php echo e($item->package_name); ?></td> 
                        <td><?php echo e($item->invoice); ?></td> 
                        <td><?php echo e($item->package_amount); ?></td> 
                        <td><?php echo e($item->created_at->format('l d M Y')); ?></td> 
                        <td> 
                        <a href="<?php echo e(route('agent.package.invoice',$item->id)); ?>" class="btn btn-inverse-warning" title="Download"> <i data-feather="download"></i> </a> 

                        </td> 
                      </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>









<?php $__env->stopSection(); ?>
<?php echo $__env->make('agent.agent_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/aurabhattacharyya/Documents/localhost/xamppfiles/htdocs/laravelbackup/realestate/resources/views/agent/package/package_history.blade.php ENDPATH**/ ?>