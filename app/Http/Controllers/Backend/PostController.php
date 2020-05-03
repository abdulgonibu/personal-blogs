<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::with('category', 'user')->paginate(50);

        return view('backend.post.manage', compact('posts'));
    }

    public function create()
    {

        $categories = Category::where('status', 1)->get();
        return view('backend.post.create', compact('categories'));
    }

    public function store(Request $request)
    {

        try {
            $image    = $request->file('thumbnail');
            $fileName = rand(0, 999999999) . '_' . date('Ymdhis') . '_' . rand(99999, 999999999) . '.' . $image->getClientOriginalExtension();
            if ($image->isValid()) {
                if ($image->getMimeType() == "image/png" || $image->getMimeType() == "image/jpeg") {
                    $image->storeAs('posts', $fileName);
                } else {
                    setMessage('danger', 'Image');
                    return redirect()->back();
                }
            }
            Post::create([
                'title'       => $request->title,
                'user_id'     => auth()->user()->id,
                'category_id' => $request->category_id,
                'content'     => $request->post_content,
                'status'      => $request->status,
                'thumbnail'   => $fileName,
            ]);
            setMessage('success', 'Data seve success!');
        } catch (Exception $e) {
            dd($e);
        }

        return redirect()->back();
    }


    public function edit($id)
    {
        $categories = Category::where('status', 1)->get();
        $post       = Post::find($id);


        return view('backend.post.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if ($request->file('thumbnail')) {
            $image    = $request->file('thumbnail');
            $fileName = rand(0, 999999999) . '_' . date('Ymdhis') . '_' . rand(99999, 999999999) . '.' . $image->getClientOriginalExtension();
            if ($image->isValid()) {
                if ($image->getMimeType() == "image/png" || $image->getMimeType() == "image/jpeg") {
                    $image->storeAs('posts', $fileName);
                    unlink(public_path('uploads/posts/' . $post->thumbnail));

                    $post->update([
                        'thumbnail' => $fileName
                    ]);
                } else {
                    // $this->showMessage("danger", "danger");
                    setMessage('danger', 'danger');
                    return redirect()->back();
                }
            }
        }


        $post->update([
            'title'       => $request->title,
            'category_id' => $request->category_id,
            'content'     => $request->post_content,
            'status'      => $request->status,
        ]);

        //$this->showMessage('Post update success!', 'success');
        setMessage('success', 'Post update success!');
        return redirect()->back();
    }


    public function destroy($id)
    {
        try {
            $post = Post::find($id);
            unlink(public_path('uploads/posts/' . $post->thumbnail));
            $post->delete();
            // $this->showMessage('Post deleted success!', 'success');
            setMessage('success', 'Post deleted success!');
        } catch (Exception $exception) {
        }
        return redirect()->back();
    }
}
