<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Book API Example</h1>

    <form action="/books-details" method="post">
        <?php echo csrf_field(); ?>
        <label for="query">Enter ISBN or Title:</label>
        <input type="text" name="query" required>

        <label for="search_type">Search Type:</label>
        <select name="search_type">
            <option value="isbn">ISBN</option>
            <option value="title">Title</option>
        </select>

        <button type="submit" class="btn btn-primary">Search</button>
    </form>

    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\social-login\resources\views/index.blade.php ENDPATH**/ ?>