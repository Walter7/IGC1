<!DOCTYPE html> <!-- SIN ESTO, NO RECONOCE html5-->
<html lang="es">
<head>
 <meta charset="utf-8" />
 <!DOCTYPE html> <!-- SIN ESTO, NO RECONOCE html5-->
<html lang="es">
<head>
 <meta charset="utf-8" />
 <link rel="stylesheet" type="text/css" href="diseño2.css">
 <title>resultado</title>
 <!-- Insertar aquí mas Metatags-->
</head>
<body>
 <div id="cuerpo">
 <div id="cabecera"><center>
 <h1><i>RESULTADO</i></h1>
 </center>
 <?php
echo "<h1>DATOS INGREASADOS</h1>";
echo "Nombre:".$_REQUEST['nombre'];
echo "<br>";
echo "edad:".$_REQUEST['edad'];
echo "<br>";
if ($_REQUEST['sexo']=='m') {
	echo"Genero:mujer";
	$aux=1.29579-(0.35004*log10($_REQUEST['cintura']+$_REQUEST['caderas'] - $_REQUEST['cuello']))+(0.221*(log10($_REQUEST['estatura'])));
$formula=(495/$aux)-450;
$formula=round($formula,2);
echo"<br>";
echo"PGC  :";
echo "$formula %";
echo"<br>";
if ($_REQUEST['edad']>=19) {if ($_REQUEST['edad']<24) {
       if ($formula <=2) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>2) {     if ($formula<=6) {
    echo "Porcentaje de:Atletico";
    }if ($formula>6) { if ($formula<=9) {
    echo "Porcentaje de:Excelente";
    }if ($formula>9) { if ($formula<=15) {
    echo "Porcentaje de:Bueno";
    }if ($formula>15) {  if ($formula<=19) {
    echo "Porcentaje de:Estandar";
    }if ($formula>19) { if ($formula<=23) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>23) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}

if ($_REQUEST['edad']>=25) {if ($_REQUEST['edad']<29) {
       if ($formula <=2) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>2) {     if ($formula<=6) {
    echo "Porcentaje de:Atletico";
    }if ($formula>6) { if ($formula<=10) {
    echo "Porcentaje de:Excelente";
    }if ($formula>10) { if ($formula<=16) {
    echo "Porcentaje de:Bueno";
    }if ($formula>16) {  if ($formula<=19) {
    echo "Porcentaje de:Estandar";
    }if ($formula>19) { if ($formula<=24) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>24) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}

if ($_REQUEST['edad']>=30) {if ($_REQUEST['edad']<34) {
       if ($formula <=2) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>2) {     if ($formula<=6) {
    echo "Porcentaje de:Atletico";
    }if ($formula>6) { if ($formula<=11) {
    echo "Porcentaje de:Excelente";
    }if ($formula>11) { if ($formula<=17) {
    echo "Porcentaje de:Bueno";
    }if ($formula>17) {  if ($formula<=19) {
    echo "Porcentaje de:Estandar";
    }if ($formula>19) { if ($formula<=25) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>25) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}

if ($_REQUEST['edad']>=35) {if ($_REQUEST['edad']<39) {
       if ($formula <=2) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>2) {     if ($formula<=6) {
    echo "Porcentaje de:Atletico";
    }if ($formula>6) { if ($formula<=12) {
    echo "Porcentaje de:Excelente";
    }if ($formula>12) { if ($formula<=18) {
    echo "Porcentaje de:Bueno";
    }if ($formula>18) {  if ($formula<=19) {
    echo "Porcentaje de:Estandar";
    }if ($formula>19) { if ($formula<=26) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>26) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}

if ($_REQUEST['edad']>=40) {if ($_REQUEST['edad']<44) {
       if ($formula <=2) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>2) {     if ($formula<=6) {
    echo "Porcentaje de:Atletico";
    }if ($formula>6) { if ($formula<=13) {
    echo "Porcentaje de:Excelente";
    }if ($formula>13) { if ($formula<=19) {
    echo "Porcentaje de:Bueno";
    }if ($formula==19) {  if ($formula==19) {
    echo "Porcentaje de:Estandar";
    }if ($formula>19) { if ($formula<=27) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>27) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}

if ($_REQUEST['edad']>=45) {if ($_REQUEST['edad']<49) {
       if ($formula <=2) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>2) {     if ($formula<=6) {
    echo "Porcentaje de:Atletico";
    }if ($formula>6) { if ($formula<=15) {
    echo "Porcentaje de:Excelente";
    }if ($formula>15) { if ($formula<=21) {
    echo "Porcentaje de:Bueno";
    }if ($formula>21) {  if ($formula<=25) {
    echo "Porcentaje de:Estandar";
    }if ($formula>25) { if ($formula<=28) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>28) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}
if ($_REQUEST['edad']>=50) {if ($_REQUEST['edad']<54) {
       if ($formula <=2) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>2) {     if ($formula<=6) {
    echo "Porcentaje de:Atletico";
    }if ($formula>6) { if ($formula<=17) {
    echo "Porcentaje de:Excelente";
    }if ($formula>17) { if ($formula<=23) {
    echo "Porcentaje de:Bueno";
    }if ($formula>23) {  if ($formula<=26) {
    echo "Porcentaje de:Estandar";
    }if ($formula>26) { if ($formula<=29) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>29) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}

if ($_REQUEST['edad']>=55) {if ($_REQUEST['edad']<59) {
       if ($formula <=2) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>2) {     if ($formula<=6) {
    echo "Porcentaje de:Atletico";
    }if ($formula>6) { if ($formula<=19) {
    echo "Porcentaje de:Excelente";
    }if ($formula>19) { if ($formula<=24) {
    echo "Porcentaje de:Bueno";
    }if ($formula>24) {  if ($formula<=28) {
    echo "Porcentaje de:Estandar";
    }if ($formula>28) { if ($formula<=30) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>30) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}
  if ($_REQUEST['edad']>60)  {
       if ($formula <=2) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>2) {     if ($formula<=6) {
    echo "Porcentaje de:Atletico";
    }if ($formula>6) { if ($formula<=20) {
    echo "Porcentaje de:Excelente";
    }if ($formula>20) { if ($formula<=25) {
    echo "Porcentaje de:Bueno";
    }if ($formula>25) {  if ($formula<=29) {
    echo "Porcentaje de:Estandar";
    }if ($formula>29) { if ($formula<=31) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>31) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }
  ;





}if ($_REQUEST['sexo']=='h') {
echo "Genero:hombre" ;
$aux=1.0324-(0.19077*log10($_REQUEST['cintura']+$_REQUEST['caderas']- $_REQUEST['cuello']))+(0.15456*(log10($_REQUEST['estatura'])));
$formula1=(495/$aux)-450;
$formula1=round($formula1,2);
echo"<br>";
echo "$formula1 %";
}; ?>
 </div>
 <div id="resultado">
 
 </div>
 <div id="descripcion"><center>
<h2>
PGC: PORCENTAJE DE GRASA CORPORAL</h2>
 <h3><d>

  Midiendo tu porcentaje de grasa corporal es como podrás conocer qué cantidad de tu peso corresponde a grasa corporal, y calcular también tu masa magra (músculos, órganos, tejidos y esqueleto). A la hora de diseñar una dieta o tu actividad física es un punto clave, y la manera de saber si estás progresando o no, para poder hacer las variaciones necesarias a tu alimentación o entrenamiento.

  El objetivo de la mayoría de los deportistas (y también es extensible al resto de la población, ya sea con fines estéticos o de salud) es disminuir la grasa corporal, manteniendo la masa magra. Bajar peso sin hacer distinción entre las partes magra y grasa de tu composición corporal es un error, que tristemente cometen muchas dietas milagro, y muchos que carecen de los conocimientos adecuados. Es por eso que son muchas las personas que después de disminuir varios kilos de su peso, siguen teniendo el mismo porcentaje de grasa, obteniendo resultados estéticos no deseados, con cuerpos con menos volumen, pero sin forma ni tonificación, ya que parte de ese peso que bajaron, lo perdieron de su masa muscular.

  Se trata de lograr, lo que en el mundo del culturismo, fitness y musculación se conoce como “definir”: Disminuir nuestro porcentaje de grasa corporal manteniendo la masa magra, que da como resultado que los músculos sean visibles. Es cierto que cambiar en estos periodos el régimen de entrenamiento con ejercicios enfocados a la “definición” puede ayudar en el proceso, y estilizar las formas musculares, pero los músculos están presentes bajo esa capa de grasa, y es la alimentación principalmente, y los ejercicios aeróbicos en menor medida, las herramientas necesarias para disminuir la grasa y hacer visible la musculatura.

  Además de los beneficios estéticos, niveles bajos de grasa corporal previenen problemas de salud asociados a la obesidad, que aumentan con porcentajes altos, superiores al 30% – 35%. En el ámbito deportivo, se ha demostrado que niveles elevados de grasa perjudican las capacidades físicas, especialmente la resistencia. 

  Pero ¡cuidado!... la grasa corporal es necesaria, y no podemos prescindir por completo de ella. La grasa no sólo es esa flacidez que vemos acumulada bajo la piel, muchos órganos internos, como el hígado, la almacenan y utilizan para su correcto funcionamiento. Es también la segunda fuente de energía preferida por el cuerpo, después de los carbohidratos. 

  Los hombres necesitan del 8% al 12% para una vida saludable, y mantener niveles más bajos en el tiempo puede ser perjudicial. Por eso los deportistas (como culturistas y competidores de fitness) que requieren niveles más bajos para una competición, sólo mantienen los porcentajes en esos niveles para superar las pruebas, y no durante todo el año. Las mujeres necesitan porcentajes de grasa algo más elevados, por su prevalencia de estrógenos en su sistema hormonal, y sus niveles mínimos saludables oscilan entre el 10% y el 14%. Los fisiculturistas en periodo competitivo, entre 2 y 3 meses antes de la prueba eliminan la mayor cantidad de grasa y líquido posible en su cuerpo, llegando a niveles del 3% al 5% en hombres, y del 6% al 10% en mujeres, volviendo a niveles más altos fuera de competición. Como norma general, las mujeres retienen entre un 4 y 6% más de grasa corporal que los hombres. Es por todo esto que debes ponerte metas realistas y alcanzables, y asumir que no puedes estar como los espartanos en la película “300” durante todo el año, ni como esa competidora de fitness de la revista, y debes ser consciente de tus limitaciones genéticas y objetivos. 

  También la edad influye en la acumulación de grasa corporal, y conforme envejecemos tendemos a retener más cantidad de grasa, hecho que se agrava en personas sedentarias. Por eso los porcentajes que indican un ligero sobrepeso en adolescentes, puede considerarse normal en un hombre de mediana edad. 

  Para conocer los rangos de referencia para medir el porcentaje de grasa corporal, puedes ver a continuación dos tablas, que indican los datos en función del sexo y la edad. Los valores intermedios son los que se consideran saludables para una persona de constitución común, pero no pueden no ser adecuados si buscas hacer visible tu musculatura, bajar de peso para una categoría deportiva, o eres competidor de fitness o culturismo. Como ya se ha mencionado, puedes mantener tu porcentaje en el intervalo “Bueno” todo el año, y por periodos concretos (como tu periodo vacacional o una prueba deportiva) llegar a “Excelente” o incluso “Competición”, siendo consciente de que será algo efímero y que no podremos mantenerlo continuamente. 	




</d></h3>

 </div>
 
 </div></center>
</body>
</html>