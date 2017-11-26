<?php

use Illuminate\Database\Seeder;

class NoticiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('noticia')->insert([

        	'titular' => 'Alerta en Perú: FIFA ya le habría advertido que está investigando posible intervencionismo que podría dejarlo sin Mundial',
        	'entrada' => 'Aseguran que el ente rector le envió una carta a la federación incaica recordándole que la postura de algunos políticos "contravendría los Estatutos" y podría terminar en una desafiliación.',
        	'cuerpo' => 'SANTIAGO.- En Perú están alertas. La opción de perderse el Mundial de Rusia 2018 sigue latente. Y todo por el intervencionismo que podría sufrir la Federación Peruana de Fútbol, lo que conllevaría a una desafiliación de la FIFA. De hecho, la agencia de noticias AP asegura que el organismo ya le envió una carta a la FPF donde les recuerda que la propuesta del "Fujimorismo" incluye "ciertos artículos que, si se implementan, contravendrían los Estatutos de la FIFA".
        	¿Cuál es el problema? Que la idea de algunos políticos incaicos tiene como fin que el Instituto Peruano del Deporte (IPD) pase a tomar el control de la federación de fútbol (FPF) para regularizar su funcionamiento tras la serie de problemas dirigenciales. Ante esto, el ente rector del fútbol mundial le habría advertido "seguir vigilando la situación". Pero en Perú hay confianza. "En la Federación estamos tranquilos de que esto no va a suceder. El Congreso ha presentado una iniciativa donde deja de que FIFA determine cómo va a ser el proceso y los nuevos estatutos de la FPF. Que sea todo como FIFA disponga. Eso nos deja tranquilos", señaló el presidente de la Federación, Edwin Oviedo a la cadena RPP. El dirigente agregó que "hemos visto medios internacionales. Como España e Italia, que han hecho especulaciones de que FIFA nos podría desafiliar del Mundial. Primero quiero agradecer al Congreso. Tuve una reunión con ellos hace un par de días. Hicimos unas sugerencias para que no corramos el riesgo de que pueda suceder este tipo de especulaciones". A su vez, Paloma Noceda, la congresista que presentó la propuesta, asegur+o que "estamos felices de haber clasificado al Mundial. Lo hemos esperado por más de tres décadas. Todo el mundo ha festejado por esto y mi proyecto de ley nada tiene que ver con el fútbol. Se dirige a aspectos polideportivos".',
        	'imagen' => 'http://static.emol.cl/emol50/Fotos/2017/11/24/file_20171124105821.jpg',
        	'created_at' => '2017-11-24 15:25:23',
        	'categoria_id' => '2',
        	'usuario_id' => '1',

        ]);
         DB::table('noticia')->insert([

            'titular' => 'CHILE LUCHÓ ANTE BRASIL PERO PERDIÓ EN SU DEBUT POR CLASIFICATORIAS AL MUNDIAL DE BÁSQUETBOL',
            'entrada' => 'La Roja cestera se inclinó por 73 a 86 ante el conjunto brasileño en el duelo disputado en Osorno.',
            'cuerpo' => 'La tarea era difícil pero se luchó hasta el final. La Selección de Básquetbol de Chile cayó la noche de este viernes ante su similar de Brasil por 73 a 86 en duelo disputado en el gimnasio Monumental María Gallardo de Osorno en el debut de ambos elencos por las clasificatorias al Mundial de China 2019.

            El elenco nacional salió con su mejor quintento considerando la baja del alero Sebastián Suárez y el ala pívot Felipe Haase, mientras que si bien Brasil llegaba con algunas bajas, tenía a su capitán el pívot Anderson Varejao, quien jugará once temporadas en los Cleveland Cavaliers de LeBron James.

            El partido empezó parejo pero de a poco los brasileños empezaron a sacar diferencias en el segundo cuarto con una buena defensa y rápidos contragolpes, demostrando porqué son una potencia sudamericana en el deporte cestero. De esta manera, la Roja se fue al descanso con un marcador adverso de 28 a 37.

            De vuelta del entretiempo Brasil siguió dominando y estiró su ventaja hasta los 18 puntos ante un Chile que no podía ganar en los rebotes. Sin embargo, el elenco nacional se prendió y empezó a acortar distancia en el último parcia acercándose hasta los 13 puntos, diferencia por la que terminaron perdiendo.

            A pesar de la derrota Chile dejó buenas sensaciones y algunas destacadas actuaciones individuales como las de Sebastián Herrera (15 puntos), Franco Morales (14 puntos), Sammis Reyes (13 puntos) y Eduardo Marechal (11 puntos). 

            Ahora Chile deberá enfrentar a Colombia de visita en Medellín el próximo lunes en un partido clave. Esto porque el elenco nacional comparte grupo con Brasil, Venezuela y los cafeteros, clasificando los tres primeros a la siguiente ronda.

            Considerando que Brasil es potencia, Chile deberá pelear los otros dos cupos con Colombia y Venezuela.',
            'imagen' => 'https://pbs.twimg.com/media/DPcTwaBXUAAFFE8.jpg',
            'created_at' => '2017-11-25 15:25:23',
            'categoria_id' => '3',
            'usuario_id' => '1',

        ]);
    }
}
