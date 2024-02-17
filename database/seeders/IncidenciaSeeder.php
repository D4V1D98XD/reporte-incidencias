<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Incidencia;

class IncidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Incidencia::create([ 
            'user_id' => 1, 
            'nombre' => 'La computadora no enciende', 
            'descripcion' => 'La computadora al encenderla se queda trabada y no pasa de ahí', 
            'area' => 'CC1', 
            'fecha'=> '20/11/23', 
            'foto' => '',
            'estado' => 3 
        ]);

        Incidencia::create([ 
            'user_id' => 1, 
            'nombre' => 'Butaca suelta', 
            'descripcion' => 'La butaca al sentarse en ella se ladea, lo que podría provocar un incidente en algún alumno', 
            'area' => 'Aula 14', 
            'fecha'=> '28/12/23', 
            'foto' => '', 
            'estado' => 1 
        ]);
        
        Incidencia::create([ 
            'user_id' => 1, 
            'nombre' => 'Techo suelto', 
            'descripcion' => 'Una parte del plafón del techo está dañado, puede caerse y ocasionar un accidente', 
            'area' => 'Aula 06', 
            'fecha'=> '25/11/23', 
            'foto' => '', 
            'estado' => 1 
        ]);

        Incidencia::create([ 
            'user_id' => 1, 
            'nombre' => 'Ventana suelta', 
            'descripcion' => 'Una ventana está a punto de caerse, poco a poco se va aflojando y está en riesgo de caerse', 
            'area' => 'Aula 03', 
            'fecha'=> '01/12/23', 
            'foto' => '', 
            'estado' => 3 
        ]);

        
        Incidencia::create([ 
            'user_id' => 1, 
            'nombre' => 'Pizarrón dañado', 
            'descripcion' => 'Una parte del pizarrón tiene una fisura y rayones de plumón que no se pueden borrar', 
            'area' => 'Aula 10', 
            'fecha'=> '17/11/23', 
            'foto' => '', 
            'estado' => 3 
        ]);

        Incidencia::create([ 
            'user_id' => 1, 
            'nombre' => 'Problema con el aire', 
            'descripcion' => 'El aire Acondicionado no enfría, al encender solamente echa aire pero no enfría como debería', 
            'area' => 'Aula 13', 
            'fecha'=> '06/12/23', 
            'foto' => '', 
            'estado' => 3 
        ]);


    }
}
