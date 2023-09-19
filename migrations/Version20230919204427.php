<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230919204427 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE company_web_service (id INT AUTO_INCREMENT NOT NULL, certificate_file_id INT DEFAULT NULL, privatekey_file_id INT DEFAULT NULL, service_id INT DEFAULT NULL, token_expire_date DATETIME NOT NULL, wsaa_sign LONGTEXT DEFAULT NULL, wsaa_token LONGTEXT DEFAULT NULL, wsaa_error_description LONGTEXT DEFAULT NULL, wsaa_error_code LONGTEXT DEFAULT NULL, key_password VARCHAR(255) DEFAULT NULL, creation_date DATETIME DEFAULT NULL, modification_date DATETIME DEFAULT NULL, active TINYINT(1) NOT NULL, INDEX IDX_10E38CD4C668CAB3 (certificate_file_id), INDEX IDX_10E38CD49F93075D (privatekey_file_id), INDEX IDX_10E38CD4ED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE consulta (id INT AUTO_INCREMENT NOT NULL, cuit DOUBLE PRECISION NOT NULL, tipo_persona VARCHAR(255) NOT NULL, razon_social VARCHAR(255) DEFAULT NULL, apellido VARCHAR(255) DEFAULT NULL, nombre VARCHAR(255) DEFAULT NULL, estado_clave VARCHAR(255) NOT NULL, tipo_clave VARCHAR(255) NOT NULL, provincia_id INT NOT NULL, provincia_nombre VARCHAR(255) NOT NULL, categoria VARCHAR(255) DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE file (id INT AUTO_INCREMENT NOT NULL, file_name VARCHAR(255) NOT NULL, original_name VARCHAR(255) NOT NULL, file_size INT DEFAULT NULL, mime_type VARCHAR(255) DEFAULT NULL, base64 VARCHAR(255) DEFAULT NULL, creation_date DATETIME DEFAULT NULL, modification_date DATETIME DEFAULT NULL, active TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE web_service (id INT AUTO_INCREMENT NOT NULL, wsaa_code VARCHAR(255) NOT NULL, creation_date DATE NOT NULL, modification_date DATE NOT NULL, active TINYINT(1) NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE company_web_service ADD CONSTRAINT FK_10E38CD4C668CAB3 FOREIGN KEY (certificate_file_id) REFERENCES file (id)');
        $this->addSql('ALTER TABLE company_web_service ADD CONSTRAINT FK_10E38CD49F93075D FOREIGN KEY (privatekey_file_id) REFERENCES file (id)');
        $this->addSql('ALTER TABLE company_web_service ADD CONSTRAINT FK_10E38CD4ED5CA9E6 FOREIGN KEY (service_id) REFERENCES web_service (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE company_web_service DROP FOREIGN KEY FK_10E38CD4C668CAB3');
        $this->addSql('ALTER TABLE company_web_service DROP FOREIGN KEY FK_10E38CD49F93075D');
        $this->addSql('ALTER TABLE company_web_service DROP FOREIGN KEY FK_10E38CD4ED5CA9E6');
        $this->addSql('DROP TABLE company_web_service');
        $this->addSql('DROP TABLE consulta');
        $this->addSql('DROP TABLE file');
        $this->addSql('DROP TABLE web_service');
    }
}
