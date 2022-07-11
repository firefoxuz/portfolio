<?php

namespace App\Admin\Controllers\Experience;

use App\Admin\Controllers\Controller;
use App\Admin\Requests\Experience\ExperienceRequest;
use Domain\Experience\Actions\DeleteEducationAction;
use Domain\Experience\Actions\StoreExperienceAction;
use Domain\Experience\Actions\UpdateEducationAction;
use Domain\Experience\DataTransferObjects\ExperienceData;
use Domain\Experience\Models\Experience;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::paginate(30);
        return view('admin.experience.index', [
            'experiences' => $experiences,
        ]);
    }

    public function create()
    {
        return view('admin.experience.create');
    }

    public function store(ExperienceRequest $request, StoreExperienceAction $action)
    {
        $experienceData = ExperienceData::fromRequest($request);
        $action->execute($experienceData);

        return redirect()->route('admin.experiences.index')->with('success', 'Experience network created!');
    }

    public function edit(Experience $experience)
    {
        return view('admin.experience.edit', [
            'experience' => $experience,
        ]);
    }

    public function update(Experience $experience, ExperienceRequest $request, UpdateEducationAction $action)
    {
        $experienceData = ExperienceData::fromRequest($request);
        $action->execute($experience->id, $experienceData);
        return redirect()->route('admin.experiences.index');
    }

    public function destroy(Experience $experience, DeleteEducationAction $action)
    {
        $action->execute($experience->id);
        return redirect()->route('admin.experiences.index');
    }
}
