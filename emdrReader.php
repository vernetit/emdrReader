<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">

	<title>Emdr Reader</title>
	<script src="js/jquery.min.js"></script>
	<script src="js/underscore-min.js"></script>


	<script>
		
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45359665-6', 'auto');
  ga('send', 'pageview');

	</script>
	<style type="text/css">
	 body{
	 	color: green;
	 	background-color: black;
	 }
		#control {
    position: fixed;
    bottom: 0px;
    width: 100%;
    margin-bottom: 10px;
		}
		#screen{
			font-size: 26px;
			/*margin-top: 25%;*/
		/*	color: blue; */
			
 	  /* font-family: "Comic Sans MS", cursive, sans-serif; */

		}
		 #up-screen{
		 	margin-left: 50%;
		 	position: fixed;
		 	top: 30px;
		 }
		 #down-screen{
		 	margin-left: 50%;
		 	position: fixed;
		 	bottom: 60px;

		 }
		 #left-screen{
		 	position: fixed;
		 	top: 50%;
		 	left: 0px; 

		 	/*float: right; */
		 /*font-size: 26px;*/

		 }
		 #right-screen{
		 	position: fixed;
		 	top: 50%;
		 	right: 0px; 
		 	/* float: left; */
		 	/*font-size: 26px;*/

		 }
	</style>
</head>
<body>
<div id="screen">
	<div id="up-screen">:)</div>
	<div id="left-screen">Emdr</div>
	<div id="right-screen">Reader!</div>
	<div id="down-screen">:)</div>
</div>


<div id="control">
	<input	type="button" value="start" onclick="play();" id="play-btn">
	<input	type="button" value="stop" onclick="stopFlash();">
	<input type="button" value="clear text" onclick="$('#input1').val(''); stopFlash();">
	<select id="velocityFlash" style="width: 80px;" onchange="calcularTiempo();">		
		<option value="50">50wpm</option>
		<option value="75">75wpm</option>
		<option value="100">100wpm</option>
		<option value="125">125wpm</option>	
		<option value="150">150wpm</option>
		<option value="175">175wpm</option>
		<option value="200">200wpm</option>
		<option value="225">225wpm</option>
		<option value="250">250wpm</option>
		<option value="275">275wpm</option>
		<option value="300">300wpm</option>
		<option value="325">325wpm</option>
		<option value="350">350wpm</option>
		<option value="400">400wpm</option>
		<option value="425"  selected>425wpm</option>
		<option value="450">450wpm</option>
		<option value="475">475wpm</option>
		<option value="500">500wpm</option>
		<option value="525">525wpm</option>
		<option value="550">550wpm</option>
		<option value="575">575wpm</option>
		<option value="600">600wpm</option>
		<option value="625">625wpm</option>
		<option value="650">650wpm</option>
		<option value="675">675wpm</option>
		<option value="700">725wpm</option>
		<option value="725">700wpm</option>
		<option value="750">750wpm</option>
		<option value="775">775wpm</option>
		<option value="800">800wpm</option>
		<option value="825">825wpm</option>
		<option value="850">850wpm</option>
		<option value="875">875wpm</option>
		<option value="900">900wpm</option>
		<option value="925">925wpm</option>
		<option value="950">950wpm</option>
		<option value="975">975wpm</option>
		<option value="1000">1000wpm</option>
		<option value="1100">1100wpm</option>
		<option value="1200">1200wpm</option>
	</select>
	<select id="wordsByFlash" onchange="wordsByFlash=n('wordsByFlash');">		
		<option value="1">1w</option>
		<option value="2"  selected>2w</option>
		<option value="3">3w</option>
	</select>
	<select id="readingMode" onchange="bLugar=1; circleFase=0; readingMode=n('readingMode'); ">		
		<option value="1" selected>left-right</option>
		<option value="2">up-down</option>
		<option value="3">circle</option>
		<option value="4">circle inv</option>
		<option value="5">random</option>

	</select>
	<textarea rows="1" cols="30" style="margin-top: 5px;" id="input1">Para Sherlock Holmes ella es siempre la mujer. Rara vez he oído que la mencione por otro nombre. A sus ojos, ella eclipsa al resto del sexo débil. No es que haya sentido por Irene Adler una emoción que pueda compararse al amor. Todas las emociones, y ésa particularmente, son opuestas a su mente fría, precisa, pero admirablemente equilibrada. Es, puedo asegurarlo, la máquina de observación y razonamiento más perfecta que el mundo ha visto; pero como amante, como enamorado, Sherlock Holmes había estado en una posición completamente falsa. Jamás hablaba de las pasiones, aun de las más suaves, sin un dejo de burla y desprecio. Eran cosas admirables para el observador... excelentes para recorrer el velo de los motivos y acciones de los hombres. Pero para el razonador preparado, admitir tales intromisiones en su propio temperamento, cuidadosamente ajustado, era introducir un factor que distraería y descompensaría todos los delicados resultados mentales. Una basura en un instrumento sensitivo o una grieta en un lente finísimo, no habría sido más perjudicial que una emoción intensa en una naturaleza como la suya. Y, sin embargo, para él no hubo más que una mujer, y esa mujer fue la difunta Irene Adler, de dudosa y turbia memoria.
