<?php

namespace App\Repositories;

use App\Post;

class PostRepository
{

    protected $post;

    public function __construct(Post $post)
	{
		$this->post = $post;
	}

	public function queryWithUserAndTags()
	{
		return $this->post->with('user', 'tags')->orderBy('posts.created_at', 'desc');
	}

	public function getWithUserAndTagsPaginate($n)
	{
		return $this->queryWithUserAndTags()->paginate($n);
	}

	public function getWithUserAndTagsForTagPaginate($tag, $n)
	{
		return $this->queryWithUserAndTags()->whereHas('tags', function($q) use ($tag)
		{
			$q->where('tags.tag_url', $tag);
		})->paginate($n);
	}

	public function getPaginate($n)
	{
		return $this->post->with('user')
		->orderBy('posts.created_at', 'desc')
		->paginate($n);
	}

	public function store($inputs)
	{
		return $this->post->create($inputs);
	}

	public function destroy($id)
	{
		$this->post->findOrFail($id);
		$post->tags()->detach();
		$post->delete();
	}

}
