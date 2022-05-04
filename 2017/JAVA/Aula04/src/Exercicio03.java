
import javax.swing.JOptionPane;

public class Exercicio03 {
    public static void main (String args[]){
        int cont=1;
        while(cont<=3){
         String nome1=JOptionPane.showInputDialog("Nome:");
          double nota1=Integer.parseInt(JOptionPane.showInputDialog("Nota 1:"));
           double nota2=Integer.parseInt(JOptionPane.showInputDialog("Nota 2:"));
             double media1= nota1+nota2/2;
              String sit="";
        
              if(media1>=7){
                sit="Aprovado";
              }
              
              else if(media1<7 && media1>=5){
              sit="Recuperação";
              }
              
              else
              {
              sit="Reprovado";
              }
              
         System.out.println("Aluno " +nome1+", " +sit+ " com média no valor de: " +media1);
        
        
        
            
       
       
      
        } 
    }
}
