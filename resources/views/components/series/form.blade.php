<form action="{{ $action }}" method="post">
    @csrf

    @isset($name)
    @method('PUT')
    @endisset

    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control" @isset($name)value="{{ $name }}"@endisset>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>