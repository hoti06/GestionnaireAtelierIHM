<?php
 
namespace Atelier\UserBundle\Entity;
 
use Symfony\Component\Validator\Constraints as Assert;
 
class formulaire
{
  //protected $password;
  
  
  /**
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
  protected $email; 
  
  protected $role;

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }
 /*
  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function getPassword()
  {
    return $this->password;
  }*/

  public function setRole($role)
  {
    $this->role = $role;
  }

  public function getRole()
  {
    return $this->role;
  }
}
