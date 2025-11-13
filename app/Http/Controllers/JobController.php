<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as BaseController;

class JobController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index()
    {
        return Job::all();
    }

    public function show(Request $request)
    {
        $job = Job::findOrFail($request->id);

        return $job;
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/job/create')
                ->withErrors($validator)
                ->withInput();
        }else{

            $job = Job::create($request->all());

            return response()->json($job, 201);

        }

    }

    public function update(Request $request)
    {

        $job = Job::findOrFail($request->id);

        $job->update($request->all());

        return response()->json($job, 200);
    }

    public function delete(Request $request)
    {
        $job = Job::findOrFail($request->id);

        $job->delete();

        return response()->json(null, 204);
    }

}