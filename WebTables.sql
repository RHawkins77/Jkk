
CREATE TABLE user{
email VARCHAR(256) NOT NULL,
password VARCHAR(24) NOT NULL,
user_id INTEGER NOT NULL,
PRIMARY KEY(user_id),
access INTEGER(1)
};

CREATE TABLE address{
house_number INTEGER(15)NOT NULL,
street VARCHAR(256) NOT NULL,
town CHAR(100) NOT NULL,
zip INT(6) NOT NULL,
user_id INTEGER NOT NULL,
PRIMARY KEY(address_id),
FOREIGN KEY(user_id) REFERENCES user(user_id)
};

CREATE TABLE credit_card{
name_on_card VARCHAR(150) NOT NULL,
card_number INTEGER(16) NOT NULL,
expiration_date INT(4) NOT NULL,
ccv_number INTEGER(5) NOT NULL,
address_id INTEGER NOT NULL,
PRIMARY KEY(credit_card_id)
FOREIGN KEY(address_id) REFERENCES address(address_id)
};

CREATE TABLE orders{
order_id INT NOT NULL,
order_number INT NOT NULL,
user_id INT NOT NULL;
PRIMARY KEY(order_id),
FOREIGN KEY(user_id) REFERENCES user(user_id)
};


