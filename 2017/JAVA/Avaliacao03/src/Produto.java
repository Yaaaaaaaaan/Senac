/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author 381115152016.4
 */
public class Produto extends javax.swing.JFrame {

    /**
     * Creates new form Cliente
     */
    public Produto() {
        initComponents();
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel1 = new javax.swing.JLabel();
        jnome = new javax.swing.JTextField();
        jLabel2 = new javax.swing.JLabel();
        jLabel3 = new javax.swing.JLabel();
        jLabel4 = new javax.swing.JLabel();
        jquantidade = new javax.swing.JTextField();
        junico = new javax.swing.JTextField();
        jnovo = new javax.swing.JButton();
        jsalvar = new javax.swing.JButton();
        jlimpar = new javax.swing.JButton();
        jmenu = new javax.swing.JButton();
        jcalcular = new javax.swing.JButton();
        jLabel5 = new javax.swing.JLabel();
        jtotal = new javax.swing.JLabel();
        jvalidade = new javax.swing.JFormattedTextField();
        jlnome = new javax.swing.JLabel();
        jlvalidade = new javax.swing.JLabel();
        jlquantidade = new javax.swing.JLabel();
        jlunico = new javax.swing.JLabel();
        jltotal = new javax.swing.JLabel();
        jLabel6 = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("Cadastro de Produtos");

        jLabel1.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N
        jLabel1.setForeground(new java.awt.Color(51, 51, 51));
        jLabel1.setText("Nome");

        jnome.setFont(new java.awt.Font("Arial Black", 1, 18)); // NOI18N
        jnome.setEnabled(false);
        jnome.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jnomeActionPerformed(evt);
            }
        });

        jLabel2.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N
        jLabel2.setText("Data de Validade");

        jLabel3.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N
        jLabel3.setText("Quantidade");

        jLabel4.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N
        jLabel4.setText("Preço Único");

        jquantidade.setFont(new java.awt.Font("Tahoma", 0, 18)); // NOI18N
        jquantidade.setEnabled(false);
        jquantidade.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jquantidadeActionPerformed(evt);
            }
        });

        junico.setFont(new java.awt.Font("Tahoma", 0, 18)); // NOI18N
        junico.setEnabled(false);

        jnovo.setFont(new java.awt.Font("Tahoma", 1, 12)); // NOI18N
        jnovo.setText("Novo");
        jnovo.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jnovoActionPerformed(evt);
            }
        });

        jsalvar.setFont(new java.awt.Font("Tahoma", 1, 12)); // NOI18N
        jsalvar.setText("Salvar");
        jsalvar.setEnabled(false);
        jsalvar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jsalvarActionPerformed(evt);
            }
        });

        jlimpar.setFont(new java.awt.Font("Tahoma", 1, 12)); // NOI18N
        jlimpar.setText("Limpar");
        jlimpar.setEnabled(false);
        jlimpar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jlimparActionPerformed(evt);
            }
        });

        jmenu.setFont(new java.awt.Font("Tahoma", 1, 12)); // NOI18N
        jmenu.setText("Menu");
        jmenu.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jmenuActionPerformed(evt);
            }
        });

        jcalcular.setText("Calcular");
        jcalcular.setEnabled(false);
        jcalcular.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jcalcularActionPerformed(evt);
            }
        });

        jLabel5.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N
        jLabel5.setText("Preço Total");

        jtotal.setText("...");

        try {
            jvalidade.setFormatterFactory(new javax.swing.text.DefaultFormatterFactory(new javax.swing.text.MaskFormatter("##/##/####")));
        } catch (java.text.ParseException ex) {
            ex.printStackTrace();
        }
        jvalidade.setEnabled(false);

        jlnome.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N

        jlvalidade.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N

        jlquantidade.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N

        jlunico.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N

        jltotal.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(layout.createSequentialGroup()
                                .addContainerGap()
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addComponent(jLabel2)
                                    .addComponent(jLabel1, javax.swing.GroupLayout.Alignment.TRAILING))
                                .addGap(18, 18, 18)
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addComponent(jnome, javax.swing.GroupLayout.PREFERRED_SIZE, 204, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addComponent(jvalidade, javax.swing.GroupLayout.PREFERRED_SIZE, 204, javax.swing.GroupLayout.PREFERRED_SIZE)))
                            .addGroup(layout.createSequentialGroup()
                                .addGap(55, 55, 55)
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                                    .addComponent(jLabel3)
                                    .addComponent(jLabel4)
                                    .addComponent(jLabel5))
                                .addGap(18, 18, 18)
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addGroup(layout.createSequentialGroup()
                                        .addComponent(junico, javax.swing.GroupLayout.PREFERRED_SIZE, 107, javax.swing.GroupLayout.PREFERRED_SIZE)
                                        .addGap(31, 31, 31)
                                        .addComponent(jcalcular, javax.swing.GroupLayout.PREFERRED_SIZE, 86, javax.swing.GroupLayout.PREFERRED_SIZE))
                                    .addComponent(jtotal)
                                    .addComponent(jquantidade, javax.swing.GroupLayout.PREFERRED_SIZE, 204, javax.swing.GroupLayout.PREFERRED_SIZE))))
                        .addGap(72, 72, 72)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(jLabel6)
                            .addComponent(jlvalidade)
                            .addComponent(jlnome)
                            .addComponent(jlquantidade)
                            .addComponent(jlunico)
                            .addComponent(jltotal)))
                    .addGroup(layout.createSequentialGroup()
                        .addContainerGap()
                        .addComponent(jnovo, javax.swing.GroupLayout.PREFERRED_SIZE, 82, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(63, 63, 63)
                        .addComponent(jsalvar)
                        .addGap(72, 72, 72)
                        .addComponent(jlimpar)
                        .addGap(100, 100, 100)
                        .addComponent(jmenu)))
                .addContainerGap(165, Short.MAX_VALUE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(28, 28, 28)
                .addComponent(jLabel6)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jnome, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel1)
                    .addComponent(jlnome))
                .addGap(18, 18, 18)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                        .addComponent(jLabel2, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                        .addComponent(jvalidade, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addComponent(jlvalidade))
                .addGap(18, 18, 18)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                        .addComponent(jLabel3)
                        .addComponent(jquantidade, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addComponent(jlquantidade))
                .addGap(18, 18, 18)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(jlunico)
                        .addGap(27, 27, 27)
                        .addComponent(jltotal))
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                            .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                                .addComponent(jLabel4)
                                .addComponent(junico, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                            .addComponent(jcalcular, javax.swing.GroupLayout.PREFERRED_SIZE, 29, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGap(18, 18, 18)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel5)
                            .addComponent(jtotal))))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 46, Short.MAX_VALUE)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jnovo, javax.swing.GroupLayout.PREFERRED_SIZE, 35, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jsalvar, javax.swing.GroupLayout.PREFERRED_SIZE, 33, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jlimpar, javax.swing.GroupLayout.PREFERRED_SIZE, 34, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jmenu, javax.swing.GroupLayout.PREFERRED_SIZE, 33, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(40, 40, 40))
        );

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void jmenuActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jmenuActionPerformed
        new Menu().setVisible(true);
        this.dispose();   
        // TODO add your handling code here:
    }//GEN-LAST:event_jmenuActionPerformed

    private void jnovoActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jnovoActionPerformed
