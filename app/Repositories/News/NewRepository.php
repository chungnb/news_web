<?php 
namespace App\Repositories\News;

use App\Models\News;
use App\Repositories\BaseRepository;

class NewRepository extends BaseRepository implements NewInterface {
    public function getModel() {
        return News::class;
    }

    public function getNews() {
        return $this->model->paginate(8);
    }
}