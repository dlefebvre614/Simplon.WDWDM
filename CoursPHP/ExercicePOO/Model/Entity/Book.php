<?php

/**
 * Exercice 1
 */

//Définir la classe Book ici

class book
{
    //Attributs
    private string $title = "Titre";
    private string $author = "Auteur";
    private string $genre = "Genre";
    private string $description = "Description";

    //setters
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    //getters
    public function getTitle()
    {
        return $this->title;
    }

    //setters
    public function setAuthor($auther)
    {
        $this->author = $auther;
    }

    //getters
    public function getAuthor()
    {
        return $this->auther;
    }

    //setters
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    //getters
    public function getGenre()
    {
        return $this->genre;
    }

    //setters
    public function setDesription($desription)
    {
        $this->desription = $desription;
    }

    //getters
    public function getDesription()
    {
        return $this->desription;
    }

    //setters
    public function setDescription($description)
    {
        $this->description = $description;
    }

    //getters
    public function getDescription()
    {
        return $this->description;
    }
}
