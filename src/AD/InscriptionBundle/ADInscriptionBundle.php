<?php

namespace AD\InscriptionBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ADInscriptionBundle extends Bundle{
	
	public function getParent(){
        return 'FOSUserBundle';
    }
}
