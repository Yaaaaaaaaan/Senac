import javax.swing.JOptionPane;
public class Exercicio2 {
    public static void main(String args[]){
    String nome=(JOptionPane.showInputDialog("nome:"));
     int idade=Integer.parseInt(JOptionPane.showInputDialog("Idade:"));
     if(idade>=18){
         System.out.println(nome+" tem "+idade+" anos e é maior de idade.");
     }
     else{
     System.out.println(nome+" tem "+idade+" anos e é menor de idade.");
     }
    }
}
