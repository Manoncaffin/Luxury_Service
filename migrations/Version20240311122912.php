<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240311122912 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidacy ADD candidate_id INT NOT NULL, DROP candidate');
        $this->addSql('ALTER TABLE candidacy ADD CONSTRAINT FK_D930569D91BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id)');
        $this->addSql('CREATE INDEX IDX_D930569D91BD8781 ON candidacy (candidate_id)');
        $this->addSql('ALTER TABLE candidate ADD category_id INT NOT NULL, DROP category');
        $this->addSql('ALTER TABLE candidate ADD CONSTRAINT FK_C8B28E4412469DE2 FOREIGN KEY (category_id) REFERENCES job_category (id)');
        $this->addSql('CREATE INDEX IDX_C8B28E4412469DE2 ON candidate (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidacy DROP FOREIGN KEY FK_D930569D91BD8781');
        $this->addSql('DROP INDEX IDX_D930569D91BD8781 ON candidacy');
        $this->addSql('ALTER TABLE candidacy ADD candidate VARCHAR(255) NOT NULL, DROP candidate_id');
        $this->addSql('ALTER TABLE candidate DROP FOREIGN KEY FK_C8B28E4412469DE2');
        $this->addSql('DROP INDEX IDX_C8B28E4412469DE2 ON candidate');
        $this->addSql('ALTER TABLE candidate ADD category VARCHAR(255) NOT NULL, DROP category_id');
    }
}
