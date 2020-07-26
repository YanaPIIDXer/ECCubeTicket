<?php

    namespace Plugin\ECCubeTicketPlugin\Entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * Ticket
     *
     * @ORM\Table(name="dtb_ticket")
     * @ORM\Entity(repositoryClass="Plugin\ECCubeTicketPlugin\Repository\ConfigRepository")
     */
    class Ticket
    {
        /**
         * @var int
         *
         * @ORM\Column(name="id", type="integer", options={"unsigned":true})
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="IDENTITY")
         */
        private $id;

        /**
         * @return int
         */
        public function getId()
        {
            return $this->id;
        }
    }

?>
