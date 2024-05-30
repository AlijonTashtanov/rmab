<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-user mr-2"></i>
        <span class="hidden-xs "><?php echo e(substr(auth()->user()->name, 0, 10)); ?></span>
        <i class="fas fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu" style="left: inherit; right: 0px;">
        <li class="user-header">
            <img src="<?php echo e(asset('defaultAvatar.png')); ?>" class="img img-responsive img-circle" width="200px"
                 alt="User Image">
            <p><?php echo e(auth()->user()->name); ?></p>
        </li>
        <li class="user-footer">
            <div class="d-flex justify-content-between">
                <a class="btn btn-default btn-flat"
                   href="<?php echo e(route('admin.profile')); ?>"><span
                        class="fas fa-user-cog"></span> Profile</a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-default btn-flat"
                            onclick="return confirm('Ishonchingiz komilmi?')">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </button>
                </form>
            </div>
        </li>
    </ul>
</li>
<?php /**PATH C:\OSPanel\domains\rmab-backend\resources\views/livewire/admin/user-dropdown.blade.php ENDPATH**/ ?>