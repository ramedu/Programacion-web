sp_help Clientes

//nombre_servidor.base.dbo.tabla
//Ra =" JOAN"
//Ale = "BUENO-VAIO"

use la_andariega

select * from "BUENO-VAIO".la_andariega.dbo.Clientes
select * from "JOAN".la_andariega.dbo.Clientes

--INSERT INTO "JOAN".la_andariega.dbo.Clientes (nombre,telefono,direccion) VALUES ('RAMON','6483486','RAMON #236')
INSERT INTO "JOAN".la_andariega.dbo.Clientes (nombre,telefono,email,direccion) VALUES ('RAMON','6483476','ra@gmail.com','RAMON #236')
--INSERT INTO "JOAN".la_andariega.dbo.Clientes (nombre,telefono,email,direccion) VALUES ('RAMON','643476','ram@gmail.com','RAMON #236')

select * from BITACORA


