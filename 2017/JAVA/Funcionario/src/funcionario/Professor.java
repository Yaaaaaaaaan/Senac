package funcionario;

import javax.swing.JOptionPane;

public abstract class Professor extends Funcionario {
    
        private int quantidade_tempo;
        private double hora_aula;
        private double salario_prof;
    
    public Professor(){
         super(0,null,0,0,0,0);
    }

    public int getQuantidade_tempo() {
        return quantidade_tempo;
    }

    public void setQuantidade_tempo(int quantidade_tempo) {
        this.quantidade_tempo = quantidade_tempo;
    }

    public double getHora_aula() {
        return hora_aula;
    }

    public void setHora_aula(double hora_aula) {
        this.hora_aula = hora_aula;
    }

    public double getSalario_prof() {
        return salario_prof;
    }

    public void setSalario_prof(double salario_prof) {
        this.salario_prof = salario_prof;
    }
     public void inserirFuncionario()
   {
       nome=JOptionPane.showInputDialog("nome");
       cpf=Long.parseLong(JOptionPane.showInputDialog("cpf"));
       rg=Long.parseLong(JOptionPane.showInputDialog("rg"));
       inss=double.parseDouble(JOptionPane.showinputDialog("Nome"));
       valorproduto=Double.parseDouble
        (JOptionPane.showInputDialog("Valor do Produto"));
   }
   public void calcularInss(double inss)
   {
    if(inss>=1000){   inss=()*0.07;
       this.ir=ir;}
    else{
        inss=salario_prof()*0.09;
    }
   }
    public void mostrarDados()
   {
       System.out.println("hora_aula: "+getHora_aula());
       System.out.println("quantidade_tempo: "+getQuantidade_tempo());
       System.out.println("salario_professor: "+getSalario_prof());
    
    }
    
}

