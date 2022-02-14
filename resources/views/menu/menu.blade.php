<div style="padding-block: 20px">
    <form action="menu" method="post">
        @csrf
        <div>
            <label for="exampleFormControlInput1" class="form-label">Nome do menu</label>
            <input type="text" id="name" name="name" placeholder="Nome">
            <br>
            <input type="submit" value="Enviar Menu">
    </form>
</div>
