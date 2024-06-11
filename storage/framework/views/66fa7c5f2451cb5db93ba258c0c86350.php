<?php $__env->startSection('content'); ?>
    <!-- Page-content -->
        <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
            <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

                <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                    <div class="grow">
                        <h5 class="text-16">Shopping Cart</h5>
                    </div>
                    <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                        <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                            <a href="#!" class="text-slate-400 dark:text-zink-200">Ecommerce</a>
                        </li>
                        <li class="text-slate-700 dark:text-zink-100">
                            Shopping Cart
                        </li>
                    </ul>
                </div>
                <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
                    <div class="xl:col-span-9 products-list">
                        <div class="flex items-center gap-3 mb-5">
                            <h5 class="underline text-16 grow">Shopping Cart (3)</h5>
                            <div>
                                <a href="#!" class="text-red-500 transition-all duration-300 ease-linear hover:text-red-600"><i data-lucide="trash-2" class="inline-block mr-1 align-middle size-4"></i> <span class="align-middle">Delete All</span></a>
                            </div>
                        </div>
                        <div class="card products" id="product1">
                            <div class="card-body">
                                <div class="grid grid-cols-1 gap-4 lg:grid-cols-12">
                                    <div class="p-4 rounded-md lg:col-span-2 bg-slate-100 dark:bg-zink-600">
                                        <img src="<?php echo e(URL::to('assets/images/overview-01')); ?>" alt="">
                                    </div><!--end col-->
                                    <div class="flex flex-col lg:col-span-4">
                                        <div>
                                            <h5 class="mb-1 text-16"><a href="<?php echo e(route('product/overview/page')); ?>">Printed Women Round Cardigan</a></h5>
                                            <p class="mb-2 text-slate-500 dark:text-zink-200"><a href="#!">Women's Fashion</a></p>
                                            <p class="mb-1 text-slate-500 dark:text-zink-200">Color: <span class="text-slate-800 dark:text-zink-50">Pink/White</span></p>
                                            <p class="mb-3 text-slate-500 dark:text-zink-200">Size: <span class="text-slate-800 dark:text-zink-50">L</span></p>
                                        </div>
                                        <div class="flex items-center gap-2 mt-auto">
                                            <div class="inline-flex p-2 text-center border rounded input-step border-slate-200 dark:border-zink-500">
                                                <button type="button" class="border w-7 leading-[15px] minus-value bg-slate-200 dark:bg-zink-600 dark:border-zink-600 rounded transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i data-lucide="minus" class="inline-block w-4 h-4"></i></button>
                                                <input type="number" class="text-center ltr:pl-2 rtl:pr-2 w-15 h-7 products-quantity dark:bg-zink-700 focus:shadow-none" value="2" min="0" max="100" readonly="">
                                                <button type="button" class="transition-all duration-200 ease-linear border rounded border-slate-200 bg-slate-200 dark:bg-zink-600 dark:border-zink-600 w-7 plus-value text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i data-lucide="plus" class="inline-block w-4 h-4"></i></button>
                                            </div>
                                            <button data-modal-target="deleteModal" type="button" class="flex items-center justify-center size-[37.5px] p-0 text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20 remove-button"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
                                        </div>
                                    </div><!--end col-->
                                    <div class="flex justify-between w-full lg:flex-col lg:col-end-13 lg:col-span-2">
                                        <div class="mb-auto ltr:lg:text-right rtl:lg:text-left">
                                            <h6 class="text-16 products-price">$<span>149.99</span> <small class="font-normal line-through text-slate-500 dark:text-zink-200">$299.99</small></h6>
                                        </div>
                                        <h6 class="mt-auto text-16 ltr:lg:text-right rtl:lg:text-left">$<span class="products-line-price">299</span></h6>
                                    </div><!--end col-->
                                </div><!--end grid-->
                            </div>
                        </div><!--end card-->
                        <div class="card products" id="product2">
                            <div class="card-body">
                                <div class="grid grid-cols-1 gap-4 lg:grid-cols-12">
                                    <div class="p-4 rounded-md lg:col-span-2 bg-slate-100 dark:bg-zink-600">
                                        <img src="<?php echo e(URL::to('assets/images/img-04.png')); ?>" alt="">
                                    </div><!--end col-->
                                    <div class="flex flex-col lg:col-span-4">
                                        <div>
                                            <h5 class="mb-1 text-16"><a href="apps-ecommerce-product-overview.html">Mesh Ergonomic Green Chair</a></h5>
                                            <p class="mb-2 text-slate-500 dark:text-zink-200"><a href="#!">Home, Kitchen, Pets</a></p>
                                            <p class="mb-1 text-slate-500 dark:text-zink-200">Color: <span class="text-slate-800 dark:text-zink-50">Green</span></p>
                                            <p class="mb-3 text-slate-500 dark:text-zink-200">Size: <span class="text-slate-800 dark:text-zink-50">M</span></p>
                                        </div>
                                        <div class="flex items-center gap-2 mt-auto">
                                            <div class="inline-flex p-2 text-center border rounded input-step border-slate-200 dark:border-zink-500">
                                                <button type="button" class="border w-7 leading-[15px] minus-value bg-slate-200 dark:bg-zink-600 dark:border-zink-600 rounded transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i data-lucide="minus" class="inline-block w-4 h-4"></i></button>
                                                <input type="number" class="text-center ltr:pl-2 rtl:pr-2 w-15 h-7 products-quantity dark:bg-zink-700 focus:shadow-none" value="1" min="0" max="100" readonly="">
                                                <button type="button" class="transition-all duration-200 ease-linear border rounded border-slate-200 bg-slate-200 dark:bg-zink-600 dark:border-zink-600 w-7 plus-value text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i data-lucide="plus" class="inline-block w-4 h-4"></i></button>
                                            </div>
                                            <button data-modal-target="deleteModal" type="button" class="flex items-center justify-center size-[37.5px] p-0 text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20 remove-button"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
                                        </div>
                                    </div><!--end col-->
                                    <div class="flex justify-between w-full lg:flex-col lg:col-end-13 lg:col-span-2">
                                        <div class="mb-auto ltr:lg:text-right rtl:lg:text-left">
                                            <h6 class="text-16 products-price">$<span>362.21</span> <small class="font-normal line-through text-slate-500 dark:text-zink-200">$599.99</small></h6>
                                        </div>
                                        <h6 class="mt-auto text-16 ltr:lg:text-right rtl:lg:text-left">$<span class="products-line-price">362.21</span></h6>
                                    </div><!--end col-->
                                </div><!--end grid-->
                            </div>
                        </div><!--end card-->
                        <div class="card products" id="product3">
                            <div class="card-body">
                                <div class="grid grid-cols-1 gap-4 lg:grid-cols-12">
                                    <div class="p-4 rounded-md lg:col-span-2 bg-slate-100 dark:bg-zink-600">
                                        <img src="<?php echo e(URL::to('assets/images/img-012.png')); ?>" alt="">
                                    </div><!--end col-->
                                    <div class="flex flex-col lg:col-span-4">
                                        <div>
                                            <h5 class="mb-1 text-16"><a href="apps-ecommerce-product-overview.html">Smartest Printed T-shirt</a></h5>
                                            <p class="mb-2 text-slate-500 dark:text-zink-200"><a href="#!">Unisex Fashion</a></p>
                                            <p class="mb-1 text-slate-500 dark:text-zink-200">Color: <span class="text-slate-800 dark:text-zink-50">Black</span></p>
                                            <p class="mb-3 text-slate-500 dark:text-zink-200">Size: <span class="text-slate-800 dark:text-zink-50">M</span></p>
                                        </div>
                                        <div class="flex items-center gap-2 mt-auto">
                                            <div class="inline-flex p-2 text-center border rounded input-step border-slate-200 dark:border-zink-500">
                                                <button type="button" class="border w-7 leading-[15px] minus-value bg-slate-200 dark:bg-zink-600 dark:border-zink-600 rounded transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i data-lucide="minus" class="inline-block w-4 h-4"></i></button>
                                                <input type="number" class="text-center ltr:pl-2 rtl:pr-2 w-15 h-7 products-quantity dark:bg-zink-700 focus:shadow-none" value="3" min="0" max="100" readonly="">
                                                <button type="button" class="transition-all duration-200 ease-linear border rounded border-slate-200 bg-slate-200 dark:bg-zink-600 dark:border-zink-600 w-7 plus-value text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i data-lucide="plus" class="inline-block w-4 h-4"></i></button>
                                            </div>
                                            <button data-modal-target="deleteModal" type="button" class="flex items-center justify-center size-[37.5px] p-0 text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20 remove-button"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
                                        </div>
                                    </div><!--end col-->
                                    <div class="flex justify-between w-full lg:flex-col lg:col-end-13 lg:col-span-2">
                                        <div class="mb-auto ltr:lg:text-right rtl:lg:text-left">
                                            <h6 class="text-16 products-price">$<span>89.99</span></h6>
                                        </div>
                                        <h6 class="mt-auto ltr:lg:text-right rtl:lg:text-left text-16">$<span class="products-line-price">269.97</span></h6>
                                    </div><!--end col-->
                                </div><!--end grid-->
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="xl:col-span-3">
                        <div class="sticky top-[calc(theme('spacing.header')_*_1.3)] mb-5">
                            <div class="card ">
                                <div class="card-body">
                                    <h6 class="mb-4 text-15">Order Summary</h6>
                                    <div class="overflow-x-auto">
                                        <table class="w-full">
                                            <tbody class="table-total">
                                                <tr>
                                                    <td class="py-2 text-slate-500 dark:text-zink-200">
                                                        Sub Total
                                                    </td>
                                                    <td class="py-2 text-slate-500 dark:text-zink-200 cart-subtotal">
                                                        $932.16
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2 text-slate-500 dark:text-zink-200">
                                                        Estimated Tax (18%)
                                                    </td>
                                                    <td class="py-2 text-slate-500 dark:text-zink-200 cart-tax">
                                                        $167.79
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2 text-slate-500 dark:text-zink-200">
                                                        Item Discounts (12%)
                                                    </td>
                                                    <td class="py-2 text-slate-500 dark:text-zink-200 cart-discount">
                                                        -$111.86
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2 text-slate-500 dark:text-zink-200">
                                                        Shipping Charge
                                                    </td>
                                                    <td class="py-2 text-slate-500 dark:text-zink-200 cart-shipping">
                                                        $0
                                                    </td>
                                                </tr>
                                                <tr class="font-semibold">
                                                    <td class="pt-2">
                                                        Total Amount (USD)
                                                    </td>
                                                    <td class="pt-2 cart-total">
                                                        $988.09
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-2 mt-5 shrink-0">
                                <a href="<?php echo e(route('product/grid/page')); ?>" class="w-full text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20">Continue to Shopping</a>
                                <a href="<?php echo e(route('ecommerce/checkout/page')); ?>" class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Checkout</a>
                            </div>

                            <div class="flex items-center gap-5 p-4 mt-5 card">
                                <div class="flex items-center justify-center rounded-md size-12 bg-slate-100 dark:bg-zink-600">
                                    <i data-lucide="truck" class="size-6 text-slate-500 fill-slate-300 dark:text-zink-200 dark:fill-zink-500"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Estimated Delivery</h6>
                                    <p class="text-slate-500">01 - 07 Dec, 2023</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-5 p-4 card">
                                <div class="flex items-center justify-center rounded-md size-12 bg-slate-100 dark:bg-zink-600">
                                    <i data-lucide="container" class="size-6 text-slate-500 fill-slate-300 dark:text-zink-200 dark:fill-zink-500"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Free Shipping & Returns</h6>
                                    <p class="text-slate-500 dark:text-zink-200">On all orders over $200.00</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div>
                <!--end row-->
            </div>
            <!-- container-fluid -->
        </div>

        <!--delete modal-->
        <div id="deleteModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
            <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
                <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                    <div class="float-right">
                        <button data-modal-close="deleteModal" class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i data-lucide="x" class="w-5 h-5"></i></button>
                    </div>
                    <img src="data:image/png;base64,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" alt="" class="block h-12 mx-auto">
                    <div class="mt-5 text-center">
                        <h5 class="mb-1">Are you sure?</h5>
                        <p class="text-slate-500 dark:text-zink-200">Are you certain you want to delete this record?</p>
                        <div class="flex justify-center gap-2 mt-6">
                            <button type="reset" data-modal-close="deleteModal" class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">Cancel</button>
                            <button type="submit" id="deleteRecord" data-modal-close="deleteModal" class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Yes, Delete It!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end delete modal-->

    <!-- End Page-content -->
    <?php $__env->startSection('script'); ?>
        <script src="<?php echo e(URL::to('assets/js/pages/apps-ecommerce-cart.init.js')); ?>"></script>
    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alpcommerce\resources\views/ecommerce/cart.blade.php ENDPATH**/ ?>