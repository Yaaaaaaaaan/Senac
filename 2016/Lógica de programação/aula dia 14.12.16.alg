algoritmo "semnome"
// Função :
// Autor :
// Data : 14/12/2016
// Seção de Declarações 
var
n1, n2, n3, n4, me:real
nome:caracter
j:inteiro
tecla: caracter
inicio
// Seção de Comandos 
j <- 0
enquanto (tecla <> "N") e (tecla <> "Nao") e (tecla <> "Não") faca
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
escreval ("A média é: ", me)
se me <=  5 entao
escreval ("Aluno está REPROVADO.")
senao
escreval ("Aluno está APROVADO.")
fimse
Escreval ("Deseja prosseguir operação? S/n?")
leia(tecla)
fimenquanto

fimalgoritmo
