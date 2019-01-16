delete from promotion;
delete from magasin;
delete from categorie;
delete from responsable;
delete from avis;
delete from client;
delete from ville;
delete from noter;
delete from type;


/* insertion de type */
insert into type values(null,'restaurant');
insert into type values(null,'alimentaire');
insert into type values(null,'textile');


/* insertion de categorie */


insert into categorie values(null,'pizzeria',1);
insert into categorie values(null,'boucherie',2);
insert into categorie values(null,'vente vetement',3);



/* insertion de avis */


insert into avis values(1,'Promo6m');
insert into avis values(2,'coca6');
insert into avis values(3,'vodka27');



/* insertion de ville */


insert into ville values(null,'05000','GAP');
insert into ville values(null,'04000','SISTERON');
insert into ville values(null,'04000','DIGNE');



/* insertion de client */


insert into client values(null,'Courtial','kevin','1995-11-09','0664640443','kevin05000@outlook.fr','ini01','7 impasse des dahlias',1);



/*insertion de responsable */


insert into responsable values(null,'Courtial','kevin','kevcours@gmail.com','admin','0606060606');
insert into responsable values(null,'Vergniez','pierre','p.vergniez@laposte.net','admin','0606060606');



/*insertion de magasin */



insert into magasin values(null,'7pizza','16 rue faure du serre','50.7352','-1.83839','0492525252','7pizza@gmail.com','080808MC5',null ,null,1,1,1,1);
insert into magasin values(null,'Boucherie Gros','rue jean eymar','53.5805','-2.29487','0492525252','gros@gmail.com','09264BD5',null ,null,2,2,2,2);





/* insertion de promotion */


insert into promotion values(null,"2 pizza acheter une offerte","2019-01-10",'2019-01-12',null,null,null,"Promo6m",1,1);
insert into promotion values(null,"3 pizza acheter 4 offerte","2018-01-10",'2018-01-12',null,null,null,"Promo7m",0,1);
insert into promotion values(null,"1kg la saucisse à 50%","2019-02-10",'2019-03-12',null,null,null,"coca6",1,2);



/* insertion de noter */



insert into noter values('waow ces pizzas etaient insane','5',1,1,1);
insert into noter values('publicitée mensongere','0',1,1,2);
insert into noter values('saucisse trop grosse mais exellente','3',2,1,3);