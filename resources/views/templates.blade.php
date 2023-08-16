@section("title", "Templates")
@extends("layouts.default")
@section("content")
    <div class="templates-wrapper row">
        <div class="templates-list position-absolute start-0 top-0 px-0 col-6 vh-100 overflow-y-auto">
            <header class="mb-4">
                <h1 class="mb-32">Templates</h1>
                <div class="d-flex search-section position-relative">
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

                    <!-- filters -->

                    <div class="dropdown filter position-static">
                        <button class="button-icon dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <i class="ph-bold ph-article"></i>
                        </button>
                        <div class="dropdown-menu py-0 overflow-hidden start-0">
                            <!-- <button class="btn position-absolute end-0 top-0 px-0"><i class="ph-bold ph-x-circle grey-darken-1"></i></button> -->
                            <ul class="filter-items d-flex flex-wrap gap-2">
                                @php
                                    $filters = array("pre-approved" => "Pre Approved", "customer-support" => "Customer Support", "text" => "Text", "image" => "Image", "document" => "Document", "video" => "Video", "dynamic-reply" => "Dynamic Reply", "list" => "List");
                                @endphp
                                @foreach($filters as $id => $value)
                                    <li>
                                        <button class="bg-transparent filter-btns">
                                            <input type="checkbox" id="{{$id}}" class="d-none">
                                            <label for="{{$id}}" class="chip chip-outline">
                                                <i class="ph-bold ph-plus-circle"></i>
                                                <span class="text-caption">{{$value}}</span>
                                            </label>
                                        </button>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Sort Messages -->
                    <div class="dropdown filter position-static">
                        <button class="button-icon dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <i class="ph-bold ph-sort-descending"></i>
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
                </div>
            </header>
            <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="text-tab" data-bs-toggle="tab" data-bs-target="#text-tab-pane" type="button" role="tab" aria-controls="text-tab-pane" aria-selected="false">
                        <div class="message-template d-flex gap-3">
                            <div class="flex-grow-1 d-flex flex-column text-start">
                                <div class="d-flex gap-3 mb-2">
                                    <h3 class="grey-darken-4">Introduction</h3>
                                    <x-chip text="Text" class="previous" />
                                </div>
                                <p class="text-body-2 grey-darken-2">Thank you for showing interest in Carrier-Midea India!
                                    Let us know how we can assist you today: 
                                </p>
                                <p class="text-caption grey-darken-1">10:34 PM &nbsp; Jan 06 2023</p>
                            </div>
                        </div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="media-tab" data-bs-toggle="tab" data-bs-target="#media-tab-pane" type="button" role="tab" aria-controls="media-tab-pane" aria-selected="false">
                        <div class="message-template d-flex gap-3">
                            <div class="flex-grow-1 d-flex flex-column text-start">
                                <div class="d-flex gap-3 mb-2">
                                    <h3 class="grey-darken-4">Our Products</h3>
                                    <x-chip text="Image" class="previous" />
                                </div>
                                <p class="text-body-2 grey-darken-2">
                                Please select ‘Product categories’ to continue exploring our product range, or select ‘Latest offers’ to learn more about asfdohajnsfa
                                </p>
                                <p class="text-caption grey-darken-1">10:34 PM &nbsp; Jan 06 2023</p>
                            </div>
                            <img src="/storage/images/ac.png" alt="img">
                        </div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="button-template" data-bs-toggle="tab" data-bs-target="#button-template-pane" type="button" role="tab" aria-controls="button-template-pane" aria-selected="false">
                        <div class="message-template d-flex gap-3">
                            <div class="flex-grow-1 d-flex flex-column text-start">
                                <div class="d-flex gap-3 mb-2">
                                    <h3 class="grey-darken-4">Product Catalogue</h3>
                                    <x-chip text="Button" class="previous" />
                                </div>
                                <p class="text-body-2 grey-darken-2">
                                Explore our products using the shared catalogue and find the right AC for you! 
                                </p>
                                <p class="text-caption grey-darken-1">10:34 PM &nbsp; Jan 06 2023</p>
                            </div>
                            <!-- <img src="/storage/images/ac.png" alt="img"> -->
                        </div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="list-tab" data-bs-toggle="tab" data-bs-target="#list-tab-pane" type="button" role="tab" aria-controls="list-tab-pane" aria-selected="false">
                        <div class="message-template d-flex gap-3">
                            <div class="flex-grow-1 d-flex flex-column text-start">
                                <div class="d-flex gap-3 mb-2">
                                    <h3 class="grey-darken-4">Purchase AC</h3>
                                    <x-chip text="List" class="previous" />
                                </div>
                                <p class="text-body-2 grey-darken-2">
                                    Carrier ACs offer advanced cooling & heating technology, energy-efficient operation, intuitive control & 5-stage air purification for healthier indoor air. 
                                </p>
                                <p class="text-caption grey-darken-1">10:34 PM &nbsp; Jan 06 2023</p>
                            </div>
                            <!-- <img src="/storage/images/ac.png" alt="img"> -->
                        </div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="text-tab" data-bs-toggle="tab" data-bs-target="#text-tab-pane" type="button" role="tab" aria-controls="campaign-tab-pane" aria-selected="false">
                        <div class="message-template d-flex gap-3">
                            <div class="flex-grow-1 d-flex flex-column text-start">
                                <div class="d-flex gap-3 mb-2">
                                    <h3 class="grey-darken-4">Purchase AC</h3>
                                    <x-chip text="Text" class="previous" />
                                </div>
                                <p class="text-body-2 grey-darken-2">
                                    Carrier ACs offer advanced cooling & heating technology, energy-efficient operation, intuitive control & 5-stage air purification for healthier indoor air. 
                                </p>
                                <p class="text-caption grey-darken-1">10:34 PM &nbsp; Jan 06 2023</p>
                            </div>
                        </div>
                    </button>
                </li>
            </ul>
        </div>
        <div class="template-preview col-6 position-absolute w-50 min-vh-100 top-0 end-0 vh-100 overflow-y-auto">
            <div class="position-absolute top-50 start-0 end-0 text-center">
                <div class="w-100 d-flex flex-column default-preview">
                    <i class="ph-bold ph-warning-circle"></i>
                    <h3 class="grey-darken-1 z-1">Please select a template to preview it</h3>
                </div>
            </div>
            <div class="tab-content position-relative z-3 bg-white" id="myTabContent">
                <div class="tab-pane fade" id="text-tab-pane" role="tabpanel" aria-labelledby="text-tab" tabindex="0">
                    <div class="d-flex justify-content-between align-items center mb-32">
                        <h2 class="grey-darken-4">Our Products</h2>
                        <button class="btn-flat-primary edit-btn">
                            <i class="ph-bold ph-note-pencil"></i>
                            <span class="text-button">Edit template</span>
                        </button>
                        <div class="d-flex align-items-center gap-3 d-none" id="form-control-btns">
                            <x-download url="#" id="cancel" type="secondary" name="Cancel" class="ms-auto disabled">
                                <i class="ph-bold ph-x-circle"></i>
                            </x-download>
                            <x-download url="#" id="save" type="primary" name="Save" class="ms-auto">
                                <i class="ph-bold ph-download-simple"></i>
                            </x-download>
                        </div>
                    </div>
                    <form action="" class="disable" id="form-edit">
                        <div class="input-group d-flex flex-column gap-3 mb-5">
                            <h3 class="grey-lighten-1 mb-3">Message</h3>
                            <div class="input-container">
                                <input name="header" type="text" value="Hi there!" required>
                                <label>Header</label>
                                <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                            </div>
                            <div class="input-container">
                                <textarea name="message" id="" cols="30" rows="5" required>Good Morning !</textarea>
                                <label>Description</label>
                            </div>
                            <button type="button" class="btn-flat-tertiary justify-content-start d-none add-variable">
                                <i class="ph-bold ph-plus-circle"></i>
                                <span class="text-button">Add Variable</span>
                            </button>
                            <div class="row gx-0 px-3 pt-3" id="message-placeholders">
                                <div class="col-6">
                                    <div class="input-container">
                                        <div class="flex-grow-1">
                                            <select name="campaignType" id="">
                                                <option value="default">-- Select Type --</option>
                                                <option value="name" selected>Name</option>
                                                <option value="url">Url</option>
                                            </select>
                                            <label>Variable &#123;&#123;{{1}}&#125;&#125;</label>
                                        </div>
                                        <i class="ph-bold ph-caret-down"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-container">
                                        <div class="flex-grow-1">
                                            <select name="campaignType" id="">
                                                <option value="default">-- Select Type --</option>
                                                <option value="name" selected>Name</option>
                                                <option value="url">Url</option>
                                            </select>
                                            <label>Variable &#123;&#123;{{2}}&#125;&#125;</label>
                                        </div>
                                        <i class="ph-bold ph-caret-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="input-container">
                                <input name="footer" type="text" value="Carrier-midea India" required>
                                <label>Footer</label>
                                <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                            </div>
                        </div>
                        <div class="input-group d-flex flex-column gap-3 mb-5">
                            <h3 class="grey-lighten-1 mb-3">Other Actions</h3>
                            <div class="input-container">
                                <div class="flex-grow-1">
                                    <select name="templateType" id="templateType">
                                        <option value="default">-- Select Type --</option>
                                        <option value="products-catalogue" selected>Products catalogue</option>
                                        <option value="welcome">Welcome</option>
                                        <option value="purchase">Purchase</option>
                                    </select>
                                    <label>Select secondary template</label>
                                </div>
                                <i class="ph-bold ph-caret-down"></i>
                            </div>
                        </div>
        
                    </form>
                </div>
                <div class="tab-pane fade" id="media-tab-pane" role="tabpanel" aria-labelledby="media-tab" tabindex="0">
                    <div class="d-flex justify-content-between align-items center mb-32">
                        <h2 class="grey-darken-4">Our Products</h2>
                        <button class="btn-flat-primary edit-btn">
                            <i class="ph-bold ph-note-pencil"></i>
                            <span class="text-button">Edit template</span>
                        </button>
                        <div class="d-flex align-items-center gap-3 d-none" id="form-control-btns">
                            <x-download url="#" id="cancel" type="secondary" name="Cancel" class="ms-auto disabled">
                                <i class="ph-bold ph-x-circle"></i>
                            </x-download>
                            <x-download url="#" id="save" type="primary" name="Save" class="ms-auto">
                                <i class="ph-bold ph-download-simple"></i>
                            </x-download>
                        </div>
                    </div>
                    <form action="" class="disable" id="form-edit">
                        <div class="input-group d-flex flex-column gap-3 mb-5">
                            <h3 class="grey-lighten-1 mb-3">Message</h3>
                            <div class="input-container">
                                <textarea name="message" id="" cols="30" rows="5" required>Good Morning !</textarea>
                                <label>Caption</label>
                            </div>
                            <button type="button" class="btn-flat-tertiary justify-content-start d-none add-variable">
                                <i class="ph-bold ph-plus-circle"></i>
                                <span class="text-button">Add Variable</span>
                            </button>
                            <div class="row gx-0 px-3 pt-3" id="message-placeholders">
                                <div class="col-6">
                                    <div class="input-container">
                                        <div class="flex-grow-1">
                                            <select name="campaignType" id="">
                                                <option value="default">-- Select Type --</option>
                                                <option value="name" selected>Name</option>
                                                <option value="url">Url</option>
                                            </select>
                                            <label>Variable &#123;&#123;{{1}}&#125;&#125;</label>
                                        </div>
                                        <i class="ph-bold ph-caret-down"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-container">
                                        <div class="flex-grow-1">
                                            <select name="campaignType" id="">
                                                <option value="default">-- Select Type --</option>
                                                <option value="name">Name</option>
                                                <option value="url">Url</option>
                                            </select>
                                            <label>Variable &#123;&#123;{{2}}&#125;&#125;</label>
                                        </div>
                                        <i class="ph-bold ph-caret-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="input-container">
                                <input name="footer" type="text" value="Carrier-midea India" required>
                                <label>Footer</label>
                                <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                            </div>
                        </div>
                        <div class="input-group d-flex flex-column gap-3 mb-5">
                            <h3 class="grey-lighten-1 mb-3">Other Actions</h3>
                            <div class="input-container">
                                <div class="flex-grow-1">
                                    <select name="templateType" id="templateType">
                                        <option value="default">-- Select Type --</option>
                                        <option value="products-catalogue" selected>Products catalogue</option>
                                        <option value="welcome">Welcome</option>
                                        <option value="purchase">Purchase</option>
                                    </select>
                                    <label>Select secondary template</label>
                                </div>
                                <i class="ph-bold ph-caret-down"></i>
                            </div>
                        </div>
                        <div class="input-group d-flex flex-column gap-3 mb-5">
                            <h3 class="grey-lighten-1 mb-3">Media</h3>
                            <div class="input-container">
                                <input name="url" type="text" value="https://unsplash.com/nature.png" required>
                                <label>URL</label>
                                <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="button-template-pane" role="tabpanel" aria-labelledby="button-template" tabindex="0">
                    <div class="d-flex justify-content-between align-items center mb-32">
                        <h2 class="grey-darken-4">Our Products</h2>
                        <button class="btn-flat-primary edit-btn">
                            <i class="ph-bold ph-note-pencil"></i>
                            <span class="text-button">Edit template</span>
                        </button>
                        <div class="d-flex align-items-center gap-3 d-none" id="form-control-btns">
                            <x-download url="#" id="cancel" type="secondary" name="Cancel" class="ms-auto disabled">
                                <i class="ph-bold ph-x-circle"></i>
                            </x-download>
                            <x-download url="#" id="save" type="primary" name="Save" class="ms-auto">
                                <i class="ph-bold ph-download-simple"></i>
                            </x-download>
                        </div>
                    </div>
                    <form action="" class="disable" id="form-edit">
                        <div class="input-group d-flex flex-column gap-3 mb-5">
                            <h3 class="grey-lighten-1 mb-3">Message</h3>
                            <div class="input-container">
                                <input name="header" type="text" value="Hi there!" required>
                                <label>Header</label>
                                <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                            </div>
                            <div class="input-container">
                                <textarea name="message" id="" cols="30" rows="5" required>Good Morning !</textarea>
                                <label>Description</label>
                            </div>
                            <button type="button" class="btn-flat-tertiary justify-content-start d-none add-variable">
                                <i class="ph-bold ph-plus-circle"></i>
                                <span class="text-button">Add Variable</span>
                            </button>
                            <div class="row gx-0 px-3 pt-3" id="message-placeholders">
                                <div class="col-6">
                                    <div class="input-container">
                                        <div class="flex-grow-1">
                                            <select name="campaignType" id="">
                                                <option value="default">-- Select Type --</option>
                                                <option value="name" selected>Name</option>
                                                <option value="url">Url</option>
                                            </select>
                                            <label>Variable &#123;&#123;{{1}}&#125;&#125;</label>
                                        </div>
                                        <i class="ph-bold ph-caret-down"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-container">
                                        <div class="flex-grow-1">
                                            <select name="campaignType" id="">
                                                <option value="default">-- Select Type --</option>
                                                <option value="name" selected>Name</option>
                                                <option value="url">Url</option>
                                            </select>
                                            <label>Variable &#123;&#123;{{1}}&#125;&#125;</label>
                                        </div>
                                        <i class="ph-bold ph-caret-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="input-container">
                                <input name="footer" type="text" value="Carrier-midea India" required>
                                <label>Footer</label>
                                <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                            </div>
                        </div>
                        <div class="input-group d-flex flex-column gap-3 mb-5">
                            <h3 class="grey-lighten-1 mb-3">Button</h3>
                            <div class="d-flex flex-column gap-3">
                                <p class="text-body-2 grey-lighten-1">Button 1</p>
                                <div class="input-container">
                                    <input name="button1" type="text" value="Purchase AC" required>
                                    <label>Button text</label>
                                    <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                                </div>
                                <div class="input-container">
                                    <div class="flex-grow-1">
                                        <select name="templateType" id="templateType">
                                            <option value="products-catalogue">Products catalogue</option>
                                            <option value="welcome">Welcome</option>
                                            <option value="purchase" selected>Purchase AC</option>
                                        </select>
                                        <label>Redirection</label>
                                    </div>
                                    <i class="ph-bold ph-caret-down"></i>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-3">
                                <p class="text-body-2 grey-lighten-1">Button 2</p>
                                <div class="input-container">
                                    <input name="button2" type="text" value="Download Catalogue" required>
                                    <label>Button text</label>
                                    <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                                </div>
                                <div class="input-container">
                                    <div class="flex-grow-1">
                                        <select name="templateType" id="templateType">
                                            <option value="products-catalogue" selected>Products catalogue</option>
                                            <option value="welcome">Welcome</option>
                                            <option value="purchase">Purchase AC</option>
                                        </select>
                                        <label>Redirection</label>
                                    </div>
                                    <i class="ph-bold ph-caret-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="input-group d-flex flex-column gap-3 mb-5">
                            <h3 class="grey-lighten-1 mb-3">Other Actions</h3>
                            <div class="input-container">
                                <div class="flex-grow-1">
                                    <select name="templateType" id="templateType">
                                        <option value="default">-- Select Type --</option>
                                        <option value="products-catalogue" selected>Products catalogue</option>
                                        <option value="welcome">Welcome</option>
                                        <option value="purchase">Purchase</option>
                                    </select>
                                    <label>Select secondary template</label>
                                </div>
                                <i class="ph-bold ph-caret-down"></i>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="list-tab-pane" role="tabpanel" aria-labelledby="list-tab" tabindex="0">
                    <div class="d-flex justify-content-between align-items center mb-32">
                        <h2 class="grey-darken-4">Our Products</h2>
                        <button class="btn-flat-primary edit-btn">
                            <i class="ph-bold ph-note-pencil"></i>
                            <span class="text-button">Edit template</span>
                        </button>
                        <div class="d-flex align-items-center gap-3 d-none" id="form-control-btns">
                            <x-download url="#" id="cancel" type="secondary" name="Cancel" class="ms-auto disabled">
                                <i class="ph-bold ph-x-circle"></i>
                            </x-download>
                            <x-download url="#" id="save" type="primary" name="Save" class="ms-auto">
                                <i class="ph-bold ph-download-simple"></i>
                            </x-download>
                        </div>
                    </div>
                    <form action="" class="disable" id="form-edit">
                        <div class="input-group d-flex flex-column gap-3 mb-5">
                            <h3 class="grey-lighten-1 mb-3">Message</h3>
                            <div class="input-container">
                                <input name="header" type="text" value="Hi there!" required>
                                <label>Header</label>
                                <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                            </div>
                            <div class="input-container">
                                <textarea name="message" id="" cols="30" rows="5" required>Good Morning !</textarea>
                                <label>Description</label>
                            </div>
                            <button type="button" class="btn-flat-tertiary justify-content-start d-none add-variable">
                                <i class="ph-bold ph-plus-circle"></i>
                                <span class="text-button">Add Variable</span>
                            </button>
                            <div class="row gx-0 px-3 pt-3" id="message-placeholders">
                                <div class="col-6">
                                    <div class="input-container">
                                        <div class="flex-grow-1">
                                            <select name="campaignType" id="">
                                                <option value="default">-- Select Type --</option>
                                                <option value="name" selected>Name</option>
                                                <option value="url">Url</option>
                                            </select>
                                            <label>Variable &#123;&#123;{{1}}&#125;&#125;</label>
                                        </div>
                                        <i class="ph-bold ph-caret-down"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-container">
                                        <div class="flex-grow-1">
                                            <select name="campaignType" id="">
                                                <option value="default">-- Select Type --</option>
                                                <option value="name" selected>Name</option>
                                                <option value="url">Url</option>
                                            </select>
                                            <label>Variable &#123;&#123;{{1}}&#125;&#125;</label>
                                        </div>
                                        <i class="ph-bold ph-caret-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="input-container">
                                <input name="footer" type="text" value="Carrier-midea India" required>
                                <label>Footer</label>
                                <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                            </div>
                        </div>
                        <div class="input-group d-flex flex-column gap-3 mb-5">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h3 class="grey-lighten-1">List</h3>
                                <button type="button" class="btn-flat-tertiary justify-content-start">
                                    <i class="ph-bold ph-plus-circle"></i>
                                    <span class="text-button">Add Section</span>
                                </button>
                            </div>
                            <div class="d-flex flex-column gap-4">
                                <div>
                                    <p class="text-body-2 grey-lighten-1 mb-2">List Name</p>
                                    <div class="input-container">
                                        <input name="button1" type="text" value="Product catalogue" required>
                                        <label>List name</label>
                                        <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                                    </div>
                                </div>
                                <div class="accordion d-flex flex-column gap-4" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <a class="accordion-button justify-content-between mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#sectionOne" aria-expanded="true" aria-controls="sectionOne">
                                                <span class="text-body-2 grey-lighten-1">Section 1</span>
                                                <div class="d-flex ms-auto">
                                                    <button class="button-icon">
                                                        <i class="ph-bold ph-trash-simple"></i>
                                                    </button>
                                                    <button class="button-icon">
                                                        <i class="ph-bold ph-plus-circle"></i>
                                                    </button>
                                                    <button class="button-icon">
                                                        <i class="ph-bold ph-caret-down"></i>
                                                    </button>
                                                </div>
                                            </a>
                                            <div class="input-container">
                                                <input name="section1" type="text" value="Product Catalogue" required>
                                                <label>Section Name</label>
                                                <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                                            </div>
                                        </h2>
                                        <div id="sectionOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body d-flex flex-column">
                                                <div class="accordion d-flex flex-column gap-4">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="subHeadingOne">
                                                            <a class="accordion-button justify-content-between mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#subsectionItemOne" aria-expanded="false" aria-controls="subsectionItemOne">
                                                                <span class="text-body-2 grey-lighten-1">Section Item 1</span>
                                                                <div class="d-flex ms-auto">
                                                                    <button class="button-icon">
                                                                        <i class="ph-bold ph-trash-simple"></i>
                                                                    </button>
                                                                    <button class="button-icon">
                                                                        <i class="ph-bold ph-caret-down"></i>
                                                                    </button>
                                                                </div>
                                                            </a>
                                                        </h2>
                                                        <div id="subsectionItemOne" class="accordion-collapse collapse" aria-labelledby="subHeadingOne">
                                                            <div class="accordion-body p-0">
                                                                <div class="input-container">
                                                                    <input name="sectionItem1" type="text" value="Product Catalogue" required>
                                                                    <label>Item Name</label>
                                                                    <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="subHeadingTwo">
                                                            <a class="accordion-button justify-content-between mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#subsectionItemTwo" aria-expanded="false" aria-controls="subsectionItemTwo">
                                                                <span class="text-body-2 grey-lighten-1">Section Item 2</span>
                                                                <div class="d-flex ms-auto">
                                                                    <button class="button-icon">
                                                                        <i class="ph-bold ph-trash-simple"></i>
                                                                    </button>
                                                                    <button class="button-icon">
                                                                        <i class="ph-bold ph-caret-down"></i>
                                                                    </button>
                                                                </div>
                                                            </a>
                                                        </h2>
                                                        <div id="subsectionItemTwo" class="accordion-collapse collapse" aria-labelledby="subHeadingTwo">
                                                            <div class="accordion-body p-0">
                                                                <div class="input-container">
                                                                    <input name="sectionItem1" type="text" value="Product Catalogue" required>
                                                                    <label>Item Name</label>
                                                                    <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                            <a class="accordion-button justify-content-between mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#sectionTwo" aria-expanded="false" aria-controls="sectionTwo">
                                                <span class="text-body-2 grey-lighten-1">Section 2</span>
                                                <div class="d-flex ms-auto">
                                                    <button class="button-icon">
                                                        <i class="ph-bold ph-trash-simple"></i>
                                                    </button>
                                                    <button class="button-icon">
                                                        <i class="ph-bold ph-plus-circle"></i>
                                                    </button>
                                                    <button class="button-icon">
                                                        <i class="ph-bold ph-caret-down"></i>
                                                    </button>
                                                </div>
                                            </a>
                                            <div class="input-container">
                                                <input name="section2" type="text" value="Purchase AC" required>
                                                <label>Section Name</label>
                                                <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                                            </div>
                                        </h2>
                                        <div id="sectionTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body d-flex flex-column">
                                                    <div class="accordion d-flex flex-column gap-4">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="subHeadingOne">
                                                                <a class="accordion-button justify-content-between mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#sectionItemOne" aria-expanded="false" aria-controls="sectionItemOne">
                                                                    <span class="text-body-2 grey-lighten-1">Section Item 1</span>
                                                                    <div class="d-flex ms-auto">
                                                                        <button class="button-icon">
                                                                            <i class="ph-bold ph-trash-simple"></i>
                                                                        </button>
                                                                        <button class="button-icon">
                                                                            <i class="ph-bold ph-caret-down"></i>
                                                                        </button>
                                                                    </div>
                                                                </a>
                                                            </h2>
                                                            <div id="sectionItemOne" class="accordion-collapse collapse" aria-labelledby="subHeadingOne">
                                                                <div class="accordion-body p-0">
                                                                    <div class="input-container">
                                                                        <input name="sectionItem1" type="text" value="Product Catalogue" required>
                                                                        <label>Item Name</label>
                                                                        <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="subHeadingTwo">
                                                                <a class="accordion-button justify-content-between mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#sectionItemTwp" aria-expanded="false" aria-controls="sectionItemTwp">
                                                                    <span class="text-body-2 grey-lighten-1">Section Item 2</span>
                                                                    <div class="d-flex ms-auto">
                                                                        <button class="button-icon">
                                                                            <i class="ph-bold ph-trash-simple"></i>
                                                                        </button>
                                                                        <button class="button-icon">
                                                                            <i class="ph-bold ph-caret-down"></i>
                                                                        </button>
                                                                    </div>
                                                                </a>
                                                            </h2>
                                                            <div id="sectionItemTwp" class="accordion-collapse collapse" aria-labelledby="subHeadingTwo">
                                                                <div class="accordion-body p-0">
                                                                    <div class="input-container">
                                                                        <input name="sectionItem1" type="text" value="Product Catalogue" required>
                                                                        <label>Item Name</label>
                                                                        <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group d-flex flex-column gap-3 mb-5">
                            <h3 class="grey-lighten-1 mb-3">Other Actions</h3>
                            <div class="input-container">
                                <div class="flex-grow-1">
                                    <select name="templateType" id="templateType">
                                        <option value="default">-- Select Type --</option>
                                        <option value="products-catalogue" selected>Products catalogue</option>
                                        <option value="welcome">Welcome</option>
                                        <option value="purchase">Purchase</option>
                                    </select>
                                    <label>Select secondary template</label>
                                </div>
                                <i class="ph-bold ph-caret-down"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
@endsection