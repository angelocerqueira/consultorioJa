@extends('layout.app', ['current' => 'cadastro'])
@section('body')

<section class="cadastro-main">
    <div class="cadastro-info">
        <div>
            <i class="fas fa-store-alt"></i>
        </div>
        <div class="texto">
            <h2>Cadastre seu espaço</h2>
            <p>Efetue seu login abaixo e tenha acesso ao ambiente para publicação do seu espaço</p>
        </div>
    </div>

    <div class="cadastro-anunciante">

        <div class="modal ativo" data-modal="modal">
            <div class="imagem-modal">
                <img src="{{asset('assets/img/logoConsultorio.jpg')}}" alt="" srcset="">
            </div>
            <h2>Anunciante</h2>
            <form action="api/auth/login" method="POST">
                <label for=""> Usuário</label>
                <input type="email" name="email" placeholder="Digite seu email" id="campo_usuario" required>
                <label for=""> Senha</label>
                <input type="password" name="password" id="campo_senha" placeholder="Digite sua senha" required>
                <p class="recuperar-psswd"> Esqueceu sua senha? <a href="" >Clique aqui</a></p>
                <div class="button">
                    <button type="submit" id="btn_login">Confirmar</button>
                </div>
                <p class="cadastrar">Ainda não é  cadastrado? <br> <a href="" data-modal="abrirCadastro">Clique aqui</a> e faça seu cadastro.</p>
            </form>
        </div>

        <div class="modal-cadastro" data-modal="modalCadastro">
            <div class="imagem-modal-cadastro">
                <img src="{{asset('assets/img/logoConsultorio.jpg')}}" alt="" srcset="">
            </div>
            <h2>Anunciante</h2>
            <form action="api/auth/register" method="POST">
                <div class="
                sexo" style="padding: 10px 0; display:none;">
                <div >
                <input
                type="radio"
                name="tipo"
                value="Anunciante" checked>
                <label for="">Anunciante</label>
                </div>
                </div>

                <div class="sexo">

                    <div>
                        <input
                        type="radio"
                        name="sexo"
                        value="Masculino" checked>

                        <label for="">Masculino</label>
                    </div>
                    <div>
                        <input
                        type="radio"
                        name="sexo"
                        value="Feminino">

                        <label for="">Feminino</label>
                    </div>
                </div>

                <div class="dados">
                    <label for="">Nome</label>
                    <input type="text" name="name" id="" required>
                    <label for="">Email</label>
                    <input type="email" name="email" id="" required>
                    <label for="">Senha</label>
                    <input type="password" name="password" id="" required>
                    <label for="">Confirme sua Senha</label>
                    <input type="password" name="password_confirmation" id="" required>
                </div>

                <div class="button-cadastro">
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>


</section>


@endsection



