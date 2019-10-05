<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191005220452 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE nouvelle ADD utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE nouvelle ADD CONSTRAINT FK_49655CF8FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_49655CF8FB88E14F ON nouvelle (utilisateur_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE nouvelle DROP FOREIGN KEY FK_49655CF8FB88E14F');
        $this->addSql('DROP INDEX IDX_49655CF8FB88E14F ON nouvelle');
        $this->addSql('ALTER TABLE nouvelle DROP utilisateur_id');
    }
}
