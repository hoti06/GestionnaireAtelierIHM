<?php

namespace Atelier\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AtelierUserBundle extends Bundle
{
  public function getParent()
  {
    return 'FOSUserBundle';
  }
}
