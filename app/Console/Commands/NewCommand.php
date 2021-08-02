<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class NewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'new:command {userId: The id of user.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
    public function handle()
    {
        // $email = $this->ask('What is your email?');
        // $this->comment("You have executed new command for {$email}!");
        // $this->info("You have executed new command for {$email}!");
        // $this->error("You have executed new command for {$email}!");

        // $headers = ['Name', 'Email'];
        // $data = [
        //     ['Jane', 'janedoe@gmail.com'],
        //     ['John', 'johndoe@gmail.com']
        // ];
        // $this->table($headers, $data);

        $totalUnits = 10;
        $this->output->progressStart($totalUnits);

        for ($i=0; $i < $totalUnits; $i++) {
            sleep(1);

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();

        $this->info('Task complete!');

        return 0;
    }
}
