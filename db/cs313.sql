CREATE TABLE user_type(
	type_user_id INTEGER PRIMARY KEY, 
	name VARCHAR(80), 
	description VARCHAR(160),
	active BOOLEAN
	);


CREATE TABLE users(
  user_id INTEGER PRIMARY KEY, 
  user_type_id INTEGER REFERENCES user_type(type_user_id),
  name VARCHAR(80), 
  description VARCHAR(160),
  active BOOLEAN	
);


CREATE TABLE item_type(
	item_type_id INTEGER PRIMARY KEY, 
	name VARCHAR(80), 
	description VARCHAR(160),
	active BOOLEAN
	);


CREATE TABLE item (
  item_id INTEGER PRIMARY KEY, 
  item_type_id INTEGER REFERENCES item_type(item_type_id),
  name VARCHAR(80), 
  description VARCHAR(160),
  active BOOLEAN	
);

CREATE TABLE item_stock (
  item_id INTEGER REFERENCES item(item_id),
  total_stock INTEGER
);

CREATE TABLE rent_table (
	user_id INTEGER REFERENCES users(user_id),
	item_id INTEGER REFERENCES item(item_id),
	date_start DATE,
	date_end DATE,
	stock INTEGER
);