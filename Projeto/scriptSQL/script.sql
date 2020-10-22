create database dbprojeto2020t;

use dbprojeto2020t;

show tables;

create table tblcontatos (
	idContato int not null auto_increment primary key, 
	nome varchar(80) not null,
    celular varchar(15) not null, 
    telefone varchar(15),
    homePage varchar(50),
    linkFacebook varchar(50),
    email varchar(50) not null,
    sexo varchar(1) not null,
    sugestao text,
    mensagem text not null,
    profissao varchar(50) not null
);
select * from tblcontatos;
select * from tblusuarios;

select tblcontatos.idContato,tblcontatos.nome, tblcontatos.celular, tblcontatos.email, tblcontatos.mensagem from tblcontatos order by tblcontatos.idContato desc;

insert into tblcontatos (nome, celular, telefone, homePage, linkFacebook, email, sexo, sugestao, mensagem, profissao)
values('José','1199854-1040', '4635-5454','teste', 'linkFacebook', 'jose@uol,com.br','M', 'teste','Mensagem','teste');

create table tblusuarios (
	idUsuario int not null auto_increment primary key, 
	nome varchar(80) not null,
    celular varchar(15) not null, 
    telefone varchar(15),
    email varchar(50) not null,
    sexo varchar(1) not null,
    senha varchar(30) not null
);

insert into tblusuarios (nome, celular, telefone, email, sexo, senha)
values('Primeiro usuario','(11)99999-9999', '4635-5454', 'primeirousuario@hotmail.com','M', '123456');

select tblusuarios.idUsuario,
                                tblusuarios.nome, 
                                tblusuarios.celular, 
                                tblusuarios.email, 
                                tblusuarios.senha from tblusuarios
                                order by tblusuarios.idUsuario desc;