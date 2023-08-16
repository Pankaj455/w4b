@section("title", "Analytics")
@extends("layouts.default")
@section("content")
    <div class="analytics-wrapper">
        <h1 class="mb-3">Platform Analytics</h1>

        <ul class="nav nav-tabs gap-3" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview-tab-pane" type="button" role="tab" aria-controls="overview-tab-pane" aria-selected="true">Overview</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="campaign-tab" data-bs-toggle="tab" data-bs-target="#campaign-tab-pane" type="button" role="tab" aria-controls="campaign-tab-pane" aria-selected="false">Campaign</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">
                <div class="messages-wrapper mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3>Messages</h3>
                        <x-download url="#" type="primary" name="Download">
                            <i class="ph-bold ph-download-simple"></i>
                        </x-download>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <x-analytics-card title="Total messages" count="9465" arrow="up" percentage="65" lastTime="from last 24hrs" />
                        <x-analytics-card title="Messages Sent" count="6265" arrow="up" percentage="45" lastTime="from last 24hrs" />
                        <x-analytics-card title="Messages Read" count="265" arrow="down" percentage="6" lastTime="from last 24hrs" />
                        <x-analytics-card title="Messages Failed" count="5613" arrow="down" percentage="70" lastTime="from last 24hrs" />
                    </div>
                </div>
                <div class="actions-wrapper">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3>User Actions</h3>
                        <!-- <x-download url="" id="user-actions" type="primary" name="Download" /> -->
                        <button class="btn-flat-primary" data-bs-toggle="offcanvas" data-bs-target="#user-actions" aria-controls="user-actions">
                            <i class="ph-bold ph-download-simple"></i>
                            <span>Download</span>
                        </button>
                    </div>
                    <p class="text-subtitle-2 mb-3">Menu</p>
                    <div class="d-flex align-items-center gap-3">
                        <button class="text-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#products-and-offers" aria-controls="products-and-offers">
                            <x-analytics-card title="Product and Offers" count="9465" arrow="up" percentage="65" lastTime="from last 24hrs" />
                        </button>
                        <button class="text-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#locate-store" aria-controls="locate-store">
                            <x-analytics-card title="Locate Store" count="6265" arrow="up" percentage="0" lastTime="from last 24hrs" />
                        </button>
                        <button class="text-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#support" aria-controls="support">
                            <x-analytics-card title="Support" count="561" arrow="down" percentage="36" lastTime="from last 24hrs" />
                        </button>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="campaign-tab-pane" role="tabpanel" aria-labelledby="campaign-tab" tabindex="0">
                <!-- search-bar -->
                <div class="d-flex search-section position-relative mb-32">
                    <div class="search-wrapper flex-grow-1 d-flex">
                        <div class="d-flex position-relative px-3 w-100">
                            <form action="#" class="d-flex flex-grow-1 gap-2">
                                <div class="search-icon d-flex justify-content-center align-items-center bg-transparent">
                                    <i class="ph-bold ph-magnifying-glass"></i>
                                </div>
                                <input type="text" placeholder="Search" class="py-2">
                            </form>
                        </div>
                    </div>

                    <div class="dropdown filter position-static">
                        <button class="button-icon dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <!-- <i class="ph-bold ph-sort-descending"></i> -->
                            <img src="/storage/images/icons/icon_sort.svg" alt="sort-filter">
                        </button>
                        <div class="dropdown-menu py-0 overflow-hidden">
                            <!-- <button class="btn position-absolute end-0 top-0 px-0"><i class="ph-bold ph-x-circle grey-darken-1"></i></button> -->
                            <ul class="sort-items p-0">
                                <!-- sort by -->
                                <li class="pt-4 ps-4 mb-2">
                                    <p class="text-caption grey-lighten-1">Sort by</p>
                                </li>
                                <li><div class="dropdown-item">
                                    <input type="radio" id="bydate" name="filter" class="d-none">
                                    <label for="bydate" class="filter-btns">
                                        <i class="ph-bold ph-check"></i>
                                        <span class="text-caption">Date Created</span>
                                    </label>
                                </div></li>
                                <li><div class="dropdown-item">
                                    <input type="radio" id="bydatelast" name="filter" class="d-none" checked>
                                    <label for="bydatelast" class="filter-btns">
                                        <i class="ph-bold ph-check"></i>
                                        <span class="text-caption">Last Modified</span>
                                    </label>
                                </div></li>

                                <li><hr class="dropdown-divider mt-3"></li>

                                <!-- order by -->
                                <li class="ps-4 mb-2">
                                    <p class="text-caption grey-lighten-1">Order by</p>
                                </li>
                                <li><div class="dropdown-item">
                                    <input type="radio" id="older" name="filter" class="d-none">
                                    <label for="older" class="filter-btns">
                                        <i class="ph-bold ph-check"></i>
                                        <span class="text-caption">Older First</span>
                                    </label>
                                </div></li>
                                <li><div class="dropdown-item">
                                    <input type="radio" id="newer" name="filter" class="d-none">
                                    <label for="newer" class="filter-btns">
                                        <i class="ph-bold ph-check"></i>
                                        <span class="text-caption">Newer First</span>
                                    </label>
                                </div></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="dropdown filter">
                        <button class="button-icon dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <i class="ph-bold ph-funnel"></i>
                        </button>
                        <ul class="dropdown-menu py-0 overflow-hidden">
                            <li>
                                <div class="dropdown-item">
                                    <label for="marketing">Marketing</label>
                                    <input id="marketing" type="checkbox" class="d-none">
                                    <i class="ph-bold ph-square"></i>
                                    <i class="ph-bold ph-check-square d-none"></i>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item">
                                    <label for="service">Service</label>
                                    <input id="service" type="checkbox" class="d-none">
                                    <i class="ph-bold ph-square"></i>
                                    <i class="ph-bold ph-check-square d-none"></i>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item">
                                    <label for="app">App Launch</label>
                                    <input id="app" type="checkbox" class="d-none">
                                    <i class="ph-bold ph-square"></i>
                                    <i class="ph-bold ph-check-square d-none"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <!-- campaign-cards -->

                    <div class="campaign-card d-flex flex-column">
                        <div class="campaign-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="text-caption">10:30 AM &nbsp; Jan 06 2023</p>
                                <div class="d-flex gap-2">
                                    <x-chip class="chip-outline" text="Service" />
                                    <x-chip class="chip live" text="live">
                                        <i class="ph-bold ph-stop-circle"></i>
                                    </x-chip>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="mb-1 campaign-name">Retargeting campaign for Whatsapp in app</h3>
                            <p class="text-body-2">Template name</p>
                        </div>
                    </div>
                    <div class="campaign-card d-flex flex-column">
                        <div class="campaign-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="text-caption">12:30 PM &nbsp; Jun 18 2023</p>
                                <div class="d-flex gap-2">
                                    <x-chip class="chip-outline" text="Marketing" />
                                    <x-chip class="chip live" text="live">
                                        <i class="ph-bold ph-stop-circle"></i>
                                    </x-chip>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="mb-1 campaign-name">Father’s day discount offer campaign</h3>
                            <p class="text-body-2">Product catalogue</p>
                        </div>
                    </div>
                    <div class="campaign-card d-flex flex-column">
                        <div class="campaign-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="text-caption">10:30 AM &nbsp; Jan 12 2023</p>
                                <div class="d-flex gap-2">
                                    <x-chip class="chip-outline" text="Marketing" />
                                    <x-chip class="chip live" text="live">
                                        <i class="ph-bold ph-stop-circle"></i>
                                    </x-chip>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="mb-1 campaign-name">Bonanza week special offer campaign</h3>
                            <p class="text-body-2">Template name</p>
                        </div>
                    </div>
                    <div class="campaign-card d-flex flex-column">
                        <div class="campaign-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="text-caption">08:30 AM  &nbsp; Dec 30 2022</p>
                                <div class="d-flex gap-2">
                                    <x-chip class="chip-outline" text="Marketing" />
                                    <x-chip class="chip previous" text="previous">
                                        <i class="ph-bold ph-stop-circle"></i>
                                    </x-chip>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="mb-1 campaign-name">New year product promotion campaign </h3>
                            <p class="text-body-2">Our products</p>
                        </div>
                    </div>
                    <div class="campaign-card d-flex flex-column">
                        <div class="campaign-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="text-caption">08:30 AM &nbsp; Nov 27 2022</p>
                                <div class="d-flex gap-2">
                                    <x-chip class="chip-outline" text="Marketing" />
                                    <x-chip class="chip previous" text="previous">
                                        <i class="ph-bold ph-stop-circle"></i>
                                    </x-chip>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="mb-1 campaign-name">Christmas product promotion campaign</h3>
                            <p class="text-body-2">Our products</p>
                        </div>
                    </div>
                    <div class="campaign-card d-flex flex-column">
                        <div class="campaign-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="text-caption">10:30 AM &nbsp; Nov 27 2022</p>
                                <div class="d-flex gap-2">
                                    <x-chip class="chip-outline" text="Service" />
                                    <x-chip class="chip previous" text="previous">
                                        <i class="ph-bold ph-stop-circle"></i>
                                    </x-chip>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="mb-1 campaign-name">Retargeting campaign for Whatsapp in app</h3>
                            <p class="text-body-2">Our products</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- drawer for user actions -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="products-and-offers" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header justify-content-start gap-3">
                <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ph ph-arrow-left"></i>
                </button>
                <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Product and Offers</h2>
            </div>
            <div class="offcanvas-body">
                <div class="d-flex align-items-center flex-wrap gap-3">
                    <x-analytics-card title="Purchase Product" count="9465" arrow="up" percentage="65" lastTime="from last 24hrs" />
                    <x-analytics-card title="Product Catalogue" count="6151" arrow="up" percentage="0" lastTime="from last 24hrs" />
                    <x-analytics-card title="Offers/Discounts" count="561" arrow="up" percentage="36" lastTime="from last 24hrs" />
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="locate-store" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header justify-content-start gap-3">
                <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ph ph-arrow-left"></i>
                </button>
                <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Locate Store</h2>
            </div>
            <div class="offcanvas-body">
                <div class="d-flex align-items-center flex-wrap gap-3">
                    <x-analytics-card title="Purchase Product" count="9465" arrow="up" percentage="65" lastTime="from last 24hrs" />
                    <x-analytics-card title="Product Catalogue" count="6151" arrow="up" percentage="0" lastTime="from last 24hrs" />
                    <x-analytics-card title="Offers/Discounts" count="561" arrow="up" percentage="36" lastTime="from last 24hrs" />
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="support" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header justify-content-start gap-3">
                <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ph ph-arrow-left"></i>
                </button>
                <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Support</h2>
            </div>
            <div class="offcanvas-body">
                <div class="d-flex align-items-center flex-wrap gap-3">
                    <x-analytics-card title="Service Request" count="9465" arrow="up" percentage="65" lastTime="from last 24hrs" />
                    <x-analytics-card title="Call Centre" count="6151" arrow="up" percentage="0" lastTime="from last 24hrs" />
                    <x-analytics-card title="App" count="561" arrow="up" percentage="36" lastTime="from last 24hrs" />
                </div>
            </div>
        </div>

        <!-- drawer for download -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="user-actions" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header justify-content-start gap-3 mb-4">
                <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ph ph-arrow-left"></i>
                </button>
                <h2 class="offcanvas-title" id="offcanvasNavbarLabel">User Actions</h2>
                <x-download url="" id="user-actions" type="primary" name="Download" class="ms-auto disabled">
                    <i class="ph-bold ph-download-simple"></i>
                </x-download>
            </div>
            <div class="offcanvas-body">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                <input type="checkbox" id="products-offers">
                                <label for="products-offers">Product and Offers</label>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body d-flex flex-column">
                                <div class="d-flex py-2 gap-2">
                                    <input type="checkbox" id="products">
                                    <label for="products">Purchase Product</label>
                                </div>
                                <div class="d-flex py-2 gap-2">
                                    <input type="checkbox" id="discounts">
                                    <label for="discounts">Offers/Discounts</label>
                                </div>
                                <div class="d-flex py-2 gap-2">
                                    <input type="checkbox" id="catalogue">
                                    <label for="catalogue">Product Catalogue</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                <input type="checkbox" id="locate-store">
                                <label for="locate-store">Locate Store</label>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body d-flex flex-column">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                <input type="checkbox" id="support">
                                <label for="support">Support</label>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body d-flex flex-column">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection