<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-
GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
crossorigin="anonymous">
<title>Posts</title>
</head>
<body>

    <h1 style="margin: 50px 50px">Thêm vấn đề mới</h1>
    <form action="<?php echo e(route('issue.store')); ?>" method="POST" style="margin: 50px 50px">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="computer_id" class="form-label">Tên máy</label>
            <select class="form-control" id="computer_id" name="computer_id" required>
                <?php $__currentLoopData = $computer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $computer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($computer->id); ?>"><?php echo e($computer->computer_name); ?> hãng <?php echo e($computer->model); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="reported_by" class="form-label">Người báo cáo</label>
            <input type="text" class="form-control" id="reported_by" name="reported_by" required>
        </div>
        <div class="mb-3">
            <label for="reported_date" class="form-label">Ngày báo cáo</label>
            <input type="datetime-local" class="form-control" id="reported_date" name="reported_date" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="urgency" class="form-label">Mức độ sự cố</label>
            <select class="form-control" id="urgency" name="urgency" required>
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="Hight">Hight</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Trạng thái hiện tại</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Open">Open</option>
                <option value="In Progress">In Progress</option>
                <option value="Resolved">Resolved</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>

</body>
<?php /**PATH C:\xampp\htdocs\qlpc\resources\views/issue/create.blade.php ENDPATH**/ ?>