@section("title", "Campaign")
@extends("layouts.default")
@section("content")
    <div class="campaigns-wrapper">
        <h1 class="mb-32">Campaign</h1>
        <div class="d-flex justify-content-between align-items-center mb-32">
            <div class="d-flex search-section">
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
                <button class="button-icon">
                    <i class="ph-bold ph-sort-descending"></i>
                </button>
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
            <button class="btn-flat-primary" data-bs-toggle="offcanvas" data-bs-target="#create-campaign" aria-controls="create-campaign">
                <i class="ph-bold ph-plus-circle"></i>
                <span>Create new campaign</span>
            </button>
        </div>

        <div class="d-flex align-items-center gap-3 flex-wrap">
            <!-- campaign-cards -->
            <button class="text-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#camp-whatsapp" aria-controls="camp-whatsapp">
                <div class="campaign-card">
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
                    <div class="campaign-footer d-flex justify-content-between align-items-center">
                        <a href="#" class="chip">
                            <i class="ph-bold ph-link-simple-horizontal"></i>
                            <span class="text-caption">contact.csv</span>
                        </a>
                        <p class="text-caption">Last updated on 01/01/2023</p>
                    </div>
                </div>
            </button>
            <button class="text-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#fathers-day" aria-controls="fathers-day">
                <div class="campaign-card">
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
                    <div class="campaign-footer d-flex justify-content-between align-items-center">
                        <a href="#" class="chip">
                            <i class="ph-bold ph-link-simple-horizontal"></i>
                            <span class="text-caption">contact.csv</span>
                        </a>
                        <p class="text-caption">Last updated on 15/06/2023</p>
                    </div>
                </div>
            </button>
            <button class="text-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#fathers-day" aria-controls="fathers-day">
                <div class="campaign-card">
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
                    <div class="campaign-footer d-flex justify-content-between align-items-center">
                        <a href="#" class="chip">
                            <i class="ph-bold ph-link-simple-horizontal"></i>
                            <span class="text-caption">contact.csv</span>
                        </a>
                        <p class="text-caption">Last updated on 10/06/2023</p>
                    </div>
                </div>
            </button>
            <button class="text-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#fathers-day" aria-controls="fathers-day">
                <div class="campaign-card">
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
                    <div class="campaign-footer d-flex justify-content-between align-items-center">
                        <a href="#" class="chip">
                            <i class="ph-bold ph-link-simple-horizontal"></i>
                            <span class="text-caption">contact.csv</span>
                        </a>
                        <p class="text-caption">Last updated on 28/12/2023</p>
                    </div>
                </div>
            </button>
            <button class="text-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#fathers-day" aria-controls="fathers-day">
                <div class="campaign-card">
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
                    <div class="campaign-footer d-flex justify-content-between align-items-center">
                        <a href="#" class="chip">
                            <i class="ph-bold ph-link-simple-horizontal"></i>
                            <span class="text-caption">contact.csv</span>
                        </a>
                        <p class="text-caption">Last updated on 24/12/2023</p>
                    </div>
                </div>
            </button>
            <button class="text-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#fathers-day" aria-controls="fathers-day">
                <div class="campaign-card">
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
                    <div class="campaign-footer d-flex justify-content-between align-items-center">
                        <a href="#" class="chip">
                            <i class="ph-bold ph-link-simple-horizontal"></i>
                            <span class="text-caption">contact.csv</span>
                        </a>
                        <p class="text-caption">Last updated on 26/11/2023</p>
                    </div>
                </div>
            </button>

        </div>

        <div class="offcanvas offcanvas-end preview" tabindex="-1" id="camp-whatsapp" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header justify-content-between gap-3 mb-4">
                <div class="d-flex gap-3">
                    <button type="button" class="btn px-0" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="ph-bold ph-arrow-left"></i>
                    </button>
                    <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Preview</h2>
                </div>
                <button class="btn-flat-primary" id="edit-btn">
                    <i class="ph-bold ph-note-pencil"></i>
                    <span class="text-button">Edit</span>
                </button>
                <div class="d-flex align-items-center gap-3 d-none" id="form-control-btns">
                    <x-download url="#" id="cancel" type="secondary" name="Cancel" class="ms-auto disabled">
                        <i class="ph-bold ph-x-circle"></i>
                    </x-download>
                    <x-download url="#" id="save" type="primary" name="Relaunch" class="ms-auto">
                        <i class="ph-bold ph-arrow-counter-clockwise"></i>
                    </x-download>
                </div>
            </div>
            <div class="offcanvas-body">
                <div class="d-flex justify-content-between align-items-center mb-4 pe-1">
                    <div class="d-flex gap-3">
                        <h3 class="grey-darken-2">Campaign details</h3>
                        <x-chip class="chip previous" text="previous">
                            <i class="ph-bold ph-stop-circle"></i>
                        </x-chip>
                    </div>
                    <p class="text-caption fst-italic grey-darken-1">Last updated on 28/12/2022</p>
                </div>
                <form action="" class="d-flex flex-column gap-3 disable" id="campaign-edit">
                    <div class="input-container">
                        <input name="email" type="text" class="text-body-2" value="New year product promotion campaign" required>
                        <label>Campaign name</label>
                        <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                    </div>
                    <div class="input-container">
                        <div class="flex-grow-1">
                            <select name="template" id="">
                                <option value="default">-- Select Template --</option>
                                <option value="our-product" selected>Our Product</option>
                                <option value="products-catalogue">Products catalogue</option>
                            </select>
                            <label>Template</label>
                        </div>
                        <i class="ph-bold ph-caret-down"></i>
                    </div>
                    <div class="input-container">
                        <div class="flex-grow-1">
                            <select name="campaignType" id="">
                                <option value="default">-- Select Type --</option>
                                <option value="marketing">Marketing</option>
                                <option value="service" selected>Service</option>
                            </select>
                            <label>Type</label>
                        </div>
                        <i class="ph-bold ph-caret-down"></i>
                    </div>
                    <!-- file upload  -->
                    <!-- <div class="input-container">
                        <div class="flex-grow-1">
                            <input name="file" type="file" class="text-body-2" required>
                            <label>Upload contact file</label>
                        </div>
                    </div> -->
                    <div class="input-container">
                        <div class="flex-grow-1">
                            <input name="date" type="date" class="text-body-2" required>
                            <label>Date</label>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="flex-grow-1">
                            <input name="time" type="time" class="text-body-2" required>
                            <label>Time</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!-- new-campaign-drawer  -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="create-campaign" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header justify-content-between align-items-center mb-4">
                <div class="d-flex gap-3">
                    <button type="button" class="btn px-0" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="ph-bold ph-arrow-left"></i>
                    </button>
                    <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Create</h2>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <x-download url="#" id="cancel" type="secondary" name="Cancel" class="ms-auto disabled">
                        <i class="ph-bold ph-x-circle"></i>
                    </x-download>
                    <x-download url="#" id="save" type="primary" name="Save" class="ms-auto">
                        <i class="ph-bold ph-download-simple"></i>
                    </x-download>
                </div>
            </div>
            <div class="offcanvas-body">
                <h3 class="mb-4 form-title">Campaign details</h3>
                <form action="" class="d-flex flex-column gap-3">
                    <div class="input-container">
                        <input name="email" type="text" class="text-body-2" required>
                        <label>Campaign name</label>
                        <button type="button" class="btn btn-light btn-sm d-flex justify-content-center align-items-center position-absolute p-0 clear"><i class="ph-bold ph-x-circle"></i></button>
                    </div>
                    <div class="input-container">
                        <div class="flex-grow-1">
                            <select name="template" id="">
                                <option value="default">-- Select Template --</option>
                                <option value="our-product">Our Product</option>
                                <option value="products-catalogue">Products catalogue</option>
                            </select>
                            <label>Template</label>
                        </div>
                        <i class="ph-bold ph-caret-down"></i>
                    </div>
                    <div class="input-container">
                        <div class="flex-grow-1">
                            <select name="campaignType" id="">
                                <option value="default">-- Select Type --</option>
                                <option value="our-product">Marketing</option>
                                <option value="products-catalogue">Service</option>
                            </select>
                            <label>Type</label>
                        </div>
                        <i class="ph-bold ph-caret-down"></i>
                    </div>
                    <!-- file upload  -->
                    <div class="input-container">
                        <div class="flex-grow-1">
                            <div class="input-file">
                                <label for="fileUpload" class="input position-relative p-0">
                                    <button class="chip previous ms-auto" type="button" id="upload-file-btn">
                                        <i class="ph-bold ph-upload-simple"></i>
                                        <span class="text-caption">Upload File</span>
                                    </button>
                                </label>
                                <input id="fileUpload" type="file" class="d-none" required>
                                <span class="top-label">Upload contact file</span>
                                <span class="file-name position-absolute text-button blue">Contact.csv</span>
                            </div>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="flex-grow-1">
                            <input name="date" type="date" class="text-body-2" required>
                            <label>Date</label>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="flex-grow-1">
                            <input name="time" type="time" class="text-body-2" required>
                            <label>Time</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

@push("scripts")

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('.clear').on('click', function() {
                const inputElement = $(this).siblings('input');

                inputElement.val('');
                inputElement.focus();
            });

            $("#edit-btn").on("click", function(){
                $("#campaign-edit").removeClass("disable")
                $("#form-control-btns").removeClass("d-none")
                $(this).addClass("d-none");
            })

            $("#upload-file-btn").on("click", function(){
                $("#fileUpload").click();
            })

        });
    </script>
@endpush