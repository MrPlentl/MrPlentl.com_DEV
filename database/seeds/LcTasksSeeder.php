<?php
/**
 * Created by PhpStorm.
 * User: bplentl
 * Date: 9/21/2017
 * Time: 12:50 PM
 */

use Illuminate\Database\Seeder;
use App\LcTask;

class LcTasksSeeder extends Seeder {

    public function run()
    {
        DB::table('lc_tasks')->delete();

        LcTask::create(array('body' => 'Go to the Store'));
        LcTask::create(array('body' => 'Finish the Laracasts Tutorial'));
        LcTask::create(array('body' => 'Finalize Authentication'));
        LcTask::create(array('body' => 'Make sure the Seeder is working'));
    }

}