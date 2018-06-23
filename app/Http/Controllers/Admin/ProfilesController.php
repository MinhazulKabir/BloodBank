<?php

namespace App\Http\Controllers\Admin;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProfilesRequest;
use App\Http\Requests\Admin\UpdateProfilesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class ProfilesController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('profile_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('profile_delete')) {
                return abort(401);
            }
            $profiles = Profile::onlyTrashed()->get();
        } else {
            $profiles = Profile::all();
        }

        return view('admin.profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating new Profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('profile_create')) {
            return abort(401);
        }
        return view('admin.profiles.create');
    }

    /**
     * Store a newly created Profile in storage.
     *
     * @param  \App\Http\Requests\StoreProfilesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfilesRequest $request)
    {
        if (! Gate::allows('profile_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $profile = Profile::create($request->all());



        return redirect()->route('admin.profiles.index');
    }


    /**
     * Show the form for editing Profile.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('profile_edit')) {
            return abort(401);
        }
        $profile = Profile::findOrFail($id);

        return view('admin.profiles.edit', compact('profile'));
    }

    /**
     * Update Profile in storage.
     *
     * @param  \App\Http\Requests\UpdateProfilesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfilesRequest $request, $id)
    {
        if (! Gate::allows('profile_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $profile = Profile::findOrFail($id);
        $profile->update($request->all());



        return redirect()->route('admin.profiles.index');
    }


    /**
     * Display Profile.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('profile_view')) {
            return abort(401);
        }
        $profile = Profile::findOrFail($id);

        return view('admin.profiles.show', compact('profile'));
    }


    /**
     * Remove Profile from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('profile_delete')) {
            return abort(401);
        }
        $profile = Profile::findOrFail($id);
        $profile->delete();

        return redirect()->route('admin.profiles.index');
    }

    /**
     * Delete all selected Profile at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('profile_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Profile::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Profile from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('profile_delete')) {
            return abort(401);
        }
        $profile = Profile::onlyTrashed()->findOrFail($id);
        $profile->restore();

        return redirect()->route('admin.profiles.index');
    }

    /**
     * Permanently delete Profile from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('profile_delete')) {
            return abort(401);
        }
        $profile = Profile::onlyTrashed()->findOrFail($id);
        $profile->forceDelete();

        return redirect()->route('admin.profiles.index');
    }
}
