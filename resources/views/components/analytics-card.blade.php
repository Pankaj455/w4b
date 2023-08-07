<div class="analytics-card">
    <p class="text-caption">{{$title}}</p>
    <div class="d-flex flex-column gap-3">
        <div class="d-flex align-items-center gap-2 mb-3">
            <h1>{{$count}}</h1>
            <i class="ph-light ph-arrow-{{$arrow}}"></i>
        </div>
        <p class="text-body-1">
            {{$percentage}}% <span>{{$lastTime}}</span>
        </p>
    </div>
</div>