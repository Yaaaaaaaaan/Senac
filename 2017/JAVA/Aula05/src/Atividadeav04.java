
import javax.swing.JOptionPane;

public class Atividadeav04 {
     public static void main (String args[]){
        int cont=1;
        while(cont<=5){
         String nome=JOptionPane.showInputDialog("Nome:");
          double nota1=Integer.parseInt(JOptionPane.showInputDialog("Nota 1:"));
           double nota2=Integer.parseInt(JOptionPane.showInputDialog("Nota 2:"));
            double nota3=Integer.parseInt(JOptionPane.showInputDialog("Nota 3:"));
             double media1= nota1+nota2+nota3/3;
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
              
         System.out.println("Aluno " +nome+", " +sit+ " com média no valor de: " +media1+ ", e provas com notas:" +nota1+", "+nota2+", "+nota3+".");
        
        
        
            
       
       
      
        } 
    }
}
