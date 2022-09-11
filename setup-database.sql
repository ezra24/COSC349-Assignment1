CREATE TABLE assets (
  assetID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  assetType varchar(255) NOT NULL,
  brand varchar(255),
  modelno varchar(255),
  serialno varchar(255),
  datepurchased date NOT NULL,
  location varchar(255)
)
AUTO_INCREMENT=0001;

INSERT INTO assets (assetType, brand, modelno, serialno, datepurchased, location) VALUES ('CPU','Dell','Optiplex 780', 'DGK8H63','07/08/2022','Level 1');
INSERT INTO assets (assetType, brand, modelno, serialno, datepurchased, location) VALUES ('Mouse','Lenovo','M-U0025-O', 'LZ123330BGC','28/06/2022','Level 2');
