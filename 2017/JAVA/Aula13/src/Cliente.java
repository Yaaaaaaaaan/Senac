import java.sql.*;
import javax.swing.*;
public class Cliente extends javax.swing.JFrame {

    public void limpacampo(){
       jcodigo.setText("");
       jcpf.setText("");
       jidentidade.setText("");
       jnome.setText("");
       jtelefone.setText("");
       jemail.setText("");
       jcpf.requestFocus();
    }
    public Cliente() {
        initComponents();
    }

  
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        codigo = new javax.swing.JLabel();
        identidade = new javax.swing.JLabel();
        telefone = new javax.swing.JLabel();
        nome = new javax.swing.JLabel();
        email = new javax.swing.JLabel();
        cpf = new javax.swing.JLabel();
        jnome = new javax.swing.JTextField();
        jemail = new javax.swing.JTextField();
        jLabel1 = new javax.swing.JLabel();
        jSeparator1 = new javax.swing.JSeparator();
        jcodigo = new javax.swing.JLabel();
        jcpf = new javax.swing.JFormattedTextField();
        jidentidade = new javax.swing.JFormattedTextField();
        jtelefone = new javax.swing.JFormattedTextField();
        jnovo = new javax.swing.JButton();
        jsalvar = new javax.swing.JButton();
        jsair = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setMaximumSize(new java.awt.Dimension(0, 0));

        codigo.setFont(new java.awt.Font("Arial Black", 3, 16)); // NOI18N
        codigo.setText("Código:");

        identidade.setFont(new java.awt.Font("Arial Black", 3, 16)); // NOI18N
        identidade.setText("Identidade:");

        telefone.setFont(new java.awt.Font("Arial Black", 3, 16)); // NOI18N
        telefone.setText("Telefone:");

        nome.setFont(new java.awt.Font("Arial Black", 3, 16)); // NOI18N
        nome.setText("Nome:");

        email.setFont(new java.awt.Font("Arial Black", 3, 16)); // NOI18N
        email.setText("E-mail:");

        cpf.setFont(new java.awt.Font("Arial Black", 3, 16)); // NOI18N
        cpf.setText("CPF:");

        jLabel1.setFont(new java.awt.Font("Times New Roman", 3, 24)); // NOI18N
        jLabel1.setText("Cadastro de Clientes");

        jcodigo.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        jcodigo.setForeground(new java.awt.Color(0, 0, 255));
        jcodigo.setText("jLabel2");

        try {
            jcpf.setFormatterFactory(new javax.swing.text.DefaultFormatterFactory(new javax.swing.text.MaskFormatter("###.####.###-##")));
        } catch (java.text.ParseException ex) {
            ex.printStackTrace();
        }

        try {
            jidentidade.setFormatterFactory(new javax.swing.text.DefaultFormatterFactory(new javax.swing.text.MaskFormatter("##.###.###-#")));
        } catch (java.text.ParseException ex) {
            ex.printStackTrace();
        }

        try {
            jtelefone.setFormatterFactory(new javax.swing.text.DefaultFormatterFactory(new javax.swing.text.MaskFormatter("(##)#####-####")));
        } catch (java.text.ParseException ex) {
            ex.printStackTrace();
        }

        jnovo.setFont(new java.awt.Font("Arial Black", 1, 14)); // NOI18N
        jnovo.setText("Novo");
        jnovo.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jnovoActionPerformed(evt);
            }
        });

        jsalvar.setFont(new java.awt.Font("Arial Black", 1, 14)); // NOI18N
        jsalvar.setText("Salvar");
        jsalvar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jsalvarActionPerformed(evt);
            }
        });

        jsair.setFont(new java.awt.Font("Arial Black", 1, 14)); // NOI18N
        jsair.setText("Sair");

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jSeparator1)
            .addGroup(layout.createSequentialGroup()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                        .addContainerGap()
                        .addComponent(jnovo)
                        .addGap(112, 112, 112)
                        .addComponent(jsalvar)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 139, Short.MAX_VALUE)
                        .addComponent(jsair))
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(layout.createSequentialGroup()
                                .addGap(146, 146, 146)
                                .addComponent(jLabel1))
                            .addGroup(layout.createSequentialGroup()
                                .addContainerGap()
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                                    .addComponent(codigo)
                                    .addComponent(cpf)
                                    .addComponent(email)
                                    .addComponent(telefone)
                                    .addComponent(nome)
                                    .addComponent(identidade))
                                .addGap(18, 18, 18)
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                                    .addComponent(jnome)
                                    .addComponent(jemail)
                                    .addComponent(jcodigo, javax.swing.GroupLayout.PREFERRED_SIZE, 54, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addComponent(jcpf)
                                    .addComponent(jidentidade)
                                    .addComponent(jtelefone, javax.swing.GroupLayout.PREFERRED_SIZE, 186, javax.swing.GroupLayout.PREFERRED_SIZE))))
                        .addGap(0, 0, Short.MAX_VALUE)))
                .addContainerGap())
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jLabel1)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jSeparator1, javax.swing.GroupLayout.PREFERRED_SIZE, 10, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(31, 31, 31)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(codigo)
                    .addComponent(jcodigo))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(cpf)
                    .addComponent(jcpf, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(identidade)
                    .addComponent(jidentidade, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(nome)
                    .addComponent(jnome, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(telefone)
                    .addComponent(jtelefone, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(email)
                    .addComponent(jemail, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 46, Short.MAX_VALUE)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jsair)
                    .addComponent(jnovo)
                    .addComponent(jsalvar))
                .addContainerGap())
        );

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void jnovoActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jnovoActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_jnovoActionPerformed

    private void jsalvarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jsalvarActionPerformed
        try{
            Class.forName("com.mysql.jdbc.Driver");
            Connection conexao=DriverManager.getConnection("jdbc:mysql://localhost/loja","root","");
            Statement sql=conexao.createStatement();
            sql.executeUpdate("insert into cliente(cpf,identidade,nome,telefone,email)");
            
        }
        catch(ClassNotFoundException e){
            JOptionPane.showMessageDialog(this,"Erro na conexão" +e.getMessage());
        }
        catch(SQLException e){
             JOptionPane.showMessageDialog(this,"Erro no comando" +e.getMessage());
            
        }
    }//GEN-LAST:event_jsalvarActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(Cliente.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Cliente.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Cliente.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Cliente.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Cliente().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JLabel codigo;
    private javax.swing.JLabel cpf;
    private javax.swing.JLabel email;
    private javax.swing.JLabel identidade;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JSeparator jSeparator1;
    private javax.swing.JLabel jcodigo;
    private javax.swing.JFormattedTextField jcpf;
    private javax.swing.JTextField jemail;
    private javax.swing.JFormattedTextField jidentidade;
    private javax.swing.JTextField jnome;
    private javax.swing.JButton jnovo;
    private javax.swing.JButton jsair;
    private javax.swing.JButton jsalvar;
    private javax.swing.JFormattedTextField jtelefone;
    private javax.swing.JLabel nome;
    private javax.swing.JLabel telefone;
    // End of variables declaration//GEN-END:variables
}
