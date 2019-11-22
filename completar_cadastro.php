<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Completar cadastro</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div class="fundo-completar">
	<?php require "./php/efetuar_completarCadastro.php"; ?>
	<form method="POST" class="form-completar">
		<img src="images/ajudandotitle.png" alt="" class="sub-image">
		<div style="font-size: 18px; margin-left: 50px; width: 91%; font-weight: bold;">
			<span class="sub-title">Para você assinar a versão premium é necessário completar o seu cadastro. Responda as perguntas de acordo com seu nível de conhecimento sobre o assunto.</span>
		</div>
		<div>
			<div class="question" style="width: 18%;">
				<p>Como você se considera em relação a informática de um modo geral ?</p>
				<select name="informatica">
				<?php include("pegar_tabela.php"); include("./php/phpUtils/operacoes.php"); $var = Tabela($informa); for($i = 0; $i < count($var); $i++){ echo "$var[$i]"; } ?>
				</select>			
			</div>	
			<div class="question" style="width: 30%;">
				<p>Como você se considera em relação ao uso de editores de texto (word,...)</p>
				<select name="editor_texto">
				<?php $var = Tabela($edit_texto); for($i = 0; $i < count($var); $i++){ echo "$var[$i]"; }?>
				</select>
			</div>
		</div>
		<div>
			<div class="question" style="width: 18%;">
				<p>Como você se considera em relação aos editores de apresentação (Power Point)</p>
				<select name="editor_apresentacao">
					<?php $var = Tabela($edit_apresen); for($i = 0; $i < count($var); $i++){ echo "$var[$i]"; } ?>
				</select>
			</div>

			<div class="question" style="width: 30%;">
				<p>Ao falarmos de edição de imagens e vídeos. Como você se considera?</p>
				<select name="imagens_videos">
					<?php $var = Tabela($imag_videos); for($i = 0; $i < count($var); $i++){ echo "$var[$i]"; } ?>
				</select>
			</div>
		</div>
		<div>
			<div class="question" style="width: 18%;">
				<p>Quando tem alguma dificuldade no uso de recursos de multimídia, o que costuma fazer?</p>
				<select name="multimidia">
					<?php $var = Tabela($multi); for($i = 0; $i < count($var); $i++){ echo "$var[$i]"; } ?>
				</select>
			</div>
			<div class="question" style="width: 30%;"> 
				<p>Quando precisa de atividades acadêmicas, como costuma a consegui-las?</p>
				<select name="atividades_academicas">
					<?php $var = Tabela($ativ_academi); for($i = 0; $i < count($var); $i++){ echo "$var[$i]"; } ?>
				</select>
			</div>
		</div>
		<div>
			<div class="question" style="width: 18%;">
				<p>Como costuma buscar imagens para elaborar suas atividades acadêmicas?</p>
				<select name="atividades_imagens">
					<?php $var = Tabela($ativ_imag); for($i = 0; $i < count($var); $i++){ echo "$var[$i]"; } ?>
				</select>
			</div>
			<div class="question" style="width: 30%;">
				<span class="checkbox-cadastro">E costuma manter os créditos aos autores das atividades acadêmicas?</span>	
					<div>
						<input type="radio" value="sim" name="credito_autor" id="checkyes3">
						<label for="checkyes3">Sim</label>
						<span>OU</span>
						<input type="radio" value="nao" name="credito_autor" id="checkno3">
						<label for="checkno3">Não</label>
					</div>
			</div>
		</div>
		<div>
			<div class="question" style="width: 18%;">
				<p>O AJUDANDO disponibiliza uma série de atividades elaboradas por professores e estudantes de educação. O que acha disto?</p>
				<select name="disponibiliza_atividades">
					<?php $var = Tabela($disp_ativ); for($i = 0; $i < count($var); $i++){ echo "$var[$i]"; } ?>
				</select>
			</div>
			<div class="question" style="width: 30%;">
				<p>Ao solicitar atividades acadêmicas, o AJUDANDO irá envia-las para você por e-mail. Estas atividades podem ser enviadas em 3 formatos. Qual prefere?</p>
				<select name="formatos">
					<?php $var = Tabela($format); for($i = 0; $i < count($var); $i++){ echo "$var[$i]"; } ?>
				</select>
			</div>
		</div>
		<div style="flex-direction: column; margin-left: 50px;">
			<div class="form-itens">
				<span class="checkbox-cadastro">Podemos te contatar por e-mail?
					<input type="radio" value="sim" name="checked1" id="checkyes">
					<label for="checkyes">Sim</label>
					<span>OU</span>
					<input type="radio" value="nao" name="checked1" id="checkno">
					<label for="checkno">Não</label>
				</span>	
            </div>
            <div class="form-itens">
                <span class="checkbox-cadastro">Podemos te contatar por celular?
				<input type="radio" value="sim" name="checked2" id="checkyes2">
					<label for="checkyes2">Sim</label>
					<span>OU</span>
					<input type="radio" value="nao" name="checked2" id="checkno2">
					<label for="checkno2">Não</label>
				</span>			
			</div>
		</div>
		<div style="display: flex; justify-content: center;">
			<input type="submit" value="Concluir" class="btn-complementar" name="completar">
		</div>			
	</form>
	<script src="js/auth.js"></script>
</body>
</html>