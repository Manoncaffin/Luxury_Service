<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240311125812 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidate ADD gender_id INT NOT NULL, ADD user_id INT NOT NULL, ADD passport_id INT DEFAULT NULL, ADD picture_profil_id INT DEFAULT NULL, ADD curriculum_vitae_id INT DEFAULT NULL, DROP gender, DROP user, DROP passport, DROP picture_profil, DROP curriculum_vitae, DROP experience');
        $this->addSql('ALTER TABLE candidate ADD CONSTRAINT FK_C8B28E44708A0E0 FOREIGN KEY (gender_id) REFERENCES gender (id)');
        $this->addSql('ALTER TABLE candidate ADD CONSTRAINT FK_C8B28E44A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE candidate ADD CONSTRAINT FK_C8B28E44ABF410D0 FOREIGN KEY (passport_id) REFERENCES file (id)');
        $this->addSql('ALTER TABLE candidate ADD CONSTRAINT FK_C8B28E442E805CC6 FOREIGN KEY (picture_profil_id) REFERENCES file (id)');
        $this->addSql('ALTER TABLE candidate ADD CONSTRAINT FK_C8B28E444AF29A35 FOREIGN KEY (curriculum_vitae_id) REFERENCES file (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C8B28E44708A0E0 ON candidate (gender_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C8B28E44A76ED395 ON candidate (user_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C8B28E44ABF410D0 ON candidate (passport_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C8B28E442E805CC6 ON candidate (picture_profil_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C8B28E444AF29A35 ON candidate (curriculum_vitae_id)');
        $this->addSql('ALTER TABLE experience ADD candidate_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE experience ADD CONSTRAINT FK_590C10391BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id)');
        $this->addSql('CREATE INDEX IDX_590C10391BD8781 ON experience (candidate_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidate DROP FOREIGN KEY FK_C8B28E44708A0E0');
        $this->addSql('ALTER TABLE candidate DROP FOREIGN KEY FK_C8B28E44A76ED395');
        $this->addSql('ALTER TABLE candidate DROP FOREIGN KEY FK_C8B28E44ABF410D0');
        $this->addSql('ALTER TABLE candidate DROP FOREIGN KEY FK_C8B28E442E805CC6');
        $this->addSql('ALTER TABLE candidate DROP FOREIGN KEY FK_C8B28E444AF29A35');
        $this->addSql('DROP INDEX UNIQ_C8B28E44708A0E0 ON candidate');
        $this->addSql('DROP INDEX UNIQ_C8B28E44A76ED395 ON candidate');
        $this->addSql('DROP INDEX UNIQ_C8B28E44ABF410D0 ON candidate');
        $this->addSql('DROP INDEX UNIQ_C8B28E442E805CC6 ON candidate');
        $this->addSql('DROP INDEX UNIQ_C8B28E444AF29A35 ON candidate');
        $this->addSql('ALTER TABLE candidate ADD gender VARCHAR(255) NOT NULL, ADD user VARCHAR(255) NOT NULL, ADD passport VARCHAR(255) NOT NULL, ADD picture_profil VARCHAR(255) NOT NULL, ADD curriculum_vitae VARCHAR(255) NOT NULL, ADD experience VARCHAR(255) NOT NULL, DROP gender_id, DROP user_id, DROP passport_id, DROP picture_profil_id, DROP curriculum_vitae_id');
        $this->addSql('ALTER TABLE experience DROP FOREIGN KEY FK_590C10391BD8781');
        $this->addSql('DROP INDEX IDX_590C10391BD8781 ON experience');
        $this->addSql('ALTER TABLE experience DROP candidate_id');
    }
}
