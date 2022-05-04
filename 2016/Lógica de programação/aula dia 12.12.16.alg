algoritmo "EV"
// Função :
// Autor :
// Data : 12/12/2016
// Seção de Declarações 
var
comd:real
qtd:real
totlcomd:real
inicio
// Seção de Comandos
Escreval("Bem vindo ao Rango da TIA pretinha")
Escreval("nosso cardápio é bem variado, favor, escolher a refeição de consumo.")
Escreval("1 - Feijoada                   Unitário: R$30,00            ")
Escreval("2 - Lasanha                    Unitário: R$25,00            ")
Escreval("3 - Stroghonoff                Unitário: R$22,50            ")
Escreval("4 - Salmão com legumes         Unitário: R$42,50            ")
Leia (comd)
Escreval("Qual a quantidade desejada?")
Leia (qtd)
escolha comd

    //feijoada
     caso 1
    totlcomd<-30*qtd
    Escreval("Seu pedido está sendo computado.")
    Escreval("...")
    Escreval("Brevemente entregaremos seu pedido.")
    Escreval("TOTAL de refeições pedidas:", qtd)
    //Lasanha
     caso 2
    totlcomd<-25*qtd
    Escreval("Seu pedido está sendo computado.")
    Escreval("...")
    Escreval("Brevemente entregaremos seu pedido.")
    Escreval("TOTAL de refeições pedidas:", qtd)

    //Stroghonoff
     caso 3
    totlcomd<-22.5*qtd
    Escreval("Seu pedido está sendo computado.")
    Escreval("...")
    Escreval("Brevemente entregaremos seu pedido.")
    Escreval("TOTAL de refeições pedidas:", qtd)
     
    //Salmão
     caso 4
    totlcomd<-42.5*qtd
    Escreval("Seu pedido está sendo computado.")
    Escreval("...")
    Escreval("Brevemente entregaremos seu pedido.")
    Escreval("TOTAL de refeições pedidas:", qtd)
    
     fimescolha
     
Escreval ("Valor total a ser pago:", totlcomd," reais")
Escreval("~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~")
EScreval ("                   Agradecemos a sua preferência. Volte sempre                 ")
fimalgoritmo
