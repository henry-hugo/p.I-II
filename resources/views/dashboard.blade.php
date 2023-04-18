@extends('layout.scripts') 
@section('main')

<div class="container">
    <div class="d-flex justify-content-center">
        <form class="was-validated" method="POST" action="{{ route('login') }}">
            @csrf
                <div class="modal-header">
                    <h3 class="modal-title text-center mx-auto" id="staticBackdropLabel">Login</h3>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControEMAIL" class="form-label"> Email</label>
                    <input type="email" class="form-control" name="email" required
                        placeholder="abc@gmail.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControsenha" class="form-label"> Senha</label>
                    <input type="password" class="form-control"  name="password" size=15 required
                        placeholder="****">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <input type="submit" value="enviar" class="btn btn-primary">
                </div>
        </form>
    </div>
    
</div>
@endsection