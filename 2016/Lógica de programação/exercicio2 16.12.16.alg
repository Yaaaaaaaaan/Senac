algoritmo "semnome"
// Função :
// Autor :
// Data : 16/12/2016
// Seção de Declarações 
var
cl:caracter
ccl:inteiro
totld:real
rl:real
enter:literal
inicio
// Seção de Comandos 
para ccl de 1 ate 15 faca
escreval("favor, insira o nome do cliente.")
leia (cl)
Escreval ("Cliente ",cl,", código ",ccl)
escreval("Favor inserir o valor de receita gerado através de tal cliente.")
leia(rl)
se rl <= 1000 entao
                    totld <- rl + (rl+15/100)
                          senao
                                totld <- rl + (rl+10/100)
fimse
escreval (" Exemplo de correspondência :")
escreval ("~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  ")
Escreval ("                                                                                    ")
escreval ("                                 Boas Novas!                                        ")
escreval ("              Olá, Sr(a)",cl," viemos por meio desta correspondência                ")
escreval ("     anunciar-lhe que ganhaste RS", totld," de créditos para serem gastos em no     ")
escreval ("        máximo 15 dia(s). Por conta de suas compras ao longo do ano passado.        ")
escreval ("              Pedimos que apresente esta carta em uma de nossas lojas,              ")
escreval ("                   para que possamos ativar o código promocional.                   ")
escreval ("                                                                                    ")
escreval ("                                                                                    ")
escreval ("                                                                                    ")
escreval ("                                                                                    ")
escreval ("          CXP6413PKGk16980AQ1                                                       ")
escreval ("                                                                                    ")
escreval ("                                                                                    ")
escreval (" ||||   |||  ||| |||| |||||  |||||   ||||||  ||  |||| | || ||||| ||||||             ")
escreval ("                                                                                    ")
escreval ("                                                        Aproveite, boas compras!    ")
escreval ("                                                                                    ")
escreval ("~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  ")
escreval ("Fim da exemplificação.")
escreval ("Para seguir para outro cliente, favor pressione enter.")
leia (enter)
limpatela
fimpara





fimalgoritmo
