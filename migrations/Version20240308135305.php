<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240308135305 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidacy (id INT AUTO_INCREMENT NOT NULL, candidate VARCHAR(255) NOT NULL, job_offer VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE candidate (id INT AUTO_INCREMENT NOT NULL, lastname VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, availability TINYINT(1) NOT NULL, registrated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', gender VARCHAR(255) NOT NULL, birth_date DATE NOT NULL, birth_city VARCHAR(255) NOT NULL, sector_activity VARCHAR(255) NOT NULL, user VARCHAR(255) NOT NULL, passport VARCHAR(255) NOT NULL, picture_profil VARCHAR(255) NOT NULL, curriculum_vitae VARCHAR(255) NOT NULL, category VARCHAR(255) NOT NULL, experience VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE candidacy');
        $this->addSql('DROP TABLE candidate');
    }
}
