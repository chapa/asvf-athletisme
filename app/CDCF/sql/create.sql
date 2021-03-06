CREATE TYPE displayAuth AS ENUM ('pri', 'pro', 'pub');
CREATE TYPE userStatus AS ENUM ('Restreint', 'Adhérent', 'Rédacteur', 'Administrateur');

	----- Gestion des membres -----

CREATE TABLE users
(
	id						SERIAL,
	pseudo					VARCHAR(70),
	pass					VARCHAR(255),
	mail					VARCHAR(70),
	displayMail				displayAuth				DEFAULT 'pri',
	name					VARCHAR(70),
	firstName				VARCHAR(70),
	birth					DATE,
	created					TIMESTAMP				DEFAULT NOW(),
	status					userStatus				DEFAULT 'Restreint',

	PRIMARY KEY (id)
);

	----- Gestion des contenus (pages, articles, ...) -----

CREATE TABLE content_types
(
	id						SERIAL,
	name					VARCHAR(140),

	PRIMARY KEY (id)
);

CREATE TABLE content_categories
(
	id						SERIAL,
	name					VARCHAR(140),

	PRIMARY KEY (id)
);

CREATE TABLE contents
(
	id						SERIAL,
	name					VARCHAR(140),
	slug					VARCHAR(140),
	content					TEXT,
	created					TIMESTAMP				DEFAULT NOW(),
	published				TIMESTAMP				DEFAULT NOW(),
	content_type_id			INTEGER,
	content_category_id		INTEGER,
	user_id					INTEGER,

	PRIMARY KEY	(id),
	FOREIGN KEY (content_type_id) REFERENCES content_types(id),
	FOREIGN KEY (content_category_id) REFERENCES content_categories(id),
	FOREIGN KEY (user_id) REFERENCES users(id)
);

