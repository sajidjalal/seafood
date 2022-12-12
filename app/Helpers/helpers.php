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
    $mail_log_data['status'] = $status;
    try {
        // if (env('APP_ENV') == 'prod') {
        if ($file) {
            Mail::send($data['template_name'], ['user_mail_data' => $data], function ($message) use ($data, $file) {
                $email = (env('APP_ENV') == 'prod') ? $data['email'] : env('MAIL_TO');
                $message->to($email)->subject(ucwords($data['subject']));
                $message->setContentType('text/html');
                $message->attach($file);
            });
        } else {
            Mail::send($data['template_name'], ['user_mail_data' => $data], function ($message) use ($data) {
                $email = (env('APP_ENV') == 'prod') ? $data['email'] : env('MAIL_TO');
                $message->to($email)->subject(ucwords($data['subject']));
                $message->setContentType('text/html');
            });
        }
        // }
        $mail_log_data['status'] = 1;
        $mail_log_data['sent_at'] = now();
        EmailLogModel::where('id', $data['id'])->update($mail_log_data);
    } catch (\Exception $e) {
        $status = '0';
        Log::critical("Helpers::mail_sending_helper");
        Log::critical($e);
    }
}

function mailStatusList($request,  $limit = false, $user_list = "")
{
    $start = $request->has('start') ? $request->start : 0;
    $length = $request->has('length') ? $request->length : 10;
    $params['draw'] = $request->has('draw') ? $request->draw : 1;
    try {


        $query = EmailLogModel::select([DB::raw("ROW_NUMBER() OVER() AS sr_no "), 'email_to', 'subject', 'created_at', 'id', 'sent_at', 'status'])
            ->where('template_name', 'emails.quout_mail_template');

        if ($user_list) {
            $query->whereIn('email_log.created_by',  $user_list);
        }

        if (isset($request->search['value'])) {
            $search = $request->search['value'];
            $query->where(function ($query_append) use ($search) {
                $query_append->where('user_role', 'like', '%' . $search . '%')
                    ->orWhere('status', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('sent_at', 'like', '%' . $search . '%')
                    ->orWhere('created_at', 'like', '%' . $search . '%');
            });
        }

        if (isset($request->order[0]['column'])) {
            $columns = array('sr_no', 'email_to', 'status', 'created_at', 'sent_at', 'sent_at',);
            $query->orderBy($columns[$request->order[0]['column']], $request->order[0]['dir']);
        } else {
            $query->orderBy('id', 'DESC');
        }

        if ($limit) {
            return $query
                ->get()
                ->count();
        } else {
            return $query
                ->offset($start)
                ->limit($length)
                ->get();
        }
    } catch (\Exception $e) {
        Log::critical("helpers::mailStatusList");
        Log::critical($e);
    }
}
