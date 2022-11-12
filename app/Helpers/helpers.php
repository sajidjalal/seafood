<?php

use App\Models\EmailLogModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

function RemoveSpecialChar($str)
{
    $res = preg_replace('/[0-9\@\.\;\" "]+/', '', $str);
    return $res;
}

function uploadFile($file, $path, $disk, $ext = [])
{

    $new_name = RemoveSpecialChar(strtolower(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)));

    $file_name = str_replace(' ', '_', $new_name) . '_' .  date('d_m_Y_H_i_s') . "." . $file->getClientOriginalExtension();

    // if (!folder_exist($path)) {
    //     mkdir($path, 0755, true);
    // } else if (!is_writable($path)) {
    //     $msg = "Problem while uploading";
    //     $error = array('error_code' => '1', 'message' => $msg, 'filePath' => "");
    //     return $error;
    // }

    if ($ext) {
        if (in_array($file->getClientOriginalExtension(), $ext)) {
            $path = $file->storeAs(
                $path,
                $file_name,
                $disk
            );

            $sucess = array('error_code' => '0', 'message' => "File Uploaded", 'path' => $path, 'file_name' => $file_name, 'org_file_name' => $file->getClientOriginalName());
            return $sucess;
        } else {
            $msg = "Wrong extention given file extention is " . $file->getClientOriginalExtension();
            $error = array('error_code' => '1', 'message' => $msg, 'filePath' => "");
            return $error;
        }
    } else {
        $path = $file->storeAs(
            $path,
            $file_name,
            $disk
        );

        $sucess = array('error_code' => '0', 'message' => "File Uploaded", 'path' => $path, 'file_name' => $file_name, 'org_file_name' => $file->getClientOriginalName());
        return $sucess;
    }
}

function folder_exist($folder_path)
{
    return (file_exists($folder_path) and is_dir($folder_path));
}

function mail_sending_helper($data, $file = "")
{

    $status = NULL;
    try {
        if (env('APP_ENV') == 'prod') {
            if ($file) {
                Mail::send($data['template_name'], ['user_mail_data' => $data], function ($message) use ($data, $file) {
                    $email = (env('APP_ENV') == 'prod') ? $data['email_id'] : env('MAIL_TO');
                    $message->to($email)->subject(ucwords($data['subject']));
                    $message->attach($file);
                });
            } else {
                Mail::send($data['template_name'], ['user_mail_data' => $data], function ($message) use ($data) {
                    $email = (env('APP_ENV') == 'prod') ? $data['email_id'] : env('MAIL_TO');
                    $message->to($email)->subject(ucwords($data['subject']));
                });
            }
        }
        $status = '1';
    } catch (\Exception $e) {
        $status = '0';
        Log::critical("Helpers::mail_sending_helper");
        Log::critical($e);
    }

    $mail_log_data['user_id'] = $data['user_data']['id'] ?? 0;
    $mail_log_data['template_name'] = $data['template_name'];
    $mail_log_data['email_to'] = $data['email_to'];
    $mail_log_data['subject'] = $data['subject'];
    $mail_log_data['data'] = json_encode($data);
    $mail_log_data['status'] = $status;
    return EmailLogModel::create($mail_log_data);
}
