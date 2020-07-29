<?php

$collection = (new MongoDB\Client)->Animes->AnimeName;
$animes = $collection->find();
foreach($animes as $anime) {
    print_r($anime);
    echo "<br>";
    echo "<br>";
}

// $cursor = $collection->find(
//     [],
//     [
//         'limit' => 5,
//         'sort' => ['pop' => -1],
//     ]
// );
// foreach ($cursor as $document) {
//     print_r($document);
// }
// $insertOneResult = $collection->insertOne([
//     'category' => 'Shonen',
//     'description' => 'Fights',
// ]);

// printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

// var_dump($insertOneResult->getInsertedCount());

//Create
// $collection = (new MongoDB\Client)->Animes->Genero;

// $insertResult = $collection->insertOne([
// "category" => "Ciencia Ficcion",
// "description" => "Fiction things"
// ]);

// printf("Inserted %d document(s)<br />", $insertResult->getInsertedCount());
// var_dump($insertResult->getInsertedID());

//Read
// $table = $collection->find();

// foreach ($table as $record) {
//     echo "<br />";
//     echo "ID: ".$record["_id"]."<br />";
//     echo "Category: ".$record->category."<br />";
//     echo "Description: ".$record["description"]."<br />";
// }

//Update
// $updateOneResult = $collection->updateOne([
//     "_id" => "5ee2b3f1d553b02acca435fe"
// ],[
//     '$set' => ["description" => "animes de accion y fantasia"]
// ]);

// printf("Matched %d Document(s)<br/>", $updateOneResult->getMatchedCount());
// printf("Updated %d Document(s)<br/>", $updateOneResult->getModifiedCount());

//Delete
// $deleteResult = $collection->deleteOne([
//     "category" => "Shonen"
// ]);

// printf("Deleted %d Document(s)<br />", $deleteResult->getDeletedCount());