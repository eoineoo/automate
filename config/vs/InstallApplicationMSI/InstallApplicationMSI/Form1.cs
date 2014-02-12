using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Diagnostics;
using System.Net;

namespace InstallApplicationMSI
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void dlFireFoxBtn_Click(object sender, EventArgs e)
        {
            downloadFirefox();
        }

        private void FileDownloadComplete(object sender, AsyncCompletedEventArgs e)
        {
            MessageBox.Show("Download completed!");
        }

        private void button3_Click(object sender, EventArgs e)
        {
            installFirefox();
        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            removeFireFox();
        }

        private void dlSCCMBtn_Click(object sender, EventArgs e)
        {
            downloadSCCMTools();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            installSCCMTools();
        }

        private void button2_Click_1(object sender, EventArgs e)
        {
            removeSCCMTools();
        }

        private void downloadFirefox()
        {
            WebClient wc = new WebClient();
            wc.DownloadFileCompleted += new AsyncCompletedEventHandler(FileDownloadComplete);
            Uri fileUrl = new Uri("http://hicap.frontmotion.com.s3.amazonaws.com/Firefox/FirefoxESR-24.2.0/FirefoxESR-24.2.0-en-GB.msi");
            wc.DownloadFileAsync(fileUrl, "Firefox.msi");
        }

        private void installFirefox()
        {
            Process proc = new Process();
            proc.StartInfo.FileName = "msiexec.exe";
            proc.StartInfo.Arguments = " /i Firefox.msi /passive /L*v install_FireFox.log";
            proc.Start();
            proc.WaitForExit();
            MessageBox.Show("FireFox installation complete");
        }

        private void removeFireFox()
        {
            Process proc = new Process();
            proc.StartInfo.FileName = "msiexec.exe";
            proc.StartInfo.Arguments = " /x Firefox.msi /passive /L*v remove_Firefox.log";
            proc.Start();
            proc.WaitForExit();
            MessageBox.Show("FireFox removal complete");
        }

        private void downloadSCCMTools()
        {
            WebClient wc = new WebClient();
            wc.DownloadFileCompleted += new AsyncCompletedEventHandler(FileDownloadComplete);
            Uri fileUrl = new Uri("http://eoin.attikdesigns.ie/college/automate/sccm/ConfigMgrTools.msi");
            wc.DownloadFileAsync(fileUrl, "ConfigMgrTools.msi");
        }
        
        private void installSCCMTools()
        {
            Process proc = new Process();
            proc.StartInfo.FileName = "msiexec.exe";
            proc.StartInfo.Arguments = " /i ConfigMgrTools.msi /passive /L*v install_ConfigMgrTools.log";
            proc.Start();
            proc.WaitForExit();
            MessageBox.Show("SCCM Tools installed!");            
        }

        private void removeSCCMTools()
        {
            Process proc = new Process();
            proc.StartInfo.FileName = "msiexec.exe";
            proc.StartInfo.Arguments = " /x ConfigMgrTools.msi /passive /L*v remove_SCCMTools.log";
            proc.Start();
            proc.WaitForExit();
            MessageBox.Show("SCCM Tools removed!");
        }       
    }         
}