package funcionario;

public abstract class Coordenador extends Funcionario{
        private double salario;
        private double comissao;
        
        public Coordenador(){
            super(0,null,0,0,0,0);
        } 
  
    public double getSalario() {
        return salario;
    }

    public void setSalario(double salario) {
        this.salario = salario;
    }

    public double getComissao() {
        return comissao;
    }

    public void setComissao(double comissao) {
        this.comissao = comissao;
    }
        
}
