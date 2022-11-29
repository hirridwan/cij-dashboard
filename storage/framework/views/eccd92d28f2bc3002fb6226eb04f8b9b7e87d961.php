<div>
  <nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand"> Noble<span>UI</span> </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <?php $__empty_1 = true; $__currentLoopData = menu('dashboard_user','_json'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <li class="nav-item">
          <a href="<?php echo e($menu->url); ?>" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title"><?php echo e($menu->title); ?></span>
          </a>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    
        <?php endif; ?>
      </ul>
    </div>
  </nav>
</div><?php /**PATH C:\xampp\htdocs\cij-dashboard\resources\views/livewire/app/component/sidebar.blade.php ENDPATH**/ ?>