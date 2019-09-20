<?php

use Illuminate\Database\Seeder;

class books_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++)
        {
            DB::table('books')->insert(array(
                'title' =>  'Book ' . $i,
                'doi'   =>  '10000' . $i
            ));
        }

        $this->command->info('the table of books complete succesfull!!');
    }
}
