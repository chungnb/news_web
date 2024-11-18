<?php

namespace App\Http\Controllers;
use App\Repositories\Video\VideoRepositoryInterface;


// use Illuminate\Http\Request;

class VideoController extends Controller
{
    protected $videoRepo;

    public function __construct(VideoRepositoryInterface $videoRepository) {
        $this->videoRepo = $videoRepository;
    }

    public function index() {
        $videos = $this->videoRepo->getVideo();

        return view('videoLibrary', compact('videos'));
    }
}
