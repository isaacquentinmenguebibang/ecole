<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191005222853 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cahier_texte ADD utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cahier_texte ADD CONSTRAINT FK_B554C618FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_B554C618FB88E14F ON cahier_texte (utilisateur_id)');
        $this->addSql('ALTER TABLE classe ADD utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE classe ADD CONSTRAINT FK_8F87BF96FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_8F87BF96FB88E14F ON classe (utilisateur_id)');
        $this->addSql('ALTER TABLE cours ADD utilisateur_id INT DEFAULT NULL, ADD classe_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C8F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9CFB88E14F ON cours (utilisateur_id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9C8F5EA509 ON cours (classe_id)');
        $this->addSql('ALTER TABLE note ADD utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA14FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_CFBDFA14FB88E14F ON note (utilisateur_id)');
        $this->addSql('ALTER TABLE payement ADD utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE payement ADD CONSTRAINT FK_B20A7885FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_B20A7885FB88E14F ON payement (utilisateur_id)');
        $this->addSql('ALTER TABLE utilisateur ADD administration_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B339B8E743 FOREIGN KEY (administration_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_1D1C63B339B8E743 ON utilisateur (administration_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cahier_texte DROP FOREIGN KEY FK_B554C618FB88E14F');
        $this->addSql('DROP INDEX IDX_B554C618FB88E14F ON cahier_texte');
        $this->addSql('ALTER TABLE cahier_texte DROP utilisateur_id');
        $this->addSql('ALTER TABLE classe DROP FOREIGN KEY FK_8F87BF96FB88E14F');
        $this->addSql('DROP INDEX IDX_8F87BF96FB88E14F ON classe');
        $this->addSql('ALTER TABLE classe DROP utilisateur_id');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CFB88E14F');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C8F5EA509');
        $this->addSql('DROP INDEX IDX_FDCA8C9CFB88E14F ON cours');
        $this->addSql('DROP INDEX IDX_FDCA8C9C8F5EA509 ON cours');
        $this->addSql('ALTER TABLE cours DROP utilisateur_id, DROP classe_id');
        $this->addSql('ALTER TABLE note DROP FOREIGN KEY FK_CFBDFA14FB88E14F');
        $this->addSql('DROP INDEX IDX_CFBDFA14FB88E14F ON note');
        $this->addSql('ALTER TABLE note DROP utilisateur_id');
        $this->addSql('ALTER TABLE payement DROP FOREIGN KEY FK_B20A7885FB88E14F');
        $this->addSql('DROP INDEX IDX_B20A7885FB88E14F ON payement');
        $this->addSql('ALTER TABLE payement DROP utilisateur_id');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B339B8E743');
        $this->addSql('DROP INDEX IDX_1D1C63B339B8E743 ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur DROP administration_id');
    }
}
