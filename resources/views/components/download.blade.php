<a href="{{$url}}" {{ $attributes->merge(['class' => "btn-flat-".$type]) }}>
    {{$slot}}
    <span>{{$name}}</span>
</a>