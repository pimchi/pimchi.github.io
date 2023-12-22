<?php

namespace App\Http\Controllers\Admin;

use App\Enums\StatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Resources\ApplicationResource;
use App\Models\Application;
use Illuminate\Http\Request;

class AdminApplicationController extends Controller
{
    public function index()
    {
        $applications = ApplicationResource::collection(Application::all());
        return view('admin.application.index', compact('applications'));
    }

    public function update(Application $application, Request $request)
    {
        $application->update(['status' => StatusEnum::from($request->status)]);
        return redirect()->back()->with('success', 'Статус заявки обновлен');
    }
}
