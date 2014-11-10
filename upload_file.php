<?php


   if(isset($_FILES['arquivo']))
   {
      date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
 
      $ext = strtolower(substr($_FILES['arquivo']['name'],-4)); //Pegando extensão do arquivo
      $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
      $dir = 'x/'; //Diretório para uploads
 
      if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$new_name)){
		print "Arquivo enviado!";
		}else{
		print "Arquivo não enviado!";
		}
   }


?>
