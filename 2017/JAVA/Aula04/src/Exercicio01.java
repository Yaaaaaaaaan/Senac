
import javax.swing.JOptionPane;

/* Tabuada de multiplicação com estrutura WHILE */
public class Exercicio01 {
  public static void main(String args[]){
      System.out.println("Tabuada de multiplicação");
      System.out.println("");
      int numero=Integer.parseInt(JOptionPane.showInputDialog("Número"));
      int contador=0;
      while(contador<=30){
          int resultado=numero*contador;
          System.out.println(numero+"x "+contador+"= "+resultado);
          contador++;
      }
  }
}
