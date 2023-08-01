<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function checkIn(Request $request)
    {
        $studentId = $request->input('student_id');
        Visitor::create(['student_id' => $studentId, 'status' => '入室']);
        return redirect()->back()->with('success', '入室しました。');
    }

    public function checkOut(Request $request)
    {
        $studentId = $request->input('student_id');
        Visitor::create(['student_id' => $studentId, 'status' => '退出']);
        return redirect()->back()->with('success', '退出しました。');
    }

    public function admin()
    {
        $visitors = Visitor::all();
        return view('admin', compact('visitors'));
    }

    public function deleteRecord($id)
    {
        Visitor::destroy($id);
        return redirect()->back()->with('success', '記録を削除しました。');
    }
}

