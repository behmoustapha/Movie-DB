<?php

require_once("get-proxy.php");// au lycée pour faire des requêtes https nous avons besoin d'indiquer le proxy


    //fonction qui retourne dans un tableau asociatif les 20 films les plus populaires 
    function popularMovies(){
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR";
        $response = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR");
       
        $result = json_decode($response, true);
        return $result['results'];
      }


    function topRated(){
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/movie/top_rated?api_key=$key&language=fr-FR";
        $response = file_get_contents("https://api.themoviedb.org/3/movie/top_rated?api_key=$key&language=fr-FR");
       
        $result = json_decode($response, true);
        return $result['results'];
      }

    function genre($id){
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/discover/movie?api_key=$key&language=fr-FR&with_genres=$id";
        $response = file_get_contents("https://api.themoviedb.org/3/discover/movie?api_key=$key&language=fr-FR&with_genres=$id");
       
        $result = json_decode($response, true);
        return $result['results'];
      }
    
    function details($movieId){
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/movie/$movieId?api_key=$key&language=fr-FR";
        $response = file_get_contents("https://api.themoviedb.org/3/movie/$movieId?api_key=$key&language=fr-FR");
       
        $result = json_decode($response, true);
        return $result;
      }


    function acteurs($movieId){
      $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
      $url = "https://api.themoviedb.org/3/movie/$movieId/credits?api_key=$key";
      $response = file_get_contents("https://api.themoviedb.org/3/movie/$movieId/credits?api_key=$key");
      
      $result = json_decode($response, true);
      return $result['cast'];
    }

    function acteur($actorId){
      $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
      $url = "https://api.themoviedb.org/3/person/$actorId?api_key=$key&language=fr-FR";
      $response = file_get_contents("https://api.themoviedb.org/3/person/$actorId?api_key=$key&language=fr-FR");
      
      $result = json_decode($response, true);
      return $result;
    }

    function topFilms($actorId){
      $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
      $url = "https://api.themoviedb.org/3/person/$actorId/combined_credits?api_key=$key&language=fr-FR";
      $response = file_get_contents("https://api.themoviedb.org/3/person/$actorId/combined_credits?api_key=$key&language=fr-FR");
      
      $result = json_decode($response, true);
      return $result['cast'];
    }

    function searchA($query){
      $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
      $url = "https://api.themoviedb.org/3/search/person?query=$query?api_key=$key&language=fr-FR";
      $response = file_get_contents("https://api.themoviedb.org/3/search/person?query=$query&api_key=$key&language=fr-FR");
      
      $result = json_decode($response, true);
      return $result['results'];
    }
    
    function searchM($query){
      $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
      $url = "https://api.themoviedb.org/3/search/movie?query=$query?api_key=$key&language=fr-FR";
      $response = file_get_contents("https://api.themoviedb.org/3/search/movie?query=$query&api_key=$key&language=fr-FR");
      
      $result = json_decode($response, true);
      return $result['results'];
    }

    function trailer($movieId){
      $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
      $url = "https://api.themoviedb.org/3/movie/$movieId/videos?api_key=$key&language=fr-FR";
      $response = file_get_contents("https://api.themoviedb.org/3/movie/$movieId/videos?api_key=$key&language=fr-FR");
      
      $result = json_decode($response, true);
      return $result['results'];
    }
?>

