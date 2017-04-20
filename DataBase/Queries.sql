Use Warehouse

begin /* Region Add ArticlesTypes Informtion */

insert into ArticlesTypes values ('Hardware');
insert into ArticlesTypes values ('Software')

end /* End Region */
go;

begin /* Region Add Articles test info */

insert into Articles values ('Monitor Lenovo','123','m74',1);
insert into Articles values ('Switch Cisco','456', 'C752',1);

end /* End region */
go;

begin /* Region add warehouse test info */ 

insert into WareHouse values ('Jaula 1'), ('Jaula 2'), ('Jaula 3');

end /* End Region */
go;

select * from Articles





select Articles.Id, Articles.Description, SerialNumber,Model, ArticlesTypes.Description As 'Article type' from Articles
INNER JOIN ArticlesTypes ON (ArticlesTypes_Id = ArticlesTypes.Id)



select * from WareHouse

insert into Locations values ('A1'),('A2'),('A3'),('A4'),('A5'),('A6');

select * from Locations

-- Warehouse Locations
select * from Articles
insert into WarehouseLocations values ( 1, 1, 1,GETDATE(),DEFAULT);

select * from WarehouseLocations

-- Get Warehouse location info
select  WareHouse.Name, Locations.Name As 'Ubicacion', StartDate
,Articles.Description, Articles.SerialNumber, Articles.Model,ArticlesTypes.Description as 'Article type'
from WarehouseLocations
inner join WareHouse on (WareHouse_Id = WareHouse.Id)
inner join Locations on (Locations_Id=Locations.Id)
inner join Articles on (WarehouseLocations.Articles_Id = Articles.Id)
inner join ArticlesTypes on (Articles.ArticlesTypes_Id = ArticlesTypes.Id)

