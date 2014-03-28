<?php

namespace CanalTP\MttBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

abstract class AbstractController extends Controller
{
    protected function isGranted($businessId)
    {
        // TODO: remove 'false' in this condition when the permission will be implemented
        if (false && $this->get('security.context')->isGranted($businessId) === false) {
            throw new AccessDeniedException();
        }
    }
}