<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pembelian;
use App\Models\Course;
use App\Models\Jurusan;
use App\Models\User;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->admin->status){
            
            $total = 0;
            $total_money_per_month = 0;
            $total_student = 0;
            $total_mentor = 0;
            foreach(Pembelian::all() as $pembelian){
                if(isset($pembelian->course->price)){
                    $total += $pembelian->course->price;
                }
            }
            foreach(Pembelian::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->get() as $pembelian){
                if(isset($pembelian->course->price)){
                    $total_money_per_month += $pembelian->course->price;
                }
            }
            foreach(User::all() as $user){
                if($user->student->status){
                    $total_student += 1;
                }
                if($user->mentor->status){
                    $total_mentor += 1;
                }
            }
            return view('homeAdmin', [
                'title' => 'Dashboard',
                'total' => $total,
                'total_money_per_month' => $total_money_per_month,
                'monthly_purchase_data' => Pembelian::monthlyData()->get()->toJson(),
                'total_student' => $total_student,
                'total_mentor' => $total_mentor
            ]);

        }else{

            return redirect(URL::previous());

        }
    }

    public function showPurchaseData(){
        return view('tables', [
            'title' => 'Data Pembelian',
            'labels' => ['ID', 'Username','Email', 'Course', 'Harga', 'Tanggal Pembelian'],
            'datas' => Pembelian::all(),
        ]);
    }

    public function showCourseData(){
        return view('tables', [
            'title' => 'Data Course',
            'labels' => ['Course', 'List Material', 'Mentor', 'Jurusan'],
            'datas' => Course::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
