@section("title", "Analytics")
@extends("layouts.default")
@section("content")
    <div class="analytics-wrapper">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mb-3">Platform Analytics</h1>
            <div class="d-flex align-items-center gap-3" id="date-picker">
                <x-chip class="previous" text="Last month" id="report-label" />
                <div id="report-range" class="p-3 d-flex align-items-center justify-content-center gap-3">
                    <img src="/storage/images/icons/icon_calendar.svg" alt="calendar-icon">
                    <span class="text-body-1 grey-darken-1"></span>
                    <i class="ph-fill ph-caret-down"></i>
                </div>
            </div>
        </div>

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

                    <!-- sort by -->
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
                    
                    <!-- filters based on campaign type -->
                    <div class="dropdown filter">
                        <button class="button-icon dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <i class="ph-bold ph-funnel"></i>
                        </button>
                        <ul class="dropdown-menu py-0 overflow-hidden" style="width: 210px">
                            <li>
                                <div class="dropdown-item">
                                    <input id="marketing" type="checkbox" class="d-none">
                                    <label for="marketing" class="d-flex justify-content-between">
                                        <span>Marketing</span>
                                        <i class="ph-bold ph-square"></i>
                                        <i class="ph-bold ph-check-square d-none"></i>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item">
                                    <input id="service" type="checkbox" class="d-none">
                                    <label for="service" class="d-flex justify-content-between">
                                        <span>Service</span>
                                        <i class="ph-bold ph-square"></i>
                                        <i class="ph-bold ph-check-square d-none"></i>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item">
                                    <input id="app" type="checkbox" class="d-none">
                                    <label for="app" class="d-flex justify-content-between">
                                        <span>App Launch</span>
                                        <i class="ph-bold ph-square"></i>
                                        <i class="ph-bold ph-check-square d-none"></i>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="position-relative overflow-hidden" id="campaigns-container">
                    <div class="d-flex align-items-center gap-3 flex-wrap position-relative" id="campaigns">
                        <!-- campaign-cards -->
                        
                        <button class="campaign-card d-flex flex-column text-start">
                            <div class="campaign-header w-100">
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
                        </button>
                        <button class="campaign-card d-flex flex-column text-start">
                            <div class="campaign-header w-100">
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
                        </button>
                        <button class="campaign-card d-flex flex-column text-start">
                            <div class="campaign-header w-100">
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
                        </button>
                        <button class="campaign-card d-flex flex-column text-start">
                            <div class="campaign-header w-100">
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
                        </button>
                        <button class="campaign-card d-flex flex-column text-start">
                            <div class="campaign-header w-100">
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
                        </button>
                        <button class="campaign-card d-flex flex-column text-start">
                            <div class="campaign-header w-100">
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
                        </button>
                    </div>
                    <div class="campaign-overview position-absolute w-100 start-100 top-0 opacity-0 d-flex flex-column align-items-start gap-4">
                        <button class="btn-flat-tertiary p-0 back">
                            <i class="ph-bold ph-arrow-left"></i>
                            <span>Back</span>
                        </button>
                        <header class="d-flex gap-2 flex-column">
                            <div class="d-flex gap-3 align-items-center">
                                <h2>Retargeting campaign for WhatsApp in app</h2>
                                <x-chip class="chip-outline" text="Service" />
                                <x-chip class="chip previous" text="Previous">
                                    <i class="ph-bold ph-stop-circle"></i>
                                </x-chip>
                            </div>
                            <p class="text-caption grey-darken-1">10:30 AM &nbsp; Jan 06 2023</p>
                        </header>

                        <div class="messages-wrapper w-100 mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h3>Messages</h3>
                                <x-download url="#" type="primary" name="Download">
                                    <i class="ph-bold ph-download-simple"></i>
                                </x-download>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <x-analytics-card title="Total messages" count="9465" />
                                <x-analytics-card title="Messages Sent" count="6265" />
                                <x-analytics-card title="Messages Read" count="265"/>
                                <x-analytics-card title="Messages Failed" count="5613" />
                            </div>
                        </div>
                        
                        <div class="actions-wrapper w-100">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h3>User Actions</h3>
                                <!-- <x-download url="" id="user-actions" type="primary" name="Download" /> -->
                                <button class="btn-flat-primary" data-bs-toggle="offcanvas" data-bs-target="#campaign-user-actions" aria-controls="user-actions">
                                    <i class="ph-bold ph-download-simple"></i>
                                    <span>Download</span>
                                </button>
                            </div>
                            <!-- <p class="text-subtitle-2 mb-3">Menu</p> -->
                            <div class="d-flex align-items-center gap-3">
                                <button class="text-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#primary-cta" aria-controls="primary-cta">
                                    <x-analytics-card title="Primary CTA" count="6780" />
                                </button>
                                <button class="text-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#secondary-cta" aria-controls="secondary-cta">
                                    <x-analytics-card title="Secondary CTA" count="2200" />
                                </button>
                                <button class="text-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#tertiary-cta" aria-controls="tertiary-cta">
                                    <x-analytics-card title="Tertiary CTA" count="485" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- pagination -->
                @include("includes.pagination")
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

        <!-- drawer for campaign-overview -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="primary-cta" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header justify-content-start gap-3">
                <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ph ph-arrow-left"></i>
                </button>
                <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Primary CTA</h2>
            </div>
            <div class="offcanvas-body">
                <div class="d-flex align-items-center flex-wrap gap-3">
                    <x-analytics-card title="Primary CTA" count="6780" />
                    <x-analytics-card title="Primary outcome" count="561" />
                    <x-analytics-card title="Conversion Percentage" count="35" />
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="secondary-cta" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header justify-content-start gap-3">
                <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ph ph-arrow-left"></i>
                </button>
                <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Secondary CTA</h2>
            </div>
            <div class="offcanvas-body">
                <div class="d-flex align-items-center flex-wrap gap-3">
                    <x-analytics-card title="Secondary CTA" count="2200" />
                    <x-analytics-card title="Secondary outcome" count="561" />
                    <x-analytics-card title="Conversion Percentage" count="35" />
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="tertiary-cta" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header justify-content-start gap-3">
                <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ph ph-arrow-left"></i>
                </button>
                <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Tertiary CTA</h2>
            </div>
            <div class="offcanvas-body">
                <div class="d-flex align-items-center flex-wrap gap-3">
                    <x-analytics-card title="Tertiary CTA" count="485" />
                    <x-analytics-card title="Tertiary outcome" count="71" />
                    <x-analytics-card title="Conversion Percentage" count="35" />
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
                <x-download url="" id="user-actions" type="primary" name="Download" class="ms-auto disabled user-actions">
                    <i class="ph-bold ph-download-simple"></i>
                </x-download>
            </div>
            <div class="offcanvas-body">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                <input type="checkbox" class="d-none header-checkbox columns" id="products-offers">
                                <label for="products-offers" class="d-flex gap-2 align-items-center">
                                    <i class="ph-bold ph-check-square d-none"></i>
                                    <i class="ph-bold ph-square"></i>
                                    <span>Product and Offers</span>
                                </label>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body d-flex flex-column">
                                <div class="d-flex py-2 gap-2">
                                    <input type="checkbox" class="d-none columns" id="products">
                                    <label for="products" class="d-flex gap-2 align-items-center">
                                        <i class="ph-bold ph-check-square d-none"></i>
                                        <i class="ph-bold ph-square"></i>
                                        <span>Purchase Product</span>
                                    </label>
                                </div>
                                <div class="d-flex py-2 gap-2">
                                    <input type="checkbox" class="d-none columns" id="discounts">
                                    <label for="discounts" class="d-flex gap-2 align-items-center">
                                        <i class="ph-bold ph-check-square d-none"></i>
                                        <i class="ph-bold ph-square"></i>
                                        <span>Offers/Discounts</span>
                                    </label>
                                </div>
                                <div class="d-flex py-2 gap-2">
                                    <input type="checkbox" class="d-none columns" id="catalogue">
                                    <label for="catalogue" class="d-flex gap-2 align-items-center">
                                        <i class="ph-bold ph-check-square d-none"></i>
                                        <i class="ph-bold ph-square"></i>
                                        <span>Product Catalogue</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                <input type="checkbox" class="d-none header-checkbox columns" id="locate-stores">
                                <label for="locate-stores" class="d-flex gap-2 align-items-center">
                                    <i class="ph-bold ph-check-square d-none"></i>
                                    <i class="ph-bold ph-square"></i>
                                    <span>Locate Store</span>
                                </label>
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
                                <input type="checkbox" class="d-none header-checkbox columns" id="support-menu">
                                <label for="support-menu" class="d-flex gap-2 align-items-center">
                                    <i class="ph-bold ph-check-square d-none"></i>
                                    <i class="ph-bold ph-square"></i>
                                    <span>Support</span>
                                </label>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body d-flex flex-column">
                            <div class="d-flex py-2 gap-2">
                                    <input type="checkbox" class="d-none columns" id="service-req">
                                    <label for="service-req" class="d-flex gap-2 align-items-center">
                                        <i class="ph-bold ph-check-square d-none"></i>
                                        <i class="ph-bold ph-square"></i>
                                        <span>Service Request</span>
                                    </label>
                                </div>
                                <div class="d-flex py-2 gap-2">
                                    <input type="checkbox" class="d-none columns" id="call">
                                    <label for="call" class="d-flex gap-2 align-items-center">
                                        <i class="ph-bold ph-check-square d-none"></i>
                                        <i class="ph-bold ph-square"></i>
                                        <span>Call Centre</span>
                                    </label>
                                </div>
                                <div class="d-flex py-2 gap-2">
                                    <input type="checkbox" class="d-none columns" id="apps">
                                    <label for="apps" class="d-flex gap-2 align-items-center">
                                        <i class="ph-bold ph-check-square d-none"></i>
                                        <i class="ph-bold ph-square"></i>
                                        <span>App</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="campaign-user-actions" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header justify-content-start gap-3 mb-4">
                <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ph ph-arrow-left"></i>
                </button>
                <h2 class="offcanvas-title" id="offcanvasNavbarLabel">User Actions</h2>
                <x-download url="" id="user-actions" type="primary" name="Download" class="ms-auto disabled user-actions">
                    <i class="ph-bold ph-download-simple"></i>
                </x-download>
            </div>
            <div class="offcanvas-body">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                <input type="checkbox" class="d-none header-checkbox columns" id="cta-primary">
                                <label for="cta-primary" class="d-flex gap-2 align-items-center">
                                    <i class="ph-bold ph-check-square d-none"></i>
                                    <i class="ph-bold ph-square"></i>
                                    <span>Primary CTA</span>
                                </label>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body d-flex flex-column">
                                <div class="d-flex py-2 gap-2">
                                    <input type="checkbox" class="d-none columns" id="cta">
                                    <label for="cta" class="d-flex gap-2 align-items-center">
                                        <i class="ph-bold ph-check-square d-none"></i>
                                        <i class="ph-bold ph-square"></i>
                                        <span>Primary CTA</span>
                                    </label>
                                </div>
                                <div class="d-flex py-2 gap-2">
                                    <input type="checkbox" class="d-none columns" id="outcome">
                                    <label for="outcome" class="d-flex gap-2 align-items-center">
                                        <i class="ph-bold ph-check-square d-none"></i>
                                        <i class="ph-bold ph-square"></i>
                                        <span>Primary Outcome</span>
                                    </label>
                                </div>
                                <div class="d-flex py-2 gap-2">
                                    <input type="checkbox" class="d-none columns" id="conversion">
                                    <label for="conversion" class="d-flex gap-2 align-items-center">
                                        <i class="ph-bold ph-check-square d-none"></i>
                                        <i class="ph-bold ph-square"></i>
                                        <span>Conversion Percentage</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                <input type="checkbox" class="d-none header-checkbox columns" id="cta-secondary">
                                <label for="cta-secondary" class="d-flex gap-2 align-items-center">
                                    <i class="ph-bold ph-check-square d-none"></i>
                                    <i class="ph-bold ph-square"></i>
                                    <span>Secondary CTA</span>
                                </label>
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
                                <input type="checkbox" class="d-none header-checkbox columns" id="cta-tertiary">
                                <label for="cta-tertiary" class="d-flex gap-2 align-items-center">
                                    <i class="ph-bold ph-check-square d-none"></i>
                                    <i class="ph-bold ph-square"></i>
                                    <span>Tertiary CTA</span>
                                </label>
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

