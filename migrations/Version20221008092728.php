<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221008092728 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structures ADD mother_partner_id INT NOT NULL');
        $this->addSql('ALTER TABLE structures ADD CONSTRAINT FK_5BBEC55A6C490E80 FOREIGN KEY (mother_partner_id) REFERENCES partners (id)');
        $this->addSql('CREATE INDEX IDX_5BBEC55A6C490E80 ON structures (mother_partner_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structures DROP FOREIGN KEY FK_5BBEC55A6C490E80');
        $this->addSql('DROP INDEX IDX_5BBEC55A6C490E80 ON structures');
        $this->addSql('ALTER TABLE structures DROP mother_partner_id');
    }
}
