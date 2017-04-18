Create DataBase Warehouse;
GO

Use Warehouse;
GO

Create table ArticlesTypes(
Id int IDENTITY (1,1) primary key,
Description varchar(50)
);


Create table Articles(

Id int IDENTITY(1,1) PRIMARY KEY,
Description varchar(50) not null,
SerialNumber bigint not null,
Model varchar(50),

ArticlesTypes_Id int not null,

-- Foreign Keys
FOREIGN KEY (ArticlesTypes_Id) REFERENCES ArticlesTypes(Id)

);

create table WareHouse(

Id int identity(1,1) primary key,
Name varchar(50) not null,

);

create table Locations(
Id int identity (1,1) primary key,
Name varchar(10)
);

create table WarehouseLocations(

WareHouse_Id int not null,
Locations_Id int not null,
Articles_Id int not null,
StartDate date not null,
EndDate date DEFAULT NULL,


-- Foreign Keys
foreign key (WareHouse_Id) references WareHouse (Id),
foreign key (Locations_Id) references Locations (Id),
foreign key (Articles_Id) references Articles (Id)

);



