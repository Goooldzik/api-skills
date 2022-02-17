<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user';

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
     * @return  void
     */
    public function handle(): void
    {
        do {

            $name = $this->ask('User name?');
            $email = $this->ask('User email?');
            $password = $this->secret('User password?');

        } while (!$this->confirm('You want create this user?', true));

        if($this->emailIsUnique($email)) {

            User::query()
                ->create([
                    'name' => $name,
                    'email' => $email,
                    'password' => Hash::make($password)
                ]);

            $this->info('Successful created user!');

        }

    }

    /**
     * @param   string $email
     * @return  bool
     */
    protected function emailIsUnique(string $email): bool
    {
        if(User::where('email', $email)->first()) {

            $this->error('User with the same email exists!');
            return false;

        }

        return true;
    }
}
