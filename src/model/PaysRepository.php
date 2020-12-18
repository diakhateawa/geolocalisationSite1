<?php

namespace src\model; 

use libs\system\Model; 
	
class PaysRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getAll()
	{
		return $this->db->getRepository("Pays")->findAll();
	}
	public function insert($pays)
	{
		$this->db->persist($pays);
		$this->db->flush();
	}
	public function get($id)
	{
		return $this->db->getRepository("Pays")->find(array("id"=>$id));
	}
	public function update($pays)
	{
		//le pays de la base de donnee
		$p = $this->get($pays->getId());
		/*Modification des donnee de ce pays avec les infos
		du pays pass en paramettre cad $pay*/
		$p->setNom($pays->getNom());
		$p->setLongitude($pays->getLongitude());
		$p->setLatitude($pays->getLatitude());

		$this->db->flush();
	}

	public function delete($id)
	{
		$p = $this->get($id);
		$this->db->remove($p);
		$this->db->flush();
	}
	
}