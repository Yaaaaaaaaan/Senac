algoritmo "semnome"
// Função :
// Autor :
// Data : 14/12/2016
// Seção de Declarações 
var
l1:real
qtd:real
vc:real
totl:real
enter:literal
inicio
// Seção de Comandos

Escreval ("Bem vindo, favor indicar a quantidade do produto desejado.")
leia (qtd)
Escreval("Favor, indique o valor de compra do produto.")
leia (vc)
     se vc <= 20 entao
                 l1 <- vc + ( vc*45/100)
                 senao
                 l1 <- vc + ( vc*30/100)
fimse

 escreval ("O total do produto é :", l1)
 Escreval ("Caso queira fazer cálculo da quantidade do produto, e seus respectivos valores,")
 Escreval ("pressione enter")
 Escreval ("Caso não queira fazer cálculo, favor pressione esc.")
 leia (enter)
 totl<- l1*qtd
 Escreval ("O valor total do(s) ",qtd," produto(s) é(são)", totl," reais.")
 leia (enter)
 fimalgoritmo
