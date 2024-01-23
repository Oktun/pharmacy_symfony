<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240122154101 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE oder DROP FOREIGN KEY FK_AB5ED4479395C3F3');
        $this->addSql('ALTER TABLE oder DROP FOREIGN KEY FK_AB5ED4474584665A');
        $this->addSql('DROP TABLE oder');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE oder (id INT AUTO_INCREMENT NOT NULL, product_id INT DEFAULT NULL, customer_id INT DEFAULT NULL, date DATE NOT NULL, INDEX IDX_AB5ED4479395C3F3 (customer_id), INDEX IDX_AB5ED4474584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE oder ADD CONSTRAINT FK_AB5ED4479395C3F3 FOREIGN KEY (customer_id) REFERENCES customer (id)');
        $this->addSql('ALTER TABLE oder ADD CONSTRAINT FK_AB5ED4474584665A FOREIGN KEY (product_id) REFERENCES product (id)');
    }
}
