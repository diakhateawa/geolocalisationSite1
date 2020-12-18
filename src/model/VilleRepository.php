<?php

namespace src\model; 

use libs\system\Model; 
	
class VilleRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getAll()
	{
		return $this->db->getRepository("Ville")->findAll();
	}
	public function insert($ville)
	{
		$this->db->persist($ville);
		$this->db->flush();
	}
	public function get($id)
	{
		return $this->db->getRepository("Ville")->find(array("id"=>$id));
	}
	public function getPays($id)
	{
		return $this->db->getRepository("Pays")->find(array("id"=>$id));
	}
	public function update($ville)
	{
		//le ville de la base de donnee
		$v = $this->get($ville->getId());
		/*Modification des donnee de ce ville avec les infos
		du ville vass en varamettre cad $vay*/
		$v->setNom($ville->getNom());
		$v->setLongitude($ville->getLongitude());
		$v->setLatitude($ville->getLatitude());
		$v->setPays($ville->getPays());
		
		$this->db->flush();
	}

	public function delete($id)
	{
		$p = $this->get($id);
		$this->db->remove($p);
		$this->db->flush();
	}
	
	
}