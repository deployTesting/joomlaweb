<?php

namespace App\Console\Commands;

use App\Models\AffiliateSystemAccounts;
use Illuminate\Console\Command;

class AccountsEncryptPwd extends Command
{
    /**
     * The name  of the console command.
     *
     * @var string
     */
    protected $name = 'accounts:AccountsEncryptPwd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Go through all affiliate accounts and verify they work';

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
     * @return mixed
     */
    public function handle()
    {
        $model = new AffiliateSystemAccounts();
        $model->EncryptPasswords();

        return true;
    }
}
