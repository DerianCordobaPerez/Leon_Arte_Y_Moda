<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\SecurityService;
use App\Services\ViewService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    use ViewService;

    /**
     * Display a listing of the resource.
     *
     * @return View|RedirectResponse
     */
    public function index(): View|RedirectResponse
    {
        $posts = Cache::remember('post-page-'.request('page', 1), 60 * 60, function () {
            return Post::paginate(5);
        });

        return $this->render(
            'dashboard.post.index',
            ['posts' => $posts],
            ['gestión de publicaciones']
        );
    }

    /**
     * Show the form for creating a new resource.
     *

     * @return View|RedirectResponse
     */
    public function create(): View|RedirectResponse
    {
        return $this->render('dashboard.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        return $this->authorized(['creación publicaciones'], function() use($request) {
            $this->validate($request, ['title' => 'required|max:255', 'body' => 'required']);

            $post = Post::create([
                'slug' => $request->title.'-'.rand(1, 100),
                'title' => $request->title,
                'body' => $request->body,
                'user_id' => auth()->user()->id,
            ]);

            $post->pictures()->attach($request->pictures);

            return redirect()->route('posts.index')->with('success', 'Publicación creada con éxito');
        });
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return View|RedirectResponse
     */
    public function show(Post $post): View|RedirectResponse
    {
        return $this->render(
            'dashboard.post.show',
            ['post' => $post],
            ['gestión de publicaciones']
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return View|RedirectResponse
     */
    public function edit(Post $post): View|RedirectResponse
    {
        return $this->render(
            'dashboard.post.edit',
            ['post' => $post],
            ['gestión de publicaciones']
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Post $post
     * @return RedirectResponse
     */
    public function update(Request $request, Post $post): RedirectResponse
    {
        return $this->authorized(['edición publicaciones'], function() use($request, $post) {
            if($request->has('title')) {
                $post->slug = $request->title.'-'.rand(1, 100);
            }

            if($request->has('pictures')) {
                $post->pictures()->sync($request->pictures);
            }

            $post->update([
                'title' => $request->title,
                'body' => $request->body,
            ]);

            return redirect()->route('posts.index')->with('success', 'Publicación actualizada con éxito');
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return RedirectResponse
     */
    public function destroy(Post $post): RedirectResponse
    {
        return $this->authorized(['eliminación publicaciones'], function() use($post) {
            $post->delete();

            return redirect()->route('posts.index')->with('success', 'Publicación eliminada con éxito');
        });
    }
}
