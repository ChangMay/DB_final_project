CREATE TABLE campus(
	id int,
	name varchar(64),
	school_id int NOT NULL,
	country_id int NOT NULL,
	place_id varchar(255) NOT NULL,
	latitude double NOT NULL,
	longitude double NOT NULL
);