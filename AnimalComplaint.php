
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Insert Animal Complaint</title>
</head>

<body>
<script language="javascript">
<!--

   function ehNumero( field ) 
   {
      for( var i = 0; i < field.length; i++ ) {
         c = field.charAt( i );
         if ( ( escape( c ) < "0" ) || ( escape( c ) > "9" ) ) {
            return false;
         }
      }
      return true;
   }
   
   function validarData(campoDiaData, campoMesData, campoAnoData) {
   var formDados = document.formGerarInfo;
    
   if (campoAnoData.value != "" && campoMesData.value != "" && campoDiaData.value != "") {
        
        if (validarAno(campoAnoData)) {
            
            if (validarMes(campoMesData)) {
                
                return validarDia(campoDiaData, campoMesData);   
            }
        }     
        return false;
    }

}

function validarDia(campoDia, campoMes) {
    
    var dia = campoDia.value;
    var mes = campoMes.value;
    var erro = false;
    
    if (dia.length > 0) {
        
        if (ehNumero(campoDia, "Dia") == false)
            return false;
        
        if ((mes == 1) || (mes == 3) || (mes == 5)
                || (mes == 7) || (mes == 8)
                || (mes == 10) || (mes == 12)) {
            
            erro = ((dia < 1) || (dia > 31));
        
        } else if ((mes == 4) || (mes == 6)
                || (mes == 9) || (mes == 11)) {
            
            erro = ((dia < 1) || (dia > 30));
        
        } else
            
            erro = (( dia < 1 ) || ( dia > 29 )); // Fevereiro
        
        if (erro) {
            
            alert("Invalid day of the month");
            campoDia.focus();
            campoDia.select();
            return false;
        
        }
    
    } else {
        alert("Type the day");
        campoDia.focus();
        campoDia.select();
        return false;
    }
    
    return true;

}


function validarMes(campo) {
    
    var valor = campo.value;
    
    if (valor.length > 0) {
        
        if (ehNumero(campo, "M?s") == false)
            return false;
        
        if (valor < 1 || valor > 12) {
            
            alert("Invallid month");
            campo.focus();
            campo.select();
            return false;
        
        }
    
    } else {
        alert("Type the month");
        campoDia.focus();
        campoDia.select();
        return false;
    }
    
    return true;

}


function validarAno(campo) {
    
    var valor = campo.value;
    
    if (valor.length > 0) {
        
        if (ehNumero(campo, "Ano") == false)
            return false;
        
        if (valor < 1900) {
            
            alert("Invallid year");
            campo.focus();
            campo.select();
            return false;       
        }   
    }   
    return true;
}
	 

   function submeterDados(modulo) 
   {
			
      var f = document.formQueixaAnimal;
      
      if(f.descricaoQueixa.value == "")
      {
      	alert("Type the description!");
        f.descricaoQueixa.select();
        f.descricaoQueixa.focus();
        return;
      
      }
      
      if(f.nomeAnimal.value == "")
      {
      	alert("Type the animal name!");
        f.nomeAnimal.select();
        f.nomeAnimal.focus();
        return;
      
      }
            
      if(f.qtdeAnimal.value != "") {
         
         if(!ehNumero(f.qtdeAnimal.value)) {
            alert("The amount of animals must be a number!");
            f.qtdeAnimal.select();
            f.qtdeAnimal.focus();
            return;
         }
      }
      else {
      	 
         alert("Type the amount of animals!");
         f.qtdeAnimal.select();
         f.qtdeAnimal.focus();
         return;
      }
      
      
      
      if(f.diaIncomodo.value != "") {
         if(!ehNumero(f.diaIncomodo.value)) {
            alert("The date must contain only numbers!");
            f.diaIncomodo.select();
            f.diaIncomodo.focus();
            return;
         }
      }
      else {
         alert("Type the date's day!");
         f.diaIncomodo.select();
         f.diaIncomodo.focus();
         return;
      }
      
      if(f.mesIncomodo.value != "") {
         if(!ehNumero(f.mesIncomodo.value)) {
            alert("The date must contain only numbers!");
            f.mesIncomodo.select();
            f.mesIncomodo.focus();
            return;
         }
      }
      else {
         alert("Type the date's month!");
         f.mesIncomodo.select();
         f.mesIncomodo.focus();
         return;
      }
      
      if(f.anoIncomodo.value != "") {
         if(!ehNumero(f.anoIncomodo.value)) {
            alert("The date must contain only numbers!");
            f.anoIncomodo.select();
            f.anoIncomodo.focus();
            return;
         }
      }
      else {
         alert("Type the date's year!");
         f.anoIncomodo.select();
         f.anoIncomodo.focus();
         return;
      }
      
      if (!validarData(f.diaIncomodo,f.mesIncomodo,f.anoIncomodo)) 
      {
       	return;
      }
      
      f.submit();

   }

