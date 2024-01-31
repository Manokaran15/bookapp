<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>User Details</h1>
        <a href="/search-book" class="btn btn-warning me-2">Search Book</a>
    </div>

    
    <h3 class="text-center p-3">Auth User Table</h3>
    <table class="table auth-user-table">
        <thead>
            <tr>
                <th scope="col">User Id</th>
                <th scope="col">Title</th>
                <th scope="col">Authors</th>
                <th scope="col">Number of Pages</th>
                <th scope="col">Publishers</th>
                <th scope="col">Publish Date</th>
                <th scope="col">URL</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($auth_users)): ?>
            <?php $__currentLoopData = $auth_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auth_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($auth_user['user_id']); ?></td>
                <td><?php echo e($auth_user['title']); ?></td>
                <td><?php echo e($auth_user['authors']); ?></td>
                <td><?php echo e($auth_user['pages']); ?></td>
                <td><?php echo e($auth_user['publishers']); ?></td>
                <td><?php echo e($auth_user['publish_date']); ?></td>
                <td><?php echo e($auth_user['url']); ?></td>
                <td><a href="/delete-book/<?php echo e($auth_user['id']); ?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
    </table>

    
    <h3 class="text-center p-3">Other User Table</h3>
    <table class="table other-user-table">
        <thead>
            <tr>
                <th scope="col">User Id</th>
                <th scope="col">Title</th>
                <th scope="col">Authors</th>
                <th scope="col">Number of Pages</th>
                <th scope="col">Publishers</th>
                <th scope="col">Publish Date</th>
                <th scope="col">URL</th>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($other_users)): ?>
            <?php $__currentLoopData = $other_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($other_user['user_id']); ?></td>
                <td><?php echo e($other_user['title']); ?></td>
                <td><?php echo e($other_user['authors']); ?></td>
                <td><?php echo e($other_user['pages']); ?></td>
                <td><?php echo e($other_user['publishers']); ?></td>
                <td><?php echo e($other_user['publish_date']); ?></td>
                <td><?php echo e($other_user['url']); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\book-app\resources\views/user_details.blade.php ENDPATH**/ ?>