<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <aside>
        <ul>
            @foreach ($categories as $category)
            <li class="categories__item categories__item-parent"><a
                    href="{{ route('categories.show', $category) }}">{{ $category->name }}</a></li>
            <ul>
                @foreach ($category->childrenCategories as $childCategory)
                @include('admin.child_category', ['child_category' => $childCategory])
                @endforeach
            </ul>
            @endforeach
        </ul>
    </aside>
    <main class="category-content">
        @yield('content')
    </main>

    <script src="{{asset('js/app.js')}}"></script>
</body>