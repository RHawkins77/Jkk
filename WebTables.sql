
CREATE TABLE IF NOT EXISTS customer (
customer_id INTEGER NOT NULL AUTO_INCREMENT,
email VARCHAR(124) NOT NULL UNIQUE,
customer_password VARCHAR(24) NOT NULL,
PRIMARY KEY(customer_id)
);

CREATE TABLE IF NOT EXISTS address (
address_id INTEGER NOT NULL AUTO_INCREMENT,
house_number INTEGER(15) NOT NULL,
street VARCHAR(256) NOT NULL,
town CHAR(100) NOT NULL,
zip INTEGER(6) NOT NULL,
customer_id INTEGER NOT NULL,
FOREIGN KEY (customer_id) REFERENCES customer(customer_id),
PRIMARY KEY(address_id)
);

CREATE TABLE IF NOT EXISTS credit_card (
credit_card_id INTEGER NOT NULL AUTO_INCREMENT,
name_on_card VARCHAR(150) NOT NULL,
card_number INTEGER(16) NOT NULL,
expiration_date INTEGER(4) NOT NULL,
ccv_number INTEGER(5) NOT NULL,
id_to_address INTEGER NOT NULL,
FOREIGN KEY (id_to_address) REFERENCES address(address_id),
PRIMARY KEY(credit_card_id)
);

CREATE TABLE IF NOT EXISTS inventory(
inv_prod_id INTEGER NOT NULL AUTO_INCREMENT,
inv_prod_name VARCHAR(150) NOT NULL,
PRIMARY KEY(inv_prod_id)
);

CREATE TABLE IF NOT EXISTS sales(
purchase_id INTEGER NOT NULL AUTO_INCREMENT,
purchaser_id INTEGER NOT NULL,
prod_id INTEGER NOT NULL,
FOREIGN KEY (prod_id) REFERENCES inventory(inv_prod_id),
FOREIGN KEY (purchaser_id) REFERENCES customer(customer_id),
PRIMARY KEY(purchase_id)
);








