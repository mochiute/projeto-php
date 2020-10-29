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

ALTER TABLE tblusuarios
ADD  ativado boolean not null;

insert into tblusuarios (nome, celular, telefone, email, sexo, senha)
values('Primeiro usuario','(11)99999-9999', '4635-5454', 'primeirousuario@hotmail.com','M', '123456');

update tblusuarios set 
        nome = 'Marquito',
        celular = '(11)99999-9999',
        email = 'primeirousuario@hotmail.com',
        sexo = 'M',
        senha = 'testinho',
        telefone = '12345'

        where idUsuario = 5;

insert into tblusuarios (nome, celular, telefone, email, sexo, senha, ativado)
values('Primeiro usuario','(11)99999-9999', '4635-5454', 'primeirousuario@hotmail.com','M', '123456', 1);

select tblusuarios.idUsuario,
                                tblusuarios.nome, 
                                tblusuarios.celular, 
                                tblusuarios.email, 
                                tblusuarios.senha,tblusuarios.ativado from tblusuarios
                                order by tblusuarios.idUsuario desc;
                                                                
select * from tblusuarios where idUsuario = 5;

update tblusuarios set 
        ativado = 1 
        where idUsuario = 8;

select tblusuarios.ativado from tblusuarios where idUsuario = 8;

update tblusuarios set 
        ativado = 0 where idUsuario = 8;
        

create table tblcategoria(
	idCategoria int not null primary key auto_increment, 
    nome varchar(60) not null
);

insert into tblcategoria(nome) values ('Computadores');

create table tblsubcategoria(
	idSubcategoria int not null primary key auto_increment,
    nome varchar(60) not null,
    constraint FK_Categoria_Subcategoria 
    foreign key (idCategoria) 
    references tblcategoria(idCategoria)
);

select * from tblcategoria;
desc tblcategoria;

create table tblNossasLojas (
	idNossaLoja int not null primary key auto_increment,
    nome varchar(60) not null,
    telefone varchar(20) not null,
    endereco varchar(100) not null
);

insert into tblNossasLojas 
(nome, telefone, endereco) 
values(
	'Barueri',
    '5555-5555',
    'Rua ali atrás no bairro são joão'
);

select * from tblNossasLojas;

ALTER TABLE tblNossasLojas
ADD  ativado boolean not null;

