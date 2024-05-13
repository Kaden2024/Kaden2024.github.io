
const userEmail = localStorage.getItem('userEmail');
const userIcon = document.getElementById('userEmailLink'); 
const userAccess = localStorage.getItem('userA');

if (userEmail) {
  // User is logged in, update the user icon and email link
  userIcon.innerHTML = `<a>${userEmail}</a>`;
} else {
  // User is not logged in, set the link to "Login/Signup"
  userIcon.innerHTML = '<a>Login/Signup</a>';
}


userIcon.addEventListener('click', function() {
  if (userEmail) {
    // User is logged in, open the user-profile.html page in a new window

    //window.close(); 
    //window.open('user-profile.html', '_blank');
  window.location.href='user-profile.html';

  } else {
    
    //window.close(); // Close the current window
    

    window.location.href = "Creation-page.html";
  }
});


if (userAccess === "Admin")
{

  var ul = document.getElementById("User-access");

  // Create a new <li> element
  var li = document.createElement("li");

  // Create a new <a> element and set its attributes
  var a = document.createElement("a");
  a.href =  "Doctors_Page.php";
  a.textContent = "Appiontments";

  // Append the <a> element to the <li> element
  li.appendChild(a);

  // Append the new <li> element to the <ul>
  ul.appendChild(li);


}







function Sub_P()
{
  // Close the current window
  window.close();

  // Redirect to "index.php"
  window.open('index.php');

}


// let currentIndex = 0;

// function scrollDoctors(direction) {
//     const doctorsList = document.getElementById('doctors-list');
//     const doctorCards = document.querySelectorAll('.doctor-card');
//     const cardWidth = doctorCards[0].offsetWidth;

//     currentIndex = (currentIndex + direction + doctorCards.length) % doctorCards.length;

//     const transformValue = -currentIndex * cardWidth + 'px';
//     doctorsList.style.transform = 'translateX(' + transformValue + ')';
// }

let currentIndex = 0;

    function scrollDoctors(direction) {
        const doctorsList = document.getElementById('doctors-list');
        const doctorCards = document.querySelectorAll('.doctor-card');
        const cardWidth = doctorCards[0].offsetWidth;

        currentIndex = (currentIndex + direction + doctorCards.length) % doctorCards.length;

        const transformValue = -currentIndex * cardWidth + 'px';
        doctorsList.style.transform = 'translateX(' + transformValue + ')';
    }

    // Auto-scroll every 4 seconds
    setInterval(function() {
        scrollDoctors(1);
    }, 4000);

 


    