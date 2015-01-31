<?php

	// variável que define o diretório das imagens
	$dir = "./imagens"; 

	// esse seria o "handler" do diretório
	$dh = opendir($dir); 

	// loop que busca todos os arquivos até que não encontre mais nada
	while (false !== ($filename = readdir($dh))) { 
	// verificando se o arquivo é .jpg
		if (substr($filename,-4) == ".jpg") { 
		// mostra o nome do arquivo e um link para ele - pode ser mudado para mostrar diretamente a imagem :)
			echo "<a href=\"$filename\">$filename</a><br>"; 
		}
	}

?>
