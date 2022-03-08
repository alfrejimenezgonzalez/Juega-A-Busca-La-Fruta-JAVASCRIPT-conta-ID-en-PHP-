				<h2 class="title"><a href="#">- Juega a Busca la Fruta</a></h2>
				<div class="entry">
					<p><center>Elige una fruta de las siguientes:</center><br>
						<form method="get" action="jugar.php">
					<table align=center>
						<tr><td><input type="radio" id="fruta" name="fruta" value="0" /><span style="font-size: 45pt">&#127823;</span> </td>
							<td><input type="radio" id="fruta" name="fruta" value="1" /><span style="font-size: 50pt">&#127815;</span> </td>
							<td><input type="radio" id="fruta" name="fruta"value="2" /><span style="font-size: 50pt">&#127825;</span> </td>
						</tr>
						<tr><td><input type="radio" id="fruta" name="fruta" value="3" /><span style="font-size: 45pt">&#127824;</span> </td>
							<td><input type="radio" id="fruta" name="fruta" value="4" /><span style="font-size: 50pt">&#127816;</span> </td>
							<td><input type="radio" id="fruta" name="fruta" value="5" /><span style="font-size: 50pt">&#127826;</span> </td>
						</tr>
						<tr><td colspan="2">Buscar entre el siguiente n&uacute;mero de frutas (n):</td><td><input type="text" id="cantidad" name="cantidad" /> </td>
						</tr>
						<tr><td align=right></td><td><input type="submit" value="Jugar" id="search-submit" onclick="return validar ()"></td></tr>
					</table>
						</form>
					</p><br>
			</div>
			<div id="divError" style="color:red"></div>
		  </div>
			<div class="post">
				<h2 class="title"><a href="#">Instrucciones</a></h2>
				
				<div class="entry">
					<p>Modifica el c&oacute;digo de esta p&aacute;gina y de la p&aacute;gina <span class="azul">jugar.php</span> de manera que al pulsar el bot&oacute;n <strong><span class=azul>Jugar</span></strong>
					se redirijan los datos a <span class="azul">jugar.php</span> donde se realicen las siguientes validaciones 
					y en el orden que se especifica a continuaci&oacute;n: ()</p>
					<ol><li>Se debe seleccionar una fruta de las nueve posibles.</li>
						<li>La cantidad en num&ecute;rica y positiva.</li>
					<li>Realiza las validaciones con Javascript y en PHP </li>
					</ol>
					<p>Adem&aacute;s tendremos en cuenta que:</p>
					<ul><li>En el caso de que no cumpla las validaciones se mostrar&aacute; un mensaje indicando al usuario TODOS los errores detallados.</li>
					<li>Si se introducen valores correctos se realizar&aacute; lo siguiente:
					<br/>
						<ol>
							<li>Introduce todas las frutas posibles en un array.</li>
							<li>Genera aleatoriamente n frutas.</li>
							<li>Presenta la representaci&oacute;n gr&aacute;fica de las frutas en el orden en que se generan.</li>
							<li>Busca la fruta elegida por el usuario entre las generadas y cuenta las veces que aparece.
							</li>
							<li>Al final presenta en pantalla el resultado total repeticiones de la fruta seleccionada y presenta la imagen de la fruta seleccionada. ()</li>
						</ol>
					</li>
					</ul>
				</div>
