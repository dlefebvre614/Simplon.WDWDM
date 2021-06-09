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
    private string $dateinstanciation;

    // Construct
    public function __construct()
    {
        $this->dateinstanciation = date('d/m/Y à h:i:s');
        var_dump(date('d/m/Y h:i:s'));
    }

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
        return $this->author;
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

    /**
     * Get the value of dateinstanciation
     */
    public function getDateinstanciation()
    {
        return $this->dateinstanciation;
    }

    /**
     * Set the value of dateinstanciation
     *
     * @return  self
     */
    public function setDateinstanciation($dateinstanciation)
    {
        $this->dateinstanciation = $dateinstanciation;

        return $this;
    }
}
