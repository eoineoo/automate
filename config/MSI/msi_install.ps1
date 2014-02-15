#Install any MSI files that are in the \source\ directory - http://powershell.com/cs/forums/t/12742.aspx

$CurrentLocation = "C:\temp\automate"

foreach ($msifile in $apps)	{

	Start-Process -FilePath "$env:systemroot\system32\msiexec.exe" -ArgumentList "/i `"$msifile`" /passive" -Wait -WorkingDirectory $CurrentLocation 

}