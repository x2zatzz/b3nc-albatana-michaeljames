CREATE TABLE TBmenu(
  id INT AUTO_INCREMENT,
  Name VARCHAR(64),
  RefCategory INT,
  Price DEC,
  PRIMARY KEY(id),
  FOREIGN KEY(RefCategory)
    REFERENCES TBcategory(id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);


CREATE TABLE TBmenu(id INT AUTO_INCREMENT, PRIMARY KEY(id));
CREATE TABLE TBcategory(id INT AUTO_INCREMENT, PRIMARY KEY(id));
CREATE TABLE TBcustomer(id INT AUTO_INCREMENT, PRIMARY KEY(id));
CREATE TABLE TBusername(id INT AUTO_INCREMENT, PRIMARY KEY(id));
CREATE TABLE TBaccountrole(id INT AUTO_INCREMENT, PRIMARY KEY(id));
CREATE TABLE TBorderref(id INT AUTO_INCREMENT, PRIMARY KEY(id));
CREATE TABLE TBemployee(id INT AUTO_INCREMENT, PRIMARY KEY(id));
CREATE TABLE TBjobtitle(id INT AUTO_INCREMENT, PRIMARY KEY(id));

CREATE TABLE TBordermain(id INT AUTO_INCREMENT, PRIMARY KEY(id));


ALTER

dbname:
  karff_beeer.sql
    tables:
    users
      username
      password
      email
      role
      IMAGE
      firstname
      lastname
    items
      name
      DESCRIPTION
      Price
      category
      IMAGE
    orders
      ref/transaction#
      total
      STATUS
    order items
      qty
      subtotal

export: mysqldump -h localhost -u root database-name > file.sql
import: mysql -h localhost -u root database-name < file.sql



CREATE TABLE TBcustomerprofile(
  id INT AUTO_INCREMENT NOT NULL,
  PRIMARY KEY(id)
);
CREATE TABLE TBusernames(
  id INT AUTO_INCREMENT NOT NULL,
  PRIMARY KEY(id)
);
CREATE TABLE TBorderref(
  id INT AUTO_INCREMENT NOT NULL,
  PRIMARY KEY(id)
);
CREATE TABLE TBemployeeprofile(
  id INT AUTO_INCREMENT NOT NULL,
  PRIMARY KEY(id)
);
CREATE TABLE TBroles(
  id INT AUTO_INCREMENT NOT NULL,
  PRIMARY KEY(id)
);
CREATE TABLE TBordermain(
  id INT AUTO_INCREMENT NOT NULL,
  PRIMARY KEY(id)
);
CREATE TABLE TBitems(
  id INT AUTO_INCREMENT NOT NULL,
  PRIMARY KEY(id)
);
CREATE TABLE TBorderstatus(
  id INT AUTO_INCREMENT NOT NULL,
  PRIMARY KEY(id)
);
CREATE TABLE TBorderitems(
  id INT AUTO_INCREMENT NOT NULL,
  PRIMARY KEY(id)
);
CREATE TABLE TBcategory(
  id INT AUTO_INCREMENT NOT NULL,
  PRIMARY KEY(id)
);