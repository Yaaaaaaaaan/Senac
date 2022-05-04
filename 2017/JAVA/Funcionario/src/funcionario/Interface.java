package funcionario;

import javax.swing.JOptionPane;

public class Interface {
  public static void main(String args[]){
      double salario=0;
      double inss=0;
      double comissao=0;
      double salariofinal=0; // Se estiver errado, alterar
      String op;
      
      Coordenador C=new Coordenador();
      Professor P=new Professor();
      
      System.out.println("SISTEMA DE VERIFICAÇÃO");
      System.out.println("");
      System.out.println("↓ FAVOR, ESCOLHA DENTRE AS OPÇÕES ABAIXO,UMA. ↓");
      System.out.println("←--------------------------------------------→");
      
      System.out.println("→ C ← PARA COORDENADOR.");
      System.out.println("→ P ← PARA PROFESSOR.");
      
      System.out.println("←--------------------------------------------→");
      op=JOptionPane.showInputDialog("");
      
      switch(op){
          case C:
              System.out.println("→ COORDENADOR ←");
              System.out.println("↓ INFORMAÇÕES ↓");
                 C.inserirFuncionario();
                 C.calcularComissao(comissao);
                 C.calcularInss(inss);
                 C.calcularSalariofinal(salariofinal);
                 C.mostrarDados();
                 System.out.println("←--------------------------------------------→");
                 break;
          case P:
              System.out.println("→ PROFESSOR ←");
              System.out.println("↓ INFORMAÇÕES ↓");
                 P.inserirFuncionario();
                 P.calcularSalario(salario);
                 P.calcularInss(inss);
                 P.calcularSalariofinal(Salariofinal);
                 P.mostrarDados();
                 System.out.println("←--------------------------------------------→");
              break;
               default:
                 System.out.println("ESCOLHA APENAS ENTRE → C ← PARA COORDENADOR E → P ← PARA PROFESSOR.");
      }
  }
}

