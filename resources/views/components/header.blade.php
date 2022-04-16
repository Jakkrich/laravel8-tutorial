<div>
    <h1>This is a header component.</h1>
    <p>Hello {{ $name }}</p>
    <p>Fruits are:</p>
    <ul>
        @foreach ($fruits as $fruit)
            <li>{{ $fruit }}</li>
        @endforeach
    </ul>
</div>
