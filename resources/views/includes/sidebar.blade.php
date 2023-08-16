<aside class="sidebar-wrapper flex-shrink-0 h-100">
    <div class="d-flex flex-column h-100">
        <div class="text-center mb-3">
            <img src="/storage/images/avatar-logo.svg" alt="avatar">
        </div>
        <div class="text-center mb-5">
            <h3 class="mb-0">Abhay Chauhan</h3>
            <p class="text-caption">abhay@carriermideaindia.com</p>
        </div>
        <div class="flex-grow-1">
            <div class="d-flex flex-column">
                <a href="/analytics" class="list-item nav-list {{ Request::is('analytics') ? 'selected' : '' }}">
                <i class="ph-bold ph-cell-signal-medium"></i>
                    <span>Analytics</span>
                </a>
                <a href="/templates" class="list-item nav-list {{ Request::is('templates') ? 'selected' : '' }}">
                    @if(Request::is('templates'))
                        <img src="/storage/images/icons/icon_templates-light.svg" alt="template-icon">
                    @else
                        <img src="/storage/images/icons/icon_templates.svg" alt="template-icon">
                    @endif
                    <span>Templates</span>
                </a>
                <a href="/campaign" class="list-item nav-list {{ Request::is('campaign') ? 'selected' : '' }}">
                    @if(Request::is('campaign'))
                        <img src="/storage/images/icons/icon_campaigns-light.svg" alt="campaign-icon">
                    @else
                        <img src="/storage/images/icons/icon_campaigns.svg" alt="campaign-icon">
                    @endif
                    <span>Campaign</span>
                </a>
                <a href="#" class="list-item nav-list coming-soon">
                    <img src="/storage/images/icons/icon_flow-editor.svg" alt="flow-editor-icon">
                    <span>Flow Editor</span>
                    <span class="label">SOON</span>
                </a>
            </div>
        </div>
        <a href="#" class="list-item log-out">
            <i class="ph-bold ph-sign-out"></i>
            <span>Log out</span>
        </a>
    </div>
</aside>