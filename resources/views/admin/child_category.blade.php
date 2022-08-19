<li class="categories__item {{ route('categories.show', $child_category) === url()->current() ? 'active': '' }}">
    <a href="{{ route('categories.show', $child_category) }}">{{ $child_category->name }}</a>
</li>
@if ($child_category->categories)
<ul>
    @foreach ($child_category->categories as $childCategory)
    @include('admin.child_category', ['child_category' => $childCategory])
    @endforeach
</ul>
@endif