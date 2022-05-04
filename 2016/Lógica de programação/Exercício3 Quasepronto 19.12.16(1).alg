algoritmo "semnome"
// Função :
// Autor :
// Data : 18/12/2016
// Seção de Declarações
var
//Pagina Admin
Login:caracter
Senha:real
tecla:caracter
enter:literal
n11, n12, n13:real
a,g,n:real
//Programa Voto
No, n2, n1:caracter
Id:inteiro
o,b,m,r,p:real
t:inteiro
Mi:real
// cálculos
totl1:real
porcG:real
porcO:real
porcB:real
PorcM:real
porcR:real
porcP:real
totlv:real
inicio
// Seção de Comandos
                            // Votação

repita
t<-t+1
limpatela
Escreval (t," Olá, sou a Roberta, estou aqui para te ajudar nesse estágio de votação.")
escreval ("Antes de começar, favor, diga-me seu nome,")
escreval ("para que eu o insira em nosso Banco de dados.")
Leia(No)
Escreval ("Teria problema em nos dizer a sua Idade?")
Escreval ("Se não, favor, insira-a no campo a baixo.")
Escreval ("Se não se sente confortável, apenas insira o número Zero.")
Leia (Id)
Escreval (" Estamos quase lá!")
Escreval (" Senhor(a) ", No,", qual seria o seu nível de satisfação com nossa plataforma?")
escreval ("A- Muito satisfeito,G- Satisfeito,N- Insatisfeito.")
leia (n1)
Escolha n1

     Caso "A"
        a <-a+ 1
     Caso "G"
        g <- a+ 1
     Caso "N"
        n <- n+ 1
        fimescolha
escreval ("Só mais uma pergunta: ")
escreval ("O que achou de nosso novo método de atendimento?")
Escreval (" O- Ótimo, B- Bom, M- Médio, R- Ruim, P-Péssimo.")
     leia (n2)
     escolha n2

     caso "O"
          o<-o+ 1
     caso "B"
          b<-b+ 1
     caso "M"
          m<-m+ 1
     caso "R"
          r<-r+ 1
          Mi<-id+id
      caso "P"
      p<-p+ 1
fimescolha
Escreval (" Agradecemos seu voto.")
Escreval (" Deseja fazer nova pesquisa?")
escreval (" sim ou não?")
leia (tecla)
ate tecla = "n"
Escreval (" Para finalizar o programa, tecle 'Enter'.")
leia (tecla)
se (tecla="Painel de controle") entao
limpatela
         senao
fimalgoritmo
fimse

                               // Área Administrativa

escreval ("~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~")
Escreval ("                        Somente pessoal Autorizado.")
escreva ("   Login: ")
leia (Login)
Escreva ("   Password: ")
leia (Senha)
Escreval ("~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~")
se (Login="Admin") entao
                   escreval (" Verificando usuário.")
         senao
fimse
se (Senha=2105) entao
                escreval (" Verificando senha.")
         senao
fimse
se (login="Admin") e (senha=2105) entao
                                  escreval (" Autenticado com os servidores.")
         senao
         escreval (" Usuário ou senha Incorreto.")
         fimalgoritmo
fimse
enquanto (tecla <> "sair") e (tecla <> "exit") faca
limpatela
escreval ("----------------------------------------------------------------------------------")
Escreval ("                         Bem vindo a área do desenvolvedor.")
escreval ("")
Escreval (" Favor, escolha uma das opções abaixo:")
escreval (" 1- Total de votos")
escreval (" 2- Visão Geral de dados da plataforma")
Escreval (" 3- Nomes de pessoas que votaram e suas respectivas idades")
escreval (" 4- Porcentagem ")
escreval ("")
escreval ("")
Escreval ("                                                            Para sair digite exit.")
escreval ("----------------------------------------------------------------------------------")
leia (n11)
escolha n11
     Caso 1
          totlv<-O+B+M+R+P
          Escreval (" O total de votos até o momento é: ", totlv)
          leia (tecla)
     Caso 2
          escreval (" A plataforma está em pleno funcionamento.")
          
          totl1<-a+g+n
          Escreval ("O Total de votos relacionados a plataforma são :",totl1)
          escreval ("Muito satisfeito: " ,a)
          escreval ("Satisfeito: ",g)
          escreval ("Insatisfeito: ",n)
          leia (tecla)
     Caso 3
          Escreval ("Pessoas que votaram :", No*t, "Respectivas idades:", Id*t)
          leia (tecla)
     Caso 4
          escreval (" Favor escolher entre:")
          escreval (" 1- Porcentagem geral de votos")
          Escreval (" 2- Porcentagem: ")
leia (n12)
escolha n12
     caso 1
          porcG<-100
          escreva ("porcentagem Geral é de: ",porcG,"% de votos apurados.")
          leia (tecla)

     caso 2
          escreval (" 1- Porcentagem de idades que escolheram Ótimo")
          escreval (" 2- Porcentagem de idades que escolheram Bom")
          escreval (" 3- Porcentagem de idades que escolheram Médio")
          escreval (" 4- Porcentagem de idades que escolheram Ruim")
          escreval (" 5- Porcentagem de idades que escolheram Péssimo")
          leia (n13)
escolha n13

     caso 1
     
       Escreval ("A média de idade que votou Ótimo é: ",porcO, "% do total")
       leia (tecla)
     caso 2
     
       escreval ("A média de idade que votou Bom é: ",porcB, "% do total")
       leia (tecla)
     caso 3
     
       escreval ("A média de idade que votou Médio é: ",porcM, "% do total")
       leia (tecla)
     caso 4
     
       escreval ("A média de idade que votou Ruim é: ",porcR, "% do total")
       leia (tecla)
     caso 5
     
       escreval ("A média de idade que votou Péssimo é: ",porcP, "% do total")
       leia (tecla)
fimescolha
fimescolha
fimescolha
fimenquanto
fimalgoritmo
