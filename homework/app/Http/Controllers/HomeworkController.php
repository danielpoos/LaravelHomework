<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeworkRequest;
use App\Models\Homework;

class HomeworkController extends Controller
{
    public function index()
    {
        $homework = Homework::where(1);
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

    public function edit(Homework $homework)
    {
        return view('homework.edit', ['homework' =>$homework]);
    }

    public function update(HomeworkRequest $request, Homework $homework)
    {
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
