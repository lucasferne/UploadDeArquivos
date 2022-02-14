<h1>Criar</h1>
<a href="form"> clique para criar um arquivo </a>
<br>
<a href="menu"> clique para criar um menu </a>
<br><br>
<h1>Todos os Menus</h1>
@foreach ($menu as $menus)

<a href="{{$menus->slug}}"> {{$menus->name}} </a>
<br>

@endforeach