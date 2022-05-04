import javax.swing.JOptionPane;
public class Exercicio5 {
     public static void main(String args[]){
     int valor1=Integer.parseInt(JOptionPane.showInputDialog("Primeiro número:"));
     int valor2=Integer.parseInt(JOptionPane.showInputDialog("Segundo número:"));
     int soma=valor1+valor2;
    
   if (soma>10){
   soma=soma+20;
   }
   
   else{
   soma=soma-3;
   }
  System.out.println("O resultado é: "+soma);
  }
    
    
}
