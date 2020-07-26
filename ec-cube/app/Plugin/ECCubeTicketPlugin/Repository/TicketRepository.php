<?php

    namespace Plugin\ECCubeTicketPlugin\Repository;

    use Eccube\Repository\AbstractRepository;
    use Plugin\ECCubeTicketPlugin\Entity\Ticket;
    use Symfony\Bridge\Doctrine\RegistryInterface;

    class TicketRepository extends AbstractRepository
    {
        /**
         * ConfigRepository constructor.
         *
         * @param RegistryInterface $registry
         */
        public function __construct(RegistryInterface $registry)
        {
            parent::__construct($registry, Ticket::class);
        }

        /**
         * @param int $id
         *
         * @return null|Config
         */
        public function get($id = 1)
        {
            return $this->find($id);
        }
    }

?>