Había visto poco a Holmes últimamente. Mi matrimonio nos había alejado. Mi propia felicidad y los intereses domésticos que surgén alrededor del hombre que se encuentra por primera vez convertido en amo y señor de su casa, eran suficientes para absorber toda mi atención; mientras que Holmes, que odiaba cualquier forma de sociedad con toda su alma de bohemio, permaneció en nuestras habitaciones de Baker Street, sumergido entre sus viejos libros y alternando, de semana en semana, entre la cocaína con la ambición, la somnolencia de la droga con la feroz energía de su propia naturaleza inquieta. Continuaba, como siempre, profundamente interesado en el estudio del crimen y ocupando sus inmensas facultades y sus extraordinarios poderes de observación en seguir las pistas y aclarar los misterios que habían sido abandonados por la policía oficial, como casos desesperados. De vez en cuando escuchaba algún vago relato de sus hazañas: su intervención en el caso del asesinato Trepoff, en Odessa; su solución en la singular tragedia de los hermanos Atkinson, en Trincomalee, y, finalmente, en la misión que había realizado, con tanto éxito, para la familia reinante de Holanda. Sin embargo, más allá de estas muestras de actividad, que me concretaba a compartir con todos los lectores de la prensa diaria, sabía muy poco de mi antiguo amigo y compañero.
Una noche -fue el 20 de marzo de 1888- volvía de visitar a un paciente (había vuelto al ejercicio de mi profesión como médico civil), cuando mi recorrido de regreso a casa me obligó a pasar por Baker Street. Al pasar por aquella puerta tan familiar para mí, que siempre estará asociada en mi mente a la época de mi noviazgo y a los oscuros incidentes del Estudio en escarlata, me sentí invadido por un intenso deseo de ver a Holmes y de saber cómo estaba empleando, ahora, sus extraordinarias facultades. Sus habitaciones estaban brillantemente iluminadas. Al levantar la mirada hacia ellas, noté su figura alta y esbelta pasar dos veces, convertida en negra silueta, cerca de la cortina. Estaba recorriendo la habitación rápida, ansiosamente, con la cabeza sumida en el pecho y las manos unidas a la espalda. Para mí, que conocía a fondo cada uno de sus hábitos y de sus estados de ánimo, su actitud y su comportamiento eran reveladores. Estaba trabajando de nuevo. Se había sacudido de sus ensueños toxicómanos y estaba sobre la pista candente de algún nuevo caso. Toqué la campanilla y fui conducido a la sala que por tanto tiempo compartí con Sherlock.
No fue muy efusivo. Rara vez lo era; pero creo que se alegró de verme. Casi sin decir palabra, aunque con los ojos brillándole bondadosamente, me indicó un sillón, me arrojó su cajetilla de cigarrillos y señaló hacia una botella de whisky y un sifón que había encima de una cómoda. Entonces se puso de pie frente al fuego y me miró con el detenimiento tan peculiar de él.	 
</textarea>
<input	type="button" value="colors on/off" onclick="bColors=!bColors;">
<input	type="button" value="?" onclick="alert('To put the words more close adjust the window width.\ncontact: robertchalean@gmail.com');">
 <span id="stats" style="font-size: 12px;"></span>
</div>


<script type="text/javascript">

function n(x){ return parseInt($("#"+x).val()); }

var bPlay=0;
var wordsByFlash=2;
var readingMode=1;
var circleFase=0;

function play(){

	bPlay=!bPlay;

	if(bPlay){
		$("#play-btn").val("pause");

		init();

	}else{
		clearTimeout(killInterval);
		$("#play-btn").val("start");
	}
}

