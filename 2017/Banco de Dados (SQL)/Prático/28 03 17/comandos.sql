use bancocd;
show tables;
select * from gravadora;
select codigo_cd,nome_cd from CD;
select endereco, contato from gravadora where nome_gravadora = "BMG";
select nome_cd, codigo_cd from cd order by nome_cd;
select nome_cd, codigo_cd from cd order by nome_cd desc;
select nome_cd, preco_venda from cd where preco_venda >10.50;
select nome_cd, preco_venda from cD where preco_venda >=10.50;
select nome_cd, preco_venda from cD where preco_venda >=10.50 order by preco_venda;
select nome_cd, preco_venda from cD where preco_venda >=10.50 order by preco_venda desc;
select nome_cd, preco_venda, codigo_gravadora from CD where preco_venda > 10 AND codigo_gravadora=2;
select nome_musica, duracao FROM musica where duracao >=3.00 or duracao >5.00 ;
select nome_musica, duracao FROM musica where duracao >=3.00 or duracao >5.00 order by duracao;