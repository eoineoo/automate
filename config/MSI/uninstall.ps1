#Uninstall files, used for testing

$CurrentLocation = "C:\temp\automate"

$apps = @("ade_3.0_installer.msi", "ConfigMgrTools.msi", "dtlite4481-0347.msi", "FirefoxESR-24.2.0-en-GB.msi", "gimp-2.2.8+gtk-2.6.8-1-en_US.msi", "GoogleChromeStandaloneEnterprise.msi", "RDCMan.msi")

foreach ($msifile in $apps)	{

	Start-Process -FilePath "$env:systemroot\system32\msiexec.exe" -ArgumentList "/x `"$msifile`" /passive" -Wait -WorkingDirectory $CurrentLocation 
	Write-Host ($msifile + " removed")

}
[System.Diagnostics.Process]::Start("C:\Program Files (x86)\Adobe\Adobe Digital Editions 3.0\uninstall.exe", "/s")

Remove-Item -Recurse -Force C:\temp\automate