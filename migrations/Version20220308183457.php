<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220308183457 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire ADD actualites_id INT NOT NULL, ADD contenu LONGTEXT NOT NULL, ADD actif TINYINT(1) NOT NULL, ADD rgpd TINYINT(1) NOT NULL, ADD created_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC2EDF1993 FOREIGN KEY (actualites_id) REFERENCES actualite (id)');
        $this->addSql('CREATE INDEX IDX_67F068BC2EDF1993 ON commentaire (actualites_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC2EDF1993');
        $this->addSql('DROP INDEX IDX_67F068BC2EDF1993 ON commentaire');
        $this->addSql('ALTER TABLE commentaire DROP actualites_id, DROP contenu, DROP actif, DROP rgpd, DROP created_at');
    }
}
