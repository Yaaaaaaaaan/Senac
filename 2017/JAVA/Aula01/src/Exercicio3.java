import javax.swing.JOptionPane;
public class Exercicio3 {
        public static void main(String args[]){
    int valor1=Integer.parseInt(JOptionPane.showInputDialog("Primeiro número:"));
     int valor2=Integer.parseInt(JOptionPane.showInputDialog("Segundo número:"));
     if(valor1>valor2){
         System.out.println(valor1+" é maior que "+valor2);
     }
     else{
     System.out.println(valor2+" é maior que "+valor1);
     }
    }
}
