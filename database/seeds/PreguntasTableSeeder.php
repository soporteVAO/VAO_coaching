<?php

use Illuminate\Database\Seeder;

class PreguntasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preguntas')->insert([
            //BLOQUE PROBLEMAS / NECESIDAD = 1
            ['pregunta'=>'El vendedor no sabe describir la necesidad, problema y razones','valor_promotor'=>0,'valor_pers_poder'=>9,'bloque_id'=>1],
            ['pregunta'=>'El vendedor asume las necesidades del cliente','valor_promotor'=>2,'valor_pers_poder'=>10,'bloque_id'=>1],
            ['pregunta'=>'El vendedor asume el problema del cliente','valor_promotor'=>3,'valor_pers_poder'=>11,'bloque_id'=>1],

            //BLOQUE PODER = 2
            ['pregunta'=>'Persona con poder de decisión no identificada','valor_promotor'=>0,'valor_pers_poder'=>14,'bloque_id'=>2],
            ['pregunta'=>'Posible persona con poder de decisión identificada','valor_promotor'=>4,'valor_pers_poder'=>16,'bloque_id'=>2],

            //BLOQUE VISION = 3
            ['pregunta'=>'Visión no creada','valor_promotor'=>0,'valor_pers_poder'=>8,'bloque_id'=>3],
            ['pregunta'=>'Visión creada en terminos de productos y servicios','valor_promotor'=>0,'valor_pers_poder'=>10,'bloque_id'=>3],

            //BLOQUE VALOR = 4
            ['pregunta'=>'Visión no identificada','valor_promotor'=>0,'valor_pers_poder'=>8,'bloque_id'=>4],
            ['pregunta'=>'El cliente quiere una solución, todavía no identificada','valor_promotor'=>1,'valor_pers_poder'=>9,'bloque_id'=>4],

            //BLOQUE CONTROL = 5
            ['pregunta'=>'Ninguna documentación','valor_promotor'=>0,'valor_pers_poder'=>7,'bloque_id'=>5],
            ['pregunta'=>'E-mail entrevista de diagnostico enviado','valor_promotor'=>2,'valor_pers_poder'=>9,'bloque_id'=>5],


        ]);
    }
}
