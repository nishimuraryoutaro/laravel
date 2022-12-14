<div>
    @if(empty($filename))
        <img src="{{ asset('images/bakery-gb50d6255d_1920.jpg') }}">
    @else
        <img src="{{ asset('storage/shops/' . $filename)}}">
    @endif
</div>