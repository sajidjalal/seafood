<?php

namespace App\Console\Commands;

use App\Models\EmailLogModel;
use Illuminate\Console\Command;

class send_mail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:send_mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Based on amil status send mail from db if amil is not sed';

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
        $result =  EmailLogModel::where([
            // 'template_name' => "emails.quout_mail_template",
            'status' => 0,
        ])->get();

        foreach ($result as $key => $row) {
            $mail_body = json_decode($row['data'], true);

            $mail_data = [];
            $mail_data['id']        =  $row['id'];
            $mail_data['user_data'] =  $row['data'];
            $mail_data['user_id']   =  $row['user_id'];
            $mail_data['email_to']  = $row['mail_id'] ?? "sajidjalal@gmail.com";
            $mail_data['template_name'] = $row['template_name'];
            $mail_data['subject']   =  $row['subject'];
            $mail_data['mail_body'] =  $mail_body['mail_body'] ?? "";

            // return view($row['template_name'], $mail_data);

            mail_sending_helper($mail_data);
        }
    }
}
