<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Type;

use App\Models\Project;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //soluzione 1 a molti
        Type :: factory() ->count(30) -> make() 

            ->each(function($type){

                $project = Project :: inRandomOrder() -> first();

                //La funzione Project() si trova all'interno del model Type
                $type -> Project() -> associate($project);

                $type -> save();
        });
    }
}
