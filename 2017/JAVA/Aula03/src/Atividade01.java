
import javax.swing.JOptionPane;


public class Atividade01 {
    public static void main(String args[]){
       String nome=JOptionPane.showInputDialog("nome");
       int idade=Integer.parseInt(JOptionPane.showInputDialog("idade"));
       
      if(idade>=18)
      {
          System.out.println(nome+" tem "+idade+" anos e é maior.");
      }
      else{
          System.out.println(nome+" tem "+idade+" anos e é menor.");
      }
    }
    
    
}
