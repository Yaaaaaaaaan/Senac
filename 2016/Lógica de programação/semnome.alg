algoritmo "semnome"
// Função :
// Autor :
// Data : 12/12/2016
// Seção de Declarações 
var
salario, ir, liquido:real
inicio
// Seção de Comandos 
escreva("digite seu salario")
Leia( salario)
se salario <= 1903.98 entao
  ir <- 0
    Escreva ("Isento de impostos")
      senao
        se salario <= 2826.65 entao
          ir <- 0.075
            senao
              se salario <= 3751.05 entao
                ir <- 0.15
                  senao
                    se salario <= 4664.68 entao
                      ir <- 0.225
                        senao
                          ir <- 0.275
                        fimse
                  fimse
            fimse
      fimse

liquido <- salario - (salario*ir)
escreva ("o salário liquido é de R$", liquido:5:2)
fimalgoritmo
