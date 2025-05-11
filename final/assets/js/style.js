// function for displaying the menu while in mobile from the hamburger menu icon
function menu()
{
  var menu1 = document.getElementsByClassName("home")[0];
  var menu2 = document.getElementsByClassName("menu");
  for(i = 0; i < menu2.length; i++)
  {
    if (menu2[i].style.display === "flex")
    {
      menu1.style.display = "none";
      menu2[i].style.display = "none";
    }
    else
    {
      menu1.style.display = "flex";
      menu2[i].style.display = "flex";
    }
  }
}

// function to redisplay the menu when going back to web version if display was set to none above
function redisplay()
{
  var menu1 = document.getElementsByClassName("home")[0];
  var menu2 = document.getElementsByClassName("menu");
  var w = document.documentElement.clientWidth;
  for(i = 0; i < menu2.length; i++)
  {
    if (w > 1180)
    {
      menu1.style.display = "initial";
      menu2[i].style.display = "inline-block";
    }
    else
    {
      menu1.style.display = "none";
      menu2[i].style.display = "none";
    }
  }
}

// event listener that listens for a change in window size
window.addEventListener("resize", redisplay);
