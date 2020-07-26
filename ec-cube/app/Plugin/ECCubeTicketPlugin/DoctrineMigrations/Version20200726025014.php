<?php declare(strict_types=1);

    namespace Plugin\ECCubeTicketPlugin\DoctrineMigrations;

    use Doctrine\DBAL\Schema\Schema;
    use Doctrine\Migrations\AbstractMigration;

    const TABLE_NAME = "dtb_ticket";

    /**
     * Auto-generated Migration: Please modify to your needs!
     */
    final class Version20200726025014 extends AbstractMigration
    {
        public function up(Schema $schema) : void
        {
            if($schema->getTable(TABLE_NAME)) { return; }
            
            // this up() migration is auto-generated, please modify it to your needs
            $table = $schema->createTable(TABLE_NAME);
            $table->addColumn("id", "integer", array("unsigned" => true));
            $table->setPrimaryKey(array("id"));

            if($schema->getTable(TABLE_NAME) == null)
            {
                die("Create Table Failed.");
            }
        }

        public function down(Schema $schema) : void
        {
            // this down() migration is auto-generated, please modify it to your needs
            $schema->dropTable(TABLE_NAME);
        }
    }
?>
