<?php

class Student 
{
    private $id;
    private $nom;
    private $prenom;
    private $slug;
    private $minidesc;
    private $description;
    private $tel;
    private $mail;
    private $linkedin;
    private $facebook;
    private $instagram;
    private $twitter;
    private $siteweb;
    private $specialisation;
    private $bio;
    private $picfront;
    private $p1;
    private $p2;
    private $p3;
    private $p4;
    private $statut;
    private $userID;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of slug
     */ 
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set the value of slug
     *
     * @return  self
     */ 
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get the value of minidesc
     */ 
    public function getMinidesc()
    {
        return $this->minidesc;
    }

    /**
     * Set the value of minidesc
     *
     * @return  self
     */ 
    public function setMinidesc($minidesc)
    {
        $this->minidesc = $minidesc;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of tel
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */ 
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of linkedin
     */ 
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set the value of linkedin
     *
     * @return  self
     */ 
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get the value of facebook
     */ 
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set the value of facebook
     *
     * @return  self
     */ 
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get the value of instagram
     */ 
    public function getInstagram()
    {
        return $this->instagram;
    }

    /**
     * Set the value of instagram
     *
     * @return  self
     */ 
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;

        return $this;
    }

    /**
     * Get the value of twitter
     */ 
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set the value of twitter
     *
     * @return  self
     */ 
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get the value of siteweb
     */ 
    public function getSiteweb()
    {
        return $this->siteweb;
    }

    /**
     * Set the value of siteweb
     *
     * @return  self
     */ 
    public function setSiteweb($siteweb)
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    /**
     * Get the value of specialisation
     */ 
    public function getSpecialisation()
    {
        return $this->specialisation;
    }

    /**
     * Set the value of specialisation
     *
     * @return  self
     */ 
    public function setSpecialisation($specialisation)
    {
        $this->specialisation = $specialisation;

        return $this;
    }

    /**
     * Get the value of bio
     */ 
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set the value of bio
     *
     * @return  self
     */ 
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get the value of picfront
     */ 
    public function getPicfront()
    {
        return $this->picfront;
    }

    /**
     * Set the value of picfront
     *
     * @return  self
     */ 
    public function setPicfront($picfront)
    {
        $this->picfront = $picfront;

        return $this;
    }

    /**
     * Get the value of p1
     */ 
    public function getP1()
    {
        return $this->p1;
    }

    /**
     * Set the value of p1
     *
     * @return  self
     */ 
    public function setP1($p1)
    {
        $this->p1 = $p1;

        return $this;
    }

    /**
     * Get the value of p2
     */ 
    public function getP2()
    {
        return $this->p2;
    }

    /**
     * Set the value of p2
     *
     * @return  self
     */ 
    public function setP2($p2)
    {
        $this->p2 = $p2;

        return $this;
    }

    /**
     * Get the value of p3
     */ 
    public function getP3()
    {
        return $this->p3;
    }

    /**
     * Set the value of p3
     *
     * @return  self
     */ 
    public function setP3($p3)
    {
        $this->p3 = $p3;

        return $this;
    }

    /**
     * Get the value of p4
     */ 
    public function getP4()
    {
        return $this->p4;
    }

    /**
     * Set the value of p4
     *
     * @return  self
     */ 
    public function setP4($p4)
    {
        $this->p4 = $p4;

        return $this;
    }

    /**
     * Get the value of statut
     */ 
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set the value of statut
     *
     * @return  self
     */ 
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get the value of userID
     */ 
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Set the value of userID
     *
     * @return  self
     */ 
    public function setUserID($userID)
    {
        $this->userID = $userID;

        return $this;
    }

    public function getStudentById($id)
    {

    }

    public function getStudents()
    {
        
    }

    public function save(Student $std) 
    {

    }

    public function update(Student $std)
    {
        
    }

    public function delete($id)
    {
        
    }
}

