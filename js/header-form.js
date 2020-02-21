var tabButtons=document.querySelectorAll(".tab-button");
var tabPanels=document.querySelectorAll(".tab-panel");

function showPanel(panelIndex)
{
	tabButtons.forEach(function(node){
		node.style.backgroundColor="rgb(86,84,89,0.6)";
		node.style.color="white";
	});

	tabButtons[panelIndex].style.backgroundColor="white";
	tabButtons[panelIndex].style.color="rgb(86,84,89)";
	tabPanels.forEach(function(node) {
		node.style.display="none";
	});
	tabPanels[panelIndex].style.display="block";
}
showPanel(0);