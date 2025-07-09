{
    let d_header = document.getElementById("global-header");
    let top = 0;

    let f_header_scroll = () => {
        top = this.window.scrollY;

        if ( top >= 120 ) {
            d_header.classList.add("is-active");
        } else {
            d_header.classList.remove("is-active");
        }
    }

    window.addEventListener("scroll", function(){
        f_header_scroll();
    }, false);

    f_header_scroll();

}