ww=$(window).width();
wh=$(window).height();

var cadena;
var cantidad;
var posicion;
var lugar="left-screen";

bLugar=1;
iniciar = 1;
tiempo = 0;

function calcularTiempo(){
	if(iniciar==0){
		tiempo = cantidad * ( 60000/n("velocityFlash") );

		poner = `${cantidad} - ${getDuration(tiempo)}`;
		$("#stats").html(poner);

	}
}

function init(x){

	if(iniciar==1){
		var limpia = "";
		resultados = "";
		cantidadPalabras = 0;

		str = $("#input1").val();

		limpia = str.split("\n").join(" ");
		limpia = limpia.split("\t").join(" ");
		limpia = limpia.split("\r").join(" ");
		limpia = limpia.split(",").join(" ");
		limpia = limpia.split(".").join(" ");
		limpia = limpia.split(")").join(" ");
		limpia = limpia.split("(").join(" ");
		limpia = limpia.split(";").join(" ");
		limpia = limpia.split("-").join(" ");

		limpia = limpia.split("   ").join(" ");
		limpia = limpia.split("  ").join(" ");

		str = limpia;

	 	cadena=str.split(" ");
		cantidad=cadena.length;
		posicion = 0;

		//console.log(arrayRandomWord);
		bLugar=1;

		iniciar=0;

		calcularTiempo();

		

	}


	killInterval=setTimeout(function(){


		if(wordsByFlash==1){
			mostrar = cadena[posicion];

		}

		if(wordsByFlash==2){
			mostrar = cadena[posicion] + " " + cadena[posicion+1] ;

		}

		if(wordsByFlash==3){
			mostrar = cadena[posicion] + " " + cadena[posicion+1] + " " + cadena[posicion+2] ;

		}
		
		//console.log(cadena);

		bLugar=!bLugar;


		if(readingMode==1){
			$("#up-screen").html("");
			$("#down-screen").html("");

			if(bLugar){

				lugar="right-screen";
				$("#left-screen").html("");

			}else{
				lugar="left-screen";
				$("#right-screen").html("");

			}

		}

		if(readingMode==2){
			$("#left-screen").html("");
			$("#right-screen").html("");

			if(bLugar){

				lugar="down-screen";
				$("#up-screen").html("");

			}else{
				lugar="up-screen";
				$("#down-screen").html("");

			}

		}

		if(readingMode==3){

			$("#left-screen").html("");
			$("#right-screen").html("");
			$("#up-screen").html("");
			$("#down-screen").html("");

			if(circleFase==0){
				lugar="left-screen";
			}

			if(circleFase==1){
				lugar="up-screen";
				
			}	

			if(circleFase==2){

				lugar="right-screen";
			}

			if(circleFase==3){
				lugar="down-screen";
			
			}
			

			circleFase++;
			if(circleFase==4)
				circleFase=0;

		}

		if(readingMode==4){

			$("#left-screen").html("");
			$("#right-screen").html("");
			$("#up-screen").html("");
			$("#down-screen").html("");

			if(circleFase==2){
				lugar="left-screen";
			}

			if(circleFase==1){
				lugar="up-screen";
				
			}	

			if(circleFase==0){

				lugar="right-screen";
			}

			if(circleFase==3){
				lugar="down-screen";
			
			}
			

			circleFase++;
			if(circleFase==4)
				circleFase=0;

		}

		if(readingMode==5){

			_circleFase=circleFase;

			for(;;){

				circleFase=_.random(0,3);

				if(circleFase!=_circleFase)
					break;
			}

			$("#left-screen").html("");
			$("#right-screen").html("");
			$("#up-screen").html("");
			$("#down-screen").html("");


			if(circleFase==2){
				lugar="left-screen";
			}

			if(circleFase==1){
				lugar="up-screen";
				
			}	

			if(circleFase==0){

				lugar="right-screen";
			}

			if(circleFase==3){
				lugar="down-screen";
			
			}
		

		}

		//console.log(readingMode);

		
		if(bColors){

			poneme="";
			for(i=0;i<mostrar.length;i++){

				if(mostrar[i]==" "){
					poneme += `<span style="color: black;">&nbsp;</span>`;

				}else{
					poneme += `<span style="color: ${abc1[mostrar[i]]}; text-shadow: 1px 1px gray;">${mostrar[i]}</span>`;

				}

				
			}

			$("#"+lugar).html(poneme);

		}else{
			$("#"+lugar).html(mostrar);

		}
		

		posicion+=wordsByFlash;

		if(posicion>=cantidad){
			stopFlash();
			return;

		}	

		killInterval=setTimeout(function(){ init() }, ( 60000/n("velocityFlash") ) * wordsByFlash );


		//console.log((60000/n("velocityFlash") ) * wordsByFlash);

	},(60000/n("velocityFlash") ) * wordsByFlash );
	
}
	