//-->
</script>


<h1>Animal Complaint</h1>

<form method="POST" action="?go=form_queixa_animal" name="formQueixaAnimal">
  <p>Complaint Description: </p>
  <p><textarea rows="6" name="descricaoQueixa" id="descricaoQueixa" cols="63"></textarea></p>
  <p>Observations:</p>
  <p><textarea rows="2" name="observacaoQueixa" id="observacaoQueixa" cols="63"></textarea><br>
  </p>
  <h3>Complainer Data</h3>
  <p>Complainer name: <input type="text" name="nomeSolicitante" id="nomeSolicitante" size="41"></p>
  <p>Address: <input type="text" name="ruaSolicitante" id="ruaSolicitante" size="36">
  Complement: <input type="text" name="compSolicitante" id="compSolicitante" size="46"></p>
  <p>Province: <input type="text" name="bairroSolicitante" id="bairroSolicitante" size="20"> </p>
  <p>City: <input type="text" name="cidadeSolicitante" id="cidadeSolicitante" size="20"> State:
   <input type="text" name="ufSolicitante" id="ufSolicitante" size="3">
   ZIP Code: <input type="text" name="cepSolicitante" id="cepSolicitante" size="17"></p>
  <p>Phone number: <input type="text" name="telefoneSolicitante" id="telefoneSolicitante" size="18"></p>
  <p>E-mail: <input type="text" name="emailSolicitante" id="emailSolicitante" size="39"></p>
  <h3>Animal Data</h3>
  <p>Animal Race: <input type="text" name="nomeAnimal" id="nomeAnimal" size="32"> Quantidade: <input type="text" name="qtdeAnimal" id="qtdeAnimal" size="9"> </p>
  <p>Event Date: <input type="text" name="diaIncomodo" id="diaIncomodo" size="2"> / <input type="text" name="mesIncomodo" id="mesIncomodo" size="2">/<input type="text" name="anoIncomodo" id="anoIncomodo" size="4"></p>
  <p>Event Address: <input type="text" name="ruaOcorrencia" id="ruaOcorrencia" size="36">
  Complement: <input type="text" name="compOcorrencia" id="compOcorrencia" size="42"> </p>
  <p>Province: <input type="text" name="bairroOcorrencia" id="bairroOcorrencia" size="20"> </p>
  <p>City: <input type="text" name="cidadeOcorrencia" id="cidadeOcorrencia" size="20"> State:
   <input type="text" name="ufOcorrencia" id="ufOcorrencia" size="3">
   ZIP Code: <input type="text" name="cepOcorrencia" id="cepOcorrencia" size="17"></p>
  <p>Phone number: <input type="text" name="telefoneOcorrencia" id="telefoneOcorrencia" size="18"></p>
  <div align="center"><center><p><input type="button" value="Insert" name="bt1" onclick="javascript:submeterDados();"> <input type="reset" value="Clear" name="bt2"> </p>
  </center></div>
</form>

</body></html>