@push("scripts")
<script>
    $(function() {

        $(".campaign-card").on("click", function(){
            $("#campaigns").addClass("d-none")
            $(".search-section").addClass("d-none")
            $("#campaigns-container").removeClass("overflow-hidden")
            $(".campaign-overview").removeClass("opacity-0 start-100")
        })

        $(".back").on("click", function(){
            $("#campaigns").removeClass("d-none")
            $(".search-section").removeClass("d-none")
            $("#campaigns-container").addClass("overflow-hidden")
            $(".campaign-overview").addClass("opacity-0 start-100")
        })

        $(".header-checkbox").on("change", function() {
            const isChecked = $(this).prop("checked");
            $(this).closest(".accordion-item").find(".columns").prop("checked", isChecked);
        });

        $(".columns").on("change", function(){
            const anyChecked = $(".columns:checked").length > 0;
            const downloadBtn = $('a.user-actions');
            if(anyChecked){
                downloadBtn.removeClass("disabled")
            }else{
                downloadBtn.addClass("disabled")
            }
        })


        const start = moment().subtract(29, "days");
        const end = moment();
        const label = "Last month";

        function cb(start, end, label) {
            $("#report-range span").html(start.format("D MMM") + " - " + end.format("D MMM YYYY"));
            $("#report-label span").text(label);
        }

        $("#report-range").daterangepicker({
            startDate: start,
            endDate: end,
            locale: { customRangeLabel: "Custom" },
            ranges: {
            "Today": [moment(), moment()],
            "Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
            "Last 7 Days": [moment().subtract(6, "days"), moment()],
            "Last 30 Days": [moment().subtract(29, "days"), moment()],
            "This Month": [moment().startOf("month"), moment()],
            "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
            }
        }, cb);

        cb(start, end, label);
        
    });

</script>
@endpush