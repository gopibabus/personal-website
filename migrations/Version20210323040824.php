<?php
declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210323040824 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Created client table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE SEQUENCE client_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $sql = <<< CREATE_TABLE
            CREATE TABLE client (
                id INT NOT NULL, 
                name VARCHAR(120) NOT NULL, 
                start_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, 
                end_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, 
                about TEXT NOT NULL, 
                job_description TEXT NOT NULL, 
                responsibilities TEXT NOT NULL, PRIMARY KEY(id)
            );
        CREATE_TABLE;
        $this->addSql($sql);
        $this->addSql('COMMENT ON COLUMN client.start_date IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN client.end_date IS \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE client_id_seq CASCADE');
        $this->addSql('DROP TABLE client');
    }
}
