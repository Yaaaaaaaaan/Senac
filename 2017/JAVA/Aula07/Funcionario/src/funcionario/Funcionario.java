
package funcionario;

import javax.swing.JOptionPane;

public class Funcionario {

    protected int matricula;
    public String nome;
    public long cpf;
    public double salarioBruto;
    private double inss;
    private double valetransporte;
    private double salarioliquido;
    
     public static void main(String[] args){
       double salarioliquido=0;
       double valetransporte=0;
       double inss=0;
       
       Funcionario f=new Funcionario();
       for(int cont=1;cont<=3;cont++){
           System.out.println("Funcionário: " +cont);
       f.inserirFuncionario();
       f.calcularInss();
       f.calcularValetransporte();
       f.calcularSalarioliquido();
       f.mostrarDados();
       }
     }
    
    public String getNome() {
        return nome;
    }
    
    public void setNome(String nome) {
        this.nome = nome;
    }

    public long getCpf() {
        return cpf;
    }

    public void setCpf(long cpf) {
        this.cpf = cpf;
    }

    public double getSalarioBruto() {
        return salarioBruto;
    }

    public void setSalarioBruto(double salarioBruto) {
        this.salarioBruto = salarioBruto;
    }

    private double getInss() {
        return inss;
    }

    private void setInss(double inss) {
        this.inss = inss;
    }

    private double getValetransporte() {
        return valetransporte;
    }

    private void setValetransporte(double valetransporte) {
        this.valetransporte = valetransporte;
    }

    private double getSalarioliquido() {
        return salarioliquido;
    }

    private void setSalarioliquido(double salarioliquido) {
        this.salarioliquido = salarioliquido;
    }
    
    public void inserirFuncionario(){
        nome=JOptionPane.showInputDialog("nome: ");
        cpf=Long.parseLong(JOptionPane.showInputDialog("CPF: "));
        salarioBruto=Double.parseDouble(JOptionPane.showInputDialog("Salário Bruto: "));

}
    
    public void calcularInss(){
        
        if(salarioBruto>=2000){
        setInss(getSalarioBruto()*0.11);
        }
        else if(salarioBruto<2000 && salarioBruto>=1000){
            setInss(getSalarioBruto()*0.09);
        }
        else{
            setInss(getSalarioBruto()*0.08);
        }
        
    }
    
    public void calcularValetransporte(){
        if(salarioBruto>=1500){
           setValetransporte(getSalarioBruto()*0.06);
        }
        else{
            setValetransporte(getSalarioBruto()*0.05);
        }
    }
    
    public void calcularSalarioliquido(){
        salarioliquido=salarioBruto-(inss+valetransporte);
    }
    
    public void mostrarDados(){
        System.out.println("Relatório");
        System.out.println("Nome: " +getNome());
        System.out.println("CPF: " +getCpf());
        System.out.println("Salário bruto: " +getSalarioBruto());
        System.out.println("----------------------");
        System.out.println("INSS: " +getInss());
        System.out.println("Vale transporte: " +getValetransporte());
        System.out.println("Salário Líquido: " +getSalarioliquido());
    }

   
}