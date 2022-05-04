
import javax.swing.JOptionPane;

public class Atividade04 {
        public static void main(String args[]){
          System.out.println("números pares ou ímpares:");
        for(int cont=1;cont<=5;cont++){
            int num=Integer.parseInt(JOptionPane.showInputDialog("Número"));
            if(num %2==0){
            System.out.println(num+" é par.");
            } else{
                System.out.println(num+" é ímpar.");
            }
        }
    }
}
