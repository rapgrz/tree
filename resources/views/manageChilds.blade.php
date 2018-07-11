<ul class="list-group">
    @foreach($childs as $child)
        <li class="list-group-item list-group-item-info">
            {{ $child->name }}
            @if(count($child->childs))
                @include('manageChilds',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>