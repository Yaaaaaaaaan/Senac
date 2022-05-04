
import javax.swing.JOptionPane;

public class Atividadeav02 {
    public static void main(String args[]){
        System.out.println("Multi calculox");
        int num= Integer.parseInt(JOptionPane.showInputDialog("Inisira o número desejado."));
        int multi=1;
        while(multi<=10){
        int res=num*multi;
        System.out.println("cálculo: " +num+ "* " +multi+ "= " +res+ ".");
        multi++;
    }
    }
}
