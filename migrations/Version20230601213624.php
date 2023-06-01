<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230601213624 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE author CHANGE last_name last_name VARCHAR(255) DEFAULT NULL, CHANGE birthday birthday DATETIME DEFAULT NULL, CHANGE death death DATETIME DEFAULT NULL, CHANGE country country VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE book CHANGE publishing_date publishing_date DATETIME DEFAULT NULL, CHANGE isbn isbn VARCHAR(20) DEFAULT NULL, CHANGE edition edition INT DEFAULT NULL, CHANGE publishing_origin publishing_origin VARCHAR(255) DEFAULT NULL, CHANGE book_condition book_condition VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE publisher CHANGE country country VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE author CHANGE last_name last_name VARCHAR(255) NOT NULL, CHANGE birthday birthday DATETIME NOT NULL, CHANGE death death DATETIME NOT NULL, CHANGE country country VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE book CHANGE publishing_date publishing_date DATETIME NOT NULL, CHANGE isbn isbn VARCHAR(255) NOT NULL, CHANGE edition edition INT NOT NULL, CHANGE publishing_origin publishing_origin VARCHAR(255) NOT NULL, CHANGE book_condition book_condition VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE publisher CHANGE country country VARCHAR(255) NOT NULL');
    }
}
