<h1>{{ $space->name }}</h1>
<p>{{ $space->description }}</p>

<h2>Amenities:</h2>
<ul>
    @foreach ($amenityNames as $amenityName)
        <li>{{ $amenityName }}</li>
    @endforeach
</ul>