jnome.setEnabled(true);
jquantidade.setEnabled(true);
junico.setEnabled(true);
jtotal.setEnabled(true);
jsalvar.setEnabled(true);
jlimpar.setEnabled(true);
jvalidade.setEnabled(true);
jcalcular.setEnabled(true);
jnome.requestFocus();

// TODO add your handling code here:
    }//GEN-LAST:event_jnovoActionPerformed

    private void jsalvarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jsalvarActionPerformed
jlnome.setText(jnome.getText());
jlvalidade.setText(jvalidade.getText());
jlquantidade.setText(jquantidade.getText());
jlunico.setText(junico.getText());
jltotal.setText(jtotal.getText());



// TODO add your handling code here:
    }//GEN-LAST:event_jsalvarActionPerformed

    private void jlimparActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jlimparActionPerformed
jnome.setText("");  
jvalidade.setText(""); 
jquantidade.setText(""); 
junico.setText("");
jtotal.setText("");
jnome.requestFocus();
// TODO add your handling code here:
    }//GEN-LAST:event_jlimparActionPerformed

    private void jcalcularActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jcalcularActionPerformed
        int quantidade=Integer.parseInt(jquantidade.getText());
        double unico=Double.parseDouble(junico.getText());
        double total = (quantidade * unico);
        jtotal.setText(String.valueOf(total));
    }//GEN-LAST:event_jcalcularActionPerformed

    private void jquantidadeActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jquantidadeActionPerformed
        
    }//GEN-LAST:event_jquantidadeActionPerformed

    private void jnomeActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jnomeActionPerformed

    }//GEN-LAST:event_jnomeActionPerformed

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
            java.util.logging.Logger.getLogger(Produto.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Produto.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Produto.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Produto.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Produto().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JLabel jLabel6;
    private javax.swing.JButton jcalcular;
    private javax.swing.JButton jlimpar;
    private javax.swing.JLabel jlnome;
    private javax.swing.JLabel jlquantidade;
    private javax.swing.JLabel jltotal;
    private javax.swing.JLabel jlunico;
    private javax.swing.JLabel jlvalidade;
    private javax.swing.JButton jmenu;
    private javax.swing.JTextField jnome;
    private javax.swing.JButton jnovo;
    private javax.swing.JTextField jquantidade;
    private javax.swing.JButton jsalvar;
    private javax.swing.JLabel jtotal;
    private javax.swing.JTextField junico;
    private javax.swing.JFormattedTextField jvalidade;
    // End of variables declaration//GEN-END:variables
}