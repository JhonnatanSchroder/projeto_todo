@if (!empty($slot->toHtml()))
<a href="{{$href ?? null}}" class="btn btn-primary">
    {{$slot}}
</a>

@endif
