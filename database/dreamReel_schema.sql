DROP SCHEMA IF EXISTS dreamReel;
CREATE SCHEMA `dreamReel` ;
use dreamReel;
CREATE TABLE `dreamReel`.`customer` (
                                        `fullname` VARCHAR(64) NOT NULL,
                                        `address` VARCHAR(64) NULL,
                                        `country` VARCHAR(32) NOT NULL,
                                        `zip` VARCHAR(8) NOT NULL,
                                        `mail` VARCHAR(64) NOT NULL,
                                        `telephone_num` VARCHAR(16) NOT NULL,
                                        `card_num` VARCHAR(16) NOT NULL,
                                        `card_type` VARCHAR(16) NULL,
                                        PRIMARY KEY (`mail`));

insert into customer values
                         ('Drake Ramoray', 'New York City', 'USA', '17744', 'drake_ramoray@windowslive.com','+302106599121','5588471266398712','Visa'),
                         ('Jane Austin', 'Boston', 'USA', '13762', 'jane_austin@gmail.com','+302107591170','5988471066793727','Visa'),
                         ('James Borg', 'Brooklyn', 'USA', '55581', 'james_b@outlook.com','+302108742601','1583621789501254','Mastercard'),
                         ('Richard Blaine', 'Connie Island', 'USA', '16324', 'richard_b@gmail.com','+302104582103','7412697203540983','Visa'),
                         ('David Moore', 'Miami', 'USA', '13801', 'd_moore@unipi.gr','+302101204879','8403495273180217','Other');