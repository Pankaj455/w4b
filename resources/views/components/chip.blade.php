<div {{ $attributes->merge(["class" => "chip"]) }}>
    {{$slot}}
    <span class="text-caption">{{$text}}</span>
</div>