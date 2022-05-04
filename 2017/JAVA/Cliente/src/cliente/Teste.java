
package cliente;

import javax.swing.JOptionPane;


public class Teste {

    public static void main(String args[]){
        double ir=0;
         int op;
         
         Fisico f=new Fisico();
         Juridico j=new Juridico();
         
         System.out.println("Menu");
         System.out.println("Escolha uma opção");
         System.out.println("1-  Pessoa física");
         System.out.println("2- Pessoa Juridica");
    
         op=Integer.parseInt(JOptionPane.showInputDialog("Opção"));
         
         switch(op){
             case 1:
                 System.out.println("Pessoa Física");
                 f.inserirCliente();
                 f.calcularIr(ir);
                 f.mostrarDados();
                 break;
             case 2:
                 System.out.println("Pessoa Jurídica");
                 j.inserirCliente();
                 j.calcularIr(ir);
                 j.mostrarDados();
                 break;
                 default:
                     System.out.println("Opção inválida");
         }
    }


}
