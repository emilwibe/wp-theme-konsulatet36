{
    let d_navToggle = document.getElementById("nav-toggle");
    let d_globalNav = document.getElementById("global-nav");

    d_navToggle.addEventListener("click", function(e){
        document.body.classList.toggle("nav-is-open");
    }, false);

    d_globalNav.addEventListener("click", function(e){
        if(e.target.tagName == "A") {
            document.body.classList.remove("nav-is-open");
        }
    }, false)
}