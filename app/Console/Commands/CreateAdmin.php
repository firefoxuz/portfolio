<?php

namespace App\Console\Commands;

use Domain\Auth\Actions\CreateUserAction;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new administrator account';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(CreateUserAction $action)
    {
        $is_created = $action->execute($this->argument('email'), $this->argument('password'));
        $msg = $is_created ? "Admin user created" : "Admin user not created";
        $this->info($msg);
        return 0;
    }
}
