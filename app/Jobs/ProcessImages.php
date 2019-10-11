<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Intervention\Image\ImageManager;


class ProcessImages implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $width;
    protected $height;
    protected $imagePath;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $imagePath, int $width, int $height=null)
    {
        //
        $this->width=$width;
        $this->height=$height;
        $this->imagePath=$imagePath;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        sleep(2);
        $manager = new ImageManager(array('driver' => 'gd'));
        $image=$manager->make($this->imagePath)->resize($this->width,$this->height);
        $basename=pathinfo($this->imagePath, PATHINFO_BASENAME);
        $image->save(storage_path('dist/'.$basename));
    }
}
