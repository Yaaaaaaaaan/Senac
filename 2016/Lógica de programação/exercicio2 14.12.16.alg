algoritmo "semnome"
// Fun��o :
// Autor :
// Data : 14/12/2016
// Se��o de Declara��es 
var
l1:real
qtd:real
vc:real
totl:real
enter:literal
inicio
// Se��o de Comandos

Escreval ("Bem vindo, favor indicar a quantidade do produto desejado.")
leia (qtd)
Escreval("Favor, indique o valor de compra do produto.")
leia (vc)
     se vc <= 20 entao
                 l1 <- vc + ( vc*45/100)
                 senao
                 l1 <- vc + ( vc*30/100)
fimse

 escreval ("O total do produto � :", l1)
 Escreval ("Caso queira fazer c�lculo da quantidade do produto, e seus respectivos valores,")
 Escreval ("pressione enter")
 Escreval ("Caso n�o queira fazer c�lculo, favor pressione esc.")
 leia (enter)
 totl<- l1*qtd
 Escreval ("O valor total do(s) ",qtd," produto(s) �(s�o)", totl," reais.")
 leia (enter)
 fimalgoritmo
