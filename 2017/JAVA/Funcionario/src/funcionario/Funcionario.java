package funcionario;

public abstract class Funcionario {
    
    public static void main(String[] args) {
        
    }
    private int matricula;
        protected String nome;
        public long cpf;
        public long rg;
        public double inss;
        public double salariofinal; 
    
    public Funcionario(int matricula,String nome,long cpf,long rg,double inss,double salariofinal){

}

    public int getMatricula() {
        return matricula;
    }
    public void setMatricula(int matricula) {
        this.matricula = matricula;
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
    public long getRg() {
        return rg;
    }
    public void setRg(long rg) {
        this.rg = rg;
    }
    public double getInss() {
        return inss;
    }
    public void setInss(double inss) {
        this.inss = inss;
    }
    public double getSalariofinal() {
        return salariofinal;
    }
    public void setSalariofinal(double salariofinal) {
        this.salariofinal = salariofinal;
    } 
     public abstract void inserirFuncionario();
      public abstract void calcularInss(double inss);
       public abstract void calcularSalariofinal(double salariofinal);
}
