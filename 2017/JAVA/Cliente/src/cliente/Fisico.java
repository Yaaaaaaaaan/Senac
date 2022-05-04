package cliente;

import javax.swing.JOptionPane;

public class Fisico extends Cliente{
   private long cpf;
   private String nome;
   private double valorproduto;
   
   public Fisico()
   {
       super(0,null,0,0);
   }

    /**
     * @return the cpf
     */
    public long getCpf() {
        return cpf;
    }

    /**
     * @param cpf the cpf to set
     */
    public void setCpf(long cpf) {
        this.cpf = cpf;
    }

    /**
     * @return the nome
     */
    public String getNome() {
        return nome;
    }

    /**
     * @param nome the nome to set
     */
    public void setNome(String nome) {
        this.nome = nome;
    }

    /**
     * @return the valorproduto
     */
    public double getValorproduto() {
        return valorproduto;
    }

    /**
     * @param valorproduto the valorproduto to set
     */
    public void setValorproduto(double valorproduto) {
        this.valorproduto = valorproduto;
    }
   public void inserirCliente()
   {
       email=JOptionPane.showInputDialog("Email");
       telefone=Long.parseLong
        (JOptionPane.showInputDialog("Telefone"));
       cpf=Long.parseLong
        (JOptionPane.showInputDialog("CPF"));
       nome=JOptionPane.showInputDialog("Nome");
       valorproduto=Double.parseDouble
        (JOptionPane.showInputDialog("Valor do Produto"));
   }
   public void calcularIr(double ir)
   {
       ir=getValorproduto()*0.07;
       this.ir=ir;
   }
   public void mostrarDados()
   {
       System.out.println("Nome: "+getNome());
       System.out.println("Email: "+super.getEmail());
       System.out.println("CPF: "+getCpf());
       System.out.println("Telefone: "+super.getTelefone());
       System.out.println("Valor do Produto: "+getValorproduto());
       System.out.println("IR: "+super.getIr());
   }
}
