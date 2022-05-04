CREATE DATABASE BancoCD;

USE BancoCD;

CREATE TABLE GRAVADORA (
       Codigo_Gravadora     INT(3) NOT NULL,
       Nome_Gravadora       VARCHAR(60) NULL,
       Endereco             VARCHAR(60) NULL,
       Telefone             VARCHAR(20) NULL,
       Contato              VARCHAR(20) NULL,
       URL                  VARCHAR(80) NULL
);


ALTER TABLE GRAVADORA
       ADD  CONSTRAINT XPKGRAVADORA PRIMARY KEY (Codigo_Gravadora);


CREATE TABLE CD (
       Codigo_CD            INT(5) NOT NULL,
       Codigo_Gravadora     INT(3) NULL,
       Nome_CD              VARCHAR(60) NULL,
       Preco_Venda          FLOAT(14,2) NULL,
       Data_Lancamento      DATE NULL,
       CD_Indicado          INT(5) NULL
);

CREATE INDEX XIF6CD ON CD
(
       Codigo_Gravadora
);


ALTER TABLE CD
       ADD CONSTRAINT XPKCD PRIMARY KEY (Codigo_CD);


CREATE TABLE MUSICA (
       Codigo_Musica        INT(5) NOT NULL,
       Nome_Musica          VARCHAR(60) NULL,
       Duracao              FLOAT(6,2) NULL
);


ALTER TABLE MUSICA
       ADD CONSTRAINT XPKMUSICA PRIMARY KEY (Codigo_Musica);


CREATE TABLE AUTOR (
       Codigo_Autor         INT(5) NOT NULL,
       Nome_Autor           VARCHAR(60) NULL
);


ALTER TABLE AUTOR
       ADD CONSTRAINT XPKAUTOR PRIMARY KEY (Codigo_Autor);


CREATE TABLE MUSICA_AUTOR (
       Codigo_Musica        INT(5) NOT NULL,
       Codigo_Autor         INT(5) NOT NULL
);

CREATE INDEX XIF11MUSICA_AUTOR ON MUSICA_AUTOR
(
       Codigo_Musica
);

CREATE INDEX XIF12MUSICA_AUTOR ON MUSICA_AUTOR
(
       Codigo_Autor
);


ALTER TABLE MUSICA_AUTOR
       ADD CONSTRAINT XPKMUSICA_AUTOR PRIMARY KEY (Codigo_Musica, 
              Codigo_Autor);


CREATE TABLE FAIXA (
       Codigo_Musica        INT(5) NOT NULL,
       Codigo_CD            INT(5) NOT NULL,
       Numero_Faixa         INT(2) NULL
);

CREATE INDEX XIF13FAIXA ON FAIXA
(
       Codigo_Musica
);

CREATE INDEX XIF14FAIXA ON FAIXA
(
       Codigo_CD
);


ALTER TABLE FAIXA
       ADD CONSTRAINT XPKFAIXA PRIMARY KEY (Codigo_Musica, 
              Codigo_CD);


CREATE TABLE CD_CATEGORIA(
       Codigo_Categoria   INT(2)    NOT NULL,
       Menor_Preco        FLOAT(14,2) NOT NULL,
       Maior_Preco        FLOAT(14,2) NOT NULL
);


ALTER TABLE CD
       ADD CONSTRAINT GRAVADORA_CD
              FOREIGN KEY (Codigo_Gravadora)
                             REFERENCES GRAVADORA (Codigo_Gravadora);

ALTER TABLE CD
       ADD CONSTRAINT CD_CD
              FOREIGN KEY (CD_Indicado)
                             REFERENCES CD (Codigo_CD);

ALTER TABLE MUSICA_AUTOR
       ADD CONSTRAINT AUTOR_MUSICA_AUTOR
              FOREIGN KEY (Codigo_Autor)
                             REFERENCES AUTOR (Codigo_Autor);


ALTER TABLE MUSICA_AUTOR
       ADD CONSTRAINT MUSICA_MUSICA_AUTOR
              FOREIGN KEY (Codigo_Musica)
                             REFERENCES MUSICA(Codigo_Musica);


ALTER TABLE FAIXA
       ADD CONSTRAINT CD_FAIXA
              FOREIGN KEY (Codigo_CD)
                             REFERENCES CD (Codigo_CD);


ALTER TABLE FAIXA
       ADD CONSTRAINT MUSICA_FAIXA
              FOREIGN KEY (Codigo_Musica)
                             REFERENCES MUSICA (Codigo_Musica);