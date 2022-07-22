<?php

namespace App\Http\Controllers;

use App\Models\Status;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class StatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemps = DB::table('status')
            ->join('users', 'users.id', '=', 'status.user_id')
            ->select('users.name', 'status.*')
            ->orderBy('created_at','DESC')
            ->get();
        return view('index', compact('itemps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('lỗi rồi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;
        // dd($id);
        $Status = new Status();
        $Status->content = $request->content;
        $Status->user_id = $id;
        $Status->trang_thai = $request->object;
      
     if ($request->hasFile('image')) {
            $file = $request->image;
            $fileExtension = $file->getClientOriginalExtension();//jpg,png lấy ra định dạng file và trả về
            $fileName = time();//45678908766 tạo tên file theo thời gian
            $newFileName = $fileName.'.'.$fileExtension;//45678908766.jpg
            // $Status->image = $newFileName;// cột image gán bằng tên file mới
            $request->file('image')->storeAs('public/images', $newFileName);//lưu file vào mục public/images với tê mới là $newFileName
            $Status->image = $newFileName;
        }
        $Status->save();

        // $message = "Tạo Task $request->image thành công!";
        Session::flash('create-success');
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
