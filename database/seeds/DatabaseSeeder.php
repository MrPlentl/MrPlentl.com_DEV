<?php
// php artisan db:seed
use Illuminate\Database\Seeder;

use App\LcTask;
use App\LcPost;

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
        $this->call(LcPostsSeeder::class);
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


class LcPostsSeeder extends Seeder {

    public function run()
    {
        DB::table('lc_posts')->delete();

        LcPost::create(array('title' => 'Blog Post 1 - This is a Title','body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in malesuada velit, et dictum ipsum. Nullam mi risus, viverra quis augue nec, euismod gravida ex. Integer venenatis ex tempor elit mollis sagittis sed sed sem. In commodo porta enim nec interdum. Quisque hendrerit pulvinar sagittis. Nam non urna mi. Sed at elit nec justo pulvinar molestie. '));
        LcPost::create(array('title' => 'Blog Post 2 - Here is another Title','body' => 'Cras in lacus vel leo semper egestas. Donec eget risus sed risus ullamcorper tempor. Pellentesque pretium velit non suscipit egestas. Sed leo velit, malesuada id luctus ac, aliquam eu augue. Nunc feugiat ex vitae magna tincidunt porttitor. Pellentesque et aliquam turpis, at dictum nunc. Integer sit amet nisi nunc. Aenean consequat sollicitudin justo, eget volutpat ipsum hendrerit ac. Donec efficitur arcu vel accumsan efficitur. Nam elementum ligula in nisi consequat molestie. '));
        LcPost::create(array('title' => 'Blog Post 3 - It\'s time for another Title ','body' => 'Etiam id malesuada nisl, eget imperdiet neque. Aliquam erat volutpat. Morbi congue ante mauris, sit amet cursus lectus cursus in. Vivamus sagittis imperdiet turpis, at rhoncus massa. Aenean ut tristique arcu, sit amet finibus magna. Praesent vehicula lacus sed sollicitudin imperdiet. Phasellus orci urna, laoreet quis purus et, varius pharetra nibh. Sed a maximus enim, sit amet elementum odio. Suspendisse nec mi sagittis ligula lobortis fringilla. Maecenas imperdiet pellentesque elementum. Mauris consectetur imperdiet tellus, nec molestie elit cursus molestie. '));
        LcPost::create(array('title' => 'Blog Post 4 - What Title Would You Have Chosen','body' => 'Pellentesque venenatis eros eget euismod aliquam. Ut orci sem, placerat vel ligula ut, tincidunt efficitur nulla. Pellentesque fermentum lacinia ligula nec mollis. Sed commodo fringilla lacus. Vestibulum sit amet augue eu risus viverra aliquam nec sit amet mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec nibh leo, bibendum id magna ullamcorper, tincidunt viverra tellus. Morbi commodo placerat nulla id congue. '));
    }
}

