<?php
// php artisan db:seed
use Illuminate\Database\Seeder;
use App\LcTask;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LcTasksSeeder::class);
    }

}

class LcTasksSeeder extends Seeder {

    public function run()
    {
        DB::table('lc_tasks')->delete();

        LcTask::create(array('body' => 'Go to the Store'));
        LcTask::create(array('body' => 'Finish the Laracasts Tutorials'));
        LcTask::create(array('body' => 'Finalize Authentication'));
        LcTask::create(array('body' => 'Make sure the Seeder is working'));
    }

}


