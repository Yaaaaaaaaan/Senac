algoritmo "semnome"
// Fun��o :
// Autor :
// Data : 16/12/2016
// Se��o de Declara��es 
var
cl:caracter
ccl:inteiro
totld:real
rl:real
enter:literal
inicio
// Se��o de Comandos 
para ccl de 1 ate 15 faca
escreval("favor, insira o nome do cliente.")
leia (cl)
Escreval ("Cliente ",cl,", c�digo ",ccl)
escreval("Favor inserir o valor de receita gerado atrav�s de tal cliente.")
leia(rl)
se rl <= 1000 entao
                    totld <- rl + (rl+15/100)
                          senao
                                totld <- rl + (rl+10/100)
fimse
escreval (" Exemplo de correspond�ncia :")
escreval ("~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  ")
Escreval ("                                                                                    ")
escreval ("                                 Boas Novas!                                        ")
escreval ("              Ol�, Sr(a)",cl," viemos por meio desta correspond�ncia                ")
escreval ("     anunciar-lhe que ganhaste RS", totld," de cr�ditos para serem gastos em no     ")
escreval ("        m�ximo 15 dia(s). Por conta de suas compras ao longo do ano passado.        ")
escreval ("              Pedimos que apresente esta carta em uma de nossas lojas,              ")
escreval ("                   para que possamos ativar o c�digo promocional.                   ")
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
escreval ("Fim da exemplifica��o.")
escreval ("Para seguir para outro cliente, favor pressione enter.")
leia (enter)
limpatela
fimpara





fimalgoritmo
