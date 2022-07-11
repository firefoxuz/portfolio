<?php

namespace App\Admin\Controllers\SocialNetwork;

use App\Admin\Controllers\Controller;
use App\Admin\Requests\SocialNetwork\SocialNetworkRequest;
use Domain\SocialNetwork\Actions\DeleteSocialNetworkAction;
use Domain\SocialNetwork\Actions\StoreSocialNetworkAction;
use Domain\SocialNetwork\Actions\UpdateSocialNetworkAction;
use Domain\SocialNetwork\DataTransferObjects\SocialNetworkData;
use Domain\SocialNetwork\Models\SocialNetwork;

class SocialNetworkController extends Controller
{
    public function index()
    {
        $social_networks = SocialNetwork::paginate(25);
        return view('admin.social-networks.index', [
            'networks' => $social_networks
        ]);
    }

    public function create()
    {
        return view('admin.social-networks.create');
    }

    public function store(SocialNetworkRequest $request, StoreSocialNetworkAction $action)
    {
        $socialNetworkData = SocialNetworkData::fromRequest($request);

        $action->execute($socialNetworkData);

        return redirect()->route('admin.social-networks.index')->with('success', 'Social network created!');

    }

    public function edit(SocialNetwork $socialNetwork)
    {
        return view('admin.social-networks.edit', [
            'socialNetwork' => $socialNetwork
        ]);
    }

    public function update(SocialNetwork $socialNetwork, SocialNetworkRequest $request, UpdateSocialNetworkAction $action)
    {
        $socialNetworkData = SocialNetworkData::fromRequest($request);
        if ($action->execute($socialNetwork->id, $socialNetworkData)) {
            return redirect()->route('admin.social-networks.index')->with('success', 'Social network updated successfully!');
        }
        return redirect()->back();
    }

    public function destroy(SocialNetwork $socialNetwork, DeleteSocialNetworkAction $action)
    {
        $action->execute($socialNetwork->id);
        return redirect()->route('admin.social-networks.index');
    }
}
