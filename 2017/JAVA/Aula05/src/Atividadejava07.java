
import javax.swing.JOptionPane;

public class Atividadejava07 {
      public static void main(String args[]){
           for(int contador=1;contador<=3;contador++){
       String nome=JOptionPane.showInputDialog("nome");
       int nasc=Integer.parseInt(JOptionPane.showInputDialog("Ano de nascimento"));
       int ano=2017;
       int idade=ano-nasc;
      if(idade>=18)
      {
          System.out.println(nome+" tem "+idade+" anos e é maior.");
      }
      else{
          System.out.println(nome+" tem "+idade+" anos e é menor.");
      }
      }
    }
}
