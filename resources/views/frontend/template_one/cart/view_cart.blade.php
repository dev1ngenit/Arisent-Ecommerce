@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
@section('title')
    DadaBhaai | View Cart
@endsection
    <!-- page banner area start -->
    <section class="page-banner-area blog-page"
        data-background="{{ asset('frontend/template_one/assets/img/bg/banner.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div>
                        <div class="banner-text text-center pt-150 pb-120">
                            <h2 class="f-800 cod__black-color">
                                Your <span class="grenadier-color">Cart</span>
                            </h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb pt-3">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('index') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item grenadier-color active" aria-current="page">
                                        <a href="{{ route('template.one.checkout') }}">
                                            <span class="grenadier-color">Check Out</span>
                                        </a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page banner area end -->
    <!-- shop area start -->
    <div class="product shop-page pt-50 pb-120 fix">
        <div class="container">

            <div class="border-b">
                <div class="row">
                    <div class="col-lg-12 col-md-4">
                        <div class="shop-bar d-flex align-items-center justify-content-between">
                            <h6 class="f-800 cod__black-color">
                                <span class="grenadier-color">YOUR CART</span>
                            </h6>
                            <a href="{{ route('index') }}" class="f-800 cod__black-color">
                                <span class="grenadier-color">CONTINUE SHOPPING <i
                                        class="fa fa-long-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <!-- Cart Header -->
                                            <thead class="bg-light border-none">
                                                <tr>
                                                    <th style="width: 5%">SL</th>
                                                    <th style="width: 10%">Image</th>
                                                    <th style="width: 35%">Product Name</th>
                                                    <th style="width: 10%">Price</th>
                                                    <th style="width: 15%">Quantity</th>
                                                    <th style="width: 12%">Total</th>
                                                    <th style="width: 13%">Empty Cart</th>
                                                </tr>
                                            </thead>
                                            <!-- Cart Content -->
                                            <tbody id="cartPage">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- Check Out Content -->
                                <div class="col-lg-4">
                                    <form action="">
                                        <div class="card rounded-0">
                                            <div class="card-header">CART TOTAL</div>
                                            <div class="card-body border-0">
                                                <div class="table-responsive border-0">
                                                    <table class="table border-0">

                                                        <thead style="background: #dfdddd">
                                                            <tr>
                                                                <th scope="col">Details</th>
                                                                <th class="text-right">Price Info</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr class="">
                                                                <td>Sub Total:</td>
                                                                <td class="text-right">Tk <span id="cartSubTotal"></span></td>
                                                            </tr>

                                                            <tr>
                                                                <th scope="col">ORDER TOTAL</th>
                                                                <th class="text-right">Tk <span id="cartTotal"></span></th>
                                                            </tr>
                                                        </tbody>

                                                    </table>
                                                    <div>
                                                        <div class="d-flex justify-content-end">

                                                            <a href="{{ route('template.one.checkout') }}" class="cart-button w-100">
                                                                Check Out
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        // Get the necessary elements
        const incrementBtn = document.getElementByClassName("incrementBtn");
        const decrementBtn = document.getElementByClassName("decrementBtn");
        const amountInput = document.getElementByClassName("amountInput");

        // Function to handle increment button click
        incrementBtn.addEventListener("click", () => {
            // Get the current value of the input
            let currentValue = parseInt(amountInput.value);
            // Increment the value
            currentValue++;
            // Update the input value
            amountInput.value = currentValue;
        });

        // Function to handle decrement button click
        decrementBtn.addEventListener("click", () => {
            // Get the current value of the input
            let currentValue = parseInt(amountInput.value);
            // Decrement the value if greater than 0
            if (currentValue > 0) {
                currentValue--;
            }
            // Update the input value
            amountInput.value = currentValue;
        });
    </script>
@endsection
