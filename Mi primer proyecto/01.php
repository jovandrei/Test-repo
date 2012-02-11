
<HTML> 
<BODY> 

<FORM METHOD="post" ACTION="mis_datos.php"> 

<input type="hidden" name="edad" value="55"> 

<p>Tu nombre <input type="text" name="nombre" size="30" value="jose"></p> 

<p>Tu sistema favorito  
<blockquote>
<select size="1" name="sistema"> 
<option selected value="Linux">Linux</option> 
<option value="Unix">Unix</option> 
<option value="Macintosh">Macintosh</option> 
<option value=&qmargin-left: 75"><option value="Windows">Windows</option> 
</select></p> 
</blockquote>
<p>¿Te gusta el futbol ? <input type="checkbox" name="futbol" value="ON"></p> 

<p>¿Cual es tu sexo?</p> 
<blockquote> 
<p>Hombre<input type="radio" value="hombre" checked name="sexo"></p> 
<p>Mujer <input type="radio" name="sexo" value="mujer"></p> 
</blockquote> 

<p>Aficiones</p> 
<p><textarea rows="5" name="aficiones" cols="30"></textarea></p> 
<input type="text" name="nombre" size="30">

<p><input type="submit" value="Enviar datos" name="enviar">  

<input type="res-left: 50"> 
<input type="reset" value="Restablecer" name="B2"></p> 

</FORM> 
</BODY> 
</HTML>