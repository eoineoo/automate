#Install any MSI files that are in the \source\ directory - http://powershell.com/cs/forums/t/12742.aspx

$CurrentLocation = "C:\temp\automate"

$count = 0
$total = $apps.Length

foreach ($msifile in $apps)	{
	
	$count++
	
	Write-Progress -activity "Installing Applications" -status "Current: $msifile" -percentComplete ($count / $total*100) 
	
	Start-Process -FilePath "$env:systemroot\system32\msiexec.exe" -ArgumentList "/i `"$msifile`" /passive /L*v C:\temp\automate\logs\$msifile.log" -Wait -WorkingDirectory $CurrentLocation
	
	Write-Host ($msifile + " installed") -foregroundcolor White -backgroundcolor DarkGreen
	Write-Output ($msifile + " installed") | Out-File C:\temp\automate\logs\setup.txt -append
	
}

Exit