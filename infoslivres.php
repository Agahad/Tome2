<!doctype html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="styleT2.css"/> 
		<title>Tome2</title>
	</head>

   <body>

   <?php
   $isbn = isset($_POST['isbn']) ? $_POST['isbn'] : '';
   // ou si vous préférez hardcodé
   // $isbn = '0061234001';

   $request = 'https://www.googleapis.com/books/v1/volumes?q=isbn:' . $isbn;
   $response = file_get_contents($request);
   $results = json_decode($response);

   if($results->totalItems > 0){
      // avec de la chance, ce sera le 1er trouvé
      $book = $results->items[0];

      $infos['isbn'] = $book->volumeInfo->industryIdentifiers[0]->identifier;
      $infos['titre'] = $book->volumeInfo->title;
      $infos['auteur'] = $book->volumeInfo->authors[0];
      $infos['langue'] = $book->volumeInfo->language;
      $infos['publication'] = $book->volumeInfo->publishedDate;
      $infos['pages'] = $book->volumeInfo->pageCount;

      if( isset($book->volumeInfo->imageLinks) ){
         $infos['image'] = str_replace('&edge=curl', '', $book->volumeInfo->imageLinks->thumbnail);
      }

      print_r($infos);
   }
   else{
      echo 'Livre introuvable';
   }
   ?>

   </body>
</html>