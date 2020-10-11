<?php

namespace App\Listeners;

use Illuminate\Support\Facades\DB;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeleteHireSubmissionFilesListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $files = scandir(public_path().'/storage/hiringFiles/');
        $db_files = DB::table('hiring_projects')->get()->pluck('files')->toArray();
        $db_files = join("",$db_files);
        $db_files = array_filter(explode("|",$db_files));
        $pos0 = array_search('.',$files);
        unset($files[$pos0]);
        $pos1 = array_search('..',$files);
        unset($files[$pos1]);

        foreach ($files as $file) {
            $t = array_search('storage/hiringFiles/'.$file,$db_files,true);
            if(!$t){
                unlink(public_path().'/storage/hiringFiles/'.$file);
            }
        }
    }
}
