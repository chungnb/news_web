<?php
namespace App\Repositories\Video;

use App\Models\Video;
use App\Repositories\BaseRepository;
use App\Repositories\Video\VideoRepositoryInterface;

class VideoRepository extends BaseRepository  implements VideoRepositoryInterface {
    public function getModel() {
        return Video::class;
    }

    public function getVideo() {
        return Video::paginate(6);
    }
}