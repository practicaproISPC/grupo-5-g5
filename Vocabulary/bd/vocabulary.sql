BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "words" (
	"id_word"	INTEGER,
	"word"	CHAR,
	"url"	CHAR,
	PRIMARY KEY("id_word")
);
CREATE TABLE IF NOT EXISTS "categories" (
	"id_category"	INTEGER PRIMARY KEY AUTOINCREMENT,
	"name"	CHAR,
	"image"	CHAR
);
CREATE TABLE IF NOT EXISTS "words_x_categories" (
	"id_word"	NUMERIC(5 , 1),
	"id_category"	NUMERIC(5 , 1),
	"description"	CHAR,
	CONSTRAINT "pk" PRIMARY KEY("id_word","id_category"),
	FOREIGN KEY("id_category") REFERENCES "categories"("id_category"),
	FOREIGN KEY("id_word") REFERENCES "words"("id_word")
);
INSERT INTO "words" ("id_word","word","url") VALUES (1,'Grapefruit','https://cdn.pixabay.com/photo/2016/02/24/17/31/fruit-1220367_960_720.png
'),
 (2,'Orange','https://cdn.pixabay.com/photo/2016/01/02/01/59/oranges-1117628_960_720.jpg'),
 (3,'Lime','https://cdn.pixabay.com/photo/2021/04/29/07/36/lime-6215762_960_720.jpg
'),
 (4,'Apricot','https://cdn.pixabay.com/photo/2017/07/20/18/40/apricots-2523272_960_720.jpg
'),
 (5,'Tomatoes','https://cdn.pixabay.com/photo/2016/08/01/17/08/tomatoes-1561565_960_720.jpg
'),
 (6,'Celery','https://cdn.pixabay.com/photo/2019/04/04/01/02/celery-juice-4101755_960_720.jpg
'),
 (7,'Carrots','https://cdn.pixabay.com/photo/2017/06/09/16/39/carrots-2387394_960_720.jpg
'),
 (11,'peach','https://cdn.pixabay.com/photo/2017/08/11/17/41/peach-2632182_960_720.jpg'),
 (12,'dustpan','https://cdn.pixabay.com/photo/2017/08/11/17/41/peach-2632182_960_720.jpg'),
 (13,'broom','https://cdn.pixabay.com/photo/2017/08/11/17/41/peach-2632182_960_720.jpg'),
 (14,'bucket','https://cdn.pixabay.com/photo/2016/04/01/12/07/bucket-1300543_960_720.png'),
 (15,'squeegee','https://cdn.pixabay.com/photo/2013/07/13/10/04/squeegee-156491_960_720.png'),
 (16,'dustbin','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvKDgZeIyBqvo1z1jA4ydKtAGL_2HtIygcy-12eoNo-i0WR9I&s'),
 (17,'dressing table','https://cdn.pixabay.com/photo/2019/12/01/23/38/dressing-table-4666662_960_720.png'),
 (18,'dresser','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnBQNvzyvkBc5SOvMB4rAgyQWEqp7tA8ENQSVICLYsHVskIEA&s'),
 (19,'pillow','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSga8DH7vyNtdci-FuG1q63tTCvlyZTyPL5b8JJrBE4at425gaz&s');
INSERT INTO "categories" ("id_category","name","image") VALUES (1,'frutis','https://cdn.pixabay.com/photo/2017/05/07/19/32/strawberry-2293337_960_720.jpg'),
 (2,'vegetables','https://cdn.pixabay.com/photo/2017/11/12/19/22/water-2943518_960_720.jpg'),
 (3,'bedroom','https://cdn.pixabay.com/photo/2015/02/05/20/36/bed-625386_960_720.jpg'),
 (4,'cleaning','https://cdn.pixabay.com/photo/2016/07/20/23/31/girl-1531575_960_720.jpg');
INSERT INTO "words_x_categories" ("id_word","id_category","description") VALUES (1,1,'frutis'),
 (2,1,'frutis'),
 (3,1,'frutis'),
 (4,1,'frutis'),
 (5,2,'vegetables'),
 (6,2,'vegetables'),
 (7,2,'vegetables'),
 (11,1,'frutis'),
 (12,4,'cleaning'),
 (13,4,'cleaning'),
 (14,4,'cleaning'),
 (15,4,'cleaning'),
 (16,4,'cleaning'),
 (17,3,'bedroom'),
 (18,3,'bedroom'),
 (19,3,'bedroom');
COMMIT;
