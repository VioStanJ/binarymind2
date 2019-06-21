<?php

class Events 
{
    private $id;
    private $title;
    private $description;
    private $userId;

    

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

    public function getEventsbyId($id)
    {

    }

    public function getEvents()
    {

    }

    public function save(Events $evt)  
    {

    }

    public function update(Events $evt)
    {
        
    }

    public function delete($id)
    {
        
    }
}
