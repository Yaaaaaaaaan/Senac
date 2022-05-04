
import javax.swing.JOptionPane;

public class Atividadeav06 {
     public static void main(String args[]){
          System.out.println("Contador parímpar 2000xx");
        for(int contador=1;contador<=10;contador++){
            int numero=Integer.parseInt(JOptionPane.showInputDialog("Número"));
            if(numero %2==0){
            System.out.println(numero+" é par.");
            } else{
                System.out.println(numero+" é ímpar.");
            }
        }
    }
}
