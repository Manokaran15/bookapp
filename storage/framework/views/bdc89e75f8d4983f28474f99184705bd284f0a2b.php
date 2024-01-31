<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Books Details</h1>
        <div class="d-flex justify-content-between">
            <a href="/search-book" class="btn btn-warning me-2">Search Book</a>
            <a href="/user-details" class="btn btn-primary ms-2">User Details</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Authors</th>
                
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($bookInfo)): ?>
            <?php $__currentLoopData = $bookInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <?php if(isset($book['title'])): ?>
                        <?php echo e($book['title']); ?>

                    <?php else: ?>
                        <?php echo e('-'); ?>

                    <?php endif; ?>
                </td>
                <td>
                    <?php if(isset($book['authors'][0]['name'])): ?>
                        <?php echo e($book['authors'][0]['name']); ?>

                    <?php else: ?>
                        <?php echo e('-'); ?>

                    <?php endif; ?>
                </td>
                
                <td>
                    <button class="btn btn-success add-btn" data-url="<?php if(isset($book['url'])): ?><?php echo e($book['url']); ?><?php else: ?><?php echo e('-'); ?><?php endif; ?>" data-title="<?php if(isset($book['title'])): ?><?php echo e($book['title']); ?><?php else: ?><?php echo e('-'); ?><?php endif; ?>" data-authors="<?php if(isset($book['authors'][0]['name'])): ?><?php echo e($book['authors'][0]['name']); ?><?php else: ?><?php echo e('-'); ?><?php endif; ?>" data-pages="<?php if(isset($book['number_of_pages'])): ?><?php echo e($book['number_of_pages']); ?><?php else: ?><?php echo e('-'); ?><?php endif; ?>" data-publishers="<?php if(isset($book['publishers'][0]['name'])): ?><?php echo e($book['publishers'][0]['name']); ?><?php else: ?><?php echo e('-'); ?><?php endif; ?>" data-publish_date="<?php if(isset($book['publish_date'])): ?><?php echo e($book['publish_date']); ?><?php else: ?><?php echo e('-'); ?><?php endif; ?>">
                        Add
                    </button>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\social-login\resources\views/books_details.blade.php ENDPATH**/ ?>