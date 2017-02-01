<?php

namespace Cinema\BiblioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * personne
 *
 * @ORM\Table(name="personne")
 * @ORM\Entity(repositoryClass="Cinema\BiblioBundle\Repository\personneRepository")
 */
class personne
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="pernom", type="string", length=255)
     */
    private $pernom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_naissance", type="datetimetz")
     */
    private $dateDeNaissance;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return personne
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set pernom
     *
     * @param string $pernom
     *
     * @return personne
     */
    public function setPernom($pernom)
    {
        $this->pernom = $pernom;

        return $this;
    }

    /**
     * Get pernom
     *
     * @return string
     */
    public function getPernom()
    {
        return $this->pernom;
    }

    /**
     * Set dateDeNaissance
     *
     * @param \DateTime $dateDeNaissance
     *
     * @return personne
     */
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    /**
     * Get dateDeNaissance
     *
     * @return \DateTime
     */
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }
}

