algoritmo "V�rias coisas"
// Fun��o : Variada
// Autor : Yan
// Data : 09/12/2016
// Se��o de Declara��es 
var

//calculo do dolar
valoreal, valordolar, cotdolar, dolarhoje: real

// Passo o ponto
qtd: real
totsemdesc, totcomdesc : real
valorunit:real
total:real
Nomeprod: inteiro

//Nosso carro
mode:caracter
valorcar:real
totalcar:real
porcv:Real
precf:real

//hotel rastafari
nomehosp:caracter
diar:real
valc:real
stotl:real
totl:real
serv:real
totger:real

  //calculo professores
   vh:real
   ht:real
   pd:real
   sb:real
   sl:real
   td:real
   
//pressionar teclas
enter: literal

inicio
// Se��o de Comandos

         //Inicio Conversor Dolareal.
escreval ("Bem vindo, ao conversor Dolareal.")
escreval ("Para fazer utiliza��o deste conversor, favor, pressione o enter.")
leia (enter)
Escreval ("escreva abaixo o valor a ser convertido.")
leia (valoreal)
escreval ("Qual a cota��o do dolar hoje?")
Leia (dolarhoje)
valordolar <- valoreal/dolarhoje
escreval ("Total:", valordolar," US$")
Escreval ("Para ser redirecionado a outro projeto, aperte o enter.")
leia (enter)
limpatela
         //In�cio "Passo o ponto".
         Escreval ("Bem vindo ao 'Passo o Ponto'.")
         escreval ("Do Oriente m�dio, para voc�!")
         escreval ("Para come�armos a sua compra, favor aperte enter.")
         leia (enter)
         Escreval ("DESCONTOS IMBUTIDOS NO VALOR DA MERCADORIA.")
         Escreval ("Qual produto deseja?")
         escreval ("Lista de produtos:")
         escreval ("1-DVD Hashumashj, por dentro � sony")
         escreval ("2-Celular sonierykson com HBO incluso")
         escreval ("3-Aparelho de som Hashumashj, por dentro � sony")
         escreval ("4-Rel�gio � prova d'�gua Nendechuva")
         escreval ("5-Notebook Shamshung, por dentro � Samsung")
         escreval ("6-TV 52'' Elig�")
         leia (Nomeprod)
         Escreva ("Qual a quantidade desejada?")
         Leia (qtd)
         escolha nomeprod

              //DVD
                  caso 1
                      total<-350.20*qtd
                      escreva ("Seu DVD sai por:", total, " Reais")


              //Celular
                  caso 2
                      total<-500.99*qtd
                      escreva ("Seu Celular sai por:", total, " Reais")


              //Som
                  caso 3
                      total<-750.89*qtd
                      escreva ("Seu Som sai por:", total, " Reais")

                      
                  caso 4
              //Rel�gio
                      total<-39.99*qtd
                      escreva ("Seu Rel�gio sai por:", total, " Reais")
                      
                      
                  caso 5
              //Notebook
                      total<-952.99*qtd
                      escreva ("Seu Notebook sai por:", total, " Reais")
              
              
                  caso 6
              //TV
                      total<-1537.99*qtd
                      escreva ("Sua TV sai por:", total, " Reais")
                      leia (enter)

  fimescolha
  
  Escreval ("'Passo o Ponto' agradece a sua prefer�ncia!")
  escreval ("-------------------------------------------")
  escreval ("para ir seguir para outro projeto, tecle 'enter'." )
  leia (enter)
  limpatela
  
  
  //Inicio "Nosso Carro"
  
  Escreval ("Bem vindo, Favor apresente o modelo do ve�culo.")
  Leia (mode)
  Escreval ("Favor, apresentar pre�o de fabrica��o do ve�culo.")
  Leia (valorcar)
  totalcar<-valorcar*45/100
  Escreval ("o seu ", mode," parag� imposto de: R$", totalcar)
  Escreval ("Favor, informar a porcentagem de venda.")
  Leia (porcv)
  porcv<-totalcar*28/100
  precf<-valorcar+totalcar+porcv
  escreval ("O total de lucro �", porcv," %")
  escreval ("O valor final do ve�culo �", precf," Reais.")
  Escreval ("--------------------------------------------------")
  Escreval ("Fim de execu��o, caso queira seguir para outro projeto, aperte enter.")
  Leia (enter)
  limpatela
  
  
  //Inicio HOTEL RASTAFARI
  Escreval ("Bem vindo ao Hotel RASTAFARI.")
  
  Escreval ("Para in�cio , escreva seu nome.")
  Leia (nomehosp)
  Escreval ("Favor inserir quantos dias se hospedou.")
  leia (diar)
  Escreval ("Favor inserir o valor consumido.")
  leia (valc)
  stotl<-150*diar
  totl<-stotl+valc
  serv<-totl*10/100
  totger<-totl+serv
  escreval("O Sr.(a)", nomehosp," fez uso de:")
  Escreval(diar," Dias hospedado, com valor de R$: 150,00 a di�ria")
  Escreval ("Consumiu: R$", valc)
  escreval ("Seu subtotal equivaleu a: R$", stotl)
  escreval ("O valor da taxa de servi�o equivale a:", serv)
  escreval ("O total geral foi:", totger)
  escreval ("agradecemos sua prefer�ncia, volte sempre!")
  Escreval ("--------------------------------------------")
  escreval ("Fim. Caso queira seguir para outro projeto, favor pressione o 'enter'.")
  leia (enter)
  limpatela




  //In�cio Calculadora para professores
escreval ("Bem vindo, para iniciarmos o c�lculo, cumpra os seguintes requisitos:")
Escreval ("Insira o valor da Hora aula.")
leia (vh)
escreval ("Insira o n�mero de horas trabalhadas no m�s.")
Leia (ht)
Escreval ("Insira o percentual de desconto do INSS.")
leia (pd)
sb<-ht*vh
td<-sb-pd/100
sl<-sb-td
escreval ("sal�rio bruto:", sb,"total de desconto:", td,"Sal�rio liquido:", sl, "reais.")

fimalgoritmo
