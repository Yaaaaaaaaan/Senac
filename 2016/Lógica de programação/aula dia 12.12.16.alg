algoritmo "EV"
// Fun��o :
// Autor :
// Data : 12/12/2016
// Se��o de Declara��es 
var
comd:real
qtd:real
totlcomd:real
inicio
// Se��o de Comandos
Escreval("Bem vindo ao Rango da TIA pretinha")
Escreval("nosso card�pio � bem variado, favor, escolher a refei��o de consumo.")
Escreval("1 - Feijoada                   Unit�rio: R$30,00            ")
Escreval("2 - Lasanha                    Unit�rio: R$25,00            ")
Escreval("3 - Stroghonoff                Unit�rio: R$22,50            ")
Escreval("4 - Salm�o com legumes         Unit�rio: R$42,50            ")
Leia (comd)
Escreval("Qual a quantidade desejada?")
Leia (qtd)
escolha comd

    //feijoada
     caso 1
    totlcomd<-30*qtd
    Escreval("Seu pedido est� sendo computado.")
    Escreval("...")
    Escreval("Brevemente entregaremos seu pedido.")
    Escreval("TOTAL de refei��es pedidas:", qtd)
    //Lasanha
     caso 2
    totlcomd<-25*qtd
    Escreval("Seu pedido est� sendo computado.")
    Escreval("...")
    Escreval("Brevemente entregaremos seu pedido.")
    Escreval("TOTAL de refei��es pedidas:", qtd)

    //Stroghonoff
     caso 3
    totlcomd<-22.5*qtd
    Escreval("Seu pedido est� sendo computado.")
    Escreval("...")
    Escreval("Brevemente entregaremos seu pedido.")
    Escreval("TOTAL de refei��es pedidas:", qtd)
     
    //Salm�o
     caso 4
    totlcomd<-42.5*qtd
    Escreval("Seu pedido est� sendo computado.")
    Escreval("...")
    Escreval("Brevemente entregaremos seu pedido.")
    Escreval("TOTAL de refei��es pedidas:", qtd)
    
     fimescolha
     
Escreval ("Valor total a ser pago:", totlcomd," reais")
Escreval("~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~")
EScreval ("                   Agradecemos a sua prefer�ncia. Volte sempre                 ")
fimalgoritmo
