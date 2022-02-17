<h1>{{ $name }}</h1>

@foreach ($files as $file)
    <a href="arquivos/{{ $name }}/{{ $file->slug }}"> {{ $file->url }}</a>
@endforeach