<?php

namespace App\Admin\Controllers\Education;

use App\Admin\Controllers\Controller;
use App\Admin\Requests\Education\EducationRequest;
use Domain\Education\Actions\DeleteEducationAction;
use Domain\Education\Actions\StoreEducationAction;
use Domain\Education\Actions\UpdateEducationAction;
use Domain\Education\DataTransferObjects\EducationData;
use Domain\Education\Models\Education;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::paginate(30);
        return view('admin.education.index',[
            'educations' => $educations,
        ]);
    }

    public function create()
    {
        return view('admin.education.create');
    }

    public function store(EducationRequest $request,StoreEducationAction $action)
    {
        $educationData = EducationData::fromRequest($request);
        $action->execute($educationData);

        return redirect()->route('admin.educations.index')->with('success', 'Education network created!');
    }

    public function edit(Education $education)
    {
        return view('admin.education.edit', [
            'education' => $education,
        ]);
    }

    public function update(Education $education, EducationRequest $request, UpdateEducationAction $action)
    {
        $educationData = EducationData::fromRequest($request);
        $action->execute($education->id, $educationData);
        return redirect()->route('admin.educations.index');
    }

    public function destroy(Education $education, DeleteEducationAction $action)
    {
        $action->execute($education->id);
        return redirect()->route('admin.educations.index');
    }
}
