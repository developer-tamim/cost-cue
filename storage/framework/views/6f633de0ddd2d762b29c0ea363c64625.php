<?php $__env->startSection('title', 'kanban Board'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/jkanban.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3> Kanban Board</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.default_dashboard')); ?>"> <svg class="stroke-icon">
                                    <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item"> Apps</li>
                        <li class="breadcrumb-item active"> Kanban Board</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid jkanban-container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Default Demo</h5>
                        <p class="f-m-light mt-1">Default settings </p>
                    </div>
                    <div class="card-body">
                        <div id="demo1"></div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Boards</h5>
                        <p class="f-m-light mt-1">Colors, gutter, click on board&apos;s item and restricting
                            which boards to drag items to </p>
                    </div>
                    <div class="card-body">
                        <div id="demo2"></div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>API</h5>
                        <p class="f-m-light mt-1">Add item, add board, delete board: </p>
                    </div>
                    <div class="card-body">
                        <div id="demo3"></div>
                        <div class="common-f-start"><button class="btn btn-primary" id="addDefault">Add
                                &quot;Default&quot; board</button><button class="btn btn-primary" id="addToDo">Add element
                                in &quot;In Review&quot; Board</button><button class="btn btn-primary"
                                id="addToDoAtPosition">Add element in &quot;In
                                Review&quot; Board at position 2</button><button class="btn btn-danger"
                                id="removeBoard">Remove &quot;In Progress&quot; Board</button><button class="btn btn-danger"
                                id="removeElement">Remove &quot;My Task
                                Test&quot;</button></div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card note p-20">jKanban is Pure agnostic Javascript plugin for Kanban boards for
                    more options please refer <a href="https://github.com/riktar/jkanban/tree/master?tab=readme-ov-file"
                        target="_blank">github link</a></div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/jkanban/jkanban.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jkanban/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/typeahead/handlebars.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/typeahead/typeahead.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/typeahead/typeahead.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/typeahead-search/handlebars.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/typeahead-search/typeahead-custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Projects\cost-cue\resources\views/kanban.blade.php ENDPATH**/ ?>