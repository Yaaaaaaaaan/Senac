algoritmo "CTFCK"
// Função : Conversor Temperatura Fahrenheit, Celcius, Kelvin
// Autor : Yan
// Data : 07/12/2016
// Seção de Declarações 
var
  c, f, k:Real
  a1:caracter
  enter:literal
  
inicio
// Seção de Comandos
   Escreval ("Bem vindo ao CTFCK, favor, selecione qual temperatura desejas converter")
   repita
   Escreval ("Menu de Opções: ")
   Escreval ("1.Graus Celcius para Fahrenheit")
   Escreval ("2.Graus Celcius para Kelvin")
   escreval ("3.Graus Fahrenheit para Kelvin")
   Escreval ("4.Graus Fahrenheit para Celcius")
//repita Fahrenheit para Celcius
    leia (a1)
 escolha
    caso 1
    Escreval ("digite a temperatura em graus Celcius:")
    Leia (c)
    f <- 9/5*c+32
    escreval (f," graus fahrenheint.")
    escreval ("se quiser sair pressione 'esc'.")
    escreval ("Caso queira fazer novo cálculo, pressione enter.")
    Leia (enter)
        // Fim Fahrenheit para celcius
        
        //Repita Graus celcius para kelvin
        leia (a2)
        caso 2
        Escreval ("digite a temperatura em graus Celcius:")
        leia (c)
        k <- c+273
        escreval (k," graus Kelvin."
        escreval ("se quiser sair pressione 'esc'.")
        escreval ("Caso queira fazer novo cálculo, pressione enter.")
fimescolha
fimrepita
fimalgoritmo
