CREATE TABLE assetmn (
  assetID varchar(7),
  assetType varchar(50) NOT NULL,
  brand varchar(20),
  modelno varchar(20),
  serialno varchar(20),
  datepurchased date(),
  location varchar(10),
  PRIMARY KEY (code)
);

INSERT INTO assetmn VALUES ('COSC326','Computational Problem Solving');
INSERT INTO assetmn VALUES ('COSC349','Cloud Computing Architecture');
