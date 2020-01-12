window.onload = function() {
// Onload event of Javascript
// Initializing timer variable
var x = 0;
var x1=5;
var y = document.getElementById("ts");
var y1 = document.getElementById("tm");
// Display count down for 5 mins
setInterval(function() {
							
                            if (x <= 60 && x >= 1) 
                            {                                
                                y.innerHTML = '' + x + '';
								y1.innerHTML = '' + x1 + '';                               
								x--;
                            }
							else if(x==0)
							{								
                                y.innerHTML = '' + x + '';															
								y1.innerHTML = '' + x1 + '';								
								x=59;
								x1--;	
							}
							if(x1==-1)
							{
								x1=5;
							}
                        }, 1000);
// Form Submitting after 20s
var auto_refresh = setInterval(function() 
{
    submitform();
}, 300000);
// Form submit function
function submitform() 
{
    alert('TIMES UP!! Form is submitting.....');
    document.forms[0].submit();    
}
};