<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Entity\Post;
use AppBundle\Form\CommentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Intl\Intl;

/**
 * Controller used to search
 *
 * @Route("/search")
 *
 */
class SearchController extends Controller
{
    /**
     * @Route("/", name="search_index", defaults={"page" = 1})
     * @Route("/page/{page}", name="search_index_paginated", requirements={"page" : "\d+"})
     */
    public function indexAction($page)
    {

        $finder = $this->container->get('fos_elastica.finder.app.user');
        $results = $finder->find('john*');
        var_dump($results);
        die;

        $results = $this->getDoctrine()->getRepository('AppBundle:User')->search();

        var_dump($results);die;
    }


}
