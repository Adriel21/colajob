@include('components.header')




	<div class="container marketing shadow shadow-lg">

	

		<div class="row featurette my-5 p-sm-5">



			<div class="col-md-6 d-none d-lg-block pt-5">

                    <h4 class="text-start titulo_cadastro">Junte-se a nossa rede!</h4>

                    <p class="text-start">Realize o cadastro para uma melhor experiência</p>

				    <img class="d-flex w-75 m-auto" src="{{ asset('img/register/img-pessoas-fazendo-cadastro-800.png') }}">

			</div>



			<div class="ccol-12 col-lg-6 p-sm-3 p-4">

				<form enctype="multipart/form-data" class="form-horizontal shadow-lg bg-form shadow p-sm-5 p-3 rounded" action="/cadastrar" method="POST">
				@csrf

					<div class="d-grid gap-2 text-center">

                        <button class="btn btn-primary google-button" type="button">Google</button>

                        <button class="btn btn-primary" type="button">LinkedIn</button>

                        <p class="my-2">OU</p>

                    </div>



					<div class="form-group mt-2">

						<label for="name">Nome</label>

						<input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" required>

					</div>

					<div class="form-group mt-2">

						<label for="email">Email</label>

						<input type="email" class="form-control" id="email" name="email" placeholder="exemplo@gmail.com" required>

					</div>

					<div class="form-group mt-2">

						<label for="password">Senha</label>

						<input type="password" class="form-control" id="password" name="password" placeholder="Maiúsculas, Minúsculas, Números e !@#$%&"] minlength="8" required>

					</div>

					



					<div class="form-check mt-2">

                            <input class="form-check-input" type="checkbox" value="accepted" id="form2Example34"  name="accept">

                            <label class="form-check-label" for="form2Example34"><a href="">Termos de responsabilidade</a> | <a href="">Política de privacidade</a></label>

                    </div>



					<div class="d-grid gap-2 text-center">

					    <button type="submit" class="btn botao_index mt-3" >Cadastrar</button>

                        <a href="login.php">Já possui cadastro? Login</a>

                    </div>

				</form>

			</div>

		</div>

	</div>

	@include('components.footer')

