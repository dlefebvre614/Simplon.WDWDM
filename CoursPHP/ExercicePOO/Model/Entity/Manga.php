<?php

/**
 * Exercice 4
 */

//Ecrire du code ici

class Manga extends Book
{
    // Attributs
    private string $illustrator = 'dessinateur';

    /**
     * Get the value of illustrator
     */
    public function getIllustrator()
    {
        return $this->illustrator;
    }

    /**
     * Set the value of illustrator
     *
     * @return  self
     */
    public function setIllustrator($illustrator)
    {
        $this->illustrator = $illustrator;

        return $this;
    }
}
