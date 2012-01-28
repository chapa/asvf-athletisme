	-- members(id, pseudo, pass, mail, displayMail, name, firstName, birth, created, status)
INSERT INTO members VALUES(DEFAULT, 'restreint', '4f940dae3892f41434f7977bfd95b4752eb1e1b5', 'restreint@restreint.res', 'pri', 'Dupont', 'Bertrant', '10/03/1963', DEFAULT, DEFAULT);
INSERT INTO members VALUES(DEFAULT, 'adherent', 'd9618f6739a2c91b4204c2c6a666c2be3bfca560', 'adherent@adherent.adh', 'pro', 'Delacourt', 'Gérald', '24/08/1969', DEFAULT, 'Adhérent');
INSERT INTO members VALUES(DEFAULT, 'redacteur', '06c1daf36e4acd92a2b784f73ff909d121ee9b13', 'redacteur@redacteur.red', 'pub', 'Delalong', 'Augustin', '15/12/1989', DEFAULT, 'Rédacteur');
INSERT INTO members VALUES(DEFAULT, 'admin', '88310595928201b961247f4736b09b161e2d023b', 'admin@admin.adm', 'pub', 'Lebon', 'Jean-Bono', '08/04/1975', DEFAULT, 'Administrateur');

	-- content_types(id, name)
INSERT INTO content_types VALUES(DEFAULT, 'Page');
INSERT INTO content_types VALUES(DEFAULT, 'Article');

	-- content_categories(id, name)
INSERT INTO content_categories VALUES(DEFAULT, 'Site');
INSERT INTO content_categories VALUES(DEFAULT, 'Club');
INSERT INTO content_categories VALUES(DEFAULT, 'Compétitions');

	-- contents(id, name, content, created, published, content_type_id, content_category_id, member_id)
INSERT INTO contents VALUES(DEFAULT, 'Nouveau site !', 'nouveau-site', 'Bon là je sais pas quoi dire donc je vais rien dire, a+', DEFAULT, DEFAULT, 2, 1, 4);
INSERT INTO contents VALUES(DEFAULT, 'Nouvelle compétition', 'nouvelle-competition', 'Bon là je sais pas quoi dire donc je vais rien dire, a+', DEFAULT, DEFAULT, 2, 3, 3);
INSERT INTO contents VALUES(DEFAULT, 'Le club', 'le-club', 'Bon là je sais pas quoi dire donc je vais rien dire, a+', DEFAULT, DEFAULT, 1, 2, 4);
INSERT INTO contents VALUES(DEFAULT, 'Les compétitions', 'les-competitions', 'Bon là je sais pas quoi dire donc je vais rien dire, a+', DEFAULT, DEFAULT, 1, 3, 4);

