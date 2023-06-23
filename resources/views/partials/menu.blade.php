<ul class="nav">
    @foreach ($navItems as $item)
        <li><a class="text-decoration-none" href="{{ $item['link'] }}">{{ $item['title'] }}</a></li>
    @endforeach
</ul>

