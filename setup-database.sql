CREATE TABLE assetmn (
  assetID varchar(7),
  assetType varchar(50) NOT NULL,
  brand varchar(20),
  modelno varchar(20),
  serialno varchar(20),
  datepurchased varchar(10),
  location varchar(10),
  PRIMARY KEY (assetID)
);

INSERT INTO assetmn VALUES ('AST00001','CPU','Dell','Optiplex 780', 'DGK8H63','07/08/2022','Level 1');
INSERT INTO assetmn VALUES ('AST00002','Mouse','Lenovo','M-U0025-O', 'LZ123330BGC','28/06/2022','Level 3');
