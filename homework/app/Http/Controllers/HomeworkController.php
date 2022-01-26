<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeworkRequest;
use App\Http\Requests\HomeworkUpdateRequest;
use App\Models\Homework;

class HomeworkController extends Controller
{
    public function index()
    {
        $homework = Homework::all();
        return view('homework.index', compact('homework'));
    }

    public function create()
    {
        return view('homework.create');
    }

    public function store(HomeworkRequest $request)
    {
        $data = $request->only(['points', 'message']);
        $homework = new Homework();
        $homework->fill($data);
        $homework->save();
        return redirect()->route('homework.index');
    }

    public function show(Homework $homework)
    {
        return view('homework.show', ['homework' => $homework]);
    }

    public function edit(int $id)
    {
        $homework = Homework::find($id);
        return view('homework.edit', ['homework' =>$homework]);
    }

    public function update(HomeworkUpdateRequest $request, int $id)
    {
        $homework = Homework::find($id);
        $data = $request->only(['points', 'message']);
        $homework->fill($data);
        $homework->save();
        return redirect()->route('homework.show', $homework->id);
    }

    public function destroy(Homework $homework)
    {
        $homework->delete();
        return redirect()->route('homework.index');
    }
}
