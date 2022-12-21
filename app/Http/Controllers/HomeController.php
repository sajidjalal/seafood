<?php

namespace App\Http\Controllers;

use App\Models\DocumentsDetailsModel;
use App\Models\EmailLogModel;
use App\Models\MasterCityModel;
use App\Models\MasterStateModel;
use App\Models\UsersModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return   redirect('mail-list');
        $data['page_title'] = 'Home';
        return view('crm.admin.home.home', $data);
    }

    public function userList()
    {
        $data['page_title'] = 'User List';
        return view('crm.admin.user.user-list', $data);
    }

    public function userListApi(Request $request)
    {

        $params['draw'] = $request->has('draw') ? $request->draw : 1;

        $user_info = Auth::user();
        $user_list = [];
        $results = userList($request, false, $user_list);
        $totalRecords = userList($request, true, $user_list);

        $response_array = [];
        if (count($results)) {
            foreach ($results as $key => $result) {
                $response_array[$key]['sr_no']      = $key + 1;
                $response_array[$key]['id']         = $result->id;
                $response_array[$key]['name']    = ucwords($result->name);
                $response_array[$key]['email']   = $result->email;

                $response_array[$key]['status']     =   $result->status == 0 ? "Pending" : "Sent";
                $response_array[$key]['action']     =  "<a href= " . route('edit-user', ['id' => $result->id]) . " rel='noopener noreferrer' class='btn btn-sm btn-primary font-weight-bolder'> Edit</a>";
                $response_array[$key]['created_at'] = $result->created_at ? Carbon::parse($result->created_at)->format(SHOW_FULL_DATE_FORMAT) : "";
            }
        }

        $json_data = array(
            "draw"            => intval($params['draw']),
            "recordsTotal"    => intval($totalRecords),
            "recordsFiltered" => intval($totalRecords),
            "data"            => $response_array
        );
        return response()->json($json_data);
    }

    public function addUser()
    {
        $data['page_title'] = 'Add User';
        $data['state'] = MasterStateModel::select('id', 'state_name as name')->orderBy('name', 'asc')->get();
        $data['city'] = MasterCityModel::select('id', 'city_name as name')->orderBy('name', 'asc')->get();
        return view('crm.admin.user.add-user', $data);
    }

    public function mailCompose()
    {
        $data['page_title'] = 'Mail Compose';
        $data['user_list']  =  UsersModel::select(DB::raw("id, CONCAT(first_name ,' ', middle_name , ' ', last_name ,' / ' ,mobile_number,' / ',email ) AS text"))
            ->where('role', 2)
            ->get();
        return view('crm.admin.mail_compose.mail-compose', $data);
    }

    public function userRegister(Request $request)
    {
        try {

            $rules = [
                'id'            => 'sometimes|required|exists:users,id',
                'first_name'    => 'required',
                'mobile_number' => 'required|numeric',
            ];

            if ($request->has('id')) {
                $count = UsersModel::where('email', $request->email)->where('id', '!=', $request->id)->count();
                if ($count > 0) {
                    $resposne['message'] = "Validation Error";
                    return response()->json([
                        "status" => true,
                        "fields" => ['email' => "This Email already register."],
                        "message" => $resposne['message'],
                    ], 422);
                }
            } else {
                $rules['email']         = 'required|unique:users,email';
            }

            if (isset($request->password)) {
                $rules['password']         = 'required|min:6|required_with:confirm_password|same:confirm_password';
                $rules['confirm_password']  = 'required|min:6|required_with:password|same:password';
            }


            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $resposne['message'] = "Form validation error, please check input fileds";

                return response()->json([
                    "status" => false,
                    "fields" => $validator->errors(),
                    "message" => $resposne['message']
                ], 400);
            } else {

                $login_user = Auth::user();

                $fields = [
                    "first_name"    => $request->first_name,
                    "middle_name"   => $request->middle_name,
                    "last_name"     => $request->last_name,
                    "mobile_number" => $request->mobile_number,
                    "email"         => $request->email,
                    "password"      => Hash::make($request->password) ?? null,
                    "address"       => $request->address,
                    "city"          => $request->city,
                    "pincode"       => $request->pincode,
                    "state"         => $request->state,
                ];

                if ($request->has('id')) {
                    $fields['updated_by'] = $login_user->id;
                    $fields['updated_at'] = now();
                    $user = UsersModel::where('id', $request->id)->update($fields);
                    $msg = "Account Updated Successfully.";
                } else {
                    $fields['created_by'] = $login_user->id;
                    $fields['created_at'] =  date('Y-m-d H:m:s');
                    $user = UsersModel::create($fields);
                    $msg = "Account Created Successfully.";
                }

                if ($user) {
                    return response()->json([
                        'status'  => true,
                        'message' => $msg
                    ], 200);
                }
                return response()->json([
                    'status'        => true,
                    'message'       => 'Unable to Create Account.'
                ], 422);
            }
        } catch (\Exception $e) {
            Log::critical("HomeController::userRegister");
            Log::critical($e);

            return response()->json([
                'status'        => true,
                'message'       => 'Unable to Create Account.'
            ], 422);
        }
    }

    public function editUser(Request $request, $id)
    {
        $login_user = Auth::user();

        $data['page_title'] = 'Edit User';

        $data['user_info'] = UsersModel::find($id);

        if ($data['user_info']) {
            $data['state'] = MasterStateModel::select('id', 'state_name as name')->orderBy('name', 'asc')->get();
            $data['city'] = MasterCityModel::select('id', 'city_name as name')->orderBy('name', 'asc')->get();
            return view('crm.admin.user.edit-user', $data);
        }
        return abort(404);
    }

    public function getAllUsers(Request $request)
    {

        $records = UsersModel::select(DB::raw("id, CONCAT(first_name ,' ', middle_name , ' ', last_name ,' / ' ,mobile_number,' / ',email ) AS text"))
            ->where('role', 2)
            ->get();
        $res_code = CODE_422;
        $data = [];
        $resposne_fields = [];
        $status = false;
        $resposne_message = "data not found";

        if ($records->isEmpty()) {
            $resposne_fields['user_list'] = "data not found";
        } else {
            $data['user_list'] = array('results' => $records);
            $resposne_message = "data found";
            $res_code = CODE_200;
            $status = true;
        }

        return response()->json([
            'status'    => $status,
            'data'      => $data,
            'fields'    => $resposne_fields,
            'message'   => $resposne_message,
        ], $res_code);
    }

    public function sendMail(Request $request)
    {

        try {

            $rules = [
                'user_list' => 'required',
                'mail_body' => 'required',
                'subject' => 'required',
            ];


            $validator = Validator::make($request->all(), $rules);

            $res_code = CODE_422;
            $data = [];
            $resposne_fields = [];
            $status = false;
            $resposne_message = "Form validation error, please check input fileds";

            if ($validator->fails()) {
                $resposne_fields = $validator->errors();
            } else {
                $user_info = Auth::user();
                $documents_id = false;
                if ($request->hasFile('attachment_file')) {
                    $disk = env("MEDIA_DISK", 'public');
                    $document_upload_result = uploadFile($request->file('attachment_file'), ATTACHMENT_FILE_PATH, $disk, ["jpg", "jpeg", "png", "pdf"]);
                    if ($document_upload_result['error_code'] != 0) {
                        return response()->json([
                            'status' => true, 'message' => $document_upload_result['message']
                        ], 422);
                    }
                    $org_file_name = $document_upload_result['org_file_name'];
                    $file_name = $document_upload_result['file_name'];

                    $document_details['name'] = $file_name;
                    $document_details['path'] = $document_upload_result['path'];
                    $document_details['created_by'] = $user_info->id;

                    $documents_id = DocumentsDetailsModel::create($document_details)->id;
                    $fields = [
                        "documents_id"  =>  $documents_id,
                    ];
                }
                $login_user = Auth::user();
                $user_list_array = explode(",", $request->user_list);
                foreach ($user_list_array as $key => $email_to) {

                    $mail_data['mail_body'] = $request->mail_body;
                    // $user_data =  UsersModel::find($user_id);
                    $fields = [
                        "user_id"   => 0,
                        "email_to"  => $email_to,
                        "data"      => json_encode($mail_data),
                        "template_name" => "emails.quout_mail_template",
                        "subject"   => $request->subject,
                    ];

                    if ($documents_id) {
                        $fields['documents_id'] = $documents_id;
                    }
                    $fields['created_by'] = $login_user->id;
                    $fields['created_at'] =  date('Y-m-d H:m:s');
                    $user = EmailLogModel::create($fields);
                    $resposne_message = "Mails are sending.";
                    $status = true;
                    $res_code = CODE_200;
                }
            }

            return response()->json([
                'status'    => $status,
                'data'      => $data,
                'fields'    => $resposne_fields,
                'message'   => $resposne_message,
            ], $res_code);
        } catch (\Exception $e) {
            Log::critical("HomeController::sendMail");
            Log::critical($e);

            return response()->json([
                'status'        => true,
                'message'       => 'Unable to send mail.'
            ], 422);
        }
    }

    public function mailList()
    {
        $data['page_title'] = 'Mail List';

        return view('crm.admin.mail_compose.mail-list', $data);
    }

    public function mailListApi(Request $request)
    {
        $params['draw'] = $request->has('draw') ? $request->draw : 1;

        $user_info = Auth::user();
        $user_list = [];
        $results = mailStatusList($request, false, $user_list);
        $totalRecords = mailStatusList($request, true, $user_list);

        $response_array = [];
        if (count($results)) {
            foreach ($results as $key => $result) {
                $response_array[$key]['sr_no']      = $key + 1;
                $response_array[$key]['id']         = $result->id;
                $response_array[$key]['subject']    = ucwords($result->subject);
                $response_array[$key]['status']     = $result->status;
                $response_array[$key]['email_to']   = $result->email_to;
                $response_array[$key]['sent_at']    = "";
                if ($result->sent_at) {
                    $response_array[$key]['sent_at']  = Carbon::parse($result->sent_at)->format(SHOW_FULL_DATE_FORMAT);
                }
                $response_array[$key]['status']     =   $result->status == 0 ? "Pending" : "Sent";
                // $response_array[$key]['status']     =  "<a href= " . route('edit-user', ['id' => $result->id]) . " rel='noopener noreferrer' class='btn btn-sm btn-primary font-weight-bolder'> Edit</a>";
                $response_array[$key]['created_at'] = $result->created_at ? Carbon::parse($result->created_at)->format(SHOW_FULL_DATE_FORMAT) : "";
            }
        }

        $json_data = array(
            "draw"            => intval($params['draw']),
            "recordsTotal"    => intval($totalRecords),
            "recordsFiltered" => intval($totalRecords),
            "data"            => $response_array
        );
        return response()->json($json_data);
    }


    public function mail_test(Request $request)
    {
        $pos_profile['id'] = 0;

        $mail_data = [];
        $mail_data['id']                = 0;
        $mail_data['user_id']           = 0;
        $mail_data['user_data']         = $pos_profile;
        $mail_data['user_type']         = "pos";
        $mail_data['email_to']          = isset($request->email_to) ?? "sajidjalal@gmail.com";
        $mail_data['email']             = isset($request->email_to) ?? "sajidjalal@gmail.com";
        $mail_data['template_name']     = "emails.myTestMail";
        $mail_data['subject']           =  "Mail test";
        $mail_data['certificate_date']  =  date('Y-m-d');
        $mail_data['mail_body']         =  $mail_body['mail_body'] ?? "";

        // return view($mail_data['template_name'], $mail_data);
        mail_sending_helper($mail_data);
    }
}
