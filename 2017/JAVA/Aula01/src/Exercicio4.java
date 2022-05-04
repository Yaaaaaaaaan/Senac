import javax.swing.JOptionPane;
public class Exercicio4 {
    public static void main(String args[]){
        int valor1=Integer.parseInt(JOptionPane.showInputDialog("Primeiro número:"));
     int valor2=Integer.parseInt(JOptionPane.showInputDialog("Segundo número:"));
     int soma=valor1+valor2;
     int subtr=valor1-valor2;
     int multi=valor1*valor2;
     double divi=valor1/valor2;
     double media=(valor1+valor2)/2;
     System.out.println("Soma: "+soma);
     System.out.println("Subtração: "+subtr);
     System.out.println("Multiplicação: "+multi);
     System.out.println("divisão: "+divi);
     System.out.println("Média: "+media);
    }
}
