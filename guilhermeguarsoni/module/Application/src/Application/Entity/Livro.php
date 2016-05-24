<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity 
* @ORM\Table(name="livros")
**/
class Livro
{
/**
* @ORM\Id 
* @ORM\GeneratedValue(strategy="AUTO")
* @ORM\Column(type="integer") 
**/
	protected $id;
	
/**
* @ORM\Column(type="string") 
**/
	protected $titulo;
	
}