function stopFlash(){
	

	if(bPlay){
		bPlay=0;
		$("#play-btn").val("start");
		
		
	}
	$("#left-screen").html("Emdr");
	$("#right-screen").html("Reader!");
	$("#up-screen").html(":)");
	$("#down-screen").html(":)");
	iniciar=1;
	clearTimeout(killInterval);
	$("#stats").html("");

}


var getDuration = function(millis){
	var dur = {};
	var units = [
	    {label:"millis",    mod:1000},
	    {label:"seconds",   mod:60},
	    {label:"minutes",   mod:60},
	    {label:"hours",     mod:24},
	    {label:"days",      mod:31}
	];
	// calculate the individual unit values...
	units.forEach(function(u){
	    millis = (millis - (dur[u.label] = (millis % u.mod))) / u.mod;
	});
	// convert object to a string representation...
	var nonZero = function(u){ return dur[u.label]; };
	dur.toString = function(){
	    return units
	        .reverse()
	        .filter(nonZero)
	        .map(function(u){
	            return dur[u.label] + " " + (dur[u.label]==1?u.label.slice(0,-1):u.label);
	        })
	        .join(', ');
	};
	return dur;
};

bColors=1;

var abc1  =  {

  'a' : 'rgb(0,0,180)','A' : 'rgb(0,0,180)','á' : 'rgb(0,0,180)','Á' : 'rgb(0,0,180)','b' : 'rgb(175,13,102)','B' : 'rgb(175,13,102)','c' : 'rgb(146,248,70)','C' : 'rgb(146,248,70)','d' : 'rgb(255,200,47)','D' : 'rgb(255,200,47)','e' : 'rgb(255,118,0)','E' : 'rgb(255,118,0)','é' : 'rgb(255,118,0)','É' : 'rgb(255,118,0)','f' : 'rgb(255,152,213)','F' : 'rgb(255,152,213)','g' : 'rgb(235,235,222)','G' : 'rgb(235,235,222)','h' : 'rgb(100,100,100)','H' : 'rgb(100,100,100)','i' : 'rgb(255,255,0)','I' : 'rgb(255,255,0)','í' : 'rgb(255,255,0)','Í' : 'rgb(255,255,0)','j' : 'rgb(255,255,150)','J' : 'rgb(255,255,150)','k' : 'rgb(55,19,112) ','K' : 'rgb(55,19,112) ','l' : 'rgb(202,62,94)','L' : 'rgb(202,62,94)','m' : 'rgb(205,145,63)','M' : 'rgb(205,145,63)','n' : 'rgb(12,75,100)','N' : 'rgb(12,75,100)','ñ' : 'rgb(12,75,100)','ñ' : 'rgb(12,75,100)','o' : 'rgb(255,0,0)','O' : 'rgb(255,0,0)','ó' : 'rgb(255,0,0)','Ó' : 'rgb(255,0,0)','p' : 'rgb(175,155,50)','P' : 'rgb(175,155,50)','q' : 'rgb(185,185,185)','Q' : 'rgb(185,185,185)','r' : 'rgb(37,70,25)','R' : 'rgb(37,70,25)','s' : 'rgb(121,33,135)','S' : 'rgb(121,33,135)','t' : 'rgb(83,140,208)','T' : 'rgb(83,140,208)','u' : 'rgb(0,154,37)','U' : 'rgb(0,154,37)','ú' : 'rgb(0,154,37)','Ú' : 'rgb(0,154,37)','v' : 'rgb(178,220,205)','V' : 'rgb(178,220,205)','w' : 'rgb(169,34,0)','W' : 'rgb(169,34,0)','x' : 'rgb(0,0,74)','X' : 'rgb(0,0,74)','y' : 'rgb(175,200,74)','Y' : 'rgb(175,200,74)','z' : 'rgb(63,25,12)','Z' : 'rgb(63,25,12)','0' : 'rgb(0,0,180)','0' : 'rgb(0,0,180)','1' : 'rgb(175,13,102)','1' : 'rgb(175,13,102)','2' : 'rgb(146,248,70)','2' : 'rgb(146,248,70)','3' : 'rgb(255,200,47)','3' : 'rgb(255,200,47)','4' : 'rgb(255,118,0)','4' : 'rgb(255,118,0)','5' : 'rgb(255,152,213)','5' : 'rgb(255,152,213)','6' : 'rgb(235,235,222)','6' : 'rgb(235,235,222)','7' : 'rgb(100,100,100)','7' : 'rgb(100,100,100)','8' : 'rgb(255,255,0)','8' : 'rgb(255,255,0)','9' : 'rgb(255,255,150)','9' : 'rgb(255,255,150)'		
		
};

