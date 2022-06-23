BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "words_x_categories" (
	"id_word"	NUMERIC(5 , 1),
	"id_category"	NUMERIC(5 , 1),
	"description"	CHAR,
	CONSTRAINT "pk" PRIMARY KEY("id_word","id_category"),
	FOREIGN KEY("id_category") REFERENCES "categories"("id_category"),
	FOREIGN KEY("id_word") REFERENCES "words"("id_word")
);
CREATE TABLE IF NOT EXISTS "categories" (
	"id_category"	NUMERIC(5 , 1),
	"name"	CHAR,
	"image"	CHAR,
	PRIMARY KEY("id_category")
);
CREATE TABLE IF NOT EXISTS "words" (
	"id_word"	NUMERIC(5 , 1),
	"word"	CHAR,
	"url"	CHAR,
	PRIMARY KEY("id_word")
);
INSERT INTO "words_x_categories" VALUES (1,1,'frutis');
INSERT INTO "words_x_categories" VALUES (2,1,'frutis');
INSERT INTO "words_x_categories" VALUES (3,1,'frutis');
INSERT INTO "words_x_categories" VALUES (4,1,'frutis');
INSERT INTO "words_x_categories" VALUES (5,2,'vegetables');
INSERT INTO "words_x_categories" VALUES (6,2,'vegetables');
INSERT INTO "words_x_categories" VALUES (7,2,'vegetables');
INSERT INTO "categories" VALUES (1,'frutis','https://cdn.pixabay.com/photo/2017/05/07/19/32/strawberry-2293337_960_720.jpg');
INSERT INTO "categories" VALUES (2,'vegetables','https://cdn.pixabay.com/photo/2017/11/12/19/22/water-2943518_960_720.jpg');
INSERT INTO "words" VALUES (1,'Grapefruit','https://cdn.pixabay.com/photo/2016/02/24/17/31/fruit-1220367_960_720.png
');
INSERT INTO "words" VALUES (2,'Orange','https://cdn.pixabay.com/photo/2016/01/02/01/59/oranges-1117628_960_720.jpg');
INSERT INTO "words" VALUES (3,'Lime','https://cdn.pixabay.com/photo/2021/04/29/07/36/lime-6215762_960_720.jpg
');
INSERT INTO "words" VALUES (4,'Apricot','https://cdn.pixabay.com/photo/2017/07/20/18/40/apricots-2523272_960_720.jpg
');
INSERT INTO "words" VALUES (5,'Tomatoes','https://cdn.pixabay.com/photo/2016/08/01/17/08/tomatoes-1561565_960_720.jpg
');
INSERT INTO "words" VALUES (6,'Celery','https://cdn.pixabay.com/photo/2019/04/04/01/02/celery-juice-4101755_960_720.jpg
');
INSERT INTO "words" VALUES (7,'Carrots','https://cdn.pixabay.com/photo/2017/06/09/16/39/carrots-2387394_960_720.jpg
');
COMMIT;
