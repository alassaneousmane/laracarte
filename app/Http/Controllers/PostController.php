<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use App\Repositories\PostRepository;
use App\Repositories\TagRepository;

class PostController extends Controller
{

    protected $postRepository;

    protected $nbrPerPage = 4;

    public function __construct(PostRepository $postRepository)
    {
        $this->middleware('auth', ['except' => 'index']);
        $this->middleware('admin', ['only' => 'destroy']);

        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->getWithUserAndTagsPaginate($this->nbrPerPage);
        $links = $posts->render();

        return view('posts.liste', compact('posts', 'links'));
    }

    public function create()
    {
        return view('posts.add');
    }

    public function store(PostRequest $request, TagRepository $tagRepository, Post $p)
    {

        $inputs = array_merge($request->all(), ['user_id' => $request->user()->id]);

        $post =  $this->postRepository->store($inputs);        
        

        if(isset($inputs['tags']))
        {
            
            $tagRepository->store($post, $inputs['tags']);
        }

        return redirect(route('post.index'));
    }

    public function destroy($id)
    {
        $this->postRepository->destroy($id);

        return redirect()->back();
    }

    /*
    * Lance la recherche des articles qui comportent ce tag et envoie les infos dans la vue liste
    */
    public function indexTag($tag)
    {
        $posts = $this->postRepository->getWithUserAndTagsForTagPaginate($tag, $this->nbrPerPage);
        $links = $posts->render();

        

        return view('posts.liste', compact('posts', 'links'))->with('info', 'Résultats pour la recherche du mot-clé : ' . $tag);
    }

}