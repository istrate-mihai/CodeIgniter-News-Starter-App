<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
  protected $table = 'news';

  protected $allowedFields = array('title', 'slug', 'body');

  public function getNews($slug = false)
  {
    if (!$slug) {
      return $this->findAll();
    }

    return $this->where(array('slug' => $slug))->first();
  }
}
