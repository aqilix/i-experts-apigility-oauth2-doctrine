<?php
namespace Api\V1\Rpc\Me;

use Zend\Mvc\Controller\AbstractActionController;
use ZF\Hal\View\HalJsonModel;
use ZF\ApiProblem\ApiProblem;
use ZF\ApiProblem\ApiProblemResponse;

class MeController extends AbstractActionController
{
    public function meAction()
    {
        // get authentication service
        $authentication = $this->getServiceLocator()->get('authentication');
        // get identity from authentication
        $identity = $authentication->getIdentity();
        $userId   = $identity->getAuthenticationIdentity()['user_id'];
        // retrieve user based on authentication identity
        $userMapper = $this->getServiceLocator()->get('iexperts.user.mapper.user');
        $user = $userMapper->fetchOne($userId);
        $return = new HalJsonModel($user->getArrayCopy());
        return $return;
    }
}
