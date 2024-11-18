<?php 
namespace App\Repositories\News;
use App\Repositories\RepositoryInterface;

interface NewInterface extends RepositoryInterface {
    public function getNews ();
}