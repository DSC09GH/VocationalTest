<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<meta charset="utf-8">
	<title></title>
</head>
<body id="body3">
	<h1>DC Vocational text</h1>
	<?php
		$opa = 0;
		$opb = 0;
		$opc = 0;
		$opd = 0;
		$ope = 0;
		$z = 0;
		for($cont = 1;$cont<=13;$cont++){
			$op = isset($_GET["pergunta".$cont])?$_GET["pergunta".$cont]:'0';
			switch ($op) {
				case 'a':
					$opa++;
					break;
				case 'b':
					$opb++;
					break;
				case 'c':					
					$opc++;
					break;
				case 'd':
					$opd++;
					break;
				case 'e':
					$ope++;
					break;
				case '0':
					$z = 14;
			}
		}
		if($opa>$opb&&$opa>$opc&&$opa>$opd&&$opa>$ope&&$opa>$z)
			$maior = 'a';
		else if($opb>$opa&&$opb>$opc&&$opb>$opd&&$opb>$ope&&$opb>$z)
			$maior = 'b';
		else if($opc>$opa&&$opc>$opb&&$opc>$opd&&$opc>$ope&&$opc>$z)
			$maior = 'c';
		else if($opd>$opa&&$opd>$opb&&$opd>$opc&&$opd>$ope&&$opd>$z)
			$maior = 'd';
		else if($ope>$opa&&$ope>$opb&&$ope>$opc&&$ope>$opd&&$ope>$z)
			$maior = 'e';
		else if($z>$opa&&$z>$opb&&$z>$opc&&$z>$opd&&$z>$ope)
			$maior = 'z';
		switch ($maior) {
			case 'a':
				?> 
				<h2>Segundo nossos algoritmos, essas são umas das áreas que combinam com você:</h2>
					<div class="cursos">
						<span >Informática</span><br/>
	                    <span>Engenharias</span><br/>
	                    <span>Matemática</span><br/>
	                    <span>Física</span><br/>
	                    <span>Contabilidade</span><br/><br/>
	                 </div>
				<?php
				break;
			case 'b':
				?> 
				<h2>Segundo nossos algoritmos, essas são umas das áreas que combinam com você:</h2>
				<div class="cursos">
					<span>Educação Física</span><br/>
                    <span>Fisioterapia</span><br/>
                    <span>Estética</span><br/>
                    <span>Turismo</span><br/>
                    <span>Dança</span><br/>
                </div>
				<?php
				break;
			case 'c':
				?> 
				<h2>Segundo nossos algoritmos, essas são umas das áreas que combinam com você:</h2>
				<div class="cursos">
					<span>Química</span><br/>
                    <span>Farmácia</span><br/>
                    <span>Biomedicina</span><br/>
                    <span>Ciências da Natureza</span><br/>
                    <span>Ciências Forenses</span><br/>
                </div>
				<?php
				break;
			case 'd':
				?>
				<h2>Segundo nossos algoritmos, essas são uma das áreas que combinam com você:</h2> 
				<div class="cursos">
					<span>Medicina</span><br/>
                    <span>Biologia</span><br/>
                    <span>Pscologia</span><br/>
                    <span>Relações Humanas</span><br/>
                    <span>Enfermagem</span><br/>
                </div>
				<?php
				break;
			case 'e':
				?> 
				<h2>Segundo nossos algoritmos, essas são uma das áreas que combinam com você:</h2>
				<div class="cursos">
					<span>História</span><br/>
                    <span>Geografia</span><br/>
                    <span>Letras</span><br/>
                    <span>Direito</span><br/>
                    <span>Filosofia</span><br/>
                </div>
				<?php
				break;
			case 'z':?> 
				<div class="error">
				<h2>Você esqueceu de responder uma ou mais questões!</h2>
				</div>
				<?php
				break;
			default:
				?> 
					<h3>Nossos algoritmos não conseguiu identificar cursos que combinam com você, porém não desanime, existem outros testes vocacionais pela internet!</h3>
				<?php
				break;
		}
	?>
	<button class="repeat">
		<a class="link" href="questionario.html">Quer fazer o teste novamente?</a>
	</button>
	<div class="rodape">
		<footer>
			<div class="informacoes">
				<span>Created by: Danilo Santos da Cruz</span><br/>
				<span>GitHub: DSC09GH</span><br/>
				<span>Ideia do projeto: luizmoitinho (GitHub)</span>
			</div>
		</footer>
	</div>
</body>
</html>