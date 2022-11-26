<?php

namespace App\Http\Controllers;

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

        if ($request->ajax()) {

            $data = UsersModel::select([DB::raw("ROW_NUMBER() OVER() AS sr_no ,CONCAT(first_name,' ',middle_name,' ',last_name) as name"), 'email', 'created_at', 'id'])
                ->orderBy('id', 'desc')
                ->get();

            return Datatables::of($data)
                ->addColumn('created_at', function ($row) {
                    $created_date = Carbon::parse($row->created_at)->format(SHOWDATEFORMAT);
                    return $created_date;
                })
                ->addColumn('action', function ($row) {
                    $html = "";
                    $html .=  "<a href= " . route('edit-user', ['id' => $row->id]) . " rel='noopener noreferrer' class='btn btn-sm btn-primary font-weight-bolder'> Edit</a>";

                    return $html;
                })
                ->rawColumns(['created_at', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
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
                $count = UsersModel::where('email', $request->email)->count();
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

                $login_user = Auth::user();
                foreach ($request->user_list as $key => $user_id) {
                    $user_data =  UsersModel::find($user_id);
                    $fields = [
                        "user_id"   => $user_id,
                        "email_to"  => $user_data->email ?? "",
                        "data"      => $request->mail_body,
                        "template_name" => "quout_mail",
                        "subject"   => $request->subject,
                    ];

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

        if ($request->ajax()) {

            $data = EmailLogModel::select([DB::raw("ROW_NUMBER() OVER() AS sr_no "), 'email_to', 'subject', 'created_at', 'id', 'sent_at', 'status'])
                ->orderBy('id', 'desc')
                ->get();

            return Datatables::of($data)
                ->addColumn('created_at', function ($row) {
                    $created_date = Carbon::parse($row->created_at)->format(SHOWDATEFORMAT);
                    return $created_date;
                })
                ->addColumn('sent_at', function ($row) {
                    $sent_at = "";
                    if ($row->sent_at) {
                        $sent_at = Carbon::parse($row->sent_at)->format(SHOWDATEFORMAT);
                    }
                    return $sent_at;
                })
                ->addColumn('status', function ($row) {
                    return $row->status == 0 ? "Pending" : "Sent";
                })
                ->addColumn('action', function ($row) {
                    $html = "";
                    $html .=  "<a href= " . route('edit-user', ['id' => $row->id]) . " rel='noopener noreferrer' class='btn btn-sm btn-primary font-weight-bolder'> Edit</a>";

                    return $html;
                })
                ->rawColumns(['created_at', 'action', 'sent_at', 'status'])
                ->addIndexColumn()
                ->make(true);
        }
    }


    public function mail_test(Request $request)
    {
        $pos_profile['id'] = 0;

        $mail_data = [];
        $mail_data['user_data']  = $pos_profile;
        $mail_data['user_type']  = "pos";
        $mail_data['email']   = $request->mail_id ?? "sajidjalal@gmail.com";
        $mail_data['template_name'] = "emails.myTestMail";
        $mail_data['subject']       =  "Mail test";
        $mail_data['certificate_date'] =  date('Y-m-d');
        mail_sending_helper($mail_data);
    }
}
