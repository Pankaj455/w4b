<div class="analytics-card">
    <p class="text-caption">{{$title}}</p>
    <div class="d-flex flex-column gap-3" id="count-wrapper">
        <div class="d-flex align-items-center gap-2 mb-3">
            <h1>{{$count}}</h1>
            @if(!is_null($arrow))
                <i class="ph-light ph-arrow-{{$arrow}}"></i>
            @endif
        </div>
        @if(!is_null($percentage) && !is_null($lastTime))
            <p class="text-body-1">
                {{$percentage}}% <span>{{$lastTime}}</span>
            </p>
        @endif
    </div>
</div>