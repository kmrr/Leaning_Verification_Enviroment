--- DROP TABLE ---
DROP TABLE IF EXISTS 'TEST';

--- CREATE TABLE ---
create table  IF NOT EXISTS 'TEST'
(
    'id' INT(20),
    'name' varchar(20) NOT NULL
    PRIMARY KEY('id')
);

--- INSERT DATA ---
INSERT INTO TEST(id, name) VALUES(1, 'Hokkaido');
INSERT INTO TEST(id, name) VALUES(2, 'Aomori');
INSERT INTO TEST(id, name) VALUES(3, 'Iwate');
INSERT INTO TEST(id, name) VALUES(4, 'Yamagata');
