@section("title", "Campaign")
@extends("layouts.default")
@section("content")
    <div class="campaigns-wrapper">
        <h1 class="mb-32">Campaign</h1>
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
            
            <button class="button-icon">
                <i class="ph-bold ph-funnel"></i>
            </button>
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
@endsection