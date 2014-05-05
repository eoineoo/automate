#Install any MSI files that are in the \source\ directory
#Referenced tutorial: http://powershell.com/cs/forums/t/12742.aspx

$CurrentLocation = "C:\temp\automate\filerepo"
$CurrentScriptFullPathName = $MyInvocation.MyCommand.Definition

$count = 0
$total = $apps.Length

#Install each application within the $apps array using MsiExec
foreach ($msifile in $apps)	{
	
	$count++
	
	Write-Progress -activity "Installing Applications" -status "Current: $msifile" -PercentComplete ($count / $total * 100) 
	
	#Using the /i switch for install, with logging enabled
	Start-Process -FilePath "$env:systemroot\system32\msiexec.exe" -ArgumentList "/i `"$msifile`" /passive /L*v C:\temp\automate\logs\$msifile.log" -Wait -WorkingDirectory $CurrentLocation
	
	Write-Host ($msifile + " installed") -foregroundcolor White -backgroundcolor DarkGreen
	Write-Output ($msifile + " installed") | Out-File C:\temp\automate\logs\setup.txt -append
	
}

#Message box upon completion
[System.Reflection.Assembly]::LoadWithPartialName("System.Windows.Forms") > $null
[System.Windows.Forms.MessageBox]::Show("Laptop configuration complete. Check C:\temp\automate\logs for output." , "Complete")

#Delete un-needed folders once complete (log file folder remains)
cd ..
Remove-Item .\filerepo -Force -Recurse
Remove-Item .\scripts -Force -Recurse