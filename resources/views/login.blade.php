    @include('components.header')


	<div class="container marketing shadow shadow-lg">
		
		<div class="row featurette my-5 p-sm-5">
		@if(request('sucesso'))
				<p class="my-2 alert alert-success text-center">Usuário criado com sucesso</p>
		@endif
			<div class="col-md-6 d-none d-lg-block pt-5">
			
                    <h2 class="text-start titulo_login">Juntos, podemos fazer mais!</h2>
                    <p class="text-start">Realize o login para uma melhor experiência.</p>
					<img class="d-flex w-50 m-auto" src="{{ asset('img/login/img-mexendo-no-celular.png') }}">
			</div>

			<div class="col-12 col-lg-6 p-sm-3 p-4">
				<form class="form-horizontal shadow-lg bg-form shadow p-sm-5 p-3 rounded" action="{{ route('login') }}" method="POST">
					@csrf
					<!-- <div class="d-grid gap-2 text-center">
						<button class="btn btn-primary google-button" type="button">Google</button>
						<button class="btn btn-primary" type="button">LinkedIn</button>
						<p class="my-2">OU</p>
					</div> -->
					<div class="form-group mt-2">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
					</div>
					<div class="form-group mt-2">
						<label for="password">Senha</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
                    </div>
                    
                    
                    <div class="row mt-2">
                        <div>
							<!-- Simple link -->
							<p class="text-start text-lg-end"><a href="recuperaSenha.php">Esqueceu a senha?</a></p>
                        </div>
                    </div>

          
                    <div class="d-grid gap-2 text-center">
					    <button type="submit" class="botao_index btn mt-1">Entrar</button>
                        <a href="cadastro.php">Não possui cadastro? Cadastre-se</a>
                    </div>
				</form>
			</div>
		</div>
	</div>


		</body>