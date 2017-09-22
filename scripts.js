function memberStatus() {
	var choice = document.getElementById("membersx").value;
    switch(choice) {
        case 'current':
            document.getElementById("roster").innerHTML = '<ul><li>Josh Homme – lead vocals, guitar, piano (1996–present), bass guitar (2005–2006)</li><li>Troy Van Leeuwen – guitar, lap steel guitar, keyboards, synthesizers, percussion, backing vocals (2002–present), bass guitar (2005–2006)</li><li>Michael Shuman – bass guitar, synthesizers, backing vocals (2007–present)</li><li>Dean Fertita – keyboards, synthesizers, guitar, percussion, backing vocals (2007–present)</li><li>Jon Theodore – drums, percussion, samplers (2013–present)</li></ul>'
            break;
        case 'former':
            document.getElementById("roster").innerHTML = '<ul><li>Alfredo Hernández – drums, percussion (1998–1999)</li><li>Nick Oliveri – bass, co-lead and backing vocals (1998–2004)</li><li>Dave Catching – guitars, keyboards, lap steel (1998–2000)</li><li>Gene Trautmann – drums, percussion (1999–2001)</li><li>Brendon McNichol – guitars, keyboards, lap steel (2000–2002)</li><li>Mark Lanegan – co-lead and backing vocals (2001–2005), keyboards (2005)</li><li>Dave Grohl – drums, percussion (2001-2002)</li><li>Joey Castillo – drums, percussion (2002–2012)</li><li>Dan Druff – bass, backing vocals (2005)</li><li>Alain Johannes – bass, backing vocals, guitars (2005–2007)</li><li>Natasha Shneider – keyboards, backing vocals (2005–2006)</li></ul>';
            break;
        default:
            document.getElementById("roster").innerHTML = '';
    }
}



function openPanel(id, button) {
	button.classList.toggle('active');
	var panel = document.getElementById(id);
	
	if (panel.style.display === "block") {
		panel.style.display = "none";
	} else {
		panel.style.display = "block";
	}	
}
	