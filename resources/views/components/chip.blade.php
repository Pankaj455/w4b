<button {{ $attributes->merge(["class" => "chip"]) }}>
    {{$slot}}
    <span class="text-caption">{{$text}}</span>
</button>