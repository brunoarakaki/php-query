DROP TABLE IF EXISTS userinfo;
CREATE TABLE  userinfo (
cpf VARCHAR(11) PRIMARY KEY,
name VARCHAR(130) NOT NULL,
phone VARCHAR(11),
email VARCHAR(100) NOT NULL UNIQUE
);

INSERT INTO userinfo VALUES (
  '10000000000', "John Snow", '11900000000', "john.snow@gmail.com"
);
INSERT INTO userinfo VALUES (
  '10000000001', "Beric Dondarion", '11900000001', "beric.dondarion@yahoo.com"
);
INSERT INTO userinfo VALUES (
  '10000000002', "Daenerys Targaryen", '11900000002', "danytarg@gmail.com"
);
INSERT INTO userinfo VALUES (
  '10000000003', "Ellaria Sand", '11900000003', "ellsand@yahoo.com"
);
INSERT INTO userinfo VALUES (
  '10000000004', "Jorah Mormont", '11900000004', "mormont.jorah@gmail.com"
);
INSERT INTO userinfo VALUES (
  '10000000005', "Lysa Arryn", '11900000005', "lysaarryn@yahoo.com"
);
INSERT INTO userinfo VALUES (
  '10000000006', "Robert Baratheon", '11900000006', "rob1994@gmail.com"
);
INSERT INTO userinfo VALUES (
  '10000000007', "Theon Greyjoy", '11900000007', "the.kraken@yahoo.com"
);
INSERT INTO userinfo VALUES (
  '10000000008', "Xaro Xhoan", '11900000008', "xaro.xhoan@gmail.com"
);
INSERT INTO userinfo VALUES (
  '10000000009', "Tyreon Lannister", '11900000009', "tyreon@yahoo.com"
);
INSERT INTO userinfo VALUES (
  '10000000010', "Samwell Tarly", '11900000010', "sam.tarly@gmail.com"
);
INSERT INTO userinfo VALUES (
  '10000000011', "Mace Tyrell", '11900000011', "macetyrell@yahoo.com"
);
INSERT INTO userinfo VALUES (
  '10000000012', "Bran Stark", '11900000012', "branstark@gmail.com"
);

SELECT * FROM userinfo;
