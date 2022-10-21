<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id')->get();

        return response()->json([
            'success' => true,
            'message' => "List Data Post",
            'data' => $posts
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => "required",
            'content' => "required"
        ]);

        if($validator->fails()){
            return response()->json($validator->erros(),400);
        }

        $posts = Post::create($request->all());
        if($posts) {
            return response()->json([
                'success' => true,
                'message' => "Data berhasil ditambahkan",
                'data' => $posts
            ],201);
        }else {
            return response()->json([
                'success' => false,
                'message' => "Data gagal ditambahkan",
            ],409);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return response()->json([
            'success' => true,
            'message' => "Detail Post Data",
            'data' => $post
        ],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validator = Validator::make($request->all(),[
            'title' => "required",
            'content' => "required"
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(),400);
        }

        $posts = Post::findOrFail($post->id);
        if($posts) {
            $posts->update($request->all());
            return response()->json([
                'success' => true,
                'message' => "Data berhasil diudpate",
                'data' => $posts
            ],200);
        }else {
            return response()->json([
                'success' => false,
                'message' => "Post Not Found"
            ],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if($post) {
            $post->delete();
            return response()->json([
                'success' => true,
                'message' => "Data berhasil dihapus"
            ],200);
        }else {
            return response()->json([
                'success' => false,
                'message' => "Post Not Found"
            ],404);
        }
    }
}
