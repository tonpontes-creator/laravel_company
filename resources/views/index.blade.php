@extends('app.main')

@section('body')

    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">

                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Produtos</h5>
                        <p class="card=text">
                            Aqui você cadastra todos os seus produtos.
                            Só não se esqueça de salvar previamente as categorias.
                        </p>
                        <a href="#" class="btn btn-primary">Cadastro de Produtos</a>
                    </div>
                </div>

                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Categorias</h5>
                        <p class="card-text">
                            Aqui você cadastra as categorias.
                        </p>
                        <a href="#" class="btn btn-primary">Cadastro de Categorias</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection