<HTML> 
<BODY> 
<?PHP
$enviar = 0;
if ($enviar) {
    if ($archivo != "none" AND $archivo_size != 0) {
        echo "Nombre: $archivo_name <BR>\n"; 
        echo "Tamaño: $archivo_size <BR>\n"; 
        echo "Tipo: $archivo_type <BR>\n"; 

        if (! copy ($archivo, "C:\\TEMP\\".$archivo_name)) { 
            echo "<h2>No se ha podido copiar el archivo</h2>\n"; 
        }  

    } elseif ($archivo != "none" AND $archivo_size == 0) { 
        echo "<h2>Tamaño de archivo superado</h2>\n"; 
    } else { 
        echo "<h2>No ha escogido un archivo para descargar</h2>\n"; 
    }
    echo "<HR>\n"; 
} 
  
?>


<FORM ENCTYPE="multipart/form-data" ACTION="<?php echo $PHP_SELF ?>" METHOD="post">  
<INPUT type="hidden" name="MAX_FILE_SIZE" value="100000">  
<p><b>Archivo a descargar<b><br> 

<INPUT type="file" name="archivo" size="35"></p>  
<p><INPUT type="submit" name="enviar" value="Aceptar"></p> 
</FORM> 

</BODY> 
</HTML> 