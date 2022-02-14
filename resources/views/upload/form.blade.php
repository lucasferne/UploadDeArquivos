<div style="padding-block: 20px">
    <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="exampleFormControlInput1" class="form-label">Nome do arquivo</label>
            <input type="text" id="name" name="name" placeholder="Nome">
        </div>
        <div>
            <label for="formFile">Escolher Arquivo</label>
            <input type="file" id="arquivo" name="arquivo">
        </div>
        <div>
            Escolher pra que menu vai
            <select name="Menu" id="menu">
                @foreach ($menus as $menu)
                    <option> {{ $menu->name }} </option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Enviar Arquivo">
    </form>
</div>
