CREATE DATABASE Supermercado;

Use Supermercado;

CREATE TABLE Productos(Id_Productos INT AUTO_INCREMENT PRIMARY KEY, NombreProducto VARCHAR(255) NOT NULL, 
Precio DECIMAL(10,2) NOT NULL);

CREATE Table Tickets(Id_Ticket INT AUTO_INCREMENT PRIMARY KEY, FechaT DATETIME DEFAULT CURRENT_TIMESTAMP);

CREATE Table Ticket_Productos(Id_TiketP INT AUTO_INCREMENT PRIMARY KEY, Ticket_Id INT, Producto_Id INT, Cantidad INT , 
FOREIGN KEY(Ticket_Id) REFERENCES Tickets(Id_Ticket), FOREIGN KEY(Producto_Id) REFERENCES Productos(Id_Productos));