<?php
if(@$_GET['go'] == 'form_queixa_animal'){
	$descricaoQueixa = $_POST['descricaoQueixa'];
	$observacaoQueixa = $_POST['observacaoQueixa'];
	$nomeSolicitante = $_POST['nomeSolicitante'];
	$ruaSolicitante = $_POST['ruaSolicitante'];
	$compSolicitante = $_POST['compSolicitante'];
	$bairroSolicitante = $_POST['bairroSolicitante'];
	$cidadeSolicitante = $_POST['cidadeSolicitante'];
	$ufSolicitante = $_POST['ufSolicitante'];
	$cepSolicitante = $_POST['cepSolicitante'];
	$telefoneSolicitante = $_POST['telefoneSolicitante'];
	$emailSolicitante = $_POST['emailSolicitante'];
	$nomeAnimal = $_POST['nomeAnimal'];
	$qtdeAnimal = $_POST['qtdeAnimal'];
	$diaIncomodo = $_POST['diaIncomodo'];
	$mesIncomodo = $_POST['mesIncomodo'];
	$anoIncomodo = $_POST['anoIncomodo'];
	$ruaOcorrencia = $_POST['ruaOcorrencia'];
	$compOcorrencia = $_POST['compOcorrencia'];
	$bairroOcorrencia = $_POST['bairroOcorrencia'];
	$cidadeOcorrencia = $_POST['cidadeOcorrencia'];
	$ufOcorrencia= $_POST['ufOcorrencia'];
	$cepOcorrencia = $_POST['cepOcorrencia'];
	$telefoneOcorrencia = $_POST['telefoneOcorrencia'];
	
	$query1 = mysql_num_rows(mysql_query("SELECT * FROM form_queixa_animal WHERE descricaoQueixa = '$descricaoQueixa' and observacaoQueixa = '$observacaoQueixa' and nomeSolicitante = '$nomeSolicitante' and ruaSolicitante = '$ruaSolicitante' and compSolicitante = '$compSolicitante' and bairroSolicitante = '$bairroSolicitante' and 'cidadeSolicitante = $cidadeSolicitante' and ufSolicitante = '$ufSolicitante' and cepSolicitante = '$cepSolicitante' and telefoneSolicitante = '$telefoneSolicitante' and emailSolicitante = '$emailSolicitante' and nomeAnimal = '$nomeAnimal' and qtdeAnimal = '$qtdeAnimal' and diaIncomodo = '$diaIncomodo' and mesIncomodo = '$mesIncomodo' and anoIncomodo = '$anoIncomodo' and ruaOcorrencia = '$ruaOcorrencia' and compOcorrencia = '$compOcorrencia' and bairroOcorrencia = '$bairroOcorrencia' and cidadeOcorrencia = '$cidadeOcorrencia' and ufOcorrencia = '$ufOcorrencia' and cepOcorrencia = '$cepOcorrencia' and telefoneOcorrencia = '$telefoneOcorrencia'"));
	if($query1 == 1){ 
		echo "<script>alert('Informação já inserida.'); history.back();</script>"; 
	}else{
		mysql_query("insert into form_queixa_animal(descricaoQueixa, observacaoQueixa, nomeSolicitante, ruaSolicitante, compSolicitante, bairroSolicitante, cidadeSolicitante, ufSolicitante, cepSolicitante, telefoneSolicitante, emailSolicitante, nomeAnimal, qtdeAnimal, diaIncomodo, mesIncomodo, anoIncomodo, ruaOcorrencia, compOcorrencia, bairroOcorrencia, cidadeOcorrencia, ufOcorrencia, cepOcorrencia, telefoneOcorrencia) values ('$descricaoQueixa','$observacaoQueixa','$nomeSolicitante','$ruaSolicitante','$compSolicitante','$bairroSolicitante',$cidadeSolicitante','$ufSolicitante','$cepSolicitante','$telefoneSolicitante','$emailSolicitante','$nomeAnimal','$qtdeAnimal','$diaIncomodo','$mesIncomodo','$anoIncomodo','$ruaOcorrencia','$compOcorrencia','$bairroOcorrencia','$cidadeOcorrencia','$ufOcorrencia','$cepOcorrencia','$telefoneOcorrencia')");
		echo "<script>alert('Informações inseridas com sucesso.');</script>";
		echo "<meta http-equiv='refresh' content='0, url=./'>";
	}
}
?>