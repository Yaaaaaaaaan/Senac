algoritmo "semnome"
// Fun��o :
// Autor :
// Data : 19/12/2016
// Se��o de Declara��es 
var
nome:vetor [1..10] de caracter
sexo:vetor [1..10] de caracter
idade:vetor [1..10] de inteiro
cont:inteiro
opc:caracter
qtd_F, qtd_M:inteiro
idade_M, idade_F, idade_ger:real
inicio
// Se��o de Comandos
para cont de 1 ate 2 faca
escreval ("+-------------------------+")
Escreval ("|Favor, escolha uma op��o.|")
escreval ("|                         |")
escreval ("|-------------------------|")
Escreval ("|1. Informe os dados      |")
escreval ("|2. Sair                  |")
escreval ("+-------------------------+")
escreval ("Op��o:")
leia (opc)
escolha opc
caso "1"
  para cont de 1 ate 2 faca
  limpatela
  escreva("informe o nome", cont,":")
  leia (nome [cont])
  escreva("informe o sexo", cont,":")
  leia (sexo [cont])
  escreva ("informe a idade", cont,":")
  leia (idade [cont])
se sexo [cont]="F" entao
  qtd_F<- qtd_F +1
  idade_F <- idade_F + idade [cont]
senao
  qtd_M <- qtd_M + 1
  idade_M <- idade_M + idade[cont]
fimse
  idade_ger <- idade_ger + idade[cont]
  fimpara
  escreval ("------------------------------------------")
  escreval ("A m�dia de idade das mulheres � :",(idade_F/qtd_F))
  escreval ("A m�dia de idade dos homens �:",(idade_M/qtd_M))
  escreval ("A m�dia de idade geral �:",(idade_ger/contador))


caso "2"
   fimalgoritmo
   


fimalgoritmo
