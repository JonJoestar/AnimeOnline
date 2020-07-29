<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class AnimeController extends Controller
{
    
    public function Index() {
        $collection = (new MongoDB\Client)->Animes->AnimeName;
        $anime = $collection->find();
        return view('Admin.AnimeName.Index', [ "anime" => $anime ]);
    }

    public function AnimeOnline() {
        $collection = (new MongoDB\Client)->Animes->AnimeName;
        $animeCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $anime = $collection->find([], [ "limit" => 12, "skip" => ($page - 1) * 12 ]);
        return view('AnimeName.Index', [ "anime" => $anime, "animeCount" => $animeCount ]);
    }

    public function AnimeDetails($id) {
        $collection = (new MongoDB\Client)->Animes->AnimeName;
        $anim = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id) ]);
        return view("AnimeName.Details", ["anim" => $anim]);
    }

    public function Show($id) { 
        $collection = (new MongoDB\Client)->Animes->AnimeName;
        $anim = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Admin.AnimeName.Details', [ "anim" => $anim ]);
    }

    public function Create() {         
        $collection = (new MongoDB\Client)->Animes->Genero_id;
        $productCount = $collection->count();
        $generos = $collection->find();
        return view('Admin.AnimeName.Create', [ "generos" => $generos ]);
    }

    public function Online(){
        $anime = [
            "anime" => request("anime"),
            "Genero_id" => request("Genero_id"),
            "anime_url" => request("anime_url"),
            "chapters" => request("episodes"),
            "specification" => [],
            "comments" => []
        ];
        $collection = (new MongoDB\Client)->Anime->AnimeName;
        $insertOneResult = $collection->insertOne($anim);
        if ($insertOneResult->getInsertedCount() == 1)
        return redirect('/admin/anime')->with('mssg', request('anime')."was added successfuly")->with('alerttype', "success");
    }

    public function Edit($id) { 
        $collection = (new MongoDB\Client)->Animes->AnimeName;
        $collectionC = (new MongoDB\Client)->Animes->Genero_id;
        $generos = $collectionC->find();
        $anim = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Admin.AnimeName.Edit', [ "anim" => $anim, "generos" => $generos]);
    }

    public function Update() {
        $collection = (new MongoDB\Client)->Anime->AnimeName;
        $anim = [
            "anime" => request("anime"),
            "Genero_id" => request("Genero_id"),
            "anime_url" => request("anime_url"),
            "chapters" => request("episodes"),
            "specification" => [],
            "comments" => []
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("animeid"))
        ],[
            '$set' => $anim
        ]);

        if($updateOneResult->getModifiedCount() == 1)
            return redirect("/admin/AnimeName/".request("animeid"))->with('mssg', "Updated successfuly.")->with("alerttype", "success");
    }

    public function Delete($id) { 
        $collection = (new MongoDB\Client)->Animes->AnimeName;
        $collectionC = (new MongoDB\Client)->Animes->Genero_id;
        $generos = $collectionC->find();
        $anim = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Admin.AnimeName.Delete', [ "anim" => $anim, "generos" => $generos ]);
    }

    public function Remove() {
        $collection = (new MongoDB\Client)->Anime->AnimeName;
        $animename = request('anime');
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("animeid"))
        ]);
        if($deleteOneResult->getDeletedCount() == 1)
            return redirect("/admin/AnimeName")->with("mssg", request('anime')."was deleted successfuly")->with("alerttype", "success");
    }
}
