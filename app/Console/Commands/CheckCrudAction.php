<?php

namespace App\Console\Commands;

use App\Models\CrudAction;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CheckCrudAction extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var     string
     */
    protected $signature = 'check:crud';

    /**
     * The console command description.
     *
     * @var     string
     */
    protected $description = 'Check out all CRUD actions taken in the last 13h 33m';

    /**
     * @var     string[]
     */
    protected array $models = ['User', 'Post', 'Comment'];

    /**
     * @var     Carbon
     */
    protected Carbon $time;

    /**
     * Create a new command instance.
     *
     * @return  void
     */
    public function __construct()
    {
        parent::__construct();

        $this->time = Carbon::now()->subHours(13)->subMinutes(33);
    }

    /**
     * Execute the console command.
     *
     * @return  int
     */
    public function handle()
    {
        do {

            $model = $this->choice('Select model to check', $this->models);

        } while(!$this->confirm('Are you sure?', true));

        $selectedModel = $this->selectModel($model);

        $this->info("CRUD actions: {$selectedModel->count()}.");

        return 0;
    }

    /**
     * @param   $model
     */
    protected function selectModel($model)
    {
        switch($model)
        {
            case 'User':
                return CrudAction::where('model', 'User')->where('created_at', '>=', $this->time)->get();
                break;
            case 'Post':
                return CrudAction::where('model', 'Post')->where('created_at', '>=', $this->time)->get();
                break;
            case 'Comment':
                return CrudAction::where('model', 'Comment')->where('created_at', '>=', $this->time)->get();
                break;
        }

        return 0;
    }
}
