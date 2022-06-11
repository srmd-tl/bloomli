<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\QuizType;

class QuizTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type=new QuizType();
        $type->type="Q&A";
        $type->save();

        $type=new QuizType();
        $type->type="MCQs";
        $type->save();
    }
}
