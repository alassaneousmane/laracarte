<?php
namespace App\Repositories;

use App\Tag;
use Illuminate\Support\Str;

class TagRepository
{

	protected $tag;

	public function __construct(Tag $tag)
	{
		$this->tag = $tag;
	}

	/*
	* Explication : les tags sont envoyés par le formulaire sous forme de texte, ie tag1, tag2, tag3
	*/
	public function store($post, $tags)
	{
		$tags = explode(',', $tags);

		foreach ($tags as $tag) {

			$tag = trim($tag);

			$tag_url = Str::slug($tag);

			$tag_ref = $this->tag->where('tag_url', $tag_url)->first();


			if(is_null($tag_ref)) 
			{
				$tag_ref = new $this->tag([
					'tag' => $tag,
					'tag_url' => $tag_url
				]);	

				$post->tags()->save($tag_ref); // Créé à la fois le tag et le référence dans la table pivot

			} else {

				$post->tags()->attach($tag_ref->id);

			}

		}

	}

}