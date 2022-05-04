algoritmo "semnome"
// Função :
// Autor :
// Data : 19/12/2016
// Seção de Declarações 
var
nome:vetor [1..10] de caracter
sexo:vetor [1..10] de caracter
idade:vetor [1..10] de inteiro
cont:inteiro
opc:caracter
qtd_F, qtd_M:inteiro
idade_M, idade_F, idade_ger:real
inicio
// Seção de Comandos
para cont de 1 ate 2 faca
escreval ("+-------------------------+")
Escreval ("|Favor, escolha uma opção.|")
escreval ("|                         |")
escreval ("|-------------------------|")
Escreval ("|1. Informe os dados      |")
escreval ("|2. Sair                  |")
escreval ("+-------------------------+")
escreval ("Opção:")
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
  escreval ("A média de idade das mulheres é :",(idade_F/qtd_F))
  escreval ("A média de idade dos homens é:",(idade_M/qtd_M))
  escreval ("A média de idade geral é:",(idade_ger/contador))


caso "2"
   fimalgoritmo
   


fimalgoritmo