function quitaAcentos(str){ 
	for (var i=0;i<str.length;i++){ 
	//Sustituye "á é í ó ú" 
		if (str.charAt(i)=="á") str = str.replace(/á/,"a"); 
		if (str.charAt(i)=="é") str = str.replace(/é/,"e"); 
		if (str.charAt(i)=="í") str = str.replace(/í/,"i"); 
		if (str.charAt(i)=="ó") str = str.replace(/ó/,"o"); 
		if (str.charAt(i)=="ú") str = str.replace(/ú/,"u"); 
	} 
	return str; 
} 

$("#down-screen")


<? if(isset($_GET["en"])){ ?>  

textoEn = `To Sherlock Holmes she is always THE woman. I have seldom heard him mention her under any other name. In his eyes she eclipses and predominates the whole of her sex. It was not that he felt any emotion akin to love for Irene Adler. All emotions, and that one particularly, were abhorrent to his cold, precise but admirably balanced mind. He was, I take it, the most perfect reasoning and observing machine that the world has seen, but as a lover he would have placed himself in a false position. He never spoke of the softer passions, save with a gibe and a sneer. They were admirable things for the observer--excellent for drawing the veil from mens motives and actions. But for the trained reasoner to admit such intrusions into his own delicate and finely adjusted temperament was to introduce a distracting factor which might throw a doubt upon all his mental results. Grit in a sensitive instrument, or a crack in one of his own high-power lenses, would not be more disturbing than a strong emotion in a nature such as his. And yet there was but one woman to him, and that woman was the late Irene Adler, of dubious and questionable memory.
I had seen little of Holmes lately. My marriage had drifted us away from each other. My own complete happiness, and the home-centred interests which rise up around the man who first finds himself master of his own establishment, were sufficient to absorb all my attention, while Holmes, who loathed every form of society with his whole Bohemian soul, remained in our lodgings in Baker Street, buried among his old books, and alternating from week to week between cocaine and ambition, the drowsiness of the drug, and the fierce energy of his own keen nature. He was still, as ever, deeply attracted by the study of crime, and occupied his immense faculties and extraordinary powers of observation in following out those clues, and clearing up those mysteries which had been abandoned as hopeless by the official police. From time to time I heard some vague account of his doings: of his summons to Odessa in the case of the Trepoff murder, of his clearing up of the singular tragedy of the Atkinson brothers at Trincomalee, and finally of the mission which he had accomplished so delicately and successfully for the reigning family of Holland.
Beyond these signs of his activity, however, which I merely shared with all the readers of the daily press, I knew little of my former friend and companion.
One night--it was on the twentieth of March, 1888--I was returning from a journey to a patient (for I had now returned to civil practice), when my way led me through Baker Street. As I passed the
well-remembered door, which must always be associated in my mind with my wooing, and with the dark incidents of the Study in Scarlet, I was seized with a keen desire to see Holmes again, and to
know how he was employing his extraordinary powers.
His rooms were brilliantly lit, and, even as I looked up, I saw his tall, spare figure pass twice in a dark silhouette against the blind. He was pacing the room swiftly, eagerly, with his head sunk
upon his chest and his hands clasped behind him. To me, who knew his every mood and habit, his attitude and manner told their own story. He was at work again. He had risen out of his drug-created
dreams and was hot upon the scent of some new problem. I rang the bell and was shown up to the chamber which had formerly been in part my own.
His manner was not effusive. It seldom was; but he was glad, I think, to see me. With hardly a word spoken, but with a kindly eye, he waved me to an armchair, threw across his case of cigars, and
indicated a spirit case and a gasogene in the corner. Then he stood before the fire and looked me over in his singular introspective fashion.
`;

$("#input1").val(textoEn);

<? } ?>


</script>
</body>
</html>