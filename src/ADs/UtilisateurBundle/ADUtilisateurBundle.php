<?php

namespace AD\UtilisateurBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ADUtilisateurBundle extends Bundle
{
	 public function getParent()
	  {
		return 'FOSUserBundle';
	  }
}
