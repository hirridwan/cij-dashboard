
<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo">
                <img src="<?php echo e(asset('images/p2p.png')); ?>" alt="logo">
            </div>
            <h4>Hello! let's get started</h4>
            <h6 class="fw-light">Sign in to continue.</h6>
            <form class="pt-3" wire:submit.prevent="login">
                <div class="form-group">
                <input wire:model="email" type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                <input wire:model="password" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    </div><?php /**PATH C:\xampp\htdocs\cij-dashboard\resources\views/livewire/auth/login.blade.php ENDPATH**/ ?>