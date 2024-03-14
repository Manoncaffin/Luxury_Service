<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240314091028 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidate CHANGE category_id category_id INT NOT NULL, CHANGE gender_id gender_id INT NOT NULL, CHANGE user_id user_id INT NOT NULL, CHANGE lastname lastname VARCHAR(255) NOT NULL, CHANGE firstname firstname VARCHAR(255) NOT NULL, CHANGE phone phone VARCHAR(255) NOT NULL, CHANGE city city VARCHAR(255) NOT NULL, CHANGE availability availability TINYINT(1) NOT NULL, CHANGE registrated_at registrated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE birth_date birth_date DATE NOT NULL, CHANGE birth_city birth_city VARCHAR(255) NOT NULL, CHANGE sector_activity sector_activity VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidate CHANGE category_id category_id INT DEFAULT NULL, CHANGE gender_id gender_id INT DEFAULT NULL, CHANGE user_id user_id INT DEFAULT NULL, CHANGE lastname lastname VARCHAR(255) DEFAULT NULL, CHANGE firstname firstname VARCHAR(255) DEFAULT NULL, CHANGE phone phone VARCHAR(255) DEFAULT NULL, CHANGE city city VARCHAR(255) DEFAULT NULL, CHANGE availability availability TINYINT(1) DEFAULT NULL, CHANGE registrated_at registrated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE birth_date birth_date DATE DEFAULT NULL, CHANGE birth_city birth_city VARCHAR(255) DEFAULT NULL, CHANGE sector_activity sector_activity VARCHAR(255) DEFAULT NULL');
    }
}
