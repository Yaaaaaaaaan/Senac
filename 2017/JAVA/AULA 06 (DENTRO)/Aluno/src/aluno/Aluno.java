
package aluno;

import javax.swing.JOptionPane;

public class Aluno {;

    protected int matricula;
    private long cpf;
    private String nome;
    private double media;
    private double prova1;
    private double prova2;
    private String situacao;

   public Aluno(){
       
   }
   
   public void setMatricula(int matricula){
       this.matricula=matricula;
   }
   
   public int getMatricula(){
       return matricula;
   }

    public long getCpf() {
        return cpf;
    }

    public void setCpf(long cpf) {
        this.cpf = cpf;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public double getMedia() {
        return media;
    }

    public void setMedia(double media) {
        this.media = media;
    }

    public double getProva1() {
        return prova1;
    }

    public void setProva1(double prova1) {
        this.prova1 = prova1;
    }

    public double getProva2() {
        return prova2;
    }

    public void setProva2(double prova2) {
        this.prova2 = prova2;
    }

    public String getSituacao() {
        return situacao;
    }

    public void setSituacao(String situacao) {
        this.situacao = situacao;
    }
    
    public void inserirAluno(){
        cpf=Long.parseLong(JOptionPane.showInputDialog("CPF"));
        nome=JOptionPane.showInputDialog("nome");
        prova1=Double.parseDouble(JOptionPane.showInputDialog("PROVA1"));
        prova2=Double.parseDouble(JOptionPane.showInputDialog("PROVA2"));
    }
    
    public void calcularMedia(double media){
        media=(getProva1()+getProva2())/2;
        this.media=media;
    }
    
    public void verificarSituacao(String situacao){
        if(getMedia()>=7){
            situacao="Aprovado";
        }
        else if(getMedia()<7 && getMedia()>=5){
            situacao="Recuperação";
        }
        else{
            situacao="Reprovado";
        }
        this.situacao=situacao.toUpperCase();
    }
        public void mostrarAluno()
        {
            System.out.println("Saída de Informações");
            System.out.println("");
            System.out.println("CPF: "+getCpf());
            System.out.println("Nome: "+getNome());
            System.out.println("Prova1: "+getProva1());
            System.out.println("Prova2: "+getProva2());
            System.out.println("--------------------");
            System.out.println("Média: "+getMedia());
            System.out.println("Situação: "+getSituacao());
        }
    

    public static void main(String[] args) {
       double media=0;
       String situacao="";
        
        Aluno a=new Aluno();
        
        a.inserirAluno();
        a.calcularMedia(media);
        a.verificarSituacao(situacao);
        a.mostrarAluno();
    }

   
    
}
