<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">SinauCode</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page"
                        href="<?php echo e(url('dashboard')); ?>">
                        <svg class="bi">
                            <use xlink:href="#house-fill" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="<?php echo e(url('article')); ?>">
                        <svg class="bi">
                            <use xlink:href="#file-earmark" />
                        </svg>
                        Artikel
                    </a>
                </li>

                <?php if(auth()->user()->role == 1): ?>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="<?php echo e(url('kategoris')); ?>">
                        <svg class="bi">
                            <use xlink:href="#cart" />
                        </svg>
                        Kategori
                    </a>
                </li>
                <?php endif; ?>

                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="<?php echo e(url('users')); ?>">
                        <svg class="bi">
                            <use xlink:href="#graph-up" />
                        </svg>
                        User
                    </a>
                </li>
                <li class="nav-item">
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>

                    <a class="nav-link d-flex align-items-center gap-2" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <svg class="bi">
                            <use xlink:href="#puzzle" />
                        </svg>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\sinaucode\resources\views/back/layout/sidebar.blade.php ENDPATH**/ ?>