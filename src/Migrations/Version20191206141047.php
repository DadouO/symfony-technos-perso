<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191206141047 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE langage (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE projet (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, liens CLOB NOT NULL --(DC2Type:array)
        )');
        $this->addSql('CREATE TABLE projet_langage (projet_id INTEGER NOT NULL, langage_id INTEGER NOT NULL, PRIMARY KEY(projet_id, langage_id))');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE langage');
        $this->addSql('DROP TABLE projet');
        $this->addSql('DROP TABLE projet_langage');
    }
}
