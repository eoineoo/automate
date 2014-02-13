#MSI Configuration - http://powershell.com/cs/forums/t/12742.aspx

$CurrentLocation = Split-Path -Parent $MyInvocation.MyCommand.Path;

$msi = @('ConfigMgrTools.msi', 'Firefox.msi')

foreach ($msifile in $msi)	{

	Start-Process -FilePath "$env:systemroot\system32\msiexec.exe" -ArgumentList "/i `"$msifile`" /passive" -Wait -WorkingDirectory $CurrentLocation 

}