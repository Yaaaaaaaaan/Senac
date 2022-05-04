
import javax.swing.JOptionPane;


public class Exercicio1 { // Método principal
    /* Todos argumentos são em Strings para dar resultado à aplicação */
    public static void main(String args[]){
    String nome=JOptionPane.showInputDialog("Nome:");
    int idade=Integer.parseInt(JOptionPane.showInputDialog("Idade:"));
    System.out.println(nome+" tem "+idade+" anos.");
    }
}
