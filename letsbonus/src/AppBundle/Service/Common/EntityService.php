<?php
/**
 * Created by PhpStorm.
 * User: apuig
 * Date: 7/2/16
 * Time: 11:21
 */

namespace AppBundle\Service\Common;


abstract class EntityService {

    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var Repository
     */
    protected $repository;

    /**
     * EntityService constructor.
     *
     * Service dependencies are passed through Dependency Injection.
     * Its definition can be found in the file services.yml
     *
     * @param $_em
     * @param $_repository
     */
    public function __construct($_em, $_repository) {
        $this->em = $_em;
        $this->repository = $_repository;
    }

    /**
     * Return all the entities.
     *
     * @return array(New).
     */
    public function getAll() {
        return $this->repository->findAll();
    }
}

