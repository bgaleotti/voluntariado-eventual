<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciasPuertoRicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pais = App\Pais::where('nombre', 'Puerto Rico')->first();

        $listado_provincias = [
            'Aguada',
            'Aguadilla',
            'Aguas Buenas',
            'Aibonito',
            'Añasco',
            'Arecibo',
            'Arroyo',
            'Barceloneta',
            'Barranquitas',
            'Bayamón',
            'Cabo Rojo',
            'Caguas',
            'Camuy',
            'Canóvanas',
            'Carolina',
            'Cataño',
            'Cayey',
            'Ceiba',
            'Ciales',
            'Cidra',
            'Coamo',
            'Comerío',
            'Corozal',
            'Culebra (Isla municipio)',
            'Dorado',
            'Fajardo',
            'Florida',
            'Guánica',
            'Guayama',
            'Guayanilla',
            'Guaynabo',
            'Gurabo',
            'Hatillo',
            'Hormigueros',
            'Humacao',
            'Isabela',
            'Jayuya',
            'Juana Díaz',
            'Juncos',
            'Lajas',
            'Lares',
            'Las Marías',
            'Las Piedras',
            'Loíza',
            'Luquillo',
            'Manatí',
            'Maricao',
            'Maunabo',
            'Mayagüez',
            'Moca',
            'Morovis',
            'Naguabo',
            'Naranjito',
            'Orocovis',
            'Patillas',
            'Peñuelas',
            'Ponce',
            'Quebradillas',
            'Rincón',
            'Río Grande',
            'Sabana Grande',
            'Salinas',
            'San Germán',
            'San Juan',
            'San Lorenzo',
            'San Sebastián',
            'Santa Isabel',
            'Toa Alta',
            'Toa Baja',
            'Trujillo Alto',
            'Utuado',
            'Vega Alta',
            'Vega Baja',
            'Vieques (Isla municipio)',
            'Villalba',
            'Yabucoa',
            'Yauco'
        ];

        foreach ($listado_provincias as $v) {
            $p = new App\Provincia;
            $p->provincia = $v;
            $p->id_pais = $pais->id;
            $p->save();
        }

    }
}