algoritmo "semnome"
// Fun��o :
// Autor :
// Data : 14/12/2016
// Se��o de Declara��es 
var
n1, n2, n3, n4, me:real
nome:caracter
j:inteiro
tecla: caracter
inicio
// Se��o de Comandos 
j <- 0
enquanto (tecla <> "N") e (tecla <> "Nao") e (tecla <> "N�o") faca
j <- j+1
limpatela
escreva (j, " - Digite o nome do aluno: ")
leia (nome)
escreva ("nota1: ")
leia (n1)
escreva ("nota2: ")
leia (n2)
escreva ("nota3: ")
leia (n3)
escreva ("nota4: ")
leia (n4)
me<- (n1+n2+n3+n4)/4
escreval ("A m�dia �: ", me)
se me <=  5 entao
escreval ("Aluno est� REPROVADO.")
senao
escreval ("Aluno est� APROVADO.")
fimse
Escreval ("Deseja prosseguir opera��o? S/n?")
leia(tecla)
fimenquanto

fimalgoritmo
