namespace InstallApplicationMSI
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.installSCCMToolsBtn = new System.Windows.Forms.Button();
            this.installFirefoxBtn = new System.Windows.Forms.Button();
            this.button1 = new System.Windows.Forms.Button();
            this.button2 = new System.Windows.Forms.Button();
            this.dlFireFoxBtn = new System.Windows.Forms.Button();
            this.dlSCCMBtn = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // installSCCMToolsBtn
            // 
            this.installSCCMToolsBtn.Location = new System.Drawing.Point(65, 152);
            this.installSCCMToolsBtn.Name = "installSCCMToolsBtn";
            this.installSCCMToolsBtn.Size = new System.Drawing.Size(160, 23);
            this.installSCCMToolsBtn.TabIndex = 0;
            this.installSCCMToolsBtn.Text = "Install SCCM Tools";
            this.installSCCMToolsBtn.UseVisualStyleBackColor = true;
            this.installSCCMToolsBtn.Click += new System.EventHandler(this.button1_Click);
            // 
            // installFirefoxBtn
            // 
            this.installFirefoxBtn.Location = new System.Drawing.Point(65, 45);
            this.installFirefoxBtn.Name = "installFirefoxBtn";
            this.installFirefoxBtn.Size = new System.Drawing.Size(160, 23);
            this.installFirefoxBtn.TabIndex = 2;
            this.installFirefoxBtn.Text = "Install FireFox";
            this.installFirefoxBtn.UseVisualStyleBackColor = true;
            this.installFirefoxBtn.Click += new System.EventHandler(this.button3_Click);
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(65, 74);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(160, 23);
            this.button1.TabIndex = 3;
            this.button1.Text = "Remove Firefox";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click_1);
            // 
            // button2
            // 
            this.button2.Location = new System.Drawing.Point(65, 181);
            this.button2.Name = "button2";
            this.button2.Size = new System.Drawing.Size(160, 23);
            this.button2.TabIndex = 4;
            this.button2.Text = "Remove SCCM Tools";
            this.button2.UseVisualStyleBackColor = true;
            this.button2.Click += new System.EventHandler(this.button2_Click_1);
            // 
            // dlFireFoxBtn
            // 
            this.dlFireFoxBtn.Location = new System.Drawing.Point(65, 16);
            this.dlFireFoxBtn.Name = "dlFireFoxBtn";
            this.dlFireFoxBtn.Size = new System.Drawing.Size(160, 23);
            this.dlFireFoxBtn.TabIndex = 5;
            this.dlFireFoxBtn.Text = "Download Firefox";
            this.dlFireFoxBtn.UseVisualStyleBackColor = true;
            this.dlFireFoxBtn.Click += new System.EventHandler(this.dlFireFoxBtn_Click);
            // 
            // dlSCCMBtn
            // 
            this.dlSCCMBtn.Location = new System.Drawing.Point(65, 123);
            this.dlSCCMBtn.Name = "dlSCCMBtn";
            this.dlSCCMBtn.Size = new System.Drawing.Size(160, 23);
            this.dlSCCMBtn.TabIndex = 6;
            this.dlSCCMBtn.Text = "Download SCCM Tools";
            this.dlSCCMBtn.UseVisualStyleBackColor = true;
            this.dlSCCMBtn.Click += new System.EventHandler(this.dlSCCMBtn_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(302, 216);
            this.Controls.Add(this.dlSCCMBtn);
            this.Controls.Add(this.dlFireFoxBtn);
            this.Controls.Add(this.button2);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.installFirefoxBtn);
            this.Controls.Add(this.installSCCMToolsBtn);
            this.Name = "Form1";
            this.Text = "Form1";
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Button installSCCMToolsBtn;
        private System.Windows.Forms.Button installFirefoxBtn;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.Button button2;
        private System.Windows.Forms.Button dlFireFoxBtn;
        private System.Windows.Forms.Button dlSCCMBtn;
    }
}

