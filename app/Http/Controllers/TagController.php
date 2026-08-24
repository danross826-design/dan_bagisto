<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as BaseController;

class TagController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index()
    {
        return Tag::all();
    }

    public function show(Request $request)
    {
        $tag = Tag::findOrFail($request->id);

        return view('tag.show', ['tag' => $tag]);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/tag/create')
                ->withErrors($validator)
                ->withInput();
        }else{

            $tag = Tag::create($request->all());

            return response()->json($tag, 201);

        }

    }

    public function update(Request $request)
    {

        $tag = Tag::findOrFail($request->id);

        $tag->update($request->all());

        return response()->json($tag, 200);
    }

    public function delete(Request $request)
    {
        $tag = Tag::findOrFail($request->id);

        $tag->delete();

        return response()->json(null, 204);
    }


}