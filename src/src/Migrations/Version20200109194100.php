<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200109194100 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE hotel (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, price INT NOT NULL, rating INT NOT NULL, room VARCHAR(255) NOT NULL, roomPrice INT NOT NULL, UNIQUE INDEX UNIQ_3535ED95E237E06 (name), UNIQUE INDEX UNIQ_3535ED9D4E6F81 (address), UNIQUE INDEX UNIQ_3535ED9CAC822D9 (price), UNIQUE INDEX UNIQ_3535ED9D8892622 (rating), UNIQUE INDEX UNIQ_3535ED9729F519B (room), UNIQUE INDEX UNIQ_3535ED9352897A2 (roomPrice), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE hotel');
    }
}
