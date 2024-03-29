@include('components.header')

<!--criando formulario de cadastro -->
<div class="container col-md-12 col-sm-10 marketing shadow rounded">
		<div class="row justify-content-center featurette my-5 ">
        <h1 class="ps-5 pt-2 py-2 cta-formulario-atualiza">Cadastrar Perfil Freelancer</h1>
			<div class="col-12 col-lg-8 col-sm-12    ">
			
			
				<form enctype="multipart/form-data" class="formulario-atualiza form-horizontal bg-form  p-sm-5 p-5 my-1 rounded" action="/confirmar-cadastro-perfil-freelancer" method="POST">
				@csrf
					<div class="form-group mt-2 mb-4">
						<label for="titulo">Titulo: </label>
						<input type="text" class="form-control" id="titulo"  name="titulo" placeholder="Ex: Engenheiro de Software" required>
					</div>

                    <div class="form-group pb-3 mt-2">
					<select name="categoria" class="form-select" id="categoria" class="pb-1" placeholder="Selecione a categoria do projeto">
                        @foreach($categoriesData as $category)
                            <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                        @endforeach
					</select>
						
					</div>

					<div class="form-group  mt-2">
						<label for="descricao" class="pb-1">Descrição</label>
						<textarea class="form-control" id="descricao" name="descricao" rows="10" placeholder="Descreva o seu projeto" required>
						</textarea>
					</div>

					

					

			<div class="container form-check-reverse pe-0 mt-3">
				<div class="d-flex justify-content-lg-end justify-content-center gap-4 d-md-block ">
				<button class=" botao_inserir btn text-white" name="inserir" id="inserir" type="submit">CADASTRAR</button>
				
				</form>

				
			</div>
		</div>
	</div>
<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>

