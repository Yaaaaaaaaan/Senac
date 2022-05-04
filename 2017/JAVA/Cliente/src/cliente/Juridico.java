package cliente;

import javax.swing.JOptionPane;

public class Juridico extends Cliente{
    private String razao;
    private long cnpj;
    private double valorcompra;
    
    public Juridico()
    {
      super(0,null,0,0);
    }

    /**
     * @return the razao
     */
    public String getRazao() {
        return razao;
    }

    /**
     * @param razao the razao to set
     */
    public void setRazao(String razao) {
        this.razao = razao;
    }

    /**
     * @return the cnpj
     */
    public long getCnpj() {
        return cnpj;
    }

    /**
     * @param cnpj the cnpj to set
     */
    public void setCnpj(long cnpj) {
        this.cnpj = cnpj;
    }

    /**
     * @return the valorcompra
     */
    public double getValorcompra() {
        return valorcompra;
    }

    /**
     * @param valorcompra the valorcompra to set
     */
    public void setValorcompra(double valorcompra) {
        this.valorcompra = valorcompra;
    }
    public void inserirCliente()
   {
       email=JOptionPane.showInputDialog("Email");
       telefone=Long.parseLong
        (JOptionPane.showInputDialog("Telefone"));
       cnpj=Long.parseLong
        (JOptionPane.showInputDialog("CNPJ"));
       razao=JOptionPane.showInputDialog("Razão social");
       valorcompra=Double.parseDouble
        (JOptionPane.showInputDialog("Valor da compra"));
   }
   public void calcularIr(double ir)
   {
       ir=getValorcompra()*0.12;
       this.ir=ir;
   }
   public void mostrarDados()
   {
       System.out.println("Razao social: "+getRazao());
       System.out.println("Email: "+super.getEmail());
       System.out.println("CNPJ: "+getCnpj());
       System.out.println("Telefone: "+super.getTelefone());
       System.out.println("Valor da compra: "+getValorcompra());
       System.out.println("IR: "+super.getIr());
   }
}
