<h1>{{ $heading }}</h1>


@foreach ($listings as $listing)
    <h3>
        <a href="#">{{ $listing['title'] }}</a>
    </h3>
    <p>{{ $listing['description'] }}</p>
@endforeach
