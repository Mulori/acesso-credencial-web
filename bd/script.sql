create database acesso_cooper;

--Criação da entidade usuário
create table usuario (codigo int identity primary key, codigo_externo int not null, nome_completo varchar(150) not null, cpf varchar(20) not null, senha varchar(2000) not null, data_cadastro datetime)
insert into usuario VALUES (0, 'Murilo Henrique Garcia Rodrigues', '46423553831', CONVERT(VARCHAR(32), HashBytes('MD5', '1234'), 2), getdate())