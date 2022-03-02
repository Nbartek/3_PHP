<?php
class Student{
    private string $name;
    private string $surName;
    private string $group;

    public function __construct(string $name,string $surName,string $group)
    {
        $this->name = $name;
        $this->surName = $surName;
        $this->group =$group;
    }
    public function getName():string{
        return $this->name;
    }
    public function getSurName():string{
        return $this->surName;
    }
    public function getGroup():string{
        return $this->group;
    }
}