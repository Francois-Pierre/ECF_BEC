<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221010080400 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE partner_permissions ADD competition VARCHAR(255) NOT NULL, ADD zumba_lesson VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE structure_permissions ADD competition VARCHAR(255) NOT NULL, ADD zumba_lesson VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE partner_permissions DROP competition, DROP zumba_lesson');
        $this->addSql('ALTER TABLE structure_permissions DROP competition, DROP zumba_lesson');
    }
}
