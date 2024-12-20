<?php

namespace App\Http\Controllers;

use App\Models\computer;
use App\Models\issue;
use Illuminate\Http\Request;
use PHPUnit\Runner\Baseline\Issue as BaselineIssue;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $issue = Issue::with('computer')->paginate(5);
        return view('issue.index', compact('issue'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $computer = computer::all();
        return view('issue.create', compact('computer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Issue::create($request->all());
        return redirect()->route('issue.index')->with('success', 'Vấn đề đã được thêm thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $issue = Issue::findOrFail($id);
        $computers = Computer::all();
        return view('issue.edit', compact('issue', 'computers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $issue = Issue::find($id);
        $issue->update($request->all());

        return redirect()->route('issue.index')->with('success', 'Vấn đề được cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $issue = Issue::findOrFail($id);
        $issue->delete();

        return redirect()->route('issue.index')->with('success', 'Vấn đề đã được xóa thành công!');
    }
}
