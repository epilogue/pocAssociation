<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210719170208 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE association ADD president_id INT NOT NULL, ADD tresorier_id INT NOT NULL, ADD secretaire_id INT NOT NULL');
        $this->addSql('ALTER TABLE association ADD CONSTRAINT FK_FD8521CCB40A33C7 FOREIGN KEY (president_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE association ADD CONSTRAINT FK_FD8521CC5014067D FOREIGN KEY (tresorier_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE association ADD CONSTRAINT FK_FD8521CCA90F02B2 FOREIGN KEY (secretaire_id) REFERENCES personne (id)');
        $this->addSql('CREATE INDEX IDX_FD8521CCB40A33C7 ON association (president_id)');
        $this->addSql('CREATE INDEX IDX_FD8521CC5014067D ON association (tresorier_id)');
        $this->addSql('CREATE INDEX IDX_FD8521CCA90F02B2 ON association (secretaire_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE role');
        $this->addSql('ALTER TABLE association DROP FOREIGN KEY FK_FD8521CCB40A33C7');
        $this->addSql('ALTER TABLE association DROP FOREIGN KEY FK_FD8521CC5014067D');
        $this->addSql('ALTER TABLE association DROP FOREIGN KEY FK_FD8521CCA90F02B2');
        $this->addSql('DROP INDEX IDX_FD8521CCB40A33C7 ON association');
        $this->addSql('DROP INDEX IDX_FD8521CC5014067D ON association');
        $this->addSql('DROP INDEX IDX_FD8521CCA90F02B2 ON association');
        $this->addSql('ALTER TABLE association DROP president_id, DROP tresorier_id, DROP secretaire_id');
    }
}
