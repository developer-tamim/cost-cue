<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="<?php echo e(route('admin.default_dashboard')); ?>"><img class="img-fluid for-light"
                    src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt=""><img class="img-fluid for-dark"
                    src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>" alt=""></a>
            <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="<?php echo e(route('admin.default_dashboard')); ?>"><img class="img-fluid"
                    src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="<?php echo e(route('admin.default_dashboard')); ?>"><img class="img-fluid"
                                src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa-solid fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">Dashboard</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><label
                            class="badge badge-light-primary">13</label><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-home')); ?>"></use>
                            </svg><span class="lan-3">Dashboard </span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="lan-4" href="<?php echo e(route('admin.default_dashboard')); ?>">Default</a></li>
                            <li><a class="lan-5" href="<?php echo e(route('admin.ecommerce_dashboard')); ?>">Ecommerce</a></li>
                            <li><a href="<?php echo e(route('admin.online_course_dashboard')); ?>">Online course</a></li>
                            <li><a href="<?php echo e(route('admin.crypto_dashboard')); ?>">Crypto</a></li>
                            <li><a href="<?php echo e(route('admin.social_dashboard')); ?>">Social</a></li>
                            <li><a href="<?php echo e(route('admin.nft_dashboard')); ?>">NFT</a></li>
                            <li> <a href="<?php echo e(route('admin.school_management_dashboard')); ?>">School management</a></li>
                            <li> <a href="<?php echo e(route('admin.pos_dashboard')); ?>">POS</a></li>
                            <li><label class="badge badge-light-success">New</label><a href="<?php echo e(route('admin.crm_dashboard')); ?>">CRM</a>
                            </li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="<?php echo e(route('admin.analytics_dashboard')); ?>">Analytics</a></li>
                            <li><label class="badge badge-light-success">New</label><a href="<?php echo e(route('admin.hr_dashboard')); ?>">HR</a>
                            </li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="<?php echo e(route('admin.projects_dashboard')); ?>">Projects</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="<?php echo e(route('admin.logistics_dashboard')); ?>">Logistics</a></li>
                        </ul>
                    </li>
                    

                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-8">Applications</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"> </i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-project')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-project')); ?>"></use>
                            </svg><span>Projects </span></a>
                        <ul class="sidebar-submenu">
                            <li><label class="badge badge-light-success">New</label><a
                                    href="<?php echo e(route('admin.details_project')); ?>">Project Details</a></li>
                            <li><a href="<?php echo e(route('admin.list_project')); ?>">Project List</a></li>
                            <li><a href="<?php echo e(route('admin.create_project')); ?>">Create new</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.file_manager')); ?>"><svg
                                class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-file')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-file')); ?>"></use>
                            </svg><span>File manager</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"> </i><a
                            class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.kanban')); ?>"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-board')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-board')); ?>"></use>
                            </svg><span>kanban Board</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-ecommerce')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-ecommerce')); ?>"></use>
                            </svg><span>Ecommerce</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="submenu-title" href="javascript:void(0)">Products<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="<?php echo e(route('admin.add_products')); ?>">Add Product</a></li>
                                    <li><a href="<?php echo e(route('admin.products_grid')); ?>">Products Grid</a></li>
                                    <li><a href="<?php echo e(route('admin.list_products')); ?>">Products List</a></li>
                                    <li><a href="<?php echo e(route('admin.products_details')); ?>">Product Details</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo e(route('admin.category_page')); ?>">Category</a></li>
                            <li><label class="badge badge-light-success">New</label><a class="submenu-title"
                                    href="javascript:void(0)">Seller<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="<?php echo e(route('admin.seller_list')); ?>">Seller List</a></li>
                                    <li><a href="<?php echo e(route('admin.seller_details')); ?>">Seller Details</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Orders<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="<?php echo e(route('admin.order_history')); ?>">Order History</a></li>
                                    <li><label class="badge badge-light-success">New</label><a
                                            href="<?php echo e(route('admin.order_details')); ?>">Order Details</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Invoices<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="<?php echo e(route('admin.invoice_1')); ?>">Invoice-1</a></li>
                                    <li><a href="<?php echo e(route('admin.invoice_2')); ?>">Invoice-2</a></li>
                                    <li><a href="<?php echo e(route('admin.invoice_3')); ?>">Invoice-3</a></li>
                                    <li><a href="<?php echo e(route('admin.invoice_4')); ?>">Invoice-4</a></li>
                                    <li><a href="<?php echo e(route('admin.invoice_5')); ?>">Invoice-5</a></li>
                                    <li><a href="<?php echo e(route('admin.invoice_6')); ?>">Invoice-6</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo e(route('admin.cart')); ?>">Cart</a></li>
                            <li><a href="<?php echo e(route('admin.wish_list')); ?>">Wishlist</a></li>
                            <li><a href="<?php echo e(route('admin.checkout')); ?>">Checkout</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="<?php echo e(route('admin.manage_review')); ?>">Manage Review</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="<?php echo e(route('admin.settings')); ?>">Settings</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.mail_box')); ?>"><svg
                                class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-email')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-email')); ?>"></use>
                            </svg><span>Mail Box</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-chat')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-chat')); ?>"></use>
                            </svg><span>Chat</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="<?php echo e(route('admin.chat_private')); ?>">Private Chat</a></li>
                            <li><a href="<?php echo e(route('admin.chat_group')); ?>">Group Chat</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-user')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-user')); ?>"></use>
                            </svg><span>Users</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="<?php echo e(route('admin.user_profile')); ?>">User Profile</a></li>
                            <li><a href="<?php echo e(route('admin.add_user')); ?>">Add User</a></li>
                            <li><label class="badge badge-light-success">New</label><a href="<?php echo e(route('admin.user_list')); ?>">User
                                    List</a></li>
                            <li><a href="<?php echo e(route('admin.user_cards')); ?>">User Cards</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="<?php echo e(route('admin.role_permission')); ?>">Roles & Permission</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><label class="badge badge-light-success">New</label><i
                            class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-reports')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-reports')); ?>"></use>
                            </svg><span>Reports</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="<?php echo e(route('admin.products_reports')); ?>">Products</a></li>
                            <li><a href="<?php echo e(route('admin.sales_reports')); ?>">Sales</a></li>
                            <li><a href="<?php echo e(route('admin.sales_return')); ?>">Sales Return</a></li>
                            <li><a href="<?php echo e(route('admin.customer_order')); ?>">Customer Order</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.bookmark')); ?>"><svg
                                class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-bookmark')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-bookmark')); ?>"> </use>
                            </svg><span>Bookmarks</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.contacts')); ?>"><svg
                                class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-contact')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-contact')); ?>"> </use>
                            </svg><span>Contacts</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.task')); ?>"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-task')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-task')); ?>"> </use>
                            </svg><span>Tasks</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.calendar_basic')); ?>"><svg
                                class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-calendar')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-calender')); ?>"></use>
                            </svg><span>Calendar</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.social_app')); ?>"><svg
                                class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-social')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-social')); ?>"> </use>
                            </svg><span>Social App</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.to_do')); ?>"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-to-do')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-to-do')); ?>"> </use>
                            </svg><span>To-Do</span></a></li>
                    




                    




                    




                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->
<?php /**PATH D:\Projects\cost-cue\resources\views/layouts/simple/sidebar.blade.php ENDPATH**/ ?>