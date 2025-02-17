

<div class="table-responsive">
                <table class="table mb-0">

                    <thead class="table-light">
                    
                        <tr>

                            <th> Id </th>



                            <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <th><?php echo e(Str::title($header)); ?></th>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            <?php if( $headers == "Image"  ): ?>

                                <th> Image </th>

                            <?php endif; ?>


                            <th>Action</th>



                        </tr>
                    </thead>
                    <tbody>

                        <?php $__currentLoopData = $arrayData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo e($loop->iteration); ?>

                                </td>

                                <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td><?php echo e($row[$column] ?? 'N/A'); ?></td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                <?php if( $row["image"] || $row["thumbnail"] || $row["image-1"] ): ?>

                                <td>
                                    <img src="<?php echo e($row["image"] ?? $row["thumbnail"] ?? $row["image-1"]); ?>" alt="" style="max-width: 120px ; max-height: 120px ">
                                </td>
                                    
                                <?php endif; ?>

                                <td>

                                    <a href="<?php echo e(route($editUrl ,["id" => $row["id"]] )); ?>" class="btn btn-success">Modify</a>

                                    <a href="<?php echo e(route($deleteUrl  ,["id" => $row["id"]] )); ?>" class="btn btn-danger">Delete</a>

                               
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </tbody>
                </table>
            </div>

<?php /**PATH C:\Users\DESKTOP\Desktop\Models Laravel\resources\views/components/admin/table.blade.php ENDPATH**/ ?>