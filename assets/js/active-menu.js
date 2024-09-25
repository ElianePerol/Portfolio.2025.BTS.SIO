/* Adds active class to li element of header menu to highlight current page */

// Get the current URL path
const currentURL = window.location.pathname;
console.log(currentURL);

// Matches id to their corresponding URL path
const idToURL = {
    "index" : "/index.php",
    "projects" : "/projects.php",
    "missions" : "/missions.php",
    "skills" : "/skills.php",
    "summary" : "/summary.php"
};

console.log(idToURL.hasOwnProperty("index"));

// Function to add the active class according to the current URL
function activeToCurrentURL () {
    // Loops on all id of the object
    for (const id in idToURL) {
        if (idToURL.hasOwnProperty(id)) {
            // Checks which id matches the end of the current URL
            if (currentURL.endsWith(idToURL[id])) {
                // Add the active class to the matching element
                document.getElementById(id).classList.add("active");
            }
        }
    }
};

activeToCurrentURL();