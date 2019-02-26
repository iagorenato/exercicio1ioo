<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
	</head>
	
	<body>
    <?php

        if(empty($_GET)){?>
        <fieldset>
		<form method="get" action="exibe_animal.php">
        <table border="0">
        <tr>
			Cadastrar Animal: <br /><br />
                <th>Ave<input type="radio" name="tipo" value="ave" /><br /><br /></th>
				<th>Anfibio<input type="radio" name="tipo" value="anfibio" /><br /><br /></th>
                <th>Mamifero<input type="radio" name="tipo" value="mamifero" /><br /><br /></th>
                <th>Peixe<input type="radio" name="tipo" value="peixe" /><br /><br /></th>
                <th> Répitil<input type="radio" name="tipo" value="repitil" /><br /><br /></th>
        </tr>
        </table>
        <button>Próximo</button>
		</form>
		</fieldset>
        <?php
        }
        else{
            ?>
            <fieldset>
        <legend>Cadastrar Animal</legend>
        <form method="post" >
            <input type="number" name="peso" placeholder="Peso" /><br /><br />
            <input type="number" name="comprimento" placeholder="Comprimento" /><br /><br />
            <input type="number" name="altura" placeholder="Altura" /><br /><br />
            <input type="number" name="cor_predominante" placeholder="Cor Predominante" /><br /><br />
            <input type="number" name="nome" placeholder="Nome da Espécie" /><br />
            
            <?php

            switch ($_GET["tipo"]){
                case "ave":
                    echo "<input type="number" name="altura_maxima" placeholder="Altura Máxima"/>";
                    break;
                case "anfibio":
                    echo "<input type="number" name="sub_max_tempo_agua" placeholder="Maximo tempo submerso na agua"/>";
                    break; 
                case "mamifero":
                    echo "<input type="number" name="velocidade_maxima" placeholder="Velocidade Máxima"/>";
                    break;
                case "peixe":
                    echo "<input type="number" name="temp_media_sobrev" placeholder="Temperatura media de sobrevivencia"/>";
                    break;
                case "repitil":
                    echo "<input type="number" name="submerso_max_tempo_agu" placeholder="Maximo tempo submerso na agua"/>";
                    break; 
            }
            ?>
            <button>Enviar</button>

        </form>
        </fieldset>

            <?php
        }
        ?>
	</body>
</html>