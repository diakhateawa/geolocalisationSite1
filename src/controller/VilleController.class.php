<?php
use libs\system\Controller;
use src\model\VilleRepository;
use src\model\PaysRepository;


class VilleController extends Controller
{
    public function __construct()
    {
       parent::__construct(); 
    }
     public function liste()
    {
        $villedb = new VilleRepository();
        $data ["listeVille"] = $villedb->getAll();
        $paysdb = new PaysRepository();
        $data ["listePays"] = $paysdb->getAll();

        return $this->view->load("ville/liste",$data);
    }
    
    public function insert()
    {
        $villedb = new VilleRepository();
        
        extract($_POST);
        $ville = new Ville();
        $ville->setNom($nom);
        $ville->setLongitude($longitude);
        $ville->setLatitude($latitude);
        $ville->setPays($villedb->getPays($idpays));
        
        $villedb->insert($ville);
        return $this->liste();
       
    }
    public function edit($id)
    {
        $villedb = new VilleRepository();
        $data ["listeVille"] = $villedb->getAll();
        $data ["ville"] = $villedb->get($id);
       
        $paysdb = new PaysRepository();
        $data ["listePays"] = $paysdb->getAll();

        return $this->view->load("ville/edit", $data);

    }
    public function update()
    {
        $villedb = new VilleRepository();
        extract($_POST);
        $ville = new Ville();
        $ville->setId($id);
        $ville->setNom($nom);
        $ville->setLongitude($longitude);
        $ville->setLatitude($latitude);
        $ville->setPays($villedb->getPays($idpays));
        
        $villedb->update($ville);
        return $this->liste();

    }
    public function delete($id)
    {
        $villedb = new VilleRepository();
        $villedb->delete($id);
        return $this->liste();
    }
}
 ?>