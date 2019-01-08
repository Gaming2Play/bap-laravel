@extends ('layouts.app')



@section('content')
    <h1>Photo Gallery</h1>
    <a href="{{route('gallery.add_photo')}}" class="btn btn-success">uploaden</a>
@foreach($photos as $photo)
    <img src="photos/{{ $photo->photo }}" alt="Foto laadt niet, reload pagina">
@endforeach

@endsection
