
import javax.swing.JOptionPane;

public class Atividadeav08 {
    public static void main(String args[]){
           for(int contador=1;contador<=3;contador++){
       String nome=JOptionPane.showInputDialog("nome");
       int cpf=Integer.parseInt(JOptionPane.showInputDialog("CPF (Somente números)"));
       int id=Integer.parseInt(JOptionPane.showInputDialog("Identidade (Somente números)"));
       double salb=Integer.parseInt(JOptionPane.showInputDialog("Salário Bruto"));
       int ano=2017;
      if(salb>2800)
      {
          double inssa=salb*0.11;
          System.out.println("INSS: "+inssa);
      }
      else if(salb<2800 && salb>1000){
          double inssa=salb*0.09;
          System.out.println("INSS: "+inssa);
      }
      else{
          double inssa=salb*0.05;
          System.out.println("INSS: "+inssa);
      }
      
      
      if(salb>1500){
          double vta=salb*0.06;
          System.out.println("Vale transporte: "+vta);
      }
      
      else{
          double vta=salb*0.05;
          System.out.println("Vale transporte: "+vta);
      }
      
      if(salb>2000){
          System.out.println("Gerente");
      }
      else{
          System.out.println("Vendedor");
      
      }
               double vta = 0;
               double inssa = 0;    

     double sall=salb-vta+inssa;
               System.out.println("Salário líquido: "+sall);
      }
    }
}
