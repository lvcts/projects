<?php
class human
{

    //contoh properties
    public $name;
    public $skin;
    public $hair;

    //method yang digunakan
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name; 
    }
}

$yana = new human();
$sinta = new human();
$yana->set_name('YANA');
$sinta->set_name('SINTA');

echo $yana->get_name();
echo ('<br>');
echo $sinta->get_